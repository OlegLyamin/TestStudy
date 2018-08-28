<?php

namespace common\models\studentsGroupCourseWithTeacher;

use common\models\course\Course;
use common\models\students\Students;
use common\models\teachers\Teachers;
use common\models\studentsGroupCourseWithTeacher\StatusSGCWT;
use DateTime;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use common\behaviors\DateToTimeBehavior;

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
 * @property int $deadline
 * @property int $date_of_issue

 *
 * @property Course $course
 * @property StatusSGCWT $status
 * @property Students $student
 * @property Teachers $teacher
 */
class StudentsGroupCourseWithTeacher extends \yii\db\ActiveRecord
{
    public $deadlineView;
    public $dateOfIssueView;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%students_group_course_with_teacher}}';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => $this->currentDateTimestamp(),
            ],
            [
                'class' => DateToTimeBehavior::className(),
                'attributes' => [

                    ActiveRecord::EVENT_AFTER_FIND => 'deadlineView'
                ],
                'timeAttribute' => 'deadline',
            ],
            [
                'class' => DateToTimeBehavior::className(),
                'attributes' => [

                    ActiveRecord::EVENT_AFTER_FIND => 'dateOfIssueView',
                ],
                'timeAttribute' => 'date_of_issue',
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'teacher_id','deadlineView','dateOfIssueView'], 'required'],
            [['deadline', 'date_of_issue'], 'default', 'value' => null],
            ['deadlineView', 'date', 'format' => 'php:d.m.Y'],
            ['dateOfIssueView', 'date', 'format' => 'php:d.m.Y'],

            [['student_id', 'teacher_id', 'created_at', 'updated_at', 'course_id', 'status_id','deadline','date_of_issue'], 'integer'],
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
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'course_id' => Yii::t('studentsGroupCourseWithTeacher', 'Course ID'),
            'status_id' => Yii::t('studentsGroupCourseWithTeacher', 'Status ID'),
            'title' => Yii::t('studentsGroupCourseWithTeacher', 'Status Title'),
            'teacherSurname' => Yii::t('studentsGroupCourseWithTeacher', 'Teacher Surname'),
            'courseCourse' => Yii::t('studentsGroupCourseWithTeacher', 'Course Course'),
            'deadlineView' => Yii::t('studentsGroupCourseWithTeacher', 'Deadline'),
            'deadline' => Yii::t('studentsGroupCourseWithTeacher', 'Deadline'),
            'dateOfIssueView' => Yii::t('studentsGroupCourseWithTeacher', 'Date Of Issue View'),
            'date_of_issue' => Yii::t('studentsGroupCourseWithTeacher', 'Date Of Issue'),
            'studentsGroupCourseWithTeacher' => Yii::t('studentsGroupCourseWithTeacher', 'Students Group Course With Teachers'),
            'studentSurName' => Yii::t('studentsGroupCourseWithTeacher', 'Student Sur Name'),
            'teacherSurName' => Yii::t('studentsGroupCourseWithTeacher', 'Teacher Sur Name'),
            'statusTitle' => Yii::t('studentsGroupCourseWithTeacher', 'Status Title')





        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }
    public function getDeadline()
    {
        return date('d.m.Y', $this->deadlineView);
    }
    public function getDateOfIssue()
    {
        return date('d.m.Y', $this->dateOfIssueView);
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
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            $this->deadline = $this->currentDateTimestamp($this->deadlineView);
            $this->date_of_issue = $this->currentDateTimestamp($this->dateOfIssueView);

            return true;
        }
        return false;
    }

    public function currentDateTimestamp($date = null){
        $dateTime = null;
        if (is_null($date)){
            $dateTime = new DateTime(date('d-m-Y'));
        } else {
            $dateTime = new DateTime($date);
        }
        return $dateTime->format('UTC');
    }
    public static function find()
    {
        return new \common\models\studentsGroupCourseWithTeacher\query\StudentsGroupCourseWithTeacherQuery(get_called_class());
    }
}
