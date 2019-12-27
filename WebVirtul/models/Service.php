<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name Наименование
 * @property int $price Стоимость
 * @property string $description Описание
 * @property string $createdAt
 * @property string|null $updatedAt
 *
 * @property ServiceTeamVirtul[] $serviceTeamVirtuls
 * @property ServiceUser[] $serviceUsers
 */
class Service extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'description'], 'required'],
            [['price'], 'integer'],
            [['description'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 128],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'price' => 'Стоимость',
            'description' => 'Описание',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceTeamVirtuls()
    {
        return $this->hasMany(ServiceTeamVirtul::className(), ['idService' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceUsers()
    {
        return $this->hasMany(ServiceUser::className(), ['IdService' => 'id']);
    }
}