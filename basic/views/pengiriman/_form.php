<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pengiriman $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengiriman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pengiriman')->textInput() ?>

    <?= $form->field($model, 'Id_Pemesanan')->textInput() ?>

    <?= $form->field($model, 'Tanggal_Pengiriman')->textInput() ?>

    <?= $form->field($model, 'Id_Supplier')->textInput() ?>

    <?= $form->field($model, 'Status_Pengiriman')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
