<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\students\search\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('students', 'Students');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">
    <div class="box box-danger">
        <div class="box-header">
            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
            <div class="form-group" style="float: right">
                <?= Html::a('<i class="fa fa-eraser"></i> '.Yii::t('app', 'Reset'),
                    ['index'],[ 'class' => 'btn btn-default',
                        'onclick'=>"document.getElementById('p0').reset()" ]) ?>
            </div>
                <?= Html::a('<i class="fa fa-user-plus"></i> '.Yii::t('students',
                            'Create Students'), ['create'], ['class' => 'btn btn-success'])?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'layout' => "{items}",
                'tableOptions' => [
                    'class' => 'table table-hover table-responsive table-condensed text-center'],
                'columns' => [
                        'id',
                    'name',
                    'surName',
//                    'studentGroupTitle',
                    [
                        'attribute' => 'student_group_id',
                        'value' => 'studentGroup.group'
                    ],

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
