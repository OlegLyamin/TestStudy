<?php

use yii\db\Migration;

/**
 * Class m180826_104257_create_table_statusSGCWT
 */
class m180826_104257_create_table_statusSGCWT extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('statusSGCWT', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('statusSGCWT');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180826_104257_create_table_statusSGCWT cannot be reverted.\n";

        return false;
    }
    */
}
