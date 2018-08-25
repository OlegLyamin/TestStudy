<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Course\Course */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-form">
    <div class="box box-danger">
        <div class="box-header">

    <?php $form = ActiveForm::begin(); ?>
            <div class="col-xs-6">

    <?= $form->field($model, 'course')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('<i class="fa fa-floppy-o"></i> '.Yii::t('app',
                            'Save'),['class' => 'btn btn-success'])?>
                </div>
            </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
</div>
