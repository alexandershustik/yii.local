<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$hello = "Hello world!";
        return $this->render(
        	'index',
        	[
        		'hello' => $hello
        	]);
    }

}
