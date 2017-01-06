<?php

use yii\db\Migration;

class m161114_140208_courseIndex extends Migration
{
    public function up()
    {
        $this->insert('courses',
            ['id'=>100,
                'title'=>'Курси',
                'sort'=>'100',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit, lectus feugiat suscipit pulvinar, tortor ligula aliquam urna, sit amet pretium arcu turpis dictum tortor. Nulla facilisi. Phasellus tristique, eros ut faucibus lacinia, nunc urna venenatis elit, eu venenatis ex metus aliquet est. Praesent ullamcorper, erat sit amet malesuada bibendum, risus felis gravida purus, in sodales tortor risus at nunc. Nunc dapibus velit metus, vel ornare felis pellentesque accumsan. Proin nec suscipit lectus, non bibendum nulla. In eget elit sit amet mauris mattis dapibus ac vitae mauris. Etiam tempor ligula vitae risus eleifend tempus. Aenean rhoncus sem enim, ut convallis felis convallis at. In mollis ullamcorper urna. Quisque eget molestie nisi. Morbi consectetur leo sed ipsum placerat pellentesque. Pellentesque non tortor at leo sagittis commodo. In maximus, nisi id vulputate luctus, erat velit hendrerit erat, id finibus ex libero vel nisi.
Praesent a convallis sem, ut faucibus erat. Etiam ac dui et metus pulvinar sollicitudin. Fusce rutrum blandit nisl a luctus. Maecenas quis justo ac mauris condimentum sodales ac pulvinar metus. Proin at tempus odio. Praesent sollicitudin, metus a venenatis faucibus, eros urna rutrum ante, sed venenatis eros quam vitae nulla. Nunc at justo vestibulum, finibus libero eget, aliquet erat. Sed ut tellus odio. Nullam porta ipsum vel velit lobortis, non interdum lorem laoreet.',
            ]
        );
    }

    public function down()
    {
        $this->delete('courses', ['id'=>100]);
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
