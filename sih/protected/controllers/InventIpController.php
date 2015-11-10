<?php

class InventIpController extends Controller
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
		$model=new InventIp;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InventIp']))
		{
			$model->attributes=$_POST['InventIp'];
			$model->fecha_reg = new CDbExpression('NOW()');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$InventIp= InventIp::model()->findAll();
		//if(array_key_exists("GESTION DE IPS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE IPS"][1] == "1")
		$this->render('create',array(
			'model'=>$model,'InventIp'=>$InventIp
		));
	//else
		//echo "No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=InventIp/admin' />";
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

		if(isset($_POST['InventIp']))
		{
			$model->attributes=$_POST['InventIp'];
			$model->activo = 1;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

	if(array_key_exists("GESTION DE IPS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE IPS"][1] == "1")
		$this->render('update',array(
			'model'=>$model,'InventIp'=>$InventIp
		));
	else
		echo "No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=InventIp/admin' />";
	}
		
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(array_key_exists("GESTION DE IPS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE IPS"][1] == "1")
			$this->loadModel($id)->delete();
		else
			echo"No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=InventIp/admin' />";

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('InventIp');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new InventIp('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InventIp']))
			$model->attributes=$_GET['InventIp'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return InventIp the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=InventIp::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param InventIp $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='invent-ip-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
