<?php

use app\models\Pengiriman;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PengirimanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengirimen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengiriman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengiriman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Pengiriman',
            'Id_Pemesanan',
            'Tanggal_Pengiriman',
            'Id_Supplier',
            'Status_Pengiriman',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pengiriman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Pengiriman' => $model->Id_Pengiriman]);
                 }
            ],
        ],
    ]); ?>


</div>
