<?php

class AreatrabajoController extends Controller {

    public $layout = '//layouts/column2';

    public function filters() {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionCreate() {
        $model = new Areatrabajo;
        if (isset($_POST['Areatrabajo'])) {
            $model->attributes = $_POST['Areatrabajo'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->idAreaTrabajo));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);


        if (isset($_POST['Areatrabajo'])) {
            $model->attributes = $_POST['Areatrabajo'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->idAreaTrabajo));
            }
        }
        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        if (!isset($_GET['ajax'])) {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
    }

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Areatrabajo');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() {
        $model = new Areatrabajo('search');
        $model->unsetAttributes(); 
        if (isset($_GET['Areatrabajo'])) {
            $model->attributes = $_GET['Areatrabajo'];
        }

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = Areatrabajo::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'areatrabajo-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
