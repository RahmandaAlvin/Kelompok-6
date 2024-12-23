<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Laporan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="laporan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Laporan')->textInput() ?>

    <?= $form->field($model, 'Tanggal_Laporan')->textInput() ?>

    <?= $form->field($model, 'Id_Penjual')->textInput() ?>

    <?= $form->field($model, 'Id_Pembayaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
