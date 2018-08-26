<?php

use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use common\models\student_group\StudentGroup;


/* @var $this yii\web\View */
/* @var $model common\models\students\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">
    <div class="box box-danger">
        <div class="box-header">
    <?php $form = ActiveForm::begin(); ?>
            <div class="col-xs-6">
                <?= $form->field($model, 'name', [
                        'feedbackIcon' => [
                            'prefix' => 'fa fa-',
                            'default' => 'user',
                            'success' => 'user',
                            'error' => 'user',
                        ]
                    ]
                )->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'surName', [
                        'feedbackIcon' => [
                            'prefix' => 'fa fa-',
                            'default' => 'user',
                            'success' => 'user',
                            'error' => 'user',
                        ]
                    ]
                )->textInput(['maxlength' => true]) ?>
                <?php
                echo $form->field($model, 'student_group_id')
                    ->widget(kartik\select2\Select2::className(),
                        ['data' => \yii\helpers\ArrayHelper::map(StudentGroup::find()->All(),
                            'id', 'group'),
                            'options' =>
                                ['placeholder' => 'Выберите группу...'],
                        ]);
                ?>



                <div class="form-group">
                    <?= Html::submitButton('<i class="fa fa-floppy-o"></i> '.Yii::t('app',
                            'Save'),['class' => 'btn btn-success'])?>
                </div>
            </div>



    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
