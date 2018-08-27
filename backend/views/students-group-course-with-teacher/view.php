<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('studentsGroupCourseWithTeacher', 'Students Group Course With Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-group-course-with-teacher-view">
    <div class="box box-danger">
        <div class="box-header">
            <div class="col-xs-6">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' =>'studentSurName',
                'content' => function ($data) {
                    $studentSurName ='';
                    $studentSurName = Html::a($data->studentSurname,
                        Url::to(['students/view', 'id' => $data->id]));
                    return $studentSurName;                            }

            ],//            'teacher_id',
            [
                'attribute' =>'courseCourse',
                'content' => function ($data) {
                    $courseCourse ='';
                    $courseCourse = Html::a($data->courseCourse,
                        Url::to(['course/view', 'id' => $data->id]));
                    return $courseCourse;                            }

            ],
            [
                'attribute' =>'statusTitle',
                'content' => function ($data) {
                    $statusTitle = '';
                    $statusTitle = Html::a($data->id,
                        Url::to(['student-group/view', 'id' => $data->id]));
                    return $statusTitle;                            }

            ],
        [
               'attribute' =>'teacherSurName',
               'content' => function ($data) {
                   $teacherSurname ='';
                  $teacherSurname = Html::a($data->teacherSurname,
                      Url::to(['teachers/view', 'id' => $data->id]));
                   return $teacherSurname;                            }

            ],
            [
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date('d-m-Y ', $model->created_at);
                },
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($model) {
                    return date('d-m-Y', $model->updated_at);
                },
            ],
        ],
    ]) ?>
    <p>
        <?=  Html::a('<i class="fa fa-pencil"></i> '.Yii::t('app',
                'Update'),
            ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])?>

        <?= Html::a('<i class="fa fa-user-times"></i> '.Yii::t('app',
                'Delete'),
            ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('studentsGroupCourseWithTeacher',
                        'Are you sure you want to delete this student?')
                ],
            ])?>
    </p>
            </div>
        </div>
</div>
