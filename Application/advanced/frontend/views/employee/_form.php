<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hired_date')->textInput() ?>

    <?= $form->field($model, 'rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Full-Time' => 'Full-Time', 'Part-Time' => 'Part-Time', ], ['prompt' => 'Select Type']) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->dropDownList([ 'Regular' => 'Regular', 'Manager' => 'Manager', ], ['prompt' => 'Select Position']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
