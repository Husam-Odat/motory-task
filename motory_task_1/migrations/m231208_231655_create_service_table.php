<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m231208_231655_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
           
            'iconName' => $this->string(),
            'title' => $this->string(),
            'title_ar' => $this->string(),
            'price' => $this->decimal(10, 2),
            'warranty' => $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
         $this->addForeignKey(
            'fk-service-category_id',
            'service',
            'category_id',
            'category',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
          // Drop foreign key constraint if necessary
        $this->dropForeignKey('fk-service-category_id', 'service');
        $this->dropTable('{{%service}}');
    }
}
