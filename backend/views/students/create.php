<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\students\Students */

$this->title = Yii::t('students', 'Create Students');
$this->params['breadcrumbs'][] = ['label' => Yii::t('students', 'Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
