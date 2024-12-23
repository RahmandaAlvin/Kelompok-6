<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Produk $model */

$this->title = 'Update Produk: ' . $model->Id_Produk;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Produk, 'url' => ['view', 'Id_Produk' => $model->Id_Produk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
