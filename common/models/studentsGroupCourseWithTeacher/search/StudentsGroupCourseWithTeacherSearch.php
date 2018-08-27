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
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['student_id', 'teacher_id', 'course_id','status_id'], 'safe'],



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
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query -> joinWith('student');
        $query -> joinWith('teacher');
        $query -> joinWith('course');
        $query -> joinWith('statusSGCWT');



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





        return $dataProvider;
    }
}
