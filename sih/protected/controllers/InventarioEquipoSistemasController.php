<!--controlador-->
<?php

class InventarioEquipoSistemasController extends Controller
{
	
	public $layout='//layouts/column2';

	
	public function filters()
	{
		return array(
			'accessControl', 
			'postOnly + delete', 
		);
	}

	

	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('create','delete','update','index','view','admin','ObtenerAseguradora'),
				'users'=>array('@'),
			),
			array('deny',  
				'users'=>array('*'),
			),
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
		$model=new InventarioEquipoSistemas;
		$Areas= Areas::model()->findAll();
	
		if(isset($_POST['InventarioEquipoSistemas']))
		{
			$model->attributes=$_POST['InventarioEquipoSistemas'];
			$model->id_area =$_POST['EquipoSistemas']['id_area'];
			$model->equipo =$_POST['InventarioEquipoSistemas']['equipo'];
			$model->marca =$_POST['InventarioEquipoSistemas']['marca'];
			$model->modelo =$_POST['InventarioEquipoSistemas']['modelo'];
			$model->numero_serie =$_POST['InventarioEquipoSistemas']['numero_serie'];
			$model->activo = '1';
			$model->fecha_reg = new CDbExpression('NOW()');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,'Areas'=>$Areas,
		));
	}

	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$Areas= Areas::model()->findAll();

	
		if(isset($_POST['InventarioEquipoSistemas']))
		{
			$model->attributes=$_POST['InventarioEquipoSistemas'];
			$model->id_area =$_POST['EquipoSistemas']['id_area'];
			$model->equipo =$_POST['InventarioEquipoSistemas']['equipo'];
			$model->marca =$_POST['InventarioEquipoSistemas']['marca'];
			$model->modelo =$_POST['InventarioEquipoSistemas']['modelo'];
			$model->numero_serie =$_POST['InventarioEquipoSistemas']['numero_serie'];
			$model->activo = '1';
			$model->fecha_reg = new CDbExpression('NOW()');

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,'Areas'=>$Areas,
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
		$dataProvider=new CActiveDataProvider('InventarioEquipoSistemas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	
	public function actionAdmin()
	{
		$model=new InventarioEquipoSistemas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InventarioEquipoSistemas']))
			$model->attributes=$_GET['InventarioEquipoSistemas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	public function loadModel($id)
	{
		$model=InventarioEquipoSistemas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='inventario-equipo-sistemas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
