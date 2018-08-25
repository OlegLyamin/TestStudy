<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\teachers\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">
    <div class="box box-danger">
        <div class="box-header">
            <div class="col-xs-6">

            <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surName')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('<i class="fa fa-floppy-o"></i> '.Yii::t('app',
                            'Save'),['class' => 'btn btn-success'])?>
                </div>

    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>


</div>
