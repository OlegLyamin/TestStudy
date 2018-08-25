<?php

namespace common\models\students;

use common\models\course\Course;
use common\models\student_group\StudentGroup;
use common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher;
use Yii;

/**
 * This is the model class for table "{{%students}}".
 *
 * @property int $id
 * @property string $name
 * @property string $surName
 * @property int $student_group_id
 * @property int $course_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Course $course
 * @property StudentGroup $studentGroup
 * @property StudentsGroupCourseWithTeacher[] $studentsGroupCourseWithTeachers
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%students}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surName', 'student_group_id', 'course_id'], 'required'],
            [['student_group_id', 'course_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'surName'], 'string', 'max' => 32],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
            [['student_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudentGroup::className(), 'targetAttribute' => ['student_group_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('students', 'ID'),
            'name' => Yii::t('students', 'Name'),
            'surName' => Yii::t('students', 'Sur Name'),
            'student_group_id' => Yii::t('students', 'Student Group ID'),
            'course_id' => Yii::t('students', 'Course ID'),
            'created_at' => Yii::t('students', 'Created At'),
            'updated_at' => Yii::t('students', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentGroup()
    {
        return $this->hasOne(StudentGroup::className(), ['id' => 'student_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsGroupCourseWithTeachers()
    {
        return $this->hasMany(StudentsGroupCourseWithTeacher::className(), ['student_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\students\query\StudentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\students\query\StudentsQuery(get_called_class());
    }
}
