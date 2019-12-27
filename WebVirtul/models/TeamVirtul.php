<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teamVirtuls".
 *
 * @property int $id
 * @property string $email email
 * @property string $login логин
 * @property string $password пароль
 * @property string $surname фамилия
 * @property string $name имя
 * @property string|null $patronim отчество
 * @property string $projectVirtul наименование проекта
 * @property string $createdAt
 * @property string|null $updatedAt
 *
 * @property ServiceTeamVirtul[] $serviceTeamVirtuls
 */
class TeamVirtul extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teamVirtuls';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'login', 'password', 'surname', 'name', 'projectVirtul'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['email', 'login', 'password', 'surname', 'name', 'patronim', 'projectVirtul'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'email',
            'login' => 'логин',
            'password' => 'пароль',
            'surname' => 'фамилия',
            'name' => 'имя',
            'patronim' => 'отчество',
            'projectVirtul' => 'наименование проекта',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceTeamVirtuls()
    {
        return $this->hasMany(ServiceTeamVirtul::className(), ['idTeamVirtul' => 'id']);
    }
}