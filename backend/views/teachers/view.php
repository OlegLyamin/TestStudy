<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\teachers\Teachers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('teachers', 'Teachers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-view">
    <div class="box box-danger">
        <div class="box-header">
            <div class="col-xs-6">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'surName',
            'created_at',
            'updated_at',
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
                                'confirm' => Yii::t('teachers',
                                    'Are you sure you want to delete this student?')
                            ],
                        ])?>
                </p>
            </div>
        </div>
</div>
