<?php

namespace app\modules\api\controllers;
use Yii;
use app\models\BuyForm;
class BuyController extends BaseController
{
    public function verbs()
    {
        return [
            'buy' => ['POST', 'OPTIONS']
        ];
    }

    /**
     * Обрабатываем оформление заказа.
     * @return BuyForm
     */
    public function actionBuy()
    {
        $model = new BuyForm();
        $model->load(Yii::$app->request->getBodyParams(), '');

        if ($model->validate()) {
            $model->buy();
        }

        return $model;
    }
}