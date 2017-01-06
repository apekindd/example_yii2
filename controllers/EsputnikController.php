<?php
namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\components\EsputnikException;
use stdClass;

class EsputnikController extends Controller
{

    /**
     * @var array $reCode
     */
    protected $reCode = [
        ES_FIRST_NAME => 'Имя',
        ES_LAST_NAME => 'Фамилия',
        ES_EMAIL => 'Email',
        ES_SMS => 'Телефон',
        ES_TYPE => 'Событие(Группа)',
        ES_TITLE => 'title',
        ES_OFFICE => 'Отделение',
        ES_LEVEL => 'Уровень владения языком',
        ES_CLIENT_TYPE => 'Тип клиентов',
        ES_FILL => 'Заполнили форму',
        ES_CHILD_FIO => 'Имя и фамилия ребенка',
        ES_CHILD_BIRTH => 'Дата рождения ребенка',
        ES_SEX => 'Пол',
        ES_BIRTH => 'День рождения',
        ES_NATIONALITY => 'Национальность',
        ES_MODULE_DELTA_1 => 'Модуль DELTA 1',
        ES_MODULE_DELTA_2 => 'Модуль DELTA 2',
        ES_MODULE_DELTA_3 => 'Модуль DELTA 3',
        ES_MODULE_COURSES => 'Модуль Модульные курсы',
        ES_QUALIFICATION => 'Qualification',
        ES_SCHOOL_NAME => 'Название учебного заведения',
        ES_POSITION => 'Должность',
        ES_CHILD_FNAME => 'Имя ребенка',
        ES_CHILD_LNAME => 'Фамилия ребенка',
        ES_STUDENTS_COUNT => 'Количество учеников',
        ES_LANGUAGE => 'Язык обучения',
        ES_EXAM_TITLE => 'Название экзамена, на который зарегистрировались',
        ES_COMPANY_NAME => 'Название компании',
        ES_COMMENT => 'Комментарий',
        ES_EXAM_PREPARATION => 'Подготовка к экзамену'
    ];

    /**
     * login for access
     * @var string $user
     */
    protected $user = 'svitlana.yeromina@ilcentre.com.ua';

    /**
     * Password for access
     * @var string $password
     */
    protected $password = 'ilcen4re';

    /**
     * Action for subscribe email
     * @param string $email
     */
    public function actionSubscribe($email)
    {
        $subscribe_contact_url = 'https://esputnik.com/api/v1/contact/subscribe';

        $json_contact_value = new stdClass();
        $contact = new stdClass();
        $contact->channels = array(
            array('type'=>'email', 'value' => $email),
        );

        //$contact->fields = array(array('id'=>13555391, 'value' => 'Some value'));	// дополнительные поля контакта
        $json_contact_value->contact = $contact;
        $json_contact_value->groups = array('CELTA-2010-2016');	// группы, в которые будет помещен контакт

        $this->send_request($subscribe_contact_url, $json_contact_value, $this->user, $this->password);
    }

    /**
     * Add event
     * @param string $email
     * @param string $type
     */
    public function addEvent($email = '', $type = '')
    {
        $event_url = 'https://esputnik.com/api/v1/event';

        $event = new stdClass();
        $event->eventTypeKey = $type;
        $event->keyValue = time();
        $event->params = array(array('name'=> 'email', 'value' => $email));

        $this->send_request($event_url, $event, $this->user, $this->password);
    }

    /**
     * add contact
     * @param array $arr
     */
    public function addContact($arr)
    {
        $contact = new stdClass();
        $request_entity = new stdClass();
        $create_contact_url = 'https://esputnik.com/api/v1/contacts';
        if(!empty($arr['firstName'])){
            $contact->firstName = $arr['firstName'];
            $request_entity->contactFields[] = 'firstName';
        }
        if(!empty($arr['lastName'])) {
            $contact->lastName = $arr['lastName'];
            $request_entity->contactFields[] = 'lastName';
        }

        $contact->channels = [];
        if(!empty($arr['sms'])){
            array_push($contact->channels, ['type'=>'sms', 'value' => $arr['sms']]);
            $request_entity->contactFields[] = 'sms';
        }
        if(!empty($arr['email'])){
            array_push($contact->channels, ['type'=>'email', 'value' => $arr['email']]);
        }

        $t = time();
        $contact->contactKey = $t;
        //TODO dataLayer.push
        //$this->registerJs dataLayer.push({'keyContact':$t});

        //unique attr
        $request_entity->dedupeOn = 'email';
        //fields which will be changed
        //$request_entity->contactFields = ['firstName', 'lastName','sms'];
        $request_entity->customFieldsIDs = ['33711'];
        $request_entity->groupNames = [$arr['type']];

        $contact->fields = [['id'=>33711, 'value'=>$arr['type']]];
        $contact->groups = [['name'=>$arr['type']]];

        //Clear main attributes
        unset($arr['firstName']);
        unset($arr['lastName']);
        unset($arr['sms']);
        unset($arr['email']);
        unset($arr['type']);


        if(!empty($arr)){
            //add other attributes
            foreach($arr as $id=>$value){
                array_push($contact->fields, ['id'=>$id, 'value' => $value]);
                array_push($request_entity->customFieldsIDs, $id);
            }
        }
        $request_entity->contacts = [$contact];

        $this->send_request($create_contact_url, $request_entity, $this->user, $this->password);
    }

    /**
     * Action for add event and contact
     */
    public function actionSend()
    {
        if(Yii::$app->request->isPost){
            $arr = Yii::$app->request->post();
            if(!empty($arr)){
                $arr = $this->validate($arr);
                if(!$arr['title']){
                    $arr['title'] = 'Неизвестная форма';
                }
                $this->sendAdminEmail("Заявка с формы «{$arr['title']}»", "requestForm", $arr);
                unset($arr['title']);
                $this->addContact($arr);
                if($arr['email'] != '' && $arr['type'] != ''){
                    $this->addEvent($arr['email'], $arr['type']);
                }
            }
        }

    }


    /**
     * Validate data
     * @param array $arr
     * @return array
     */
    public function validate($arr = [])
    {
       foreach ($arr as $k=>$v){
           if($k == 'sms'){
               $v = str_replace(["+"," ","(",")","-"],'',$v);
           }elseif($k == '33709' || $k == '22294'){
               $time = strtotime($v);
               $time = date('Y-m-d',$time);
               $v = $time;
           }
           $arr[$k]=trim(strip_tags($v));
       }
       if($arr['type'] == 'Site_teachers_DELTA'){
           if($arr[ES_MODULE_DELTA_1] != 1){
               $arr[ES_MODULE_DELTA_1] = 0;
           }
           if($arr[ES_MODULE_DELTA_2] != 2){
               $arr[ES_MODULE_DELTA_2] = 0;
           }
           if($arr[ES_MODULE_DELTA_3] != 3){
               $arr[ES_MODULE_DELTA_3] = 0;
           }
       }
       return $arr;
    }

    /**
     * Send request with curl
     * @param string $url
     * @param object $json_value
     * @param string $user
     * @param string $password
     * @return string
     */
    protected function send_request($url, $json_value, $user, $password)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json_value));
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_USERPWD, $user.':'.$password);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    /**
     * Wrapper to send email with mailer
     * @param string $subject
     * @param string $view
     * @param array $params
     */
    protected function sendAdminEmail($subject = '', $view = '', $params = [])
    {
        $t = [];
        foreach($params as $key=>$param){
            $t[$this->reCode[$key]] = $param;
        }
        $params = $t;
        unset($t);

        Yii::$app->mailer->compose($view, compact('params'))
            ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->params['fromName']])
            ->setTo(Yii::$app->params['adminEmail'])
            ->setSubject($subject)
            ->send();
    }
}