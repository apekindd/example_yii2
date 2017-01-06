<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    [
                        'label' => 'Курсы',
                        'icon' => 'fa fa-user',
                        'url' => ['/admin/courses'],
                        'items' => [
                            ['label' => 'Все', 'url' => ['/admin/courses']],
                            ['label' => 'Преимущества', 'url' => ['/admin/benefits']],
                            ['label' => 'Формы обучения', 'url' => ['/admin/formstudy']],
                            ['label' => '5 шагов', 'url' => ['/admin/stepstest']],
                            ['label' => 'Тестирование', 'url' => ['/admin/begintest']],
                            ['label' => 'Возможности', 'url' => ['/admin/opportunity']],
                            ['label' => 'Стратегия', 'url' => ['/admin/strategy']],
                            ['label' => 'Партнеры', 'url' => ['/admin/partners']],
                            ['label' => 'Программы',  'url' => ['/admin/levels']],
                        ]
                    ],
                    [
                        'label' => 'Календарь экзаменов',
                        'icon' => 'fa fa-trophy',
                        'url' => [''],
                        'items' => [
                            ['label' => 'Записи на экзамены', 'url' => ['/admin/exam-date/index','sort'=>'-date']],
                            ['label' => 'Экзамены', 'url' => ['/admin/exam-item']],
                            ['label' => 'Категории экзаменов', 'url' => ['/admin/exam-category']],
                            ['label' => 'Уровни экзаменов', 'url' => ['/admin/exam-level']],
                            ['label' => 'Заявки на экзамены', 'url' => ['/admin/exam-request/index', 'sort'=>'-date_create']],
                        ]
                    ],
                    [
                        'label' => 'Онлайн тестирование',
                        'icon' => 'fa fa-cubes',
                        'url' => [''],
                        'items' => [
                            ['label' => 'Тесты', 'url' => ['/admin/online-test']],
                            ['label' => 'Вопросы-ответы', 'url' => ['/admin/question-answer']],
                            ['label' => 'Результаты', 'url' => ['/admin/test-result/index','sort'=>'-date_time']],
                        ]
                    ],
                    [
                        'label' => 'Тренинги',
                        'icon' => 'fa fa-object-group',
                        'url' => [''],
                        'items' => [
                            ['label' => 'Список', 'url' => ['/admin/trainings']],
                            ['label' => 'Расписание', 'url' => ['/admin/trainingsdate']],
                            ['label' => 'Заявки', 'url' => ['/admin/trainingsrequest']],
                        ]
                    ],
                    //['label' => 'Тренинги', 'icon' => 'fa fa-object-group', 'url' => ['/admin/trainings']],
                    ['label' => 'Таблицы', 'icon' => 'fa fa-table', 'url' => ['/admin/tables']],
                    ['label' => 'Блог', 'icon' => 'fa fa-pencil-square-o', 'url' => ['/admin/blog']],
                    ['label' => 'Новости', 'icon' => 'fa fa-rocket', 'url' => ['/admin/news']],
                    ['label' => 'Акции', 'icon' => 'fa fa-lightbulb-o', 'url' => ['/admin/offers']],
                    ['label' => 'Экзамены', 'icon' => 'fa fa-laptop', 'url' => ['/admin/exams']],
                    ['label' => 'Отзывы', 'icon' => 'fa fa-mail-reply', 'url' => ['/admin/reviews']],
                    ['label' => 'Контакты', 'icon' => 'fa fa-map-marker', 'url' => ['/admin/contacts']],
                    ['label' => 'Преподаватели', 'icon' => 'fa fa-users', 'url' => ['/admin/teachers']],
                    ['label' => 'Статические страницы', 'icon' => 'fa fa-file', 'url' => ['/admin/static-page']],
                    ['label' => 'Статические тексты', 'icon' => 'fa fa-file-text-o', 'url' => ['/admin/static-text']],
                    ['label' => 'Главная', 'icon' => 'fa fa-home', 'url' => ['/admin/mainpage']],
                    ['label' => 'Главное меню', 'icon' => 'fa fa-reorder', 'url' => ['/admin/headermenu']],
                    ['label' => 'Футер меню', 'icon' => 'fa fa-reorder', 'url' => ['/admin/footer']],
                    ['label' => 'Emails', 'icon' => 'fa fa-envelope', 'url' => ['/admin/email']],
                    ['label' => 'Кеш', 'icon' => 'fa  fa-file-archive-o', 'url' => ['/admin/cache']],
                    ['label' => 'Gii', 'icon' => 'fa fa-wrench', 'url' => ['/gii'],],
                    ['label' => 'Выход', 'icon' => 'fa fa-plug', 'url' => ['/site/logout']],
                ],
            ]
        ) ?>
    </section>
</aside>
