<?php

namespace common\models\student_group;

use common\models\students\Students;
use DateTime;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%student_group}}".
 *
 * @property int $id
 * @property string $group
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Students[] $students
 */
class StudentGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%student_group}}';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => $this->currentDateTimestamp(),
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['group'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('student_group', 'ID'),
            'group' => Yii::t('student_group', 'Group'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['student_group_id' => 'id']);
    }
    public function currentDateTimestamp($date = null){
        $dateTime = null;
        if (is_null($date)){
            $dateTime = new DateTime(date('d.m.Y'));
        } else {
            $dateTime = new DateTime($date);
        }
        return $dateTime->format('U');
    }
    /**
     * {@inheritdoc}
     * @return \common\models\student_group\query\StudentGroupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\student_group\query\StudentGroupQuery(get_called_class());
    }
}
