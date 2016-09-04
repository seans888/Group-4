<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Reservation */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reservations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reservation-view">

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
            'reservation_date',
            'check_in',
            'check_out',
            'type_of_room',
            'number_of_adults',
            'number_of_kids',
            'billingstatement_id.mode_of_payment',
        ],
    ]) ?>

</div>
