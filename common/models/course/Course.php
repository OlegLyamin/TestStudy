<?php

namespace common\models\course;

use common\models\students\Students;
use common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher;
use DateTime;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%course}}".
 *
 * @property int $id
 * @property string $course
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Students[] $students
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%course}}';
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
            [['course'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['course'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('course', 'ID'),
            'course' => Yii::t('course', 'Course'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsGroupCourseWithTeachers()
    {
        return $this->hasMany(StudentsGroupCourseWithTeacher::className(), ['course_id' => 'id']);
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
     * @return \common\models\course\query\CourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\course\query\CourseQuery(get_called_class());
    }
}
