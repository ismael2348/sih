<?php

class ReportesController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAtencionesTotales()
	{
		$this->render('atencionestotales');
	}

	public function actionAtencionesPorMes()
	{
		$this->render('atencionespormes');
	}

	public function actionAtencionesPorAseg()
	{
		$this->render('atencionesPorAseg');
	}


	public function actionAtencionesPoresp()
	{
		$this->render('atencionesPorEsp');
	}

	public function actionAtencionesPorHon()
	{
		$this->render('atencionesPorHon');
	}



	public function actionAtencionesPorPro()
	{
		$this->render('atencionesPorPro');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}