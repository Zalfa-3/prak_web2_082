<?php

namespace app\controllers;
use app\models\Obat082;
use yii\data\ActiveDataProvider;

class Obat082Controller extends \yii\web\Controller
{
  public function actionIndex()
  {
    $dataProvider = new ActiveDataProvider([
        'query' => Obat082::find(),
    ]);

    return $this->render('index', [
        'dataProvider' => $dataProvider,
    ]);
  }
}