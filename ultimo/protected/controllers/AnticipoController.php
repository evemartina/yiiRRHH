<?php



class AnticipoController extends Controller {

  
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

   
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
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
        $model = new Anticipo;
        $var1= new Liquidacion;
   
        if (isset($_POST['Anticipo'])) {          
            
            $model->attributes = $_POST['Anticipo'];
                $fecha= $_POST['Anticipo']['Liquidacion_fechaLiquidacion'];
            $var1->setAttribute('fechaLiquidacion',$fecha);
              $var1->setAttribute('AFP_idAFP','1');
                $var1->setAttribute('Salud_idSalud','1');
                  $var1->setAttribute('Empleado_idEmpleado','3');
                  
         
                     
            if ($model->save()) {              
                           
           
              
                $this->redirect(array('view', 'id' => $model->idAnticipo));
            }
        }

        $this->render('create', array(
            'model' => $model,
           
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        if (isset($_POST['Anticipo'])) {
            $model->attributes = $_POST['Anticipo'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->idAnticipo));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

   
    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Anticipo');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

   
    public function actionAdmin() {
        $model = new Anticipo('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Anticipo']))
            $model->attributes = $_GET['Anticipo'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = Anticipo::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'anticipo-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
