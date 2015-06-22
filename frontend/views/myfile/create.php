<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Myfile */

$this->title = 'Create Myfile';
$this->params['breadcrumbs'][] = ['label' => 'Myfiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="myfile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
