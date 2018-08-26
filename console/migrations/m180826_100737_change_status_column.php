<?php

use yii\db\Migration;

/**
 * Class m180826_100737_change_status_column
 */
class m180826_100737_change_status_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('students_group_course_with_teacher','status','integer');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('students_group_course_with_teacher','status','string');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_100737_change_status_column cannot be reverted.\n";

        return false;
    }
    */
}
