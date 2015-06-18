<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Color;
use frontend\models\Shift;
use frontends\models\Status;
/* @var $this yii\web\View */
/* @var $model frontend\models\Upload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="upload-form">

    <?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data'] // important
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filecopy')->textInput() ?>

    <?= $form->field($model, 'typecolor')->dropDownList(
            ArrayHelper::map(Color::find()->all(),'typecolor','color'),
            ['prompt'=>'Select Type Color']
    ) ?>

    <?= $form->field($model, 'shift')->dropDownList(
            ArrayHelper::map(Shift::find()->all(),'shift','shiftname'),
            ['prompt'=>'Select Shift']
    ) ?>

    
    <?php
    date_default_timezone_set("Asia/Jakarta");
    $model->datestart = date('d-M-Y h:i:s');
    echo $form->field($model, 'datestart')->hiddenInput()->label(false); ?>

    <?php
    date_default_timezone_set("Asia/Jakarta");
    $model->dateend = date('d-M-Y h:i:s');
    echo $form->field($model, 'dateend')->hiddenInput()->label(false); ?>

    <?= $form->field($model, 'size')->textInput() ?>

    
    <?php
    $model->status = '1';
    echo $form->field($model, 'status')->hiddenInput()->label(false); ?>

   <?= $form->field($model, 'fileName')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
