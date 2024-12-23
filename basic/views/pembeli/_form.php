<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pembeli $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pembeli')->textInput() ?>

    <?= $form->field($model, 'Nama_Pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jk_Pembeli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoHp_Pembeli')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
