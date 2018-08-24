<?php

namespace common\models\studentsGroupCourseWithTeacher\query;

/**
 * This is the ActiveQuery class for [[\common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher]].
 *
 * @see \common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher
 */
class StudentsGroupCourseWithTeacherQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
