<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Upload */

$this->title = $model->idFile;
$this->params['breadcrumbs'][] = ['label' => 'Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idFile], ['class' => 'btn btn-primary']) ?>        
        <?= Html::a('Download', ['download', 'id' => $model->idFile, 'fileName' => $model->fileName], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idFile], [
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
            //'idFile',
            'username',
            'filecopy',
            'typecolor',
            'shift',
            'datestart',
            'dateend',
            'size',
            'status',
            'fileName',
        ],
    ]) ?>

</div>
