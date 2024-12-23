<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Penjual $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penjual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Penjual')->textInput() ?>

    <?= $form->field($model, 'Nama_Penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jk_Penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoHp_Penjual')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
