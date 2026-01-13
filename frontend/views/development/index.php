<?php

use common\models\Development;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\DevelopmentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Developments';
?>
<div class="development-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pager' => [
            'class' => 'yii\bootstrap5\LinkPager',
        ],
        'tableOptions' => [
            'class' => 'table table-striped table-bordered table-sm',
            'style' => 'font-size: 0.7rem;',
        ],
        'columns' => [
            'naim:ntext',
            'edizm',
            'plan',
            'fakt',
            'otklon',
            'otvetstv',
            'podtv:ntext',
            'znam',
            'chisl',
            'prim',
            'otmetka',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Development $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>