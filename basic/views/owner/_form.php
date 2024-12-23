<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Owner $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="owner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Owner')->textInput() ?>

    <?= $form->field($model, 'Nama_Owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jk_Owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoHp_Owner')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
