<?php

class AreasController extends Controller
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
		$model=new Areas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Areas']))
		{
			$model->attributes=$_POST['Areas'];
			if($model->save())
				$this->redirect(array('admin'));
		}

			//if(array_key_exists("GESTION DE AREAS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE AREAS"][1] == "1")
		$this->render('create',array(
			'model'=>$model,
		));
	//else
		//echo "No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=areas/admin' />";
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

		if(isset($_POST['Areas']))
		{
			$model->attributes=$_POST['Areas'];
			$model->activo = 1;
			if($model->save())
				$this->redirect(array('admin'));
		}

		if(array_key_exists("GESTION DE AREAS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE AREAS"][1] == "1")
		$this->render('update',array(
			'model'=>$model,
		));
	else
		echo "No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=areas/admin' />";
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(array_key_exists("GESTION DE AREAS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE AREAS"][1] == "1")
			$this->loadModel($id)->delete();
		else
			echo"No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=areas/admin' />";

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Areas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Areas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Areas']))
			$model->attributes=$_GET['Areas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Areas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Areas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Areas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='areas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}



	function actionobtenerAreas() {
	  if (Yii::app()->request->isAjaxRequest&&!empty($_GET['term'])) {
		$sql = 'SELECT id, nombre as label FROM areas WHERE nombre LIKE :qterm ';
		
		$sql .= ' ORDER BY nombre ASC';
		$command = Yii::app()->db->createCommand($sql);
		$qterm = $_GET['term'].'%';
		$command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
		$result = $command->queryAll();
		echo CJSON::encode($result); exit;
	  } else {
		return false;
	  }
	}

	public function puestosRelacionados($data,$row){

	     $id = $data->id;
	     //for eg.
	     $details = AreasPuestos::model()->findAllBySql("SELECT ap.id_area, p.nombre AS id_puesto FROM areas_puestos AS ap JOIN puestos AS p ON p.id = ap.id_puesto WHERE ap.id_area=$id");

	     $areasString= "";
	     foreach($details as $number=> $detail){
	     	//echo $detail->idArea->nombre;
	     	$areasString .= "<img src='images/editar.png' class='boton'><img src='images/eliminar.png' class='boton'>".($number+1).".- ".$detail->id_puesto."\n";
	     }

		$areasString = substr($areasString, 0, -1);

	     return nl2br($areasString);
	}
}
