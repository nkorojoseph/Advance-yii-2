<?php

namespace app\controllers;
namespace frontend\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller {

	public function actionIndex(){
		$users = Users::find()->all(); 
		return $this->render('index',['users'=>$users]); 
	}
}

?>