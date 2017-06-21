<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170516_154505_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(12)->notNull()->unique(),
            'body' => $this->text()->notNull(),
            'image' => $this->string(),
            'date' => $this->date(),
            'is_deleted' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
