<?php

namespace app\controllers;
use app\models\Mahasiswa130;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa130Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa130::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mahasiswa130;
        $mhs->nim130 = '60200121130-' . rand(100, 999);
        $mhs->nama130 = 'Muh Farid';
        $mhs->kelas130 = 'A';
        $mhs->status130 = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mahasiswa130::findOne(['id130' => $id]);
        if ($mhs !== null) {
            $mhs->kelas130 = 'A';
            $mhs->status130 = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa130::findOne(['id130' => $id]);
        if ($mhs->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $mhs = Mahasiswa130::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }

}
