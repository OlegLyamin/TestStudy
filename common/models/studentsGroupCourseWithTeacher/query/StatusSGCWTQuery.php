<?php

namespace common\models\studentsGroupCourseWithTeacher\query;

/**
 * This is the ActiveQuery class for [[\common\models\studentsGroupCourseWithTeacher\StatusSGCWT]].
 *
 * @see \common\models\studentsGroupCourseWithTeacher\StatusSGCWT
 */
class StatusSGCWTQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\studentsGroupCourseWithTeacher\StatusSGCWT[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\studentsGroupCourseWithTeacher\StatusSGCWT|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
