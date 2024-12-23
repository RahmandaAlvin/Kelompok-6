<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bahanmentah $model */

$this->title = 'Update Bahanmentah: ' . $model->Id_BahanMentah;
$this->params['breadcrumbs'][] = ['label' => 'Bahanmentahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_BahanMentah, 'url' => ['view', 'Id_BahanMentah' => $model->Id_BahanMentah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahanmentah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
