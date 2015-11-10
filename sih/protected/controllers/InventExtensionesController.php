<?php

class InventExtensionesController extends Controller
{


	private function getAreas()
	{
		return (Areas);
	}
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	/*public function accessRules()
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
	}*/

	

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new InventExtensiones;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InventExtensiones']))
		{
			$model->attributes=$_POST['InventExtensiones'];
			$model->fecha_reg = new CDbExpression('NOW()');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$InventIp= InventIp::model()->findAll();
		$Areas= Areas::model()->findAll();
		//if(array_key_exists("GESTION DE EXTENSIONES", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE EXTENSIONES"][1] == "1")
		$this->render('create',array(
			'model'=>$model,'InventIp'=>$InventIp,'Areas'=>$Areas,
		));
	//else
		//echo "No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=InventExtensiones/admin' />";
	}
		
	
		
	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$InventIp = InventIp::model()->findAll();
		$Areas = Areas::model()->findAll();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InventExtensiones']))
		{
			$model->attributes=$_POST['InventExtensiones'];
			$model->activo = 1;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$InventIp= InventIp::model()->findAll();
		$Areas= Areas::model()->findAll();
		if(array_key_exists("GESTION DE EXTENSIONES", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE EXTENSIONES"][1] == "1")
		$this->render('update',array(
			'model'=>$model,'InventIp'=>$InventIp,'Areas'=>$Areas,
		));
	else
		echo "No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=InventExtensiones/admin' />";
	}
		

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(array_key_exists("GESTION DE EXTENSIONES", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE EXTENSIONES"][1] == "1")
			$this->loadModel($id)->delete();
		else
			echo"No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=InventExtensiones/admin' />";

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('InventExtensiones');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new InventExtensiones('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InventExtensiones']))
			$model->attributes=$_GET['InventExtensiones'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return InventExtensiones the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=InventExtensiones::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param InventExtensiones $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='invent-extensiones-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function direccionIp($data,$row){

	     $id = $data->id_ip;
	 
	     $details = InventIp::model()->findAllBySql("SELECT ip from invent_ip WHERE id=$id");


	     return $details[0]["ip"];
	}
	public function obtenerArea($data,$row){

	     $id = $data->id_area;
	 
	     $details = Areas::model()->findAllBySql("SELECT nombre from areas WHERE id=$id");


	     return $details[0]["nombre"];
	}
	/*public function tipoEquipo($data,$row){

	     $id = $data->tipo_equipo;
	 
	     $details = InventExtensiones::model()->findAllBySql("SELECT tipo_equipo from invent_extensiones WHERE id=$id");


	     return $details[0]["tipo_equipo"];*/
	
}
