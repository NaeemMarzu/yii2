<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171128_153527_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'user_name' => $this->string(),
            'desc' => $this->text(),
            'other' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
