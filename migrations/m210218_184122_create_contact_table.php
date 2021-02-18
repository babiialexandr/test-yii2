<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 */
class m210218_184122_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull(),
            'email' => $this->string(50)->notNull()->unique(),
            'phone' => $this->string(30)->notNull()->unique(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            '{{%idx-contact-email}}',
            '{{%contact}}',
            'email'
        );

        $this->createIndex(
            '{{%idx-contact-phone}}',
            '{{%contact}}',
            'phone'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex(
            '{{%idx-contact-email}}',
            '{{%contact}}'
        );
        $this->dropIndex(
            '{{%idx-contact-phone}}',
            '{{%contact}}'
        );
        $this->dropTable('{{%contact}}');
    }
}
