<?php

namespace common\models\studentsGroupCourseWithTeacher\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher;

/**
 * StudentsGroupCourseWithTeacherSearch represents the model behind the search form of `common\models\studentsGroupCourseWithTeacher\StudentsGroupCourseWithTeacher`.
 */
class StudentsGroupCourseWithTeacherSearch extends StudentsGroupCourseWithTeacher
{
    const SECONDS_IN_DAY = 86400;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['student_id', 'teacher_id', 'course_id', 'status_id', 'deadline', 'date_of_issue'], 'safe'],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = StudentsGroupCourseWithTeacher::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 10
            ]
        ]);

        $this->load($params);


        // grid filtering conditions
        $query->joinWith('student');
        $query->joinWith('teacher');
        $query->joinWith('course');
        $query->joinWith('statusSGCWT');


        $query->andFilterWhere([
            'id' => $this->id,

//            'student_id' => $this->student_id,
//            'teacher_id' => $this->teacher_id,
//            'course_id' => $this->course_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
//            'status_id' => $this->status
        ]);
        $query->andFilterWhere(['like', 'students.surName', $this->student_id]);;
        $query->andFilterWhere(['like', 'teachers.surName', $this->teacher_id]);;
        $query->andFilterWhere(['like', 'course.course', $this->course_id]);;
        $query->andFilterWhere(['like', 'statusSGCWT.title', $this->status_id]);;
//        $query->andFilterWhere(['like', 'deadlineView', $this->deadline]);;
        if ($this->deadline) {
            $query->andFilterWhere(['=', 'deadline',
                substr($this->currentDateTimestamp($this->deadline), 0, -4)]);
        }
        if ($this->date_of_issue) {
            $query->andFilterWhere(['=', 'date_of_issue',
                substr($this->currentDateTimestamp($this->date_of_issue), 0, -4)]);
        }

//        if ($this->date_of_issue) {
//            $query->andFilterWhere(['=', 'dateOfIssue',
//                substr($this->currentDateTimestamp($this->dateOfIssue), 0, -4)]);
//        }


//        if ($this->birthDate) {
//            $query->andFilterWhere(['like', 'birthDate', parent::currentDateTimestamp($this->birthDate)]);
//        }


        return $dataProvider;
    }
}
