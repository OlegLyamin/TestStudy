<?php

namespace common\models\studentsGroupCourseWithTeacher;

use common\models\course\Course;
use common\models\students\Students;
use common\models\teachers\Teachers;
use common\models\studentsGroupCourseWithTeacher\StatusSGCWT;
use Yii;

/**
 * This is the model class for table "{{%students_group_course_with_teacher}}".
 *
 * @property int $id
 * @property int $student_id
 * @property int $teacher_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $course_id
 * @property int $status_id
 *
 * @property Course $course
 * @property StatusSGCWT $status
 * @property Students $student
 * @property Teachers $teacher
 */
class StudentsGroupCourseWithTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%students_group_course_with_teacher}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'teacher_id'], 'required'],
            [['student_id', 'teacher_id', 'created_at', 'updated_at', 'course_id', 'status_id'], 'integer'],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusSGCWT::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['student_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['teacher_id' => 'id']],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('studentsGroupCourseWithTeacher', 'ID'),
            'student_id' => Yii::t('studentsGroupCourseWithTeacher', 'Student ID'),
            'teacher_id' => Yii::t('studentsGroupCourseWithTeacher', 'Teacher ID'),
            'created_at' => Yii::t('studentsGroupCourseWithTeacher', 'Created At'),
            'updated_at' => Yii::t('studentsGroupCourseWithTeacher', 'Updated At'),
            'course_id' => Yii::t('studentsGroupCourseWithTeacher', 'Course ID'),
            'status_id' => Yii::t('studentsGroupCourseWithTeacher', 'Status ID'),
            'title' => Yii::t('studentsGroupCourseWithTeacher', 'Status Title'),
            'teacherSurname' => Yii::t('studentsGroupCourseWithTeacher', 'Status Title'),
            'courseCourse' => Yii::t('studentsGroupCourseWithTeacher', 'Course Course'),


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
    public function getStatusSGCWT()
    {
        return $this->hasOne(StatusSGCWT::className(), ['id' => 'status_id']);
    }
    public function getStatus()
    {
        return $this->hasOne(StatusSGCWT::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'teacher_id']);
    }
    public function getStudentSurname(){
        return $this->student->surName;
    }
    public function getCourseCourse(){
        return $this->course->course;
    }
    public function getTeacherSurname(){
        return $this->teacher->surName;
    }
    public function getStatusTitle() {
        return $this->status->title;
    }
    /**
     * {@inheritdoc}
     * @return \common\models\studentsGroupCourseWithTeacher\query\StudentsGroupCourseWithTeacherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\studentsGroupCourseWithTeacher\query\StudentsGroupCourseWithTeacherQuery(get_called_class());
    }
}
