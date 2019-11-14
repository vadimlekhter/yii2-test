<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ingredients".
 *
 * @property int $id
 * @property string $name
 * @property boolean $invisible
 *
 *
 * @property Meal[] $meals
 * @property Meal[] $meals0
 * @property Meal[] $meals1
 * @property Meal[] $meals2
 * @property Meal[] $meals3
 */
class Ingredient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['invisible'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'invisible' => 'Invisible'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeals()
    {
        return $this->hasMany(Meal::className(), ['ingr_1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeals0()
    {
        return $this->hasMany(Meal::className(), ['ingr_2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeals1()
    {
        return $this->hasMany(Meal::className(), ['ingr_3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeals2()
    {
        return $this->hasMany(Meal::className(), ['ingr_4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeals3()
    {
        return $this->hasMany(Meal::className(), ['ingr_5' => 'id']);
    }
}
