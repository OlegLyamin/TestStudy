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
                <?= Html::a(Yii::t('students', 'Create Students'), ['create'], ['class' => 'btn btn-success']) ?>
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
                    'student_group_id',
                    'course_id',
                    //'created_at',
                    //'updated_at',

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
                                    $url,['title' => Yii::t('expeditors', 'Update')]);
                            },
                        ],
                    ]
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </div>


    </div>

</div>
