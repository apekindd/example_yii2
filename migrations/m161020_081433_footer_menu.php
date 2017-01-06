<?php

use yii\db\Migration;

class m161020_081433_footer_menu extends Migration
{
    public function up()
    {
        $this->createTable('footer', [
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'title_ru' => 'string NOT NULL',
            'title_en' => 'string NOT NULL',
            'link' => 'string NOT NULL',
            'section' => 'string NOT NULL',
            'sort' => 'integer',
        ] );

        $this->insert('footer', [
            'id' => 1,
            'title' => 'Для взрослых',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/courses/adult',
            'section' => 'courses',
        ]);

        $this->insert('footer', [
            'id' => 2,
            'title' => 'Для детей',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/courses/children',
            'section' => 'courses',
        ]);

        $this->insert('footer', [
            'id' => 3,
            'title' => 'Корпоративные курсы',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/courses/corporate',
            'section' => 'courses',
        ]);

        $this->insert('footer', [
            'id' => 4,
            'title' => 'Подготовка к экзаменам',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/courses/exam',
            'section' => 'courses',
        ]);

        $this->insert('footer', [
            'id' => 5,
            'title' => 'Украинский и русский для иностранцев',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/courses/corporate#ua',
            'section' => 'courses',
        ]);

        $this->insert('footer', [
            'id' => 6,
            'title' => 'Тренинги для преподователей',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/delta',
            'section' => 'trainings',
        ]);

        $this->insert('footer', [
            'id' => 7,
            'title' => 'Курсы CELTA',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/celta',
            'section' => 'trainings',
        ]);

        $this->insert('footer', [
            'id' => 8,
            'title' => 'Курсы CELT-S',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/celt_c',
            'section' => 'trainings',
        ]);

        $this->insert('footer', [
            'id' => 9,
            'title' => 'Курсы CELT-P',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/celt_p',
            'section' => 'trainings',
        ]);

        $this->insert('footer', [
            'id' => 10,
            'title' => 'Модульные курсы',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/modul',
            'section' => 'trainings',
        ]);

        $this->insert('footer', [
            'id' => 11,
            'title' => 'Другие тренинги',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/other',
            'section' => 'trainings',
        ]);

        $this->insert('footer', [
            'id' => 12,
            'title' => 'Курсы DELTA',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/trainings/delta',
            'section' => 'trainings',
        ]);

        $this->insert('footer', [
            'id' => 13,
            'title' => 'Регистрация',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/exams/delta',
            'section' => 'exam',
        ]);

        $this->insert('footer', [
            'id' => 14,
            'title' => 'Экзамены для детей',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/exams/children',
            'section' => 'exam',
        ]);

        $this->insert('footer', [
            'id' => 15,
            'title' => 'Экзамены для подростков',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/exams/adults',
            'section' => 'exam',
        ]);

        $this->insert('footer', [
            'id' => 16,
            'title' => 'История',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/about',
            'section' => 'about',
        ]);

        $this->insert('footer', [
            'id' => 17,
            'title' => 'Новости',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/news',
            'section' => 'about',
        ]);

        $this->insert('footer', [
            'id' => 18,
            'title' => 'Акции',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/offers',
            'section' => 'about',
        ]);

        $this->insert('footer', [
            'id' => 19,
            'title' => 'Как мы работаем',
            'title_ru' => '',
            'title_en' => '',
            'link' => '#',
            'section' => 'about',
        ]);

        $this->insert('footer', [
            'id' => 20,
            'title' => 'Партнеры',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/about/partners',
            'section' => 'about',
        ]);

        $this->insert('footer', [
            'id' => 21,
            'title' => 'Расписание курсов и тренингов',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/study/schedule',
            'section' => 'study',
        ]);

        $this->insert('footer', [
            'id' => 22,
            'title' => 'Академический календарь',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/study/academic',
            'section' => 'study',
        ]);

        $this->insert('footer', [
            'id' => 23,
            'title' => 'Методика и формы обучения',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/study/methods',
            'section' => 'study',
        ]);

        $this->insert('footer', [
            'id' => 24,
            'title' => 'Уровни языка',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/study/levels',
            'section' => 'study',
        ]);

        $this->insert('footer', [
            'id' => 25,
            'title' => 'Правила обучения',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/study/rules',
            'section' => 'study',
        ]);

        $this->insert('footer', [
            'id' => 26,
            'title' => 'Программа лояльности',
            'title_ru' => '',
            'title_en' => '',
            'link' => '/study/loyalty',
            'section' => 'study',
        ]);

    }

    public function down()
    {
        $this->dropTable('footer');
    }
}
