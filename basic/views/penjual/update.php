<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Penjual $model */

$this->title = 'Update Penjual: ' . $model->Id_Penjual;
$this->params['breadcrumbs'][] = ['label' => 'Penjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Penjual, 'url' => ['view', 'Id_Penjual' => $model->Id_Penjual]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
