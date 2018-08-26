<?php

use yii\db\Migration;

/**
 * Class m180826_073714_change_tables
 */
class m180826_073714_change_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk-students-course','students');
        $this->dropColumn('students','course_id');
        $this->addColumn('students_group_course_with_teacher', 'course_id','integer');
        $this->addColumn('students_group_course_with_teacher', 'status','string');
        $this->addForeignKey('fk-students_group_course_with_teacher-course',
        'students_group_course_with_teacher',
        'course_id',
        'course',
        'id',
        'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180826_073714_change_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_073714_change_tables cannot be reverted.\n";

        return false;
    }
    */
}
