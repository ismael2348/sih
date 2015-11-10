<?php

class ClavesTelefonicasController extends Controller
{

	public function getPersonas()
	{
		return (Personas);
	}
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
				'actions'=>array('create','delete','update','index','view','admin','ObtenerAseguradora'),
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
		$model=new ClavesTelefonicas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ClavesTelefonicas']))
		{
			$model->attributes=$_POST['ClavesTelefonicas'];
			$model->fechaCreacion = new CDbExpression('NOW()');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$Personaslist= Personas::model()->findAll();
		$Personas= Personas::model()->findAll();
		$Areas= Areas::model()->findAll();
		$this->render('create',array(
			'model'=>$model,
			'Personas'=>$Personas,
			'Areas'=>$Areas,
			'Personaslist'=>$Personaslist
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

		if(isset($_POST['ClavesTelefonicas']))
		{
			$model->attributes=$_POST['ClavesTelefonicas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$Personaslist= Personas::model()->findAll();
		$Personas= Personas::model()->findBySql("SELECT nombres from personas WHERE id=$id");
		$Areas= Areas::model()->findAll();
		$this->render('update',array(
			'model'=>$model,
			'Personas'=>$Personas,
			'Areas'=>$Areas,
			'Personaslist'=>$Personaslist,

			
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
		$dataProvider=new CActiveDataProvider('ClavesTelefonicas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ClavesTelefonicas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ClavesTelefonicas']))
			$model->attributes=$_GET['ClavesTelefonicas'];
		$Personas= Personas::model()->findAll();
		$this->render('admin',array(
			'model'=>$model,
			'Personas'=>$Personas,
			
		));
	}

	public function obtenerPersonas($data,$row){

	     $id = $data->id_persona;
	 
	     $detailspersonas = Personas::model()->findAllBySql("SELECT nombres from personas WHERE id=$id");
	     //$detailspersonas = Personas::model()->findAllBySql("SELECT CONCAT(nombres, ap_pat, ap_mat) from personas WHERE id=$id");
	     //print_r($detailspersonas);

	     return $detailspersonas[0]["nombres"];
	}

	public function obtenerAreas($data,$row){

	     $id = $data->id_area;
	 
	     $detailsareas = Areas::model()->findAllBySql("SELECT nombre from areas WHERE id=$id");
	     //echo $detailsareas;

	     return $detailsareas[0]["nombre"];
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ClavesTelefonicas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ClavesTelefonicas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ClavesTelefonicas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='claves-telefonicas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
