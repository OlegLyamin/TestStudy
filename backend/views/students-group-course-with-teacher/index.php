<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel common\models\studentsGroupCourseWithTeacher\search\StudentsGroupCourseWithTeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('studentsGroupCourseWithTeacher', 'Students Group Course With Teachers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-group-course-with-teacher-index">
    <div class="box box-danger">
        <div class="box-header">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
            <div class="form-group" style="float: right">
                <?= Html::a('<i class="fa fa-eraser"></i> '.Yii::t('app', 'Reset'),
                    ['index'],[ 'class' => 'btn btn-default',
                        'onclick'=>"document.getElementById('p0').reset()" ]) ?>
            </div>
            <?= Html::a('<i class="fa fa-plus"></i> '.Yii::t('studentsGroupCourseWithTeacher',
                    'Create StudentsGroupCourseWithTeacher'), ['create'], ['class' => 'btn btn-success'])?>
            </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'pagination pagination-sm no-margin pull-right'],
                        'layout'=>"{items}{pager}",

        'tableOptions' => [
            'class' => 'table table-hover table-responsive table-condensed text-center'],

        'columns' => [



            [
                'attribute' => 'student_id',
                'value' => 'student.surName'
            ],
            [
                'attribute' => 'teacher_id',
                'value' => 'teacher.surName'
            ],

            [
                'attribute' => 'course_id',
                'value' => 'course.course'
            ],
            [
                'attribute' => 'status_id',
                'value' => 'statusSGCWT.title',

            ],
            [
                'attribute' => 'date_of_issue',
                'value' => 'dateOfIssueView',
                'format' => 'date',
                'filter' => DatePicker::widget(
                    [
                        'model' => $searchModel,
                        'attribute' => 'date_of_issue',
                        'options' => [
                            'class' => 'form-control'
                        ],
                    ]
                )
            ],
            [
                'attribute' => 'deadline',
                'value' => 'deadlineView',
                'format' => 'date',
                'filter' => DatePicker::widget(
                    [
                        'model' => $searchModel,
                        'attribute' => 'deadline',
                        'options' => [
                            'class' => 'form-control'
                        ],
                    ]
                )
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {link}',
                'buttons' => [
                    'view' => function ($url,$model) {
                        return Html::a('<span class="label label-info"><i class="fa fa-eye"></i></span>',
                            $url,['title' => Yii::t('app', 'View')]);
                    },
                    'update' => function ($url,$model) {
                        return Html::a('<span class="label label-warning"><i class="fa fa-pencil"></i></span>',
                            $url,['title' => Yii::t('app', 'Update')]);
                    },
                ],
            ]
        ],
    ]); ?>
    <?php Pjax::end(); ?>
        </div>
    </div>
</div>
