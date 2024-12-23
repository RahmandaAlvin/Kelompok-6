<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Order')->textInput() ?>

    <?= $form->field($model, 'Jumlah_Order')->textInput() ?>

    <?= $form->field($model, 'Id_Pembeli')->textInput() ?>

    <?= $form->field($model, 'Id_Produk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
