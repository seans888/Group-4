<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Employee;
use common\models\Customer;

/* @var $this yii\web\View */
/* @var $model common\models\Billingstatement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billingstatement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mode_of_payment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_id')->dropDownList(
		ArrayHelper::map( Employee::find()->all(), 'id', 'name' ),
		[
			'prompt'=>'Select Employee',
			//'onchange'=>
			//	'$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
			//	( data ){
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>

    <?= $form->field($model, 'customer_id')->dropDownList(
		ArrayHelper::map( Customer::find()->all(), 'id', 'name' ),
		[
			'prompt'=>'Select Customer',
			//'onchange'=>
			//	'$.post("index.php?r=work-orders/lists&id='.'" +$(this).val(), function
			//	( data ){
			//		$( "select#model-contact" ).html( data );
			//	});'
		]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
