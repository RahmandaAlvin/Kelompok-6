<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */

$this->title = 'Update Pembayaran: ' . $model->Id_Pembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Pembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pembayaran, 'url' => ['view', 'Id_Pembayaran' => $model->Id_Pembayaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembayaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
