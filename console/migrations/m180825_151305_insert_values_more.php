<?php

use yii\db\Migration;

/**
 * Class m180825_151305_insert_values_more
 */
class m180825_151305_insert_values_more extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('student_group',array(
            'group'=>'111',

        ));
        $this->insert('student_group',array(
            'group'=>'222',

        ));
        $this->insert('student_group',array(
            'group'=>'333',

        ));
        $this->insert('student_group',array(
            'group'=>'444',

        ));
        $this->insert('student_group',array(
            'group' => '555',


        ));
        $this->insert('teachers',array(
            'name' => 'nameTwo',
            'surName' => 'surNameTwo',

        ));
        $this->insert('teachers',array(
            'name' => 'nameOne',
            'surName' => 'surNameOne',

        ));
        $this->insert('teachers',array(
            'name' => 'nameThree',
            'surName' => 'surNameThree',

        ));
        $this->insert('teachers',array(
            'name' => 'nameFour',
            'surName' => 'surNameFour',

        ));
        $this->insert('teachers',array(
            'name' => 'nameFive',
            'surName' => 'surNameFive',

        ));
        $this->insert('students',array(
            'name' => 'nameOne',
            'surName' => 'surNameOne',
            'student_group_id' => '1',
            'course_id' => '1',

        ));
        $this->insert('students',array(
            'name' => 'nameTwo',
            'surName' => 'surNameTwo',
            'student_group_id' => '1',
            'course_id' => '1',

        ));
        $this->insert('students',array(
            'name' => 'nameThree',
            'surName' => 'surNameThree',
            'student_group_id' => '1',
            'course_id' => '1',

        ));
        $this->insert('students',array(
            'name' => 'nameFour',
            'surName' => 'surNameFour',
            'student_group_id' => '1',
            'course_id' => '1',

        ));
        $this->insert('students',array(
            'name' => 'nameFive',
            'surName' => 'surNameFive',
            'student_group_id' => '1',
            'course_id' => '1',

        ));
        $this->insert('students',array(
            'name' => 'nameFive',
            'surName' => 'surNameFive',
            'student_group_id' => '1',
            'course_id' => '1',

        ));
        $this->insert('students_group_course_with_teacher',array(
            'student_id' => '1',
            'teacher_id' => '1',
        ));
        $this->insert('students_group_course_with_teacher',array(
            'student_id' => '1',
            'teacher_id' => '1',
        ));
        $this->insert('students_group_course_with_teacher',array(
            'student_id' => '1',
            'teacher_id' => '1',
        ));
        $this->insert('students_group_course_with_teacher',array(
            'student_id' => '1',
            'teacher_id' => '1',
        ));
        $this->insert('students_group_course_with_teacher',array(
            'student_id' => '1',
            'teacher_id' => '1',
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
        echo "m180825_151305_insert_values_more cannot be reverted.\n";

        return false;
    }
    */
}
