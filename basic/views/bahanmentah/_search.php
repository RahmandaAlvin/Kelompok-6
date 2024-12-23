<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BahanmentahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahanmentah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_BahanMentah') ?>

    <?= $form->field($model, 'Nama_BahanMentah') ?>

    <?= $form->field($model, 'Harga_BahanMentah') ?>

    <?= $form->field($model, 'Stok_BahanMentah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
