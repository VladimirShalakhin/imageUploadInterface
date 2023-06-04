<?php

namespace app\controllers;

use app\models\Image;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

class ImageController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Image';

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex(){
        $activeData = new ActiveDataProvider([
            'query' => Image::find(),
            'pagination' => false,
        ]);
        return $activeData;
    }

    public function afterAction($action, $result){

        $result = parent::afterAction($action, $result);

        if($action->id == 'index') {
            $total['total'] = count($result);
            return $total;
        }
        return $result;
    }
}