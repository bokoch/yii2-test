<?php

namespace app\controllers;

use yii\helpers\Url;
use yii\web\Controller;

class LogController extends Controller
{

    /**
     * Method that remove all logs data and generate 200 records
     * @return string
     */
    public function actionGenerate()
    {
        return $this->redirect(Url::toRoute(['site/index']));
    }

}