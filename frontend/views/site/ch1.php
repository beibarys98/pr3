<?php

use common\models\Development;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */

$this->title = 'Baishev Development';
?>
<div class="site-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ch',
            'naim:ntext',
            'edizm',
            'plan',
            //'fakt',
            //'otklon',
            //'otvetstv',
            //'podtv:ntext',
            //'znam',
            //'chisl',
            //'prim',
            //'otmetka',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Development $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>