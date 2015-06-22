<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Myfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="myfile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filecopy')->textInput() ?>

    <?= $form->field($model, 'typecolor')->textInput() ?>

    <?= $form->field($model, 'shift')->textInput() ?>

    <?= $form->field($model, 'datestart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'fileName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
