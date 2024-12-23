<?php

use app\models\Pembeli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PembeliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pembelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Pembeli',
            'Nama_Pembeli',
            'Alamat_Pembeli',
            'Jk_Pembeli',
            'NoHp_Pembeli',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pembeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Pembeli' => $model->Id_Pembeli]);
                 }
            ],
        ],
    ]); ?>


</div>
