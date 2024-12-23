<?php

use app\models\Pemesanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PemesananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemesanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Pemesanan',
            'Id_BahanMentah',
            'Jumlah_Pemesanan',
            'Id_Owner',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pemesanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Pemesanan' => $model->Id_Pemesanan]);
                 }
            ],
        ],
    ]); ?>


</div>
