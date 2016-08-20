<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OnlineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Onlines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="online-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Online', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'actual_access_date',
            'actual_reserve_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
