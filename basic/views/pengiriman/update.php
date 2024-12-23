<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pengiriman $model */

$this->title = 'Update Pengiriman: ' . $model->Id_Pengiriman;
$this->params['breadcrumbs'][] = ['label' => 'Pengirimen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pengiriman, 'url' => ['view', 'Id_Pengiriman' => $model->Id_Pengiriman]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengiriman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
