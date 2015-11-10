<?php

class BitacoraSistemasController extends Controller
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

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	
	public function actionCreate()
	{
		$model=new BitacoraSistemas;
		
		

		if(isset($_POST['BitacoraSistemas']))
		{	
			$model->attributes=$_POST['BitacoraSistemas'];
			$model->fechaCreacionReg = new CDbExpression('NOW()');
			$model->id_codigo = $_POST['BitacoraSistemas']['id_codigo'];
			$model->id_area = $_POST['BitacoraSistemas']['id_area'];
			$model->id_art = $_POST['BitacoraSistemas']['id_art'];
			$model->id_consumible = $_POST['BitacoraSistemas']['id_consumible'];
			$model->id_personaRepo = $_POST['BitacoraSistemas']['id_personaRepo'];
			$model->personaAtendio = $_POST['BitacoraSistemas']['personaAtendio'];
			$model->personaSolu = $_POST['BitacoraSistemas']['personaSolu'];

			if($model->save()){
				echo"Registro Exitoso :D";
				$this->redirect(array('admin'));

			}else{
				echo"Error en el registro, intente de nuevo porfavor.";
			}
		
		}

		$CatalogoCodigosSistemas= CatalogoCodigosSistemas::model()->findAll();
		$Areas= Areas::model()->findAll();
		$InventarioConsumiblesSistemas= InventarioConsumiblesSistemas::model()->findAll();
		$InventarioEquipoSistemas = InventarioEquipoSistemas::model()->findAll();
		$Personas= Personas::model()->findAll();
		$this->render('create',array(
			'model'=>$model,'CatalogoCodigosSistemas'=>$CatalogoCodigosSistemas,'Areas'=>$Areas,'InventarioConsumiblesSistemas'=>$InventarioConsumiblesSistemas, 'InventarioEquipoSistemas' => '$InvemtarioEquipoSistemas','Personas'=>$Personas
		));
	}

	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		

		if(isset($_POST['BitacoraSistemas']))
		{
			$model->attributes=$_POST['BitacoraSistemas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$CatalogoCodigosSistemas= CatalogoCodigosSistemas::model()->findAll();
		$Areas= Areas::model()->findAll();
		$InventarioConsumiblesSistemas= InventarioConsumiblesSistemas::model()->findAll();
		$InventarioEquipoSistemas = InventarioEquipoSistemas::model()->findAll();
		$Personas= Personas::model()->findAll();

		$this->render('update',array(
			'model'=>$model,'CatalogoCodigosSistemas'=>$CatalogoCodigosSistemas,'Areas'=>$Areas,'InventarioConsumiblesSistemas'=>$InventarioConsumiblesSistemas, 'InventarioEquipoSistemas' => '$InvemtarioEquipoSistemas','Personas'=>$Personas
		));
	}

	
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BitacoraSistemas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	public function actionAdmin()
	{
		$CatalogoCodigosSistemas= CatalogoCodigosSistemas::model()->findAll();
		$Areas= Areas::model()->findAll();
		$InventarioConsumiblesSistemas= InventarioConsumiblesSistemas::model()->findAll();
		$InventarioEquipoSistemas = InventarioEquipoSistemas::model()->findAll();
		$Personas= Personas::model()->findAll();	
		$model=new BitacoraSistemas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BitacoraSistemas']))
			$model->attributes=$_GET['BitacoraSistemas'];
		
		

		$this->render('admin',array(
			'model'=>$model,'CatalogoCodigosSistemas'=>$CatalogoCodigosSistemas,'Areas'=>$Areas,'InventarioConsumiblesSistemas'=>$InventarioConsumiblesSistemas, 'InventarioEquipoSistemas' => '$InvemtarioEquipoSistemas','Personas'=>$Personas
		));
	}

	
	public function loadModel($id)
	{
		$model=BitacoraSistemas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='bitacora-sistemas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
