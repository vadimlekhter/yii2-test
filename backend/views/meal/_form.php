<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Meal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ingr_1')
        ->dropDownList(\common\models\Ingredient::find()
            ->select('name')
            ->indexBy('id')
            ->column()) ?>

    <?= $form->field($model, 'ingr_2')
        ->dropDownList(\common\models\Ingredient::find()
            ->select('name')
            ->indexBy('id')
            ->column()) ?>

    <?= $form->field($model, 'ingr_3')
        ->dropDownList(\common\models\Ingredient::find()
            ->select('name')
            ->indexBy('id')
            ->column()) ?>

    <?= $form->field($model, 'ingr_4')
        ->dropDownList(\common\models\Ingredient::find()
            ->select('name')
            ->indexBy('id')
            ->column()) ?>

    <?= $form->field($model, 'ingr_5')
        ->dropDownList(\common\models\Ingredient::find()
            ->select('name')
            ->indexBy('id')
            ->column()) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
