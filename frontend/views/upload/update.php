<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Upload */

$this->title = 'Update Upload: ' . ' ' . $model->idFile;
$this->params['breadcrumbs'][] = ['label' => 'Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFile, 'url' => ['view', 'id' => $model->idFile]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="upload-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
