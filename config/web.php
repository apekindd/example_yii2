<?php

$params = require(__DIR__ . '/params.php');


$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language'   => 'ua',
    'sourceLanguage' => 'uk_UA',
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'main'
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'gFnGuHRrpjFu6yG93vsix2A1fHxmzDvH',
            'baseUrl' => '',
            'class' => 'pjhl\multilanguage\components\AdvancedRequest'
        ],
        'cache' => [
            //enable cache
            //'class' => 'yii\caching\FileCache',
            //disable cache
            'class' => 'yii\caching\DummyCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'ilc.smtp.mailer@gmail.com',
                'password' => 'ilcen4remailer',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'pjhl\multilanguage\components\AdvancedUrlManager',
            'rules' => [
                'site-map'=>'site-map/index',
                'courses/<symbol:\w+>' => 'site/courses',
                'courses' => 'site/courses',
                'trainings/<symbol:\w+>' => 'site/trainings',
                'trainings' => 'site/trainings',
                'about/<symbol:\w+>' => 'site/about',
                'about' => 'site/about',
                'study/<symbol:\w+>' => 'site/study',
                'study' => 'site/study',
                'abroad/<symbol:\w+>' => 'site/abroad',
                'abroad' => 'site/abroad',
                //'bookcenter' => 'site/bookcenter',
                'single/<symbol:\w+>' => 'site/single',
                'news/<symbol:\w+>' => 'site/news',
                'exams/registration' => 'exams/registration',
                'exams/ajax' => 'exams/ajax',
                'exams/add' => 'exams/add',
                'exams/<symbol:\w+>' => 'site/exams',
                'exams' => 'site/exams',
                'news' => 'site/news',
                'blog/<symbol:\w+>' => 'site/blog',
                'blog' => 'site/blog',
                'offers/<symbol:\w+>' => 'site/offers',
                'offers' => 'site/offers',
                'contacts' => 'site/contacts',
                'login' => 'site/login',
                'logout' => 'site/logout',
                'search' => 'site/search',
                'searchajax' => 'site/searchajax',
                '' => 'site/index',
            ],
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                ],
            ],
        ],
        'fileCache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'baseUrl' => '',
                'path' => '/upload/global',
                'name' => 'Global'
            ],
        ],
    ],
    'params' => $params,
    'on beforeAction' => ['\pjhl\multilanguage\Start', 'run'],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
