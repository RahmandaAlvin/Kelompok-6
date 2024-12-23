<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pembayaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pembayaran')->textInput() ?>

    <?= $form->field($model, 'Tanggal_Pembayaran')->textInput() ?>

    <?= $form->field($model, 'Total_Pembayaran')->textInput() ?>

    <?= $form->field($model, 'Status_Pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_Order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
