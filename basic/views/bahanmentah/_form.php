<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bahanmentah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahanmentah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_BahanMentah')->textInput() ?>

    <?= $form->field($model, 'Nama_BahanMentah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga_BahanMentah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Stok_BahanMentah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
