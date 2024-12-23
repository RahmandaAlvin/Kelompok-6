<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pembeli $model */

$this->title = 'Update Pembeli: ' . $model->Id_Pembeli;
$this->params['breadcrumbs'][] = ['label' => 'Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pembeli, 'url' => ['view', 'Id_Pembeli' => $model->Id_Pembeli]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
