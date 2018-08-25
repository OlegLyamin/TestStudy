<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\student_group\StudentGroup */

$this->title = Yii::t('student_group', 'Create Student Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('student_group', 'Student Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
