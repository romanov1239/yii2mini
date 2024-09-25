<?php

namespace app\controllers;

use app\models\ContactForm;
use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function actionIndex()
    {
        $posts = Post::find()->all();
        return $this->render('index', compact('posts'));

    }

}