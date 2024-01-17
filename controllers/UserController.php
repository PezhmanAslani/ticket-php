<?php
namespace app\controllers;

use yii\web\Controller;
class UserController extends Controller {
   public function actionIndex(){
      return $this->render('index');
   }
   public function actionSignUp(){
    return $this->render('signup');
   }
}