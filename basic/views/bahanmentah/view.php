<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Bahanmentah $model */

$this->title = $model->Id_BahanMentah;
$this->params['breadcrumbs'][] = ['label' => 'Bahanmentahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bahanmentah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_BahanMentah' => $model->Id_BahanMentah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_BahanMentah' => $model->Id_BahanMentah], [
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
            'Id_BahanMentah',
            'Nama_BahanMentah',
            'Harga_BahanMentah',
            'Stok_BahanMentah',
        ],
    ]) ?>

</div>
