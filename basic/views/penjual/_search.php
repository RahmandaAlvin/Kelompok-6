<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenjualSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penjual-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Penjual') ?>

    <?= $form->field($model, 'Nama_Penjual') ?>

    <?= $form->field($model, 'Alamat_Penjual') ?>

    <?= $form->field($model, 'Jk_Penjual') ?>

    <?= $form->field($model, 'NoHp_Penjual') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
