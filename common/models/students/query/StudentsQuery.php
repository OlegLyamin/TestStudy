<?php

namespace common\models\students\query;

/**
 * This is the ActiveQuery class for [[\common\models\students\Students]].
 *
 * @see \common\models\students\Students
 */
class StudentsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\students\Students[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\students\Students|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
