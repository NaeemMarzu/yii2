<?php

use yii\db\Migration;

/**
 * Class m171128_153504_migrate
 */
class m171128_153504_migrate extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_153504_migrate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_153504_migrate cannot be reverted.\n";

        return false;
    }
    */
}
