
<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                        'label' => 'Study',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                              'label' => Yii::t('students', 'Students'),
                                'icon' => 'users',
                                'url' => ['students/index', 'action' => 'index'],

                            ],
                            [
                                'label' => Yii::t('course', 'Course'),
                                'icon' => 'list',
                                'url' => ['course/index', 'action' => 'index'],

                            ],
                            [
                                'label' => Yii::t('group', 'Group'),
                                'icon' => 'list-ol',
                                'url' => ['student-group/index', 'action' => 'index'],

                            ],
                            [
                                'label' => Yii::t('Teacher', 'teacher'),
                                'icon' => 'users',
                                'url' => ['teachers/index', 'action' => 'index'],

                            ],
                            [
                                'label' => Yii::t('studentsGroupCourseWithTeacher', 'SGVT'),
                                'icon' => 'connectdevelop ',
                                'url' => ['students-group-course-with-teacher/index', 'action' => 'index'],

                            ],


                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
