<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher */

$this->title = Yii::t('studentsGroupCourseWithTeacher', 'Create Students Group Course With Teacher');
$this->params['breadcrumbs'][] = ['label' => Yii::t('studentsGroupCourseWithTeacher', 'Students Group Course With Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-group-course-with-teacher-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
