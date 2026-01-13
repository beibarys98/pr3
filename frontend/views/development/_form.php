<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Development $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="development-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ch')->textInput() ?>

    <?= $form->field($model, 'naim')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edizm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fakt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otklon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otvetstv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'podtv')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'znam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chisl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otmetka')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
