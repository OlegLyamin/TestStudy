<?php

use yii\db\Migration;

/**
 * Class m180827_122221_add_columns_deadline_date_of_issue
 */
class m180827_122221_add_columns_deadline_date_of_issue extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('students_group_course_with_teacher','date_of_issue','integer');
        $this->addColumn('students_group_course_with_teacher','deadline','integer');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('students_group_course_with_teacher','deadline');
       $this->dropColumn('students_group_course_with_teacher','date_of_issue');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180827_122221_add_columns_deadline_date_of_issue cannot be reverted.\n";

        return false;
    }
    */
}
