<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pengiriman $model */

$this->title = $model->Id_Pengiriman;
$this->params['breadcrumbs'][] = ['label' => 'Pengirimen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengiriman-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Pengiriman' => $model->Id_Pengiriman], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Pengiriman' => $model->Id_Pengiriman], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_Pengiriman',
            'Id_Pemesanan',
            'Tanggal_Pengiriman',
            'Id_Supplier',
            'Status_Pengiriman',
        ],
    ]) ?>

</div>
