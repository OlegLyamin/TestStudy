<?php

namespace common\models\studentsGroupCourseWithTeacher;

use Yii;

/**
 * This is the model class for table "{{%statusSGCWT}}".
 *
 * @property int $id
 * @property string $title
 *
 * @property StudentsGroupCourseWithTeacher[] $studentsGroupCourseWithTeachers
 */
class StatusSGCWT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%statusSGCWT}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('studentsGroupCourseWithTeacher', 'ID'),
            'title' => Yii::t('studentsGroupCourseWithTeacher', 'Title'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsGroupCourseWithTeachers()
    {
        return $this->hasMany(StudentsGroupCourseWithTeacher::className(), ['status_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\studentsGroupCourseWithTeacher\query\StatusSGCWTQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\studentsGroupCourseWithTeacher\query\StatusSGCWTQuery(get_called_class());
    }
}
