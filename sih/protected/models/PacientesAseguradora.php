<?php

/**
 * This is the model class for table "pacientes_aseguradora".
 *
 * The followings are the available columns in table 'pacientes_aseguradora':
 * @property integer $id
 * @property integer $id_visita
 * @property integer $id_aseguradora
 * @property string $folio
 * @property string $numeroPoliza
 * @property string $montoAutorizado
 * @property string $deducible
 * @property string $cuaSeguro
 * @property string $excluciones
 * @property string $observaciones
 * @property string $fechaAutorizacion
 * @property string $fechaDocumentacionCompleta
 * @property string $fechaPagoAseguradora
 * @property string $montoHonorarios
 * @property string $nombreTratante1
 * @property string $sueldoTratante1
 * @property string $nombreTratante2
 * @property string $sueldoTratante2
 * @property string $nombreInstrument1
 * @property string $sueldoInstrumentist1
 * @property string $nombreInstrument2
 * @property string $sueldoInstrumentist2
 * @property string $nombreAnestesiolog
 * @property string $sueldoAnestesiolog
 * @property string $interconsulta1
 * @property string $nombreDocInter1
 * @property string $cantidad1
 * @property string $interconsulta2
 * @property string $nombreDocInter2
 * @property string $cantidad2
 * @property string $interconsulta3
 * @property string $nombreDocInter3
 * @property string $cantidad3
 * @property string $interconsulta4
 * @property string $nombreDocInter4
 * @property string $cantidad4
 * @property string $interconsulta5
 * @property string $nombreDocInter5
 * @property string $cantidad5
 * @property string $interconsulta6
 * @property string $nombreDocInter6
 * @property string $cantidad6
 * @property string $interconsulta7
 * @property string $nombreDocInter7
 * @property string $cantidad7
 * @property string $montoHospital
 * @property string $Proveedor1
 * @property string $nombreProvee1
 * @property string $cantidadProvee1
 * @property string $Proveedor2
 * @property string $nombreProvee2
 * @property string $cantidadProvee2
 * @property string $Proveedor3
 * @property string $nombreProvee3
 * @property string $cantidadProvee3
 * @property string $Proveedor4
 * @property string $nombreProvee4
 * @property string $cantidadProvee4
 * @property string $folioSinistro
 * @property string $folioRastreo
 * @property string $folioAseguradora
 * @property string $factura
 * @property string $medicoPrincipal
 * @property string $diagnosticoResum
 * @property string $especialidad
 * @property integer $aseguradoraPagoOk
 * @property integer $pagoParcial
 * @property string $tipoPagoAseg
 * @property string $cantPagoAseg
 * @property string $detaPagoAseg
 * @property string $fechaPagoAseg
 * @property integer $proveedoresPagoOk
 * @property string $tipoPagoProvee
 * @property string $cantPagoProvee
 * @property string $detaPagoProvee
 * @property string $fechaPagoProvee
 * @property integer $honorariosPagoOk
 * @property string $tipoPagoHonorarios
 * @property string $cantPagoHonorarios
 * @property string $detaPagoHonorarios
 * @property string $fechaPagoHonorarios
 * @property string $fechaCreacion
 * @property string $fechaFin
 *
 * The followings are the available model relations:
 * @property Pacientes $idVisita
 * @property Aseguradoras $idAseguradora
 */
class PacientesAseguradora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pacientes_aseguradora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
 	public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_visita, id_aseguradora, folio', 'required'),
            array('id_visita, id_aseguradora, aseguradoraPagoOk, pagoParcial, proveedoresPagoOk, honorariosPagoOk', 'numerical', 'integerOnly'=>true),
            array('folio, numeroPoliza, folioAseguradora, medicoPrincipal, tipoPagoAseg, tipoPagoProvee, tipoPagoHonorarios', 'length', 'max'=>70),
            array('montoAutorizado, atencionAseg, montoHonorarios, nombreTratante1, sueldoTratante1, nombreTratante2, sueldoTratante2, nombreInstrument1, sueldoInstrumentist1, nombreInstrument2, sueldoInstrumentist2, nombreAnestesiolog, sueldoAnestesiolog, interconsulta1, nombreDocInter1, cantidad1, interconsulta2, nombreDocInter2, cantidad2, interconsulta3, nombreDocInter3, cantidad3, interconsulta4, nombreDocInter4, cantidad4, interconsulta5, nombreDocInter5, cantidad5, interconsulta6, nombreDocInter6, cantidad6, interconsulta7, nombreDocInter7, cantidad7, montoHospital, cantPagoAseg, cantPagoProvee, cantPagoHonorarios', 'length', 'max'=>30),
            array('deducible, cuaSeguro, folioSinistro, folioRastreo', 'length', 'max'=>25),
            array('excluciones', 'length', 'max'=>300),
            array('observaciones, diagnosticoResum', 'length', 'max'=>300),
            array('Proveedor1, nombreProvee1, cantidadProvee1, Proveedor2, nombreProvee2, cantidadProvee2, Proveedor3, nombreProvee3, cantidadProvee3, Proveedor4, nombreProvee4, cantidadProvee4', 'length', 'max'=>50),
            array('factura, especialidad', 'length', 'max'=>40),
            array('detaPagoAseg, detaPagoProvee, detaPagoHonorarios', 'length', 'max'=>200),
            array('fechaAutorizacion, fechaDocumentacionCompleta, fechaPagoAseguradora, fechaPagoAseg, fechaPagoProvee, fechaPagoHonorarios, fechaCreacion, fechaFin', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, id_visita, id_aseguradora, folio, numeroPoliza, montoAutorizado, deducible, cuaSeguro, excluciones, atencionAseg, observaciones, fechaAutorizacion, fechaDocumentacionCompleta, fechaPagoAseguradora, montoHonorarios, nombreTratante1, sueldoTratante1, nombreTratante2, sueldoTratante2, nombreInstrument1, sueldoInstrumentist1, nombreInstrument2, sueldoInstrumentist2, nombreAnestesiolog, sueldoAnestesiolog, interconsulta1, nombreDocInter1, cantidad1, interconsulta2, nombreDocInter2, cantidad2, interconsulta3, nombreDocInter3, cantidad3, interconsulta4, nombreDocInter4, cantidad4, interconsulta5, nombreDocInter5, cantidad5, interconsulta6, nombreDocInter6, cantidad6, interconsulta7, nombreDocInter7, cantidad7, montoHospital, Proveedor1, nombreProvee1, cantidadProvee1, Proveedor2, nombreProvee2, cantidadProvee2, Proveedor3, nombreProvee3, cantidadProvee3, Proveedor4, nombreProvee4, cantidadProvee4, folioSinistro, folioRastreo, folioAseguradora, factura, medicoPrincipal, diagnosticoResum, especialidad, aseguradoraPagoOk, pagoParcial, tipoPagoAseg, cantPagoAseg, detaPagoAseg, fechaPagoAseg, proveedoresPagoOk, tipoPagoProvee, cantPagoProvee, detaPagoProvee, fechaPagoProvee, honorariosPagoOk, tipoPagoHonorarios, cantPagoHonorarios, detaPagoHonorarios, fechaPagoHonorarios, fechaCreacion, fechaFin', 'safe', 'on'=>'search'),
        );
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idVisita' => array(self::BELONGS_TO, 'Pacientes', 'id_visita'),
			'idAseguradora' => array(self::BELONGS_TO, 'Aseguradoras', 'id_aseguradora'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_visita' => 'Id Visita',
			'id_aseguradora' => 'Id Aseguradora',
			'folio' => 'Folio',
			'numeroPoliza' => 'Numero Poliza',
			'montoAutorizado' => 'Monto Autorizado',
			'deducible' => 'Deducible',
			'cuaSeguro' => 'Cua Seguro',
			'excluciones' => 'Exclusiones',
			'atencionAseg' => 'Nombre de la persona que atendio la llamada',
			'observaciones' => 'Observaciones',
			'fechaAutorizacion' => 'Fecha Autorizacion',
			'fechaDocumentacionCompleta' => 'Fecha Documentacion Completa',
			'fechaPagoAseguradora' => 'Fecha Pago Aseguradora',
			'montoHonorarios' => 'Monto Honorarios',
			'nombreTratante1' => 'Nombre Ayudante (1)',
			'sueldoTratante1' => 'Sueldo Ayudante (1)',
			'nombreTratante2' => 'Nombre Ayudante (2)',
			'sueldoTratante2' => 'Sueldo Ayudante (2)',
			'nombreInstrument1' => 'Nombre del Instrumentista (1)',
			'sueldoInstrumentist1' => 'Sueldo Instrumentista (1)',
			'nombreInstrument2' => 'Nombre del Instrumentista (2)',
			'sueldoInstrumentist2' => 'Sueldo Instrumentista (2)',
			'nombreAnestesiolog' => 'Nombre Anestesiologo',
			'sueldoAnestesiolog' => 'Sueldo Anestesiologo',
			'interconsulta1' => 'Nombre de la Interconsulta efectuada (1)',
			'nombreDocInter1' => 'Nombre Doctor Interconsulta (1)',
			'cantidad1' => 'Cantidad (1)',
			'interconsulta2' => 'Nombre de la Interconsulta efectuada (2)',
			'nombreDocInter2' => 'Nombre Doctor Interconsulta (2)',
			'cantidad2' => 'Cantidad (2)',
			'interconsulta3' => 'Nombre de la Interconsulta efectuada (3)',
			'nombreDocInter3' => 'Nombre Doctor Interconsulta (3)',
			'cantidad3' => 'Cantidad (3)',
			'interconsulta4' => 'Nombre de la Interconsulta efectuada (4)',
			'nombreDocInter4' => 'Nombre Doctor Interconsulta (4)',
			'cantidad4' => 'Cantidad (4)',
			'interconsulta5' => 'Nombre de la Interconsulta efectuada (5)',
			'nombreDocInter5' => 'Nombre Doctor Interconsulta (5)',
			'cantidad5' => 'Cantidad (5)',
			'interconsulta6' => 'Nombre de la Interconsulta efectuada (6)',
			'nombreDocInter6' => 'Nombre Doctor Interconsulta (6)',
			'cantidad6' => 'Cantidad (6)',
			'interconsulta7' => 'Nombre de la Interconsulta efectuada (7)',
			'nombreDocInter7' => 'Nombre Doctor Interconsulta (7)',
			'cantidad7' => 'Cantidad (7)',
			'montoHospital' => 'Monto Hospital',
			'Proveedor1' => 'Nombre de la empresa (1)',
			'nombreProvee1' => 'Nombre del proveedor (1)',
			'cantidadProvee1' => 'Cantidad (1)',
			'Proveedor2' => 'Nombre de la empresa (2)',
			'nombreProvee2' => 'Nombre del proveedor (2)',
			'cantidadProvee2' => 'Cantidad (2)',
			'Proveedor3' => 'Nombre de la empresa (3)',
			'nombreProvee3' => 'Nombre del proveedor (3)',
			'cantidadProvee3' => 'Cantidad (3)',
			'Proveedor4' => 'Nombre de la empresa (4)',
			'nombreProvee4' => 'Nombre del proveedor (4)',
			'cantidadProvee4' => 'Cantidad (4)',
			'folioSinistro' => 'Folio Siniestro',
			'folioRastreo' => 'Folio Rastreo',
			'folioAseguradora' => 'Folio Aseguradora',
			'factura' => 'Factura',
			'medicoPrincipal' => 'Medico Tratante',
			'diagnosticoResum' => 'Diagnostico Resum',
			'especialidad' => 'Especialidad',
			'aseguradoraPagoOk' => 'Aseguradora Pago Ok',
			'pagoParcial' => 'Pago Parcial',
			'tipoPagoAseg' => 'Tipo Pago Aseg',
			'cantPagoAseg' => 'Cant Pago Aseg',
			'detaPagoAseg' => 'Deta Pago Aseg',
			'fechaPagoAseg' => 'Fecha Pago Aseg',
			'proveedoresPagoOk' => 'Proveedores Pago Ok',
			'tipoPagoProvee' => 'Tipo Pago Provee',
			'cantPagoProvee' => 'Cant Pago Provee',
			'detaPagoProvee' => 'Deta Pago Provee',
			'fechaPagoProvee' => 'Fecha Pago Provee',
			'honorariosPagoOk' => 'Honorarios Pago Ok',
			'tipoPagoHonorarios' => 'Tipo Pago Honorarios',
			'cantPagoHonorarios' => 'Cant Pago Honorarios',
			'detaPagoHonorarios' => 'Deta Pago Honorarios',
			'fechaPagoHonorarios' => 'Fecha Pago Honorarios',
			'fechaCreacion' => 'Fecha Creacion',
			'fechaFin' => 'Fecha Fin',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_visita',$this->id_visita);
		$criteria->compare('id_aseguradora',$this->id_aseguradora);
		$criteria->compare('folio',$this->folio,true);
		$criteria->compare('numeroPoliza',$this->numeroPoliza,true);
		$criteria->compare('montoAutorizado',$this->montoAutorizado,true);
		$criteria->compare('deducible',$this->deducible,true);
		$criteria->compare('cuaSeguro',$this->cuaSeguro,true);
		$criteria->compare('excluciones',$this->excluciones,true);
		$criteria->compare('atencionAseg',$this->atencionAseg,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('fechaAutorizacion',$this->fechaAutorizacion,true);
		$criteria->compare('fechaDocumentacionCompleta',$this->fechaDocumentacionCompleta,true);
		$criteria->compare('fechaPagoAseguradora',$this->fechaPagoAseguradora,true);
		$criteria->compare('montoHonorarios',$this->montoHonorarios,true);
		
		$criteria->compare('nombreTratante1',$this->nombreTratante1,true);
		$criteria->compare('sueldoTratante1',$this->sueldoTratante1,true);
		$criteria->compare('nombreTratante2',$this->nombreTratante2,true);
		$criteria->compare('sueldoTratante2',$this->sueldoTratante2,true);
		$criteria->compare('nombreInstrument1',$this->nombreInstrument1,true);
		$criteria->compare('sueldoInstrumentist1',$this->sueldoInstrumentist1,true);
		$criteria->compare('nombreInstrument2',$this->nombreInstrument2,true);
		$criteria->compare('sueldoInstrumentist2',$this->sueldoInstrumentist2,true);
		$criteria->compare('nombreAnestesiolog',$this->nombreAnestesiolog,true);
		$criteria->compare('sueldoAnestesiolog',$this->sueldoAnestesiolog,true);
		$criteria->compare('interconsulta1',$this->interconsulta1,true);
		$criteria->compare('nombreDocInter1',$this->nombreDocInter1,true);
		$criteria->compare('cantidad1',$this->cantidad1,true);
		$criteria->compare('interconsulta2',$this->interconsulta2,true);
		$criteria->compare('nombreDocInter2',$this->nombreDocInter2,true);
		$criteria->compare('cantidad2',$this->cantidad2,true);
		$criteria->compare('interconsulta3',$this->interconsulta3,true);
		$criteria->compare('nombreDocInter3',$this->nombreDocInter3,true);
		$criteria->compare('cantidad3',$this->cantidad3,true);
		$criteria->compare('interconsulta4',$this->interconsulta4,true);
		$criteria->compare('nombreDocInter4',$this->nombreDocInter4,true);
		$criteria->compare('cantidad4',$this->cantidad4,true);
		$criteria->compare('interconsulta5',$this->interconsulta5,true);
		$criteria->compare('nombreDocInter5',$this->nombreDocInter5,true);
		$criteria->compare('cantidad5',$this->cantidad5,true);
		$criteria->compare('interconsulta6',$this->interconsulta6,true);
		$criteria->compare('nombreDocInter6',$this->nombreDocInter6,true);
		$criteria->compare('cantidad6',$this->cantidad6,true);
		$criteria->compare('interconsulta7',$this->interconsulta7,true);
		$criteria->compare('nombreDocInter7',$this->nombreDocInter7,true);
		$criteria->compare('cantidad7',$this->cantidad7,true);
		
		$criteria->compare('montoHospital',$this->montoHospital,true);
		
		$criteria->compare('Proveedor1',$this->Proveedor1,true);
		$criteria->compare('nombreProvee1',$this->nombreProvee1,true);
		$criteria->compare('cantidadProvee1',$this->cantidadProvee1,true);
		$criteria->compare('Proveedor2',$this->Proveedor2,true);
		$criteria->compare('nombreProvee2',$this->nombreProvee2,true);
		$criteria->compare('cantidadProvee2',$this->cantidadProvee2,true);
		$criteria->compare('Proveedor3',$this->Proveedor3,true);
		$criteria->compare('nombreProvee3',$this->nombreProvee3,true);
		$criteria->compare('cantidadProvee3',$this->cantidadProvee3,true);
		$criteria->compare('Proveedor4',$this->Proveedor4,true);
		$criteria->compare('nombreProvee4',$this->nombreProvee4,true);
		$criteria->compare('cantidadProvee4',$this->cantidadProvee4,true);
		
		$criteria->compare('folioSinistro',$this->folioSinistro,true);
		$criteria->compare('folioRastreo',$this->folioRastreo,true);
		$criteria->compare('folioAseguradora',$this->folioAseguradora,true);
		$criteria->compare('factura',$this->factura,true);

		$criteria->compare('medicoPrincipal',$this->medicoPrincipal,true);
		$criteria->compare('diagnosticoResum',$this->diagnosticoResum,true);
		$criteria->compare('especialidad',$this->especialidad,true);
		
		$criteria->compare('aseguradoraPagoOk',$this->aseguradoraPagoOk);
		
		$criteria->compare('pagoParcial',$this->pagoParcial);
		
		$criteria->compare('tipoPagoAseg',$this->tipoPagoAseg,true);
		$criteria->compare('cantPagoAseg',$this->cantPagoAseg,true);
		$criteria->compare('detaPagoAseg',$this->detaPagoAseg,true);
		$criteria->compare('fechaPagoAseg',$this->fechaPagoAseg,true);
		$criteria->compare('proveedoresPagoOk',$this->proveedoresPagoOk);
		$criteria->compare('tipoPagoProvee',$this->tipoPagoProvee,true);
		$criteria->compare('cantPagoProvee',$this->cantPagoProvee,true);
		$criteria->compare('detaPagoProvee',$this->detaPagoProvee,true);
		$criteria->compare('fechaPagoProvee',$this->fechaPagoProvee,true);
		$criteria->compare('honorariosPagoOk',$this->honorariosPagoOk);
		$criteria->compare('tipoPagoHonorarios',$this->tipoPagoHonorarios,true);
		$criteria->compare('cantPagoHonorarios',$this->cantPagoHonorarios,true);
		$criteria->compare('detaPagoHonorarios',$this->detaPagoHonorarios,true);
		$criteria->compare('fechaPagoHonorarios',$this->fechaPagoHonorarios,true);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);
		$criteria->compare('fechaFin',$this->fechaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PacientesAseguradora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	protected function beforeSave()
    {

    	//var_dump($this->fechaAutorizacion);
		// convert to display format
		if($this->fechaAutorizacion !="0000-00-00 00:00:00" && strlen($this->fechaAutorizacion) > 10)
	        $this->fechaAutorizacion = DateTime::createFromFormat('d-m-Y H:i:s', $this->fechaAutorizacion)->format('Y-m-d H:i:s');

    if($this->fechaDocumentacionCompleta!="0000-00-00 00:00:00"  && strlen($this->fechaDocumentacionCompleta) > 10)
        $this->fechaDocumentacionCompleta = DateTime::createFromFormat('d-m-Y H:i:s', $this->fechaDocumentacionCompleta)->format('Y-m-d H:i:s');
    
    if($this->fechaPagoAseguradora!="0000-00-00 00:00:00" && strlen($this->fechaPagoAseguradora) > 10)
        $this->fechaPagoAseguradora = DateTime::createFromFormat('d-m-Y H:i:s', $this->fechaPagoAseguradora)->format('Y-m-d H:i:s');
    
    if($this->fechaPagoAseg!="0000-00-00 00:00:00" && strlen($this->fechaPagoAseg) > 10)
        $this->fechaPagoAseg = DateTime::createFromFormat('d-m-Y H:i:s', $this->fechaPagoAseg)->format('Y-m-d H:i:s');
    
    if($this->fechaPagoProvee!="0000-00-00 00:00:00" && strlen($this->fechaPagoProvee) > 10)
        $this->fechaPagoProvee = DateTime::createFromFormat('d-m-Y H:i:s', $this->fechaPagoProvee)->format('Y-m-d H:i:s');

    if($this->fechaPagoHonorarios!="0000-00-00 00:00:00" && strlen($this->fechaPagoHonorarios) > 10)
        $this->fechaPagoHonorarios = DateTime::createFromFormat('d-m-Y H:i:s', $this->fechaPagoHonorarios)->format('Y-m-d H:i:s');
        

       return parent::beforeSave();
    }

	protected function afterFind()
    {
        // convert to display format

        $this->fechaCreacion = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaCreacion)->format('d-m-Y H:i');
        if($this->fechaFin != "0000-00-00 00:00:00")
        	$this->fechaFin = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaFin)->format('d-m-Y H:i');
        else
        	$this->fechaFin = substr($this->fechaFin, 0,16);

        if($this->fechaAutorizacion != "0000-00-00 00:00:00")
        $this->fechaAutorizacion = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaAutorizacion)->format('d-m-Y H:i');
            else
        	$this->fechaAutorizacion = "00-00-0000 00:00:00";

if($this->fechaDocumentacionCompleta != "0000-00-00 00:00:00")
        $this->fechaDocumentacionCompleta = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaDocumentacionCompleta)->format('d-m-Y H:i');
                else
        	$this->fechaDocumentacionCompleta = "00-00-0000 00:00:00";

if($this->fechaPagoAseguradora != "0000-00-00 00:00:00")
        $this->fechaPagoAseguradora = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaPagoAseguradora)->format('d-m-Y H:i');
                else
        	$this->fechaPagoAseguradora = "00-00-0000 00:00:00";

if($this->fechaPagoAseg != "0000-00-00 00:00:00")
        $this->fechaPagoAseg = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaPagoAseg)->format('d-m-Y H:i');
                else
        	$this->fechaPagoAseg = "00-00-0000 00:00:00";

if($this->fechaPagoProvee != "0000-00-00 00:00:00")
        $this->fechaPagoProvee = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaPagoProvee)->format('d-m-Y H:i');
                else
        	$this->fechaPagoProvee = "00-00-0000 00:00:00";

if($this->fechaPagoHonorarios != "0000-00-00 00:00:00")
        $this->fechaPagoHonorarios = DateTime::createFromFormat('Y-m-d H:i:s', $this->fechaPagoHonorarios)->format('d-m-Y H:i');
                else
        	$this->fechaPagoHonorarios = "00-00-0000 00:00:00";
        

       return parent::afterFind();
    }
}
