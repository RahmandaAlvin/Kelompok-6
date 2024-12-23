<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Laporan $model */

$this->title = 'Create Laporan';
$this->params['breadcrumbs'][] = ['label' => 'Laporans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
