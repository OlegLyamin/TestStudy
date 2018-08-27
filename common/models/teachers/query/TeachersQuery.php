<?php

namespace common\models\teachers\query;

/**
 * This is the ActiveQuery class for [[\common\models\teachers\Teachers]].
 *
 * @see \common\models\teachers\Teachers
 */
class TeachersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\teachers\Teachers[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\teachers\Teachers|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    public function getSurName(){
        return $this->select(['surName','id'])->indexBy('id')->column();
    }
}
