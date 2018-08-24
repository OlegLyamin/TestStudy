<?php

namespace common\models\student_group;

use Yii;

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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['group'], 'string', 'max' => 255],
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
            'created_at' => Yii::t('student_group', 'Created At'),
            'updated_at' => Yii::t('student_group', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['student_group_id' => 'id']);
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
