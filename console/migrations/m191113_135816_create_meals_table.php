<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meals}}`.
 */
class m191113_135816_create_meals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meals}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'ingr_1' => $this->integer(),
            'ingr_2' => $this->integer(),
            'ingr_3' => $this->integer(),
            'ingr_4' => $this->integer(),
            'ingr_5' => $this->integer(),
        ]);
        $this->addForeignKey('fx_meals_ingridients_1', 'meals', ['ingr_1'], 'ingredients', ['id']);
        $this->addForeignKey('fx_meals_ingridients_2', 'meals', ['ingr_2'], 'ingredients', ['id']);
        $this->addForeignKey('fx_meals_ingridients_3', 'meals', ['ingr_3'], 'ingredients', ['id']);
        $this->addForeignKey('fx_meals_ingridients_4', 'meals', ['ingr_4'], 'ingredients', ['id']);
        $this->addForeignKey('fx_meals_ingridients_5', 'meals', ['ingr_5'], 'ingredients', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_meals_ingridients_1', 'meals');
        $this->dropForeignKey('fx_meals_ingridients_2', 'meals');
        $this->dropForeignKey('fx_meals_ingridients_3', 'meals');
        $this->dropForeignKey('fx_meals_ingridients_4', 'meals');
        $this->dropForeignKey('fx_meals_ingridients_5', 'meals');

        $this->dropTable('{{%meals}}');
    }
}
