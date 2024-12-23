<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pembeli $model */

$this->title = 'Create Pembeli';
$this->params['breadcrumbs'][] = ['label' => 'Pembelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembeli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
