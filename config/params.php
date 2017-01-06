<?php

return [
    'adminEmail' => 'apekin@uamaster.com',
    'fromName'   => 'ILC Mailer',
    'gooleMapApiKey' => 'AIzaSyDKgDehjRX28gobTMghyS8qPJnoGInfeUQ',
    'languages' => [
        [
            'id' => 1,
            'url' => 'en',
            'locale' => 'en',
            'name' => 'English',
        ],
        [
            'id' => 2,
            'url' => 'ru',
            'locale' => 'ru',
            'name' => 'Русский',
        ],
        [
            'id' => 3,
            'url' => 'ua',
            'locale' => 'ua',
            'name' => 'Украинский',
            'default' => true,
        ],
    ],
    'offerProducts' => [
        ''=>'-',
        'courses' => 'Курсы',
        'exams' => 'Экзамены',
        'trainings' => 'Тренинги'
    ],
    'cache' => [
        'mainpage' => [
            'time' => 259200,
            'db' => 0
        ],
        'offers' => [
            'time' => 259200,
            'db' => 1
        ],
        'news' => [
            'time' => 259200,
            'db' => 1
        ],
        'footer' => [
            'time' => 259200,
            'db' => 0
        ],
        'blog' => [
            'time' => 259200,
            'db' => 1
        ],
        'static' => [
            'time' => 259200,
            'db' => 1
        ],
        'exams' => [
            'time' => 259200,
            'db' => 1
        ],
        'trainings' => [
            'time' => 259200,
            'db' => 1
        ],
        'courses' => [
            'time' => 259200,
            'db' => 1
        ],
    ],
];
