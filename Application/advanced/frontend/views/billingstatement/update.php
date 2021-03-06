<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Billingstatement */

$this->title = 'Update Billingstatement: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Billingstatements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="billingstatement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
