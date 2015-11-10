<?php

class PersonasController extends Controller
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
		$model=new Personas;

		$personasInfo = new PersonasInfo;

		$turnos = Turnos::model()->findAll();
		$areas = Areas::model()->findAll();

		// Uncomment the following line if AJAX validation is needed
		 //$this->performAjaxValidation($model);

		if(isset($_POST['Personas']) && isset($_POST['PersonasInfo']))
		{
			

			$personasInfo->attributes=$_POST['PersonasInfo'];

			if($personasInfo->save()){
				$model->attributes=$_POST['Personas'];
				$model->id_personas_info = $personasInfo->id;
				$model->fecha_creacion = new CDbExpression('NOW()');
				$model->fecha_ingreso = new CDbExpression('NOW()');

			if($model->save())
				$this->redirect(array('admin'));
			}
		}
	//if(array_key_exists("GESTION DE AREAS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE AREAS"][1] == "1")
		$this->render('create',array(
			'model'=>$model,'personasInfo'=>$personasInfo, 'turnos'=>$turnos, 'areas'=>$areas
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
		$model= $this->loadModel($id);
		$personasInfo = PersonasInfo::model()->findByPk($model->id_personas_info);
		$turnos = Turnos::model()->findAll();
		$areas = Areas::model()->findAll();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Personas']) && isset($_POST['PersonasInfo']))
		{
			

			$personasInfo->attributes=$_POST['PersonasInfo'];

			if($personasInfo->save()){
				$model->attributes=$_POST['Personas'];
				$model->id_personas_info = $personasInfo->id;
				$model->fecha_creacion = new CDbExpression('NOW()');
				$model->fecha_ingreso = new CDbExpression('NOW()');

			if($model->save())
				$this->redirect(array('admin'));
			}
		}

		if(array_key_exists("GESTION DE AREAS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE AREAS"][1] == "1")
		$this->render('update',array(
			'model'=>$model,'personasInfo'=>$personasInfo, 'turnos'=>$turnos, 'areas'=>$areas
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
		if(array_key_exists("GESTION DE PERSONAS", Yii::app()->user->permisos) && Yii::app()->user->permisos["GESTION DE PERSONAS"][1] == "1")
			$this->loadModel($id)->delete();
		else
			echo"No tienes permisos para realizar esta acción. <meta http-equiv='refresh' content='3;url=?r=personas/admin' />";

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Personas', array(
        'criteria' => array(
            'select' => array(
                '`t`.*', 
                '`pi`.`email` ',
                '`pi`.`email2` '
            ),
            'join' => 'JOIN `personas_info` AS `pi` ON `pi`.`id` = `t`.`id_personas_info`',
        )
    ));
	$this->render('index',array(
		'dataProvider'=>$dataProvider,
	));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Personas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Personas']))
			$model->attributes=$_GET['Personas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	public function actionInfopersonal()
	{

		$this->render('infopersonal');
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Personas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Personas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Personas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='personas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function turno($data,$row){
	    return Turnos::model()->findByPk($data->id_turno)->nombre;
	}

	public function AreaPuesto($data,$row){
		$AreasPuesto = AreasPuestos::model()->findByPk($data->id_area_puesto);
	    return Puestos::model()->findByPk($AreasPuesto->id_puesto)->nombre." en ".Areas::model()->findByPk($AreasPuesto->id_area)->nombre;
	}

	function actionobtenerPersonas() {
	  if (Yii::app()->request->isAjaxRequest&&!empty($_GET['term'])) {
		$sql = 'SELECT p.id, CONCAT(p.nombres," ",p.ap_pat," ",p.ap_mat) as label FROM personas as p WHERE p.nombres LIKE :qterm OR p.ap_pat LIKE :qterm OR p.ap_mat LIKE :qterm';
		
		$sql .= ' ORDER BY ap_pat ASC';
		$command = Yii::app()->db->createCommand($sql);
		$qterm = $_GET['term'].'%';
		$command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
		$result = $command->queryAll();
		echo CJSON::encode($result); exit;
	  } else {
		return false;
	  }
	}

}
