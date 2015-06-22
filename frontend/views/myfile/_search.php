<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MyfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="myfile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idFile') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'filecopy') ?>

    <?= $form->field($model, 'typecolor') ?>

    <?= $form->field($model, 'shift') ?>

    <?php // echo $form->field($model, 'datestart') ?>

    <?php // echo $form->field($model, 'dateend') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'fileName') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
