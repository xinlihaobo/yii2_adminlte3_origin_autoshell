<?php

namespace api\modules\v1\controllers;

use yii;
use yii\filters\Cors;

// 添加
use yii\rest\ActiveController;

use api\models\Books;

class BooksController extends ActiveController
{
    // 添加
    public $modelClass = 'api\models\Books';

    // // 添加跨域访问
    // public function behaviors()
    // {
    //     return [
    //         'corsFilter' => [
    //             'class' => Cors::className(),
    //             'cors' => [
    //                 'Access-Control-Allow-Credentials' => false,
    //                 'Origin' => ['*'],
    //             ]
    //         ]
    //     ];
    // }

    public function actions()
    {
        $action = parent::actions();

        // unset($action['index']);
    }

    public function actionIndex()
    {
        echo "我是api index";
    }

    public function actionSendEmail()
    {
        $model = new Books();

        $data = $model->getBooksCount();

        return $data;
    }
}
