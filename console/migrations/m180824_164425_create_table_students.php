<?php

use yii\db\Migration;

/**
 * Class m180824_164425_create_table_students
 */
class m180824_164425_create_table_students extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)->notNull(),
            'surName' => $this->string(32)->notNull(),
            'student_group_id' => $this->integer()->notNull(),
            'course_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->createTable('student_group', [
            'id' => $this->primaryKey(),
            'group' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'course' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->createTable('teachers', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)->notNull(),
            'surName' => $this->string(32)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->createTable('students_group_course_with_teacher', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer()->notNull(),
            'teacher_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("students");
        $this->dropTable("student_group");
        $this->dropTable("course");
        $this->dropTable("teachers");
        $this->dropTable("students_group_course_with_teacher");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180824_164425_create_table_students cannot be reverted.\n";

        return false;
    }
    */
}
