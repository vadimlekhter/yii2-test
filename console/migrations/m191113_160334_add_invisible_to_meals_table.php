<?php

use yii\db\Migration;

/**
 * Class m191113_160334_add_invisible_to_meals_table
 */
class m191113_160334_add_invisible_to_meals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ingredients', 'invisible', $this->boolean()->defaultValue(false));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('ingredients', 'invisible');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191113_160334_add_invisible_to_meals_table cannot be reverted.\n";

        return false;
    }
    */
}
