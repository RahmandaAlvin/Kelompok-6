<?php

use app\models\Bahanmentah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BahanmentahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bahanmentahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahanmentah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bahanmentah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_BahanMentah',
            'Nama_BahanMentah',
            'Harga_BahanMentah',
            'Stok_BahanMentah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Bahanmentah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_BahanMentah' => $model->Id_BahanMentah]);
                 }
            ],
        ],
    ]); ?>


</div>
