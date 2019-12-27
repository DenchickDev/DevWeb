<?php


namespace app\modules\api\controllers;


use app\models\Service;

class ServiceController extends BaseController
{
    public function actionView($categoryId)
    {
        return Service::findAll(['idCategories' => $categoryId]);
    }
}