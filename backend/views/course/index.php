<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\course\search\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('course', 'Courses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">
    <div class="box box-danger">
        <div class="box-header">

    <?php Pjax::begin(); ?>
    <p>
    <div class="form-group" style="float: right">
        <?= Html::a('<i class="fa fa-eraser"></i> '.Yii::t('app', 'Reset'),
            ['index'],[ 'class' => 'btn btn-default',
                'onclick'=>"document.getElementById('p0').reset()" ]) ?>
    </div>
    <?= Html::a('<i class="fa fa-plus"></i> '.Yii::t('course',
            'Create Course'), ['create'], ['class' => 'btn btn-success'])?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => "{items}",
        'tableOptions' => [
            'class' => 'table table-hover table-responsive table-condensed text-center'],
        'columns' => [


            'id',
            'course',


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
