<?php

class IncidentesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform the following actions
				'actions'=>array('create','delete','update','index','view','admin'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView()
	{

		$incidentes = Incidentes::model()->findAll();

		$this->render('view',array(
			'incidentes'=>$incidentes,
		));
	}


	public function actionTest($id)
	{

		$inc = Incidentes::model()->findByPk($id);
		$usuario=Usuarios::model()->findByPk($inc->de_id_usuario);
		$persona=Personas::model()->findByPk($usuario->id_persona);

		$incidente = "FOLIO: ".$inc->folio;
		$incidente .= "<div class='botonSeg' onclick='toggleSeguim()'>CREAR SEGUIMIENTO</div>";
		$incidente .= "<br>CREACIÓN: ".substr($inc->fecha_creacion,0,16);
		$incidente .= "<br>ESTATUS: ".$inc->estado;
		$incidente .= "<br><br>ÁREA RESPONSABLE:<br>".Areas::model()->findByPk($inc->para_id_area)->nombre;
		$incidente .= "<br><br>CREADO POR:<br>".$persona->nombres." ".$persona->ap_pat." ".$persona->ap_mat;
		$incidente .= "<br><br>ASUNTO:<br>".$inc->asunto;
		$incidente .= "<br><br>DESCRIPCIÓN:<br>".$inc->descripcion;
		$incidente .="<input type='hidden' value='".$inc->id."' name='incId' id='incId'>";
		$_SESSION['rapida']=$inc->id;

		


		
		echo $incidente;
	    Yii::app()->end();

	}

	public function actionIncoming()
	{
		$entrantes = Incidentes::model()->findAll();

		$data["myValue"] = "4444";
		$this->render('incoming',array(
			'model'=>$entrantes,'data'=>$data
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Incidentes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Incidentes']))
		{
			    $criteria = new CDbCriteria();
			    $criteria->select = 'id';
			    $criteria->order  = 'id DESC';
			    $criteria->limit = 1;

			$model->attributes=$_POST['Incidentes'];
			$folio = strtoupper(substr($_POST['persona_autocomplete'],0,3))."".date("ymd")."-".str_pad((Incidentes::model()->find($criteria)->id+1), 4, "0", STR_PAD_LEFT);

			$model->fecha_creacion= new CDbExpression('NOW()');
			$model->fecha_cierre= new CDbExpression('NOW()');
			$model->estado="ABIERTO";
			$model->de_id_usuario=1;
			$model->folio = $folio;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Incidentes']))
		{
			$model->attributes=$_POST['Incidentes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Incidentes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Incidentes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Incidentes']))
			$model->attributes=$_GET['Incidentes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Incidentes the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Incidentes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Incidentes $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='incidentes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
