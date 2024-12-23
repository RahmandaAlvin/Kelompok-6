<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Owner $model */

$this->title = 'Update Owner: ' . $model->Id_Owner;
$this->params['breadcrumbs'][] = ['label' => 'Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Owner, 'url' => ['view', 'Id_Owner' => $model->Id_Owner]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="owner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
