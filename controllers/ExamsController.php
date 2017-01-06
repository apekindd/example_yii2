<?php


namespace app\controllers;

use app\models\ExamLevel as Level;
use app\models\ExamCategory as Category;
use app\models\ExamItem as Exam;
use app\models\ExamDate as Date;
use app\models\ExamRequest as Request;
use app\models\Offers;
use app\models\Partners;
use app\models\StaticText;
use yii\helpers\ArrayHelper;
use Yii;

class ExamsController extends AppController
{
    /**
     * @return string
     */
    public function actionRegistration(){
        $levels = Level::find()->orderBy(["sort"=>SORT_ASC])->all();
        $categories = Category::find()->orderBy(["sort"=>SORT_ASC])->all();
        $offers = Offers::find()->limit(3)->where(['important' => 1])->orderBy(['id' => SORT_DESC])->all();

        $form = $this->getForm("exam_calendar", []);
        $partners = Partners::find()->all();
        $static_text = StaticText::find()->where(['id'=>[1,2]])->indexBy('id')->all();
        //ArrayHelper needs there because if we will use asArray we can't change
        //description value in Model with method afterFind
        $exams = json_encode(ArrayHelper::toArray(Exam::find()->indexBy('id')->all()));
        return $this->render('registration',compact(
            'levels',
            'offers',
            'categories',
            'exams',
            'form',
            'partners',
            'static_text'
        ));
    }

    public function actionAdd(){
        if(Yii::$app->request->isPost) {
            $id = (int)Yii::$app->request->post('data_id');
            $form_attr = Yii::$app->request->post('form_attr');
            foreach ($form_attr as $k=>$v){
                $form_attr[$k] = trim(strip_tags($v));
            }
            $exam_name = trim(strip_tags(Yii::$app->request->post('name')));
            if ($id === 0) return false;

            $params = array();
            parse_str($form_attr, $params);
            $form_attr = $params;

            $date = Date::findOne($id);
            $request = new Request();
            $request->fio = $form_attr[ES_FIRST_NAME];
            $request->email = $form_attr[ES_EMAIL];
            $request->phone = str_replace(["+"," ","(",")","-"],'',$form_attr[ES_SMS]);
            $request->birth = $form_attr[ES_BIRTH];
            $request->comment = $form_attr[ES_COMMENT];
            $request->price = $date->price;
            $request->exam = $exam_name;
            $request->exam_date = date("d.m.Y H:i", $date->date);
            $request->date_create = time();

            if($request->save()){
                return 1;
            }else{
                return 0;
            }
        }
    }

    public function actionAjax(){
        Yii::$app->params['registration_month'] = [
            1=>Yii::t('app','january'),
            2=>Yii::t('app','february'),
            3=>Yii::t('app','march'),
            4=>Yii::t('app','april'),
            5=>Yii::t('app','may'),
            6=>Yii::t('app','june'),
            7=>Yii::t('app','july'),
            8=>Yii::t('app','august'),
            9=>Yii::t('app','september'),
            10=>Yii::t('app','october'),
            11=>Yii::t('app','november'),
            12=>Yii::t('app','december'),
        ];

        if(Yii::$app->request->isPost){
            $type = (int)Yii::$app->request->post('type');
            $id = (int)Yii::$app->request->post('id');
            if($type === 0 || $id === 0) return false;

            //List of exams in category
            if($type == 10){
                $res = $this->getExamsFromCategory($id);
                return json_encode($res);

            //List of dates in level
            }elseif($type == 20){
                $temps = $this->getExamDatesFromLevel($id);
                $res=$temps;

                $this->workWithForeach($res, $temps);

                return json_encode($res);

            //List of dates in correct exam
            }elseif($type == 30){
                $temps = $this->getExamDates($id);
                $res=$temps;

                $this->workWithForeach($res, $temps);

                return json_encode($res);
            }else{
                //unknown type
                return;
            }
        }
    }

    protected function workWithForeach(&$res, &$temps){
        $arSameDate = [];
        foreach($temps as $id=>$temp){
            if($res[$id]['close'] == 1){
                unset($res[$id]);
                continue;
            }
            $_day = date('d', $temp['date']);
            $_month = date('m', $temp['date']);
            $_year = date('Y', $temp['date']);
            $_key = $_year.$_month.$_day;

            $_day_r = date('d', $temp['registration_to']);
            $_month_r = date('m', $temp['registration_to']);
            $_year_r = date('Y', $temp['registration_to']);




            $res[$id]['js'][0] = $_year;
            $res[$id]['js'][1] = $_month;
            $res[$id]['js'][2] = $_day;
            $res[$id]['js'][3] = Yii::t('app','реєстрація до')." ".date('j',$temp['registration_to'])." ".Yii::$app->params['registration_month'][date('n',$temp['registration_to'])];
            $res[$id]['js'][5] = $temp['exam_item_id'];
            $res[$id]['js'][6] = $temp['price'];
            $res[$id]['js'][7] = $temp['duration'];
            $res[$id]['js'][8] = date('H:i', $temp['date']);
            $res[$id]['js'][9] = $temp['id'];
            $res[$id]['js'][10] = $_day_r.'.'.$_month_r.'.'.$_year_r;
            $res[$id]['js'][11] = $_year_r.$_month_r.$_day_r;
            if($temp['registration_to'] < time() && date('d.m.Y',$temp['registration_to']) !== date('d.m.Y')){
                $temp['close'] = 1;
                //$res[$id]['close'] = 1;
            }
            $res[$id]['js'][4] = $temp['close'];

            if(isset($arSameDate[$_key]) && ($res[$id]['js'][11] > date('Y').date('m').date('d')) && $res[$id]['js']['close'] != 1){
                $arSameDate[$_key][$id] = 1;
                foreach($arSameDate[$_key] as $k=>$v){
                    $res[$k]['js'][3] = '. . .';
                }
            }elseif(($res[$id]['js'][11] > date('Y').date('m').date('d')) && $res[$id]['js']['close'] != 1){
                $arSameDate[$_key][$id] = 1;
            }
        }

        //It is important, because if one of array elements
        //were delete - json will brake
        sort($res);
    }

    protected function getExamsFromCategory($id){
        $category = Category::findOne($id);
        if($category->exams){
            $exams = explode('|',$category->exams);
            if(!empty($exams)){
                $res = ArrayHelper::map(Exam::find()->where(['id'=>$exams])->asArray()->all(),'id','name');
                return $res;
            }

        }
        return;
    }

    protected function getExamDatesFromLevel($id){
        //get level exam ids
        //get dates with this ids
        $level = Level::findOne($id);
        if($level->exams){
            $exams = explode('|',$level->exams);
            if(!empty($exams)){
                $res = Date::find()->where(['exam_item_id'=>$exams])->asArray()->all();
                return $res;
            }
        }
        return false;
    }

    protected function getExamDates($id){
        //get ids of dates from input id
        $res = Date::find()->where(['=','exam_item_id', $id])->asArray()->all();
        if(!empty($res)){
            return $res;
        }
        return false;
    }


}