<?php

use yii\db\Migration;

/**
 * Class m180825_145946_insert_values
 */
class m180825_145946_insert_values extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('course',array(
            'course'=>'1',

        ));
        $this->insert('course',array(
            'course'=>'2',

        ));
        $this->insert('course',array(
            'course'=>'3',

        ));
        $this->insert('course',array(
            'course'=>'4',

        ));
        $this->insert('course',array(
            'course'=>'5',

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180825_145946_insert_values cannot be reverted.\n";

        return false;
    }
    */
}
