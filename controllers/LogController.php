<?php

namespace app\controllers;

use app\helpers\RandomDateHelper;
use app\models\Log;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class LogController extends Controller
{

    /**
     * Method that remove all logs data and generate 200 records
     * @return string
     * @throws \yii\base\Exception
     */
    public function actionGenerate()
    {
        // Delete all from logs table
        Yii::$app->db->createCommand()->truncateTable('logs')->execute();

        // Generate 200 logs records
        for ($i = 0; $i < 200; $i++) {
            $log = new Log();
            $log->time = RandomDateHelper::generateRandomDate();
            $log->key = Yii::$app->security->generateRandomString(8);
            $log->save();
        }

        return $this->redirect(Url::toRoute(['site/index']));
    }

}