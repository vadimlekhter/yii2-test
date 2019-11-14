<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Meal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
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
            ['class' => 'yii\grid\ActionColumn'],
        ]
    ]); ?>

    <?php Pjax::end(); ?>

</div>
