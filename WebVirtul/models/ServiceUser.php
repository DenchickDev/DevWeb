<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serviceUsers".
 *
 * @property int $id
 * @property int $IdService
 //* @property int $idUserSute
 * @property string $email email покупателя
 * @property string $name Имя покупателя
 * @property string $createdAt
 * @property string|null $updatedAt
 *
 * @property Service $idService
 //* @property UserSute $idUserSute0
 */
class ServiceUser extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serviceUsers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdService', 'email', 'name'], 'required'],
            [['IdService'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['email', 'name'], 'string', 'max' => 128],
            [['IdService'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['IdService' => 'id']],
            [['createdAt', 'updatedAt'], 'safe'],
            //[['idUserSute'], 'exist', 'skipOnError' => true, 'targetClass' => UserSute::className(), 'targetAttribute' => ['idUserSute' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'IdService' => 'Id Service',
            //'idUserSute' => 'Id User Sute',
            'email' => 'email покупателя',
            'name' => 'Имя покупателя',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdService()
    {
        return $this->hasOne(Service::className(), ['id' => 'IdService']);
    }

    ///**
    // * @return \yii\db\ActiveQuery
    // */
    //public function getIdUserSute0()
    //{
    //    return $this->hasOne(UserSute::className(), ['id' => 'idUserSute']);
    //}
}