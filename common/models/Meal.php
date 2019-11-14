<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meals".
 *
 * @property int $id
 * @property string $name
 * @property int $ingr_1
 * @property int $ingr_2
 * @property int $ingr_3
 * @property int $ingr_4
 * @property int $ingr_5
 *
 * @property Ingredient $ingr1
 * @property Ingredient $ingr2
 * @property Ingredient $ingr3
 * @property Ingredient $ingr4
 * @property Ingredient $ingr5
 */
class Meal extends \yii\db\ActiveRecord
{

    const RELATION_INGR1 = 'ingr1';
    const RELATION_INGR2 = 'ingr2';
    const RELATION_INGR3 = 'ingr3';
    const RELATION_INGR4 = 'ingr4';
    const RELATION_INGR5 = 'ingr5';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['ingr_1', 'ingr_2', 'ingr_3', 'ingr_4', 'ingr_5'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['ingr_1'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingr_1' => 'id']],
            [['ingr_2'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingr_2' => 'id']],
            [['ingr_3'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingr_3' => 'id']],
            [['ingr_4'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingr_4' => 'id']],
            [['ingr_5'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredient::className(), 'targetAttribute' => ['ingr_5' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'ingr_1' => 'Ингредиент 1',
            'ingr_2' => 'Ингредиент 2',
            'ingr_3' => 'Ингредиент 3',
            'ingr_4' => 'Ингредиент 4',
            'ingr_5' => 'Ингредиент 5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngr1()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingr_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngr2()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingr_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngr3()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingr_3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngr4()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingr_4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngr5()
    {
        return $this->hasOne(Ingredient::className(), ['id' => 'ingr_5']);
    }


}
