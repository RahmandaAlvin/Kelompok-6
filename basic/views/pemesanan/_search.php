<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PemesananSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Pemesanan') ?>

    <?= $form->field($model, 'Id_BahanMentah') ?>

    <?= $form->field($model, 'Jumlah_Pemesanan') ?>

    <?= $form->field($model, 'Id_Owner') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
