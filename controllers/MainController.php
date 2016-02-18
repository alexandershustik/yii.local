<?php
namespace app\controllers;

use Yii;

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

    public function actionSearch($search = null)
    {
        return $this->render(
            'search',
            [
                'search' => $search
            ]);
    }

}
