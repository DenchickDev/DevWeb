<?php

namespace app\modules\api\controllers;

use app\models\ServiceUser;
use yii\rest\ActiveController;
use yii\rest\Controller;

class UserController extends BaseController
{
    public function verbs()
    {
        return [
            'registry' => ['POST'],
            'view' => ['GET'],
        ];
    }

//    public function actionRegistry()
//    {
//        $model = new UserSute();
//        $model->load(\Yii::$app->request->post(), '');
//
//        if ($model->save()) {
//            return $model;
//        }
//
//        return $model;
//    }

    public function actionView($id)
    {
        $user = ServiceUser::findOne($id);
        return $user;
    }
}