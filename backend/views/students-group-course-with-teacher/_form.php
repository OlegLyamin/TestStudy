<?php

use common\models\course\Course;
use common\models\students\Students;
use common\models\studentsGroupCourseWithTeacher\StatusSGCWT;
use common\models\teachers\Teachers;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-group-course-with-teacher-form">
    <div class="box box-danger">
        <div class="box-header">

    <?php $form = ActiveForm::begin(); ?>
            <div class="col-xs-6">
                <?php
                echo $form->field($model, 'student_id')
                    ->widget(kartik\select2\Select2::className(),
                        ['data' => \yii\helpers\ArrayHelper::map(Students::find()->All(),
                            'id', 'surName'),
                            'options' =>
                                ['placeholder' => 'Выберите студента...'],
                        ]);
                ?>

                <?php
                echo $form->field($model, 'teacher_id')
                    ->widget(kartik\select2\Select2::className(),
                        ['data' => \yii\helpers\ArrayHelper::map(Teachers::find()->All(),
                            'id', 'surName'),
                            'options' =>
                                ['placeholder' => 'Выберите преподавателя...'],
                        ]);
                ?>


                <?php
                echo $form->field($model, 'course_id')
                    ->widget(kartik\select2\Select2::className(),
                        ['data' => \yii\helpers\ArrayHelper::map(Course::find()->All(),
                            'id', 'course'),
                            'options' =>
                                ['placeholder' => 'Выберите курс...'],
                        ]);
                ?>

                <?php
                echo $form->field($model, 'status_id')
                    ->widget(kartik\select2\Select2::className(),
                        ['data' => \yii\helpers\ArrayHelper::map(StatusSGCWT::find()->All(),
                            'id', 'title'),
                            'options' =>
                                ['placeholder' => 'Выберите статус...'],
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
