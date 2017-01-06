<?php

namespace app\controllers;

use app\models\Abroad;
use app\models\Benefits;
use app\models\Blog;
use app\models\Courses;
use app\models\ExamItem;
use app\models\LoginForm;
use app\models\Mainpage;
use app\models\Maps;
use app\models\Partners;
use app\models\Strategy;
use app\models\Tables;
use app\models\Trainings;
use app\models\Static_page;
use app\models\News;
use app\models\Exams;
use app\models\Offers;
use app\models\Contacts;
use app\models\Begintest;
use app\models\Formstudy;
use app\models\Stepstest;
use app\models\Opportunity;
use app\models\Reviews;
use app\models\Levels;
use app\models\Tutors;
use app\models\Friday;
use app\models\Teachers;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\HttpException;

class SiteController extends AppController
{
    //CACHED
    public function actionIndex()
    {
        //cache prepare
        $cache_key = 'mainpage_'. Yii::$app->language;
        $k = explode('_', $cache_key);
        $cache = [
            'key'=>$cache_key,
            'options' => [
                'duration' => Yii::$app->params['cache'][$k[0]]['time'],
            ]
        ];
        $cKey = ['yii\widgets\FragmentCache', $cache_key];
        if(!Yii::$app->cache->get($cKey)) {
            $mainpage = Mainpage::find()->orderBy('id')->all();
            $news = News::find()->limit(3)->orderBy(['id' => SORT_DESC])->all();
            $offers = Offers::find()->limit(3)->where(['important' => 1])->orderBy(['id' => SORT_DESC])->all();
        }

        //meta
        $this->setMeta(Yii::t('app', 'main_keywords'), Yii::t('app', 'main_description'), Yii::t('app', 'main_title'));

        return $this->render('index', ['offers'=> $offers, 'news'=> $news, 'mainpage'=> $mainpage, 'cache'=>$cache]);
    }

    public function actionCourses($symbol='')
    {

        if ($symbol === '') {
            $course = Courses::findOne(["id" => 100]);
            $this->setMeta($course['keywords'], $course['description']);
            $courses = Courses::find()->where("parent_id=0 and id!=100")->orderBy(['sort' => SORT_DESC])->all();
            $offers = Offers::find()->limit(3)->where(['important' => 1])->orderBy(['id' => SORT_DESC])->all();
            return $this->render('indexCourses', ["offers" => $offers, "course" => $course, "courses" => $courses]);
        }

        $course = Courses::findOne(["symbol" => $symbol]);

        //cache prepare
        $cache_key = 'courses_' . $course->id . '_' . Yii::$app->language;
        $k = explode('_', $cache_key);
        $cache = [
            'key' => $cache_key,
            'options' => [
                'duration' => Yii::$app->params['cache'][$k[0]]['time'],
            ]
        ];
        $cKey = ['yii\widgets\FragmentCache', $cache_key];

        $this->setMeta($course['keywords'], $course['description']);
        if (empty($course)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
        if (!Yii::$app->cache->get($cKey)) {
            $reviews = Reviews::find()->limit(4)->where(['like', 'page', '|c' . $course->id . '|'])->orderBy('id')->all();
            $courses = Courses::find()->where("parent_id=" . $course->id)->orderBy(['sort' => SORT_DESC])->all();
            $offers = Offers::find()->limit(3)->where(['important' => 1])->orderBy(['id' => SORT_DESC])->all();
            $contacts = Contacts::find()->where("isStudyCenter=1")->all();
        }
        if ($course->id == 12) {  //Корпоративное обучение
            if (!Yii::$app->cache->get($cKey)) {
                $benefits = Benefits::find()->all();
                $cursUkraine = Courses::findOne(13);
                $partners = Partners::find()->all();
                $form = $this->getForm("courses_corporate",[]);
            }

            return $this->render('corporate', [
                'form' => $form,
                'course' => $course,
                'offers' => $offers,
                'courses' => $courses,
                'reviews' => $reviews,
                'benefits' => $benefits,
                'cursUkraine' => $cursUkraine,
                'partners' => $partners,
                'cache' => $cache
            ]);
        }
        if ($course->id == 4) {  //Экзаменационная подготовка
            if (!Yii::$app->cache->get($cKey)) {
                $training = Trainings::findOne(1);
                $levels = Levels::find()->limit(4)->where(['like', 'page', '|c' . $course->id . '|'])->orderBy('id')->all();
                $form = $this->getForm("courses_adult_exams", ['course' => $course, 'contacts' => $contacts]);
            }
            return $this->render('adultExam', [
                'form' => $form,
                'course' => $course,
                'offers' => $offers,
                'courses' => $courses,
                'reviews' => $reviews,
                'levels' => $levels,
                'cache' => $cache,
                'training' => $training
            ]);
        }
        if ($course->id == 50) {  //Экзаменационная подготовка для детей
            if (!Yii::$app->cache->get($cKey)) {
                $levels = Levels::find()->limit(4)->where(['like', 'page', '|c' . $course->id . '|'])->orderBy('id')->all();
                $form = $this->getForm("courses_children_inner",['course' => $course, 'contacts'=>$contacts]);
            }
            return $this->render('exam_child', [
                'course' => $course,
                'form' => $form,
                'levels' => $levels,
                'cache' => $cache
            ]);
        }
        if ($course->id == 10) {  //Английский для детей
            if (!Yii::$app->cache->get($cKey)) {
                $maps = Maps::find()->all();
                $formstudy = Formstudy::find()->all();
                $strategy = Strategy::find()->all();
                $form = $this->getForm("courses_children",['courses' => $courses, 'contacts'=>$contacts]);
            }
            return $this->render('children',
                ['course' => $course,
                    'courses' => $courses,
                    'offers' => $offers,
                    'maps' => $maps,
                    'formstudy' => $formstudy,
                    'strategy' => $strategy,
                    'reviews'=> $reviews,
                    'form'=> $form,
                    'cache'=> $cache
                ]);
        }
        if ($course->id == 51) {  //Английский по пятницам
            if (!Yii::$app->cache->get($cKey)) {
                $levels = Levels::find()->where(['like', 'page', '|c' . $course->id . '|'])->orderBy('id')->all();
                $form = $this->getForm("courses_children_inner",['course' => $course, 'contacts'=>$contacts]);
            }
            return $this->render('friday_child',
                ['course' => $course,
                    'levels' => $levels,
                    'form' => $form,
                    'cache' => $cache
                ]);
        }
        if ($course->id == 53) {  //Каникулы в городе
            return $this->render('childrenVication',
                ['course' => $course,
                    'courses' => $courses,
                    'cache' => $cache
                ]);
        }
        if ($course->id == 1) {  //Английский для взрослых
            if (!Yii::$app->cache->get($cKey)) {
                $maps = Maps::find()->all();
                $begintest = Begintest::find()->all();
                $formstudy = Formstudy::find()->all();
                $stepstest = Stepstest::find()->all();
                $opportunity = Opportunity::find()->all();
                $form = $this->getForm("courses_adult", ['courses' => $courses, 'contacts' => $contacts]);
            }
            return $this->render('adult',
                ['course' => $course,
                    'courses' => $courses,
                    'offers' => $offers,
                    'maps' => $maps,
                    'begintest' => $begintest,
                    'formstudy' => $formstudy,
                    'stepstest' => $stepstest,
                    'opportunity' => $opportunity,
                    'reviews' => $reviews,
                    'form' => $form,
                    'cache' => $cache
                ]);
        }else{
            if($course->parent_id == 1){
                if($course->id == 3)
                    $form = $this->getForm("courses_adult_biz",['course' => $course, 'contacts'=>$contacts]);
                else
                    $form = $this->getForm("courses_adult_inner",['course' => $course, 'contacts'=>$contacts]);
            }elseif($course->parent_id == 10 || $course->parent_id == 53){
                $form = $this->getForm("courses_children_inner",['course' => $course, 'contacts'=>$contacts]);
            }
            return $this->render('adultdetail', ['form'=>$form, 'course' => $course, 'offers' => $offers, 'courses' => $courses, 'reviews' => $reviews, 'cache'=>$cache]); }
    }

    //CACHED
    public function actionTrainings($symbol=false)
    {
        $form="";
        if ($symbol === false) {
            $training = Trainings::findOne(['id' => 51]);
            $this->setMeta($training['keywords'], $training['description']);
            //cache prepare
            $cache_key = 'tranings_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $offers = Offers::find()->limit(3)->where(['important' => 1])->orderBy(['id' => SORT_DESC])->all();
                $reviews = Reviews::find()->limit(4)->where(['like', 'page', '|t' . $training->id . '|'])->orderBy('id')->all();
            }
            return $this->render('indexTrainings', ['training' => $training, 'reviews' => $reviews, 'offers' => $offers, 'cache'=>$cache]);
        }else {
            $contacts = Contacts::find()->where("isStudyCenter=1")->all();
            $training = Trainings::findOne(["symbol" => $symbol]);
            $sub = 'Тренінги для викладачів/trainings';
            //cache prepare
            $cache_key = 'tranings_' . $training->id . '_' . Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key' => $cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];

            //детальная-детальная страница тренинга, парсим символ
            if (preg_match("/\w*_detail/", $symbol) == 1) {
                $training = Trainings::findOne(["symbol" => preg_replace("/_detail/", "", $symbol)]);
                $this->setMeta($training['keywords'], $training['description']);
                if (empty($training)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
                if (!Yii::$app->cache->get($cKey)) {
                    //$tutors = Tutors::find()->where(['like', 'page', '|t' . $training->id . '|'])->orderBy('id')->all();
                    $tutors = Teachers::find()->where('isDelta = 1')->orderBy('id')->all();
                }
                //детальная-детальная страница модульных курсов с выводом всех модулей
                if ($training->id == 2) {  //Модульные курсы для дельтаМодули
                    if (!Yii::$app->cache->get($cKey)) {
                        $trainingModuls = Trainings::find()->where("parent_id=" . $training->id)->all();
                        $form = $this->getForm("trainings_celcp", []);
                    }
                    return $this->render('deltaDetailModules', ['form'=>$form,'trainingModuls' => $trainingModuls, 'sub'=>$sub, 'training' => $training, 'tutors' => $tutors, 'cache' => $cache]);
                } elseif ($training->id == 12) {  //Модульные курсы для преподавателей
                    if (!Yii::$app->cache->get($cKey)) {
                        $trainingModuls = Trainings::find()->where("parent_id=" . $training->id)->all();
                    }
                    $form = $this->getForm("trainings_module", ['training_id' => $training->id, 'training_title'=>$training->title]);
                    return $this->render('moduleDetail', ['trainingModuls' => $trainingModuls, 'form'=>$form,'sub'=>$sub, 'training' => $training, 'tutors' => $tutors, 'cache' => $cache]);
                }
                else if ($training->id == 6) {//CELTA detail
                    if (!Yii::$app->cache->get($cKey)) {
                        $trainingModuls = Trainings::find()->where("parent_id=" . $training->id)->all();
                    }
                    return $this->render('celtaDetail', ['tutors' => $tutors, 'sub'=>$sub, 'training' => $training, 'trainingModuls' => $trainingModuls, 'cache' => $cache]);
                }
                else if ($training->id == 7 || $training->id == 8) {//CELTA c/p detail
                    $form = $this->getForm("trainings_celcp", []);
                    return $this->render('deltaDetailcp', ['form'=>$form,'tutors' => $tutors, 'sub'=>$sub, 'training' => $training, 'cache' => $cache]);
                }
                return $this->render('deltaDetail', ['tutors' => $tutors, 'sub'=>$sub, 'training' => $training, 'cache' => $cache]);
            }

            $this->setMeta($training['keywords'], $training['description']);
            if (empty($training)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));

            //детальная страница дочернего тренинга
            if ($training->parent_id !== 0) {
                if (!Yii::$app->cache->get($cKey)) {
                    $tutors = Tutors::find()->where(['like', 'page', '|t' . $training->id . '|'])->orderBy('id')->all();
                }
                if($training->parent_id == 9){//форма для других тренингов - подробнее
                    $form = $this->getForm("trainings_other", []);
                }
                return $this->render('deltaDetail', ['form'=>$form,'tutors' => $tutors, 'sub'=>$sub, 'training' => $training, 'cache' => $cache]);
            }
            if (!Yii::$app->cache->get($cKey)) {
                $offers = Offers::find()->limit(3)->where(['important' => 1])->orderBy(['id' => SORT_DESC])->all();
                $reviews = Reviews::find()->limit(4)->where(['like', 'page', '|t' . $training->id . '|'])->orderBy('id')->all();
            }

            //страница для 2х тренингов CELT-C, CELT-P
            if ($training->id == 7 || $training->id == 8) {
                if (!Yii::$app->cache->get($cKey)) {
                    $form = $this->getForm("trainings_celcp", []);
                    $secondTraining = Trainings::findOne($training->id == 7 ? 8 : 7);
                }
                return $this->render('twoTrainings', [
                    'offers' => $offers,
                    'sub'=>$sub,
                    'training' => $training,
                    'reviews' => $reviews,
                    'secondTraining' => $secondTraining,
                    'cache' => $cache,
                    'form' => $form
                ]);
            }

            //страница с перечнем тренингов дочерних к others
            if ($training->id == 9) {
                if (!Yii::$app->cache->get($cKey)) {
                    $trainingsForOtherPage = Trainings::find()->where("symbol!='tutors' AND parent_id=" . $training->id)->orderBy(['sort' => SORT_DESC])->all();
                    $form = $this->getForm('trainings_other',[]);
                }
                return $this->render('other', ['offers' => $offers, 'form'=>$form, 'sub'=>$sub, 'trainingsForOtherPage' => $trainingsForOtherPage, 'reviews' => $reviews, 'cache' => $cache]);
            }

            //детальная страница родительского тренинга
            if (!Yii::$app->cache->get($cKey)) {
                $trainingModuls = Trainings::find()->where("parent_id=" . $training->id)->orderBy(['sort' => SORT_DESC])->all();
            }
            if ($training->id == 6) {//CELTA
                return $this->render('celta', ['offers' => $offers, 'sub'=>$sub, 'training' => $training, 'reviews' => $reviews, 'cache' => $cache]);
            }
            if ($training->id == 2) {//DELTA
                $form = $this->getForm("trainings_delta",['training' => $training, 'contacts'=>$contacts, 'trainingModuls' => $trainingModuls]);
                return $this->render('delta', ['form'=>$form,'offers' => $offers, 'sub'=>$sub, 'training' => $training, 'trainingModuls' => $trainingModuls, 'reviews' => $reviews, 'cache' => $cache]);
            }
            if ($training->id == 12) {//Modul
                $form = $this->getForm("trainings_module", ['training_id' => $training->id, 'training_title'=>$training->title]);
                return $this->render('modul', ['offers' => $offers, 'form'=>$form , 'sub'=>$sub, 'training' => $training, 'trainingModuls' => $trainingModuls, 'reviews' => $reviews, 'cache' => $cache]);
            }
            return $this->render('training', ['offers' => $offers, 'sub'=>$sub, 'training' => $training, 'trainingModuls' => $trainingModuls, 'reviews' => $reviews, 'cache' => $cache]);
        }
    }

    //CACHED
    public function actionExams($symbol=false){
        $form = "";
        if ($symbol === false) {
            //cache prepare
            $cache_key = 'exams_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $exams = Exams::find()->all();
            }
            return $this->render('indexExams', ['exams'=>$exams, 'cache'=>$cache]);
        }else{
            //cache prepare
            $sqlResults = "SELECT id FROM exams WHERE symbol='".$symbol."' LIMIT 1";
            $id  = Exams::findBySql($sqlResults)->asArray()->one();
            $cache_key = 'exams_'.$id['id'].'_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $exam = Exams::findOne(["symbol" => $symbol]);
                $this->setMeta($exam['keywords'], $exam['description']);
                if (empty($exam)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
                $exams = Exams::find()->where("parent_id=" . $exam->id)->all();
            }
            if($id['id']==113){
                $form = $this->getForm("exam_partners",[]);
                return $this->render('exams_partner', ['form'=>$form,'exam'=> $exam, 'exams'=> $exams, 'cache'=>$cache]);
            }
            $form = $this->getForm("exam_calendar", []);
            $examsAll = json_encode(ArrayHelper::toArray(ExamItem::find()->indexBy('id')->all()));
            return $this->render('exams', ['exam'=> $exam, 'exams'=> $exams, 'cache'=>$cache,'form'=>$form,'examsAll'=>$examsAll]);
        }
    }

    //CACHED
    public function actionAbout($symbol='about')
    {
        if($symbol == 'about'){
            $static_page = Static_page::findOne(["symbol" => $symbol]);
            $this->setMeta($static_page['keywords'], $static_page['description']);
            $sub = false;
        } elseif($symbol == 'contacts') {
            $static_page = Static_page::findOne(["symbol" => $symbol]);
            $contacts = Contacts::find()->orderBy('id')->all();
            $this->setMeta($static_page['keywords'], $static_page['description']);
            $sub = 'Про компанію/about';
            return $this->render('static_page', ['contacts' => $contacts, 'static_page' => $static_page, 'sub'=>$sub]);
        } else {
            $static_page = Static_page::findOne(["symbol" => $symbol, 'section' => 'about']);
            $this->setMeta($static_page['keywords'], $static_page['description']);
            $sub = 'Про компанію/about';
        }

        //cache prepare
        $cache_key = 'static_'.$static_page->id.'_'. Yii::$app->language;
        $k = explode('_', $cache_key);
        $cache = [
            'key'=>$cache_key,
            'options' => [
                'duration' => Yii::$app->params['cache'][$k[0]]['time'],
            ]
        ];

        if(empty($static_page)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));

        if($symbol == 'teachers'){
            $teachers = Teachers::find()->all();
            return $this->render('static_page', ['static_page'=> $static_page, 'teachers'=>$teachers, 'sub'=>$sub, 'cache'=>$cache]);
        }elseif($symbol == 'partners'){
            $partners = Partners::find()->all();
            return $this->render('partners_page', ['static_page'=> $static_page, 'partners'=>$partners, 'sub'=>$sub, 'cache'=>$cache]);
        }

        return $this->render('static_page', ['static_page'=> $static_page, 'sub'=>$sub, 'cache'=>$cache]);
    }

    //CACHED
    public function actionStudy($symbol='study')
    {
        if ($symbol == 'study') {
            $static_page = Static_page::findOne(["symbol" => $symbol]);
            $sub = false;
        } else {
            $static_page = Static_page::findOne(["symbol" => $symbol, 'section' => 'study']);
            $sub = 'Навчання/study';
        }

        //cache prepare
        $cache_key = 'static_'.$static_page->id.'_'. Yii::$app->language;
        $k = explode('_', $cache_key);
        $cache = [
            'key'=>$cache_key,
            'options' => [
                'duration' => Yii::$app->params['cache'][$k[0]]['time'],
            ]
        ];


        if(empty($static_page)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
        $this->setMeta($static_page['keywords'], $static_page['description']);

        return $this->render('static_page', ['static_page'=> $static_page, 'sub'=>$sub, 'cache'=>$cache]);
    }
    
    public function actionAbroad($symbol=false){

        $static_page = Static_page::findOne(['section' => 'abroad']);
        $sub = '';
        if(empty($static_page)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
        $this->setMeta($static_page['keywords'], $static_page['description']);

        return $this->render('static_page', ['static_page'=> $static_page, 'sub'=>$sub]);

        /*
         * if(!$symbol){
            $abroads = Abroad::find()->all();
            $abroadMain = false;
            foreach ($abroads as $item){
                if($item->is_main == 1)
                    $abroadMain = $item;
            }
            return $this->render("abroadMain",["abroads"=>$abroads, "abroadMain"=>$abroadMain]);
        }else{
            $abroad = Abroad::findOne(["symbol" => $symbol]);
            if (empty($abroad)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
            return $this->render("abroadDetail",["abroad"=>$abroad]);
        }*/
    }

    /*public function actionBookcenter()
    {
        $static_page = Static_page::findOne(["id" => 20]);
        $sub = false;

        $cache_key = 'static_'.$static_page->id.'_'. Yii::$app->language;
        $k = explode('_', $cache_key);
        $cache = [
            'key'=>$cache_key,
            'options' => [
                'duration' => Yii::$app->params['cache'][$k[0]]['time'],
            ]
        ];
        $this->setMeta($static_page['keywords'], $static_page['description']);
        return $this->render('static_page', ['static_page'=> $static_page, 'sub'=>$sub, 'cache'=>$cache]);
    }*/

    public function actionSingle($symbol=false){
        $static_page = Static_page::findOne(["symbol" => $symbol]);
        $sub = false;

        $cache_key = 'static_'.$static_page->id.'_'. Yii::$app->language;
        $k = explode('_', $cache_key);
        $cache = [
            'key'=>$cache_key,
            'options' => [
                'duration' => Yii::$app->params['cache'][$k[0]]['time'],
            ]
        ];
        $this->setMeta($static_page['keywords'], $static_page['description']);
        return $this->render('static_page', ['static_page'=> $static_page, 'sub'=>$sub, 'cache'=>$cache]);
    }

    //CACHED
    public function actionNews($symbol=false)
    {
        if ($symbol === false) {
            //cache prepare
            $cache_key = 'news_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $news = News::find()->all();
            }
            return $this->render('indexNews', ['news'=>$news, 'cache'=>$cache]);
        }else{
            //cache prepare
            $sqlResults = "SELECT id FROM news WHERE id='".$symbol."' LIMIT 1";
            $id  = Courses::findBySql($sqlResults)->asArray()->one();
            $cache_key = 'news_'.$id['id'].'_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $new = News::findOne($symbol);
                if (empty($new)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
                $news = News::find()->where('id!=' . $symbol)->limit(3)->orderBy(['id' => SORT_DESC])->all();
                $this->setMeta($new['keywords'], $new['description']);
            }
            return $this->render('showNews', ['new'=>$new, 'news'=>$news, 'cache'=>$cache]);
        }
    }

    //CACHED
    public function actionOffers($symbol=false)
    {
        if ($symbol === false) {

            //cache prepare
            $cache_key = 'offers_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $offers = Offers::find()->orderBy(['id' => SORT_DESC])->all();
            }

            return $this->render('indexOffers', ['offers'=>$offers, 'cache'=>$cache]);
        }else{
            //cache prepare
            $sqlResults = "SELECT id FROM offers WHERE id='".$symbol."' LIMIT 1";
            $id  = Courses::findBySql($sqlResults)->asArray()->one();
            $cache_key = 'offers_'.$id['id'].'_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $offer = Offers::findOne($symbol);
                if(empty($offer)) throw new HttpException(404, Yii::t('app', 'Такої сторінки не існує'));
                $offers = Offers::find()->where('id!='.$symbol)->limit(3)->orderBy(['important' => SORT_DESC])->all();
                $link = '';
                if($offer->type == 'trainings'){
                    $prod = Trainings::findOne($offer->product_id);
                    $link = "/{$offer->type}/$prod->symbol";
                }elseif($offer->type == 'courses'){
                    $prod = Courses::findOne($offer->product_id);
                    $link = "/{$offer->type}/$prod->symbol";
                }elseif($offer->type == 'exams'){
                    $prod = Exams::findOne($offer->product_id);
                    $link = "/{$offer->type}/$prod->symbol";
                }
                $this->setMeta($offer['keywords'], $offer['description']);
            }
            return $this->render('showOffers', ['offer'=>$offer, 'offers'=>$offers,'cache'=>$cache,'link'=>$link]);
        }
    }

    public function actionSearch($q)
    {
        $q = mb_strtolower(trim($q));
        if(empty($q)){
            return $this->render('search');
        }

        $sql ="
        SELECT t.*, COUNT(*) as count FROM (
            SELECT title, text, anons FROM trainings WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, anons FROM courses WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, text FROM static_page WHERE symbol !=''  AND `section` !='' UNION 
            SELECT title, text, text FROM news UNION 
            SELECT title, text, text FROM offers UNION
            SELECT title, text, text FROM blog
        ) AS t WHERE t.title LIKE '%{$q}%' OR t.text LIKE '%{$q}%' OR t.anons LIKE '%{$q}%'";
        $countQuery  = Courses::findBySql($sql)->asArray()->all();
        $countQuery = (int)$countQuery[0]['count'];

        if(Yii::$app->language == 'ua') $lang = "";
        else $lang = "/".Yii::$app->language;
        //$pagination = new Pagination(['totalCount'=>$countQuery, 'pageSize'=>5, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
        $sqlResults ="
        SELECT t.* FROM (
            SELECT title, text, anons, CONCAT('{$lang}/trainings/', symbol) AS url FROM trainings WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, anons, CONCAT('{$lang}/courses/', symbol) AS url FROM courses WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, text, CONCAT('{$lang}/', `section` ,'/', symbol) AS url FROM static_page WHERE symbol !='' AND `section` !='' UNION 
            SELECT title, text, text, CONCAT('{$lang}/news/', id) AS url FROM news UNION 
            SELECT title, text, text, CONCAT('{$lang}/offers/', id) AS url FROM offers UNION
            SELECT title, text, text, CONCAT('{$lang}/blog/', id) AS url FROM blog
        ) AS t WHERE t.title LIKE '%{$q}%' OR t.text LIKE '%{$q}%'  OR t.anons LIKE '%{$q}%' LIMIT 0,10";

        $result  = Courses::findBySql($sqlResults)->asArray()->all();

        //что выводить анонс или текст в результатах
        foreach ($result as $k => $item) {
            if(strpos($item['anons'],$q)!==false && strpos($item['text'],$q)===false){
                $result[$k]['text'] = $item['anons'];
            }elseif(strpos($item['anons'],$q)===false && strpos($item['text'],$q)!==false){
                $result[$k]['text'] = $item['text'];
            }elseif($item['anons'] != ""){
                $result[$k]['text'] = $item['anons'];
            }
            $str = mb_substr($item['text'],0,255);
            $pos = strrpos($str," ");
            $result[$k]['text'] = strip_tags(substr($str,0,$pos));
        }

        if ($countQuery == 1) {
            $mes = 'результат';
        }elseif ($countQuery >= 1 && $countQuery < 5){
            $mes = 'результата';
        }else{
            $mes = 'результатів';
        }

        return $this->render('search', [
            'q'=>$q,
            'result'=>$result, 
            //'pagination'=>$pagination,
            'countQuery'=>$countQuery,
            'mes' => $mes
        ]);
    }

    public function actionSearchajax($q,$page)
    {
        $this->layout = false;
        $q = mb_strtolower(trim($q));
        if(empty($q)){
            return $this->render('search');
        }
        $sql ="
        SELECT t.*, COUNT(*) as count FROM (
            SELECT title, text, anons FROM trainings WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, anons FROM courses WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, text FROM static_page WHERE symbol !=''  AND `section` !='' UNION 
            SELECT title, text, text FROM news UNION 
            SELECT title, text, text FROM offers UNION
            SELECT title, text, text FROM blog
        ) AS t WHERE t.title LIKE '%{$q}%' OR t.text LIKE '%{$q}%' OR t.anons LIKE '%{$q}%'";
        $countQuery  = Courses::findBySql($sql)->asArray()->all();
        $countQuery = (int)$countQuery[0]['count'];

        if(Yii::$app->language == 'ua') $lang = "";
        else $lang = "/".Yii::$app->language;
        $offset = $page*10;
        //$pagination = new Pagination(['totalCount'=>$countQuery, 'pageSize'=>10, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
        $sqlResults ="
        SELECT t.* FROM (
            SELECT title, text, anons, CONCAT('{$lang}/trainings/', symbol) AS url FROM trainings WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, anons, CONCAT('{$lang}/courses/', symbol) AS url FROM courses WHERE symbol !='' AND show_detail != 0 UNION 
            SELECT title, text, text, CONCAT('{$lang}/', `section` ,'/', symbol) AS url FROM static_page WHERE symbol !='' AND `section` !='' UNION 
            SELECT title, text, text, CONCAT('{$lang}/news/', id) AS url FROM news UNION 
            SELECT title, text, text, CONCAT('{$lang}/offers/', id) AS url FROM offers UNION
            SELECT title, text, text, CONCAT('{$lang}/blog/', id) AS url FROM blog
        ) AS t WHERE t.title LIKE '%{$q}%' OR t.text LIKE '%{$q}%'  OR t.anons LIKE '%{$q}%' LIMIT {$offset},10";

        $result  = Courses::findBySql($sqlResults)->asArray()->all();

        //что выводить анонс или текст в результатах
        foreach ($result as $k => $item) {
            if(strpos($item['anons'],$q)!==false && strpos($item['text'],$q)===false){
                $result[$k]['text'] = $item['anons'];
            }elseif(strpos($item['anons'],$q)===false && strpos($item['text'],$q)!==false){
                $result[$k]['text'] = $item['text'];
            }elseif($item['anons'] != ""){
                $result[$k]['text'] = $item['anons'];
            }
            $str = mb_substr($item['text'],0,255);
            $pos = strrpos($str," ");
            $result[$k]['text'] = strip_tags(substr($str,0,$pos));
        }

        if ($countQuery == 1) {
            $mes = 'результат';
        }elseif ($countQuery >= 1 && $countQuery < 5){
            $mes = 'результата';
        }else{
            $mes = 'результатів';
        }

        return $this->render('searchajax', [
            'q'=>$q,
            'result'=>$result,
            //'pagination'=>$pagination,
            'countQuery'=>$countQuery,
            'mes' => $mes
        ]);
    }

    //CACHED
    public function actionBlog($symbol=false)
    {
        if ($symbol === false) {
            //cache prepare
            $cache_key = 'blog_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $posts = Blog::find()->all();
            }
            return $this->render('indexBlog', ['posts'=>$posts,'cache'=>$cache]);
        }else{
            //cache prepare
            $sqlResults = "SELECT id FROM blog WHERE id='".$symbol."' LIMIT 1";
            $id  = Courses::findBySql($sqlResults)->asArray()->one();
            $cache_key = 'blog_'.$id['id'].'_'. Yii::$app->language;
            $k = explode('_', $cache_key);
            $cache = [
                'key'=>$cache_key,
                'options' => [
                    'duration' => Yii::$app->params['cache'][$k[0]]['time'],
                ]
            ];
            $cKey = ['yii\widgets\FragmentCache', $cache_key];
            if(!Yii::$app->cache->get($cKey)) {
                $post = Blog::findOne($symbol);
                $posts = Blog::find()->where('id!=' . $symbol)->limit(3)->orderBy(['date' => SORT_ASC])->all();
                $this->setMeta($post['keywords'], $post['description']);
            }
            return $this->render('showBlogPost', ['post'=>$post, 'posts'=>$posts, 'cache'=>$cache]);
        }
    }

    public function actionLogin()
    {
        $this->layout="main-login";
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
