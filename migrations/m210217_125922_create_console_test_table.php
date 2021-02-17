<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%console_test}}`.
 */
class m210217_125922_create_console_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%console_test}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->defaultValue(""),
            'console' => $this->string(50)->notNull()->defaultValue(""),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%console_test}}');
    }
}
