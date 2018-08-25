<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\students\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">
    <div class="box box-danger">
        <div class="box-header">
    <?php $form = ActiveForm::begin(); ?>
            <div class="col-xs-6">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surName')->textInput(['maxlength' => true]) ?>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('students', 'Save'), ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <div class="col-xs-6">
    <?= $form->field($model, 'student_group_id')->textInput() ?>

    <?= $form->field($model, 'course_id')->textInput() ?>
            </div>


    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
