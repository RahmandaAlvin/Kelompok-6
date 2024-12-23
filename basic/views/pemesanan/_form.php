<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pemesanan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pemesanan')->textInput() ?>

    <?= $form->field($model, 'Id_BahanMentah')->textInput() ?>

    <?= $form->field($model, 'Jumlah_Pemesanan')->textInput() ?>

    <?= $form->field($model, 'Id_Owner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
