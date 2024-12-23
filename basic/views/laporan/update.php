<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Laporan $model */

$this->title = 'Update Laporan: ' . $model->Id_Laporan;
$this->params['breadcrumbs'][] = ['label' => 'Laporans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Laporan, 'url' => ['view', 'Id_Laporan' => $model->Id_Laporan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
