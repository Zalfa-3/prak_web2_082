<?php

namespace app\controllers;

use app\models\Mhs082;
use yii\data\ActiveDataProvider;
use Yii;

class Mhs082Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs082::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mhs082;
        $mhs->no_induk_mahasiswa = '60200121082-'.rand(100,999);
        $mhs->nama_mahasiswa = 'Zalfa Fadhillah Salsabilah B';
        $mhs->kelas = 'A';
        $mhs->status = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mhs082::findOne(['id' => $id]);
        if($mhs !== null){
            $mhs->kelas = 'D';
            $mhs->status = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mhs082::findOne(['id' => $id]);
        if($mhs->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mhs = Mhs082::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}