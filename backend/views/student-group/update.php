<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\student_group\StudentGroup */

$this->title = Yii::t('student_group', 'Update Student Group: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('student_group', 'Student Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('student_group', 'Update');
?>
<div class="student-group-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
