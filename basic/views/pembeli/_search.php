<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PembeliSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pembeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Pembeli') ?>

    <?= $form->field($model, 'Nama_Pembeli') ?>

    <?= $form->field($model, 'Alamat_Pembeli') ?>

    <?= $form->field($model, 'Jk_Pembeli') ?>

    <?= $form->field($model, 'NoHp_Pembeli') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
