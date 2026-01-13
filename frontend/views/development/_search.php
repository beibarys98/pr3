<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\search\DevelopmentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="development-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ch') ?>

    <?= $form->field($model, 'naim') ?>

    <?= $form->field($model, 'edizm') ?>

    <?= $form->field($model, 'plan') ?>

    <?php // echo $form->field($model, 'fakt') ?>

    <?php // echo $form->field($model, 'otklon') ?>

    <?php // echo $form->field($model, 'otvetstv') ?>

    <?php // echo $form->field($model, 'podtv') ?>

    <?php // echo $form->field($model, 'znam') ?>

    <?php // echo $form->field($model, 'chisl') ?>

    <?php // echo $form->field($model, 'prim') ?>

    <?php // echo $form->field($model, 'otmetka') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
