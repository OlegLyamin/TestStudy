<?php

namespace common\models\student_group\query;

/**
 * This is the ActiveQuery class for [[\common\models\student_group\StudentGroup]].
 *
 * @see \common\models\student_group\StudentGroup
 */
class StudentGroupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\student_group\StudentGroup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\student_group\StudentGroup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
