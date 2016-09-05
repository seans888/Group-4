<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Billingstatement */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Billingstatements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billingstatement-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'mode_of_payment',
            'amount',
            'date_of_payment',
            'status',
            'employee.last_name',
            'customer.last_name',
        ],
    ]) ?>

</div>
