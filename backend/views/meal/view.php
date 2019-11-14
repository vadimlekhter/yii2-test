<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Meal */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Meals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="meal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'ingr_1',
                'label' => 'Ингредиент 1',
                'value' => function (\common\models\Meal $model) {
                    return $model->ingr1->name;
                },
            ],
            [
                'attribute' => 'ingr_2',
                'label' => 'Ингредиент 2',
                'value' => function (\common\models\Meal $model) {
                    return $model->ingr2->name;
                },
            ],
            [
                'attribute' => 'ingr_3',
                'label' => 'Ингредиент 3',
                'value' => function (\common\models\Meal $model) {
                    return $model->ingr3->name;
                },
            ],
            [
                'attribute' => 'ingr_4',
                'label' => 'Ингредиент 4',
                'value' => function (\common\models\Meal $model) {
                    return $model->ingr4->name;
                },
            ],
            [
                'attribute' => 'ingr_5',
                'label' => 'Ингредиент 5',
                'value' => function (\common\models\Meal $model) {
                    return $model->ingr5->name;
                },
            ],
        ],
    ]) ?>

</div>
