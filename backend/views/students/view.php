<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\students\Students */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('students', 'Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-view">
    <div class="box box-danger">
        <div class="box-header">
            <div class="col-xs-6">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'surName',
            'student_group_id',
            'course_id',
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
                                    'confirm' => Yii::t('students',
                                        'Are you sure you want to delete this student?')
                                ],
                            ])?>
                </p>
            </div>
        </div>
    </div>
</div>
