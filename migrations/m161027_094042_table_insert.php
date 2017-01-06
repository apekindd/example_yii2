<?php

use yii\db\Migration;

class m161027_094042_table_insert extends Migration
{
    public function up()
    {
        $this->insert('tables', [
            'id' => '1',
            'title' => 'Діти 5-10 лет',
            'title_ru' => 'Дети 5-10 лет',
            'title_en' => 'Children 5-10 years old',
            'text' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'text_ru' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'text_en' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'sort' => $this->integer()->defaultValue(0),
        ]);



        $this->insert('tables', [
            'id' => '2',
            'title' => 'Діти 10-13 лет',
            'title_ru' => 'Дети 10-13 лет',
            'title_en' => 'Children 10-13 years old',
            'text' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)2
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'text_ru' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'text_en' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'sort' => $this->integer()->defaultValue(0),
        ]);


        $this->insert('tables', [
            'id' => '3',
            'title' => 'Подростки 13-17 лет',
            'title_ru' => 'Підлітки 13-17 лет',
            'title_en' => 'Teenagers 13-17 years old',
            'text' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)3
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'text_ru' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'text_en' => '<table>
<tbody>
<tr>
	<td rowspan="3">2Exam
  preparation (IELTS)
	</td>
	<td>Mon
	</td>
	<td>Tue
	</td>
	<td>Wed
	</td>
	<td>Thu
	</td>
	<td>Fri
	</td>
	<td>Cost of one semester
	</td>
	<td>Numbers of hours
	</td>
</tr>
<tr>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>
	</td>
	<td>19:00- 21:00
	</td>
	<td>5400
	</td>
	<td>36
	</td>
</tr>
<tr>
	<td colspan="5">Saturdays, 10:00-14:00
	</td>
	<td>3600
	</td>
	<td>24
	</td>
</tr>
</tbody>
</table>',
            'sort' => $this->integer()->defaultValue(0),
        ]);
    }

    public function down()
    {
        $this->delete('static_page',['id'=>'1,2,3']);

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
