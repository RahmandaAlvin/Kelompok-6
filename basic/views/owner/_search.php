<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OwnerSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="owner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Owner') ?>

    <?= $form->field($model, 'Nama_Owner') ?>

    <?= $form->field($model, 'Alamat_Owner') ?>

    <?= $form->field($model, 'Jk_Owner') ?>

    <?= $form->field($model, 'NoHp_Owner') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
