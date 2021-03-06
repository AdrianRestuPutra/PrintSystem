<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UploadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Upload', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idFile',
                'username',
                'filecopy',
                'typecolor',
                'shift',
                'datestart',
                //'dateend',
                'size',
                'status',
                'fileName',
                

/*[
             'label'=>'fileName',
             'format'=>'raw',
             'value' => function($data){
                 $url = "http://www.bsourcecode.com/".'status';
                 return Html::a('a', $url, ['title' => 'Download']); 
             }
],*/

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{done} {view} {update} {delete}',  
                'buttons' => [
                    'done' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-folder-open"></span>', $url, ['title'=>'Done', 'style'=>'padding-right: 5px;']);
                    },
                ]
            ],
        ],
    ]); ?>

</div>
