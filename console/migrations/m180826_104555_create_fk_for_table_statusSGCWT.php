<?php

use yii\db\Migration;

/**
 * Class m180826_104555_create_fk_for_table_statusSGCWT
 */
class m180826_104555_create_fk_for_table_statusSGCWT extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->dropColumn('students_group_course_with_teacher','status');
        $this->addColumn('students_group_course_with_teacher','status_id','integer');
        $this->addForeignKey(
            'fk-students_group_course_with_teacher-statusSGCWT',
            'students_group_course_with_teacher',
            'status_id',
            'statusSGCWT',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-students_group_course_with_teacher-statusSGCWT','students_group_course_with_teacher');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_104555_create_fk_for_table_statusSGCWT cannot be reverted.\n";

        return false;
    }
    */
}
