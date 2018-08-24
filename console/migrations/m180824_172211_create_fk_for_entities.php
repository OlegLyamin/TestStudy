<?php

use yii\db\Migration;

/**
 * Class m180824_172211_create_fk_for_entities
 */
class m180824_172211_create_fk_for_entities extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addForeignKey(
            'fk-students-student_group',
            'students',
            'student_group_id',
            'student_group',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
        'fk-students-course',
        'students',
        'course_id',
        'course',
        'id',
        'CASCADE'
    );
        $this->addForeignKey(
            'fk-students_group_course_with_teacher-students',
            'students_group_course_with_teacher',
            'student_id',
            'students',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-students_group_course_with_teacher-teachers',
            'students_group_course_with_teacher',
            'teacher_id',
            'teachers',
            'id',
            'CASCADE'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-students-student_group','students');
        $this->dropForeignKey('fk-students-course','students');
        $this->dropForeignKey('fk-students_group_course_with_teacher-students',
            'students_group_course_with_teacher');
        $this->dropForeignKey('fk-students_group_course_with_teacher-teachers',
            'students_group_course_with_teacher');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180824_172211_create_fk_for_entities cannot be reverted.\n";

        return false;
    }
    */
}
