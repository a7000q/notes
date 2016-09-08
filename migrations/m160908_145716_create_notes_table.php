<?php

use yii\db\Migration;

/**
 * Handles the creation for table `notes`.
 */
class m160908_145716_create_notes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('notes', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'id_user' => $this->integer(),
            'date' => $this->timestamp(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('notes');
    }
}
