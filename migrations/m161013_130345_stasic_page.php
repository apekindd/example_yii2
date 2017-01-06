<?php

use yii\db\Migration;

class m161013_130345_stasic_page extends Migration
{
    public function up()
    {
        $this->createTable('static_page', [
            'id' => 'pk',
            'symbol' => 'string',
            'title' => 'string NOT NULL',
            'title_ru' => 'string NOT NULL',
            'title_en' => 'string NOT NULL',
            'description' => 'string NOT NULL',
            'description_ru' => 'string NOT NULL',
            'description_en' => 'string NOT NULL',
            'keywords' => 'string NOT NULL',
            'keywords_ru' => 'string NOT NULL',
            'keywords_en' => 'string NOT NULL',
            'text' => 'text NOT NULL',
            'text_ru' => 'text NOT NULL',
            'text_en' => 'text NOT NULL',
        ] );
        $this->insert('static_page', [
            'id' => '1',
            'symbol' => 'contacts',
            'title' => 'Контакты',
            'title_ru' => 'RU Контакты',
            'title_en' => 'EN Контакты',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => '',
            'text_ru' => '',
            'text_en' => '',
        ]);
        $this->insert('static_page', [
            'id' => '2',
            'symbol' => 'about',
            'title' => 'История',
            'title_ru' => 'RU История',
            'title_en' => 'EN История',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Языковая школ "Международный Дом" была основана 24 ноября 1992 года при содействии, материально-технической и финансовой поддержке Международного Фонда "Возрождение", основателем которого является всемирно известный финансист и филантроп Джордж Сорос. Первым официальным названием было "Независимая языковая школа", в английском варианте — "Soros International House School". Независимая языковая школа — первый в Украине центр изучения иностранных языков, где к процессу преподавания начали привлекать исключительно тех носителей языка, которые имеют международные сертификаты преподавания английского языка как иностранного. В настоящее время основным условием сотрудничества Школы с преподавателями является наличие соответствующих международных квалификаций. Первично, школа была расположена в главном корпусе Университета "Киево-Могилянская академия", а с 1996 г. имеет собственное помещение по адресу Ванды Василевской, 7. С 1994 года в Школе работает Книжный центр, ставший пионером в продвижении британских издательств на украинский рынок и первым официальным дистрибьютором Oxford University Press в Украине. С середины 1990-х Школа является одним из лидеров в подготовке преподавателей по коммуникативной методике и со временем получила официальный статус Центра CELTA от Кембриджского университета. В 2012 году был также открыт Экзаменационный центр по подготовке и сдаче Кембриджских экзаменов по английскому языку. С 1994 по 2015 год Школа была аффилиирована с International House World Organisation с целью внедрения современной коммуникативной методики и инновационных подходов к преподаванию иностранных языков. Языковая школа Международный дом и в дальнейшем продолжает использовать новейшие методики и технологии в обучении иностранным языкам взрослых и детей, а также в подготовке преподавателей.',
            'text_ru' => 'RU',
            'text_en' => 'EN',
        ]);
        $this->insert('static_page', [
            'id' => '3',
            'symbol' => 'partners',
            'title' => 'Партнеры',
            'title_ru' => 'RU Партнеры',
            'title_en' => 'EN Партнеры',
            'description' => 'description',
            'description_ru' => 'ru description',
            'description_en' => 'en description',
            'keywords' => 'keywords',
            'keywords_ru' => 'keywords',
            'keywords_en' => 'keywords',
            'text' => 'Партнеры',
            'text_ru' => 'RU',
            'text_en' => 'EN',
        ]);
    }

    public function down()
    {
        $this->delete('static_page',['id'=>'1,2,3']);
        $this->dropTable('static_page');
    }
}
