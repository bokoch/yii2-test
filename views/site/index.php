<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Yii2 - Test task';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Yii2 - Test task</h1>

        <p class="lead">Click the button below to delete all data from 'logs' table and generate 200 new test records</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::toRoute(['log/generate'])?>">Remove all and Generate 200 records</a></p>
    </div>

    <div class="body-content">
        <div class="row">
                <?=\yii\grid\GridView::widget([
                    'dataProvider' => $dataProvider,
                ])?>

        </div>
    </div>

</div>
