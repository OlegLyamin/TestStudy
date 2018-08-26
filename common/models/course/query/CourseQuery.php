<?php

namespace common\models\course\query;

/**
 * This is the ActiveQuery class for [[\common\models\course\Course]].
 *
 * @see \common\models\course\Course
 */
class CourseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\course\Course[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\course\Course|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    public function getCourse(){

        return $this->select(['course', 'id'])->indexBy('id')->column();
    }
}
