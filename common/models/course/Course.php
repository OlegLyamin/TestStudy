<?php

namespace common\models\course;

use common\models\students\Students;
use Yii;

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
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['course_id' => 'id']);
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
