<?php


namespace app\models;
use yii\base\Model;

class BuyForm extends Model
{
    public $name;
    public $email;
    public $IdService;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'IdService'], 'required'],
            ['email', 'email'],
            [['createdAt', 'updatedAt'], 'safe'],
        ];
    }

    /**
     * Сохраняет заявку пользователя об игре.
     */
    public function buy()
    {
        $service = new ServiceUser();
        $service->name  = $this->name;
        $service->email = $this->email;
        $service->IdService = $this->IdService;
        $service->save();
        var_dump($service->getErrors());

    }
}