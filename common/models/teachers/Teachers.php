<?php

namespace common\models\teachers;

use common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher;
use DateTime;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%teachers}}".
 *
 * @property int $id
 * @property string $name
 * @property string $surName
 * @property int $created_at
 * @property int $updated_at
 *
 * @property StudentsGroupCourseWithTeacher[] $studentsGroupCourseWithTeachers
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teachers}}';
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
            [['name', 'surName'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'surName'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('teachers', 'ID'),
            'name' => Yii::t('teachers', 'Name'),
            'surName' => Yii::t('teachers', 'Sur Name'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsGroupCourseWithTeachers()
    {
        return $this->hasMany(StudentsGroupCourseWithTeacher::className(), ['teacher_id' => 'id']);
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
     * @return \common\models\teachers\query\TeachersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\teachers\query\TeachersQuery(get_called_class());
    }
}
