<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\students\Students */

$this->title = Yii::t('students', 'Update Students: {name}' , [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('students', 'Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="students-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
