<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serviceTeamVirtuls".
 *
 * @property int $id
 * @property int $idService FKServise
 * @property int $idTeamVirtul FKTeamVirtul
 * @property string $createdAt
 * @property string|null $updatedAt
 *
 * @property Service $idService0
 * @property TeamVirtul $idTeamVirtul0
 */
class ServiceTeamVirtul extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serviceTeamVirtuls';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idService', 'idTeamVirtul'], 'required'],
            [['idService', 'idTeamVirtul'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['idService'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['idService' => 'id']],
            [['idTeamVirtul'], 'exist', 'skipOnError' => true, 'targetClass' => TeamVirtul::className(), 'targetAttribute' => ['idTeamVirtul' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idService' => 'FKServise',
            'idTeamVirtul' => 'FKTeamVirtul',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdService0()
    {
        return $this->hasOne(Service::className(), ['id' => 'idService']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTeamVirtul0()
    {
        return $this->hasOne(TeamVirtul::className(), ['id' => 'idTeamVirtul']);
    }
}