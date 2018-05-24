<?php

namespace app\controllers;
use yii;
use app\models\Book;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule;

class BookController extends \yii\web\Controller
{


    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        Book::findOne($id)->delete();
        return $this->redirect(['/book/index']);
    }

    public function actionIndex()
    {
        $model = Book::find()->orderBy('id')->all();;

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
       
        $model = Book::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', compact('model'));
    }


    public function actionView($id)
    {
        $model = Book::findOne($id);
        return $this->render('view', compact('model'));
    }


}
