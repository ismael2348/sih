<?php

class PacientesAseguradoraController extends Controller
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

	function fechaASql($fecha){
		return $newFecha = substr($fecha,6,4)."-".substr($fecha,3,2)."-".substr($fecha,0,2);
	}

	function fechaACal($fecha){
		return $newFecha = substr($fecha,8,2)."-".substr($fecha,5,2)."-".substr($fecha,0,4);
	}

	public function actionCreate($id)
	{
		$model=new PacientesAseguradora;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$paciente = Pacientes::model()->findByPk((int)$id);
		$paciente = $paciente->apPat." ".$paciente->apMat.", ".$paciente->nombre;



		$model->id_visita = $id;
		if(isset($_POST['PacientesAseguradora']))
		{
			$model->attributes=$_POST['PacientesAseguradora'];
		if(isset($_POST['fechaAutorizacion']))
			$model->fechaAutorizacion=substr($model->fechaAutorizacion,0,11)." ".$_POST['fechaAutorizacion'].":00";
		else if(strlen($model->fechaAutorizacion)<=16)
			$model->fechaAutorizacion.=":00";

		if(isset($_POST['fechaDocCompleta']))
			$model->fechaDocumentacionCompleta=substr($model->fechaDocumentacionCompleta,0,11)." ".$_POST['fechaDocCompleta'].":00";
		else if(strlen($model->fechaDocumentacionCompleta)<=16)
			$model->fechaDocumentacionCompleta.=":00";

		if(isset($_POST['fechaPagoAseguradora']))
			$model->fechaPagoAseguradora=substr($model->fechaPagoAseguradora,0,11)." ".$_POST['fechaPagoAseguradora'].":00";
		else if(strlen($model->fechaPagoAseguradora)<=16)
			$model->fechaPagoAseguradora.=":00";

		if(isset($_POST['fechaPagoAseg']))
			$model->fechaPagoAseg=substr($model->fechaPagoAseg,0,11)." ".$_POST['fechaPagoAseg'].":00";
		else if(strlen($model->fechaPagoAseg)<=16)
			$model->fechaPagoAseg.=":00";

		if(isset($_POST['fechaPagoProve']))
			$model->fechaPagoProvee=substr($model->fechaPagoProvee,0,11)." ".$_POST['fechaPagoProve'].":00";
		else if(strlen($model->fechaPagoProvee)<=16)
			$model->fechaPagoProvee.=":00";

		if(isset($_POST['fechaPagoHono']))
			$model->fechaPagoHonorarios=substr($model->fechaPagoHonorarios,0,11)." ".$_POST['fechaPagoHono'].":00";
		else if(strlen($model->fechaPagoHonorarios)<=16)
			$model->fechaPagoHonorarios.=":00";
/*
echo "<pre>";
var_dump($model);
echo "</pre>";*/

			if(isset($_POST["PacientesAseguradora[montoAutorizado]"]) && !empty($model->montoAutorizado))
				$model->montoAutorizado = str_replace(',', '', substr($model->montoAutorizado, 1));
			
			if(isset($_POST["PacientesAseguradora[deducible]"]) && !empty($model->deducible))
				$model->deducible = str_replace(',', '', substr($model->deducible, 1));

			if(isset($_POST["PacientesAseguradora[cuaSeguro]"]) && !empty($model->cuaSeguro))
				$model->cuaSeguro = str_replace(',', '', substr($model->cuaSeguro, 1));
			
			if(isset($_POST["PacientesAseguradora[montoHonorarios]"]) && !empty($model->montoHonorarios))
				$model->montoHonorarios = str_replace(',', '', substr($model->montoHonorarios, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoTratante1]"]) && !empty($model->sueldoTratante1))
				$model->sueldoTratante1 = str_replace(',', '', substr($model->sueldoTratante1, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoTratante2]"]) && !empty($model->sueldoTratante2))
				$model->sueldoTratante2 = str_replace(',', '', substr($model->sueldoTratante2, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoInstrumentist1]"]) && !empty($model->sueldoInstrumentist1))
				$model->sueldoInstrumentist1 = str_replace(',', '', substr($model->sueldoInstrumentist1, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoInstrumentist2]"]) && !empty($model->sueldoInstrumentist2))
				$model->sueldoInstrumentist2 = str_replace(',', '', substr($model->sueldoInstrumentist2, 1));



			if(isset($_POST["PacientesAseguradora[sueldoAnestesiolog]"]) && !empty($model->sueldoAnestesiolog))
				$model->sueldoAnestesiolog = str_replace(',', '', substr($model->sueldoAnestesiolog, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad1]"]) && !empty($model->cantidad1))
				$model->cantidad1 = str_replace(',', '', substr($model->cantidad1, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad2]"]) && !empty($model->cantidad2))
				$model->cantidad2 = str_replace(',', '', substr($model->cantidad2, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad3]"]) && !empty($model->cantidad3))
				$model->cantidad3 = str_replace(',', '', substr($model->cantidad3, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad4]"]) && !empty($model->cantidad4))
				$model->cantidad4 = str_replace(',', '', substr($model->cantidad4, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad5]"]) && !empty($model->cantidad5))
				$model->cantidad5 = str_replace(',', '', substr($model->cantidad5, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad6]"]) && !empty($model->cantidad6))
				$model->cantidad6 = str_replace(',', '', substr($model->cantidad6, 1));

			if(isset($_POST["PacientesAseguradora[cantidad7]"]) && !empty($model->cantidad7))
				$model->cantidad7 = str_replace(',', '', substr($model->cantidad7, 1));



			if(isset($_POST["PacientesAseguradora[montoHospital]"]) && !empty($model->montoHospital))
				$model->montoHospital = str_replace(',', '', substr($model->montoHospital, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee1]"]) && !empty($model->cantidadProvee1))
				$model->cantidadProvee1 = str_replace(',', '', substr($model->cantidadProvee1, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee2]"]) && !empty($model->cantidadProvee2))
				$model->cantidadProvee2 = str_replace(',', '', substr($model->cantidadProvee2, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee3]"]) && !empty($model->cantidadProvee3))
				$model->cantidadProvee3 = str_replace(',', '', substr($model->cantidadProvee3, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee4]"]) && !empty($model->cantidadProvee4))
				$model->cantidadProvee4 = str_replace(',', '', substr($model->cantidadProvee4, 1));

			if(isset($_POST["PacientesAseguradora[cantPagoAseg]"]) && !empty($model->cantPagoAseg))
				$model->cantPagoAseg = str_replace(',', '', substr($model->cantPagoAseg, 1));

			if(isset($_POST["PacientesAseguradora[cantPagoProvee]"]) && !empty($model->cantPagoProvee))
				$model->cantPagoProvee = str_replace(',', '', substr($model->cantPagoProvee, 1));

			if(isset($_POST["PacientesAseguradora[cantPagoHonorarios]"]) && !empty($model->cantPagoHonorarios))
				$model->cantPagoHonorarios = str_replace(',', '', substr($model->cantPagoHonorarios, 1));

			$model->fechaCreacion = new CDbExpression('NOW()');

			$aseg = substr(Aseguradoras::model()->findByPk($model->id_aseguradora)->nombre,0,3); 


			$sql = "SELECT COUNT(id) as idsig FROM pacientes_aseguradora WHERE id_aseguradora = ".$model->id_aseguradora;
			$command = Yii::app()->db->createCommand($sql);
			$idSiguiente = $command->queryAll();

			$model->folio = "AS-".$aseg."-".str_pad(($idSiguiente[0]['idsig']+1), 5, "0", STR_PAD_LEFT)."-".date("Y");

				if($model->save())
					$this->redirect(array('admin'));
		}

		$horas = array('','','','','','');
		$this->render('create',array(
			'model'=>$model,'paciente'=>$paciente,'horas'=>$horas
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
	$paciente = Pacientes::model()->findByPk($model->id_visita);
		$paciente = $paciente->apPat." ".$paciente->apMat.", ".$paciente->nombre;



		$horas = array(
			substr($model->fechaAutorizacion,11,5),
			substr($model->fechaDocumentacionCompleta,11,5),
			substr($model->fechaPagoAseguradora,11,5),
			substr($model->fechaPagoAseg,11,5),
			substr($model->fechaPagoProvee,11,5),
			substr($model->fechaPagoHonorarios,11,5)
		 );

		/*$model->fechaAutorizacion = substr($model->fechaAutorizacion,0,10);
		$model->fechaDocumentacionCompleta = substr($model->fechaDocumentacionCompleta,0,10);
		$model->fechaPagoAseguradora = substr($model->fechaPagoAseguradora,0,10);
		$model->fechaPagoAseg = substr($model->fechaPagoAseg,0,10);
		$model->fechaPagoProvee = substr($model->fechaPagoProvee,0,10);
		$model->fechaPagoHonorarios = substr($model->fechaPagoHonorarios,0,10);*/

/*
echo "<pre>";
var_dump($model);
echo "</pre>";
*/
		if(isset($_POST['PacientesAseguradora']))
		{
/*
echo "<pre>";
var_dump($_POST);
echo "</pre>";
*/
			$model->attributes=$_POST['PacientesAseguradora'];

//01-01-2014 15:03:01
//1234567890123

		if(isset($_POST['fechaAutorizacion']))
			$model->fechaAutorizacion=substr($model->fechaAutorizacion,0,11)." ".$_POST['fechaAutorizacion'].":00";
		else if(strlen($model->fechaAutorizacion)<=16)
			$model->fechaAutorizacion.=":00";

		if(isset($_POST['fechaDocCompleta']))
			$model->fechaDocumentacionCompleta=substr($model->fechaDocumentacionCompleta,0,11)." ".$_POST['fechaDocCompleta'].":00";
		else if(strlen($model->fechaDocumentacionCompleta)<=16)
			$model->fechaDocumentacionCompleta.=":00";

		if(isset($_POST['fechaPagoAseguradora']))
			$model->fechaPagoAseguradora=substr($model->fechaPagoAseguradora,0,11)." ".$_POST['fechaPagoAseguradora'].":00";
		else if(strlen($model->fechaPagoAseguradora)<=16)
			$model->fechaPagoAseguradora.=":00";

		if(isset($_POST['fechaPagoAseg']))
			$model->fechaPagoAseg=substr($model->fechaPagoAseg,0,11)." ".$_POST['fechaPagoAseg'].":00";
		else if(strlen($model->fechaPagoAseg)<=16)
			$model->fechaPagoAseg.=":00";

		if(isset($_POST['fechaPagoProve']))
			$model->fechaPagoProvee=substr($model->fechaPagoProvee,0,11)." ".$_POST['fechaPagoProve'].":00";
		else if(strlen($model->fechaPagoProvee)<=16)
			$model->fechaPagoProvee.=":00";

		if(isset($_POST['fechaPagoHono']))
			$model->fechaPagoHonorarios=substr($model->fechaPagoHonorarios,0,11)." ".$_POST['fechaPagoHono'].":00";
		else if(strlen($model->fechaPagoHonorarios)<=16)
			$model->fechaPagoHonorarios.=":00";
/*
echo "<pre>";
var_dump($model);
echo "</pre>";*/

			if(isset($_POST["PacientesAseguradora[montoAutorizado]"]) && !empty($model->montoAutorizado))
				$model->montoAutorizado = str_replace(',', '', substr($model->montoAutorizado, 1));
			
			if(isset($_POST["PacientesAseguradora[deducible]"]) && !empty($model->deducible))
				$model->deducible = str_replace(',', '', substr($model->deducible, 1));

			if(isset($_POST["PacientesAseguradora[cuaSeguro]"]) && !empty($model->cuaSeguro))
				$model->cuaSeguro = str_replace(',', '', substr($model->cuaSeguro, 1));
			
			if(isset($_POST["PacientesAseguradora[montoHonorarios]"]) && !empty($model->montoHonorarios))
				$model->montoHonorarios = str_replace(',', '', substr($model->montoHonorarios, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoTratante1]"]) && !empty($model->sueldoTratante1))
				$model->sueldoTratante1 = str_replace(',', '', substr($model->sueldoTratante1, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoTratante2]"]) && !empty($model->sueldoTratante2))
				$model->sueldoTratante2 = str_replace(',', '', substr($model->sueldoTratante2, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoInstrumentist1]"]) && !empty($model->sueldoInstrumentist1))
				$model->sueldoInstrumentist1 = str_replace(',', '', substr($model->sueldoInstrumentist1, 1));
			
			if(isset($_POST["PacientesAseguradora[sueldoInstrumentist2]"]) && !empty($model->sueldoInstrumentist2))
				$model->sueldoInstrumentist2 = str_replace(',', '', substr($model->sueldoInstrumentist2, 1));



			if(isset($_POST["PacientesAseguradora[sueldoAnestesiolog]"]) && !empty($model->sueldoAnestesiolog))
				$model->sueldoAnestesiolog = str_replace(',', '', substr($model->sueldoAnestesiolog, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad1]"]) && !empty($model->cantidad1))
				$model->cantidad1 = str_replace(',', '', substr($model->cantidad1, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad2]"]) && !empty($model->cantidad2))
				$model->cantidad2 = str_replace(',', '', substr($model->cantidad2, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad3]"]) && !empty($model->cantidad3))
				$model->cantidad3 = str_replace(',', '', substr($model->cantidad3, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad4]"]) && !empty($model->cantidad4))
				$model->cantidad4 = str_replace(',', '', substr($model->cantidad4, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad5]"]) && !empty($model->cantidad5))
				$model->cantidad5 = str_replace(',', '', substr($model->cantidad5, 1));
			
			if(isset($_POST["PacientesAseguradora[cantidad6]"]) && !empty($model->cantidad6))
				$model->cantidad6 = str_replace(',', '', substr($model->cantidad6, 1));

			if(isset($_POST["PacientesAseguradora[cantidad7]"]) && !empty($model->cantidad7))
				$model->cantidad7 = str_replace(',', '', substr($model->cantidad7, 1));



			if(isset($_POST["PacientesAseguradora[montoHospital]"]) && !empty($model->montoHospital))
				$model->montoHospital = str_replace(',', '', substr($model->montoHospital, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee1]"]) && !empty($model->cantidadProvee1))
				$model->cantidadProvee1 = str_replace(',', '', substr($model->cantidadProvee1, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee2]"]) && !empty($model->cantidadProvee2))
				$model->cantidadProvee2 = str_replace(',', '', substr($model->cantidadProvee2, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee3]"]) && !empty($model->cantidadProvee3))
				$model->cantidadProvee3 = str_replace(',', '', substr($model->cantidadProvee3, 1));

			if(isset($_POST["PacientesAseguradora[cantidadProvee4]"]) && !empty($model->cantidadProvee4))
				$model->cantidadProvee4 = str_replace(',', '', substr($model->cantidadProvee4, 1));

			if(isset($_POST["PacientesAseguradora[cantPagoAseg]"]) && !empty($model->cantPagoAseg))
				$model->cantPagoAseg = str_replace(',', '', substr($model->cantPagoAseg, 1));

			if(isset($_POST["PacientesAseguradora[cantPagoProvee]"]) && !empty($model->cantPagoProvee))
				$model->cantPagoProvee = str_replace(',', '', substr($model->cantPagoProvee, 1));

			if(isset($_POST["PacientesAseguradora[cantPagoHonorarios]"]) && !empty($model->cantPagoHonorarios))
				$model->cantPagoHonorarios = str_replace(',', '', substr($model->cantPagoHonorarios, 1));


			if(isset($_POST['yt1']))
				$model->fechaFin = new CDbExpression('NOW()');

		//$model->save();

				if($model->save())
					$this->redirect(array('admin'));
		}
/*
echo "<pre>";
var_dump($model);
echo "</pre>";
*/

		$this->render('update',array(
			'model'=>$model, 'horas'=>$horas,'paciente'=>$paciente
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
		$dataProvider=new CActiveDataProvider('PacientesAseguradora');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PacientesAseguradora('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PacientesAseguradora']))
			$model->attributes=$_GET['PacientesAseguradora'];


		//$aseguradora = new PacientesAseguradora::model()->findByPk($model->id_aseguradora)->nombre;


		$this->render('admin',array(
			'model'=>$model,// 'aseguradora'=>$aseguradora;
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PacientesAseguradora the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PacientesAseguradora::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PacientesAseguradora $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pacientes-aseguradora-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function obtenerPaciente($data,$row){

$id = $data->id_visita;

$details = Pacientes::model()->findAllBySql("SELECT nombre from pacientes WHERE id=$id");


return $details[0]["nombre"];
}
public function obtenerAseguradora($data,$row){

$id = $data->id_aseguradora;

$details = Aseguradoras::model()->findAllBySql("SELECT nombre from aseguradoras WHERE id=$id");


return $details[0]["nombre"];
}

}