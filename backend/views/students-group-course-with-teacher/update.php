<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher */

$this->title = Yii::t('studentsGroupCourseWithTeacher', 'Update Students Group Course With Teacher: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('studentsGroupCourseWithTeacher', 'Students Group Course With Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('studentsGroupCourseWithTeacher', 'Update');
?>
<div class="students-group-course-with-teacher-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
