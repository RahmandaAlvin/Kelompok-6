<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PengirimanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengiriman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Pengiriman') ?>

    <?= $form->field($model, 'Id_Pemesanan') ?>

    <?= $form->field($model, 'Tanggal_Pengiriman') ?>

    <?= $form->field($model, 'Id_Supplier') ?>

    <?= $form->field($model, 'Status_Pengiriman') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
