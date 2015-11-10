<?php

/**
 * This is the model class for table "pacientes_aseguradoras".
 *
 * The followings are the available columns in table 'pacientes_aseguradoras':
 * @property integer $id
 * @property string $nombre
 * @property string $apMat
 * @property string $apPat
 * @property string $direccion
 * @property string $email
 * @property string $email2
 * @property string $telefono
 * @property string $telefono2
 * @property string $celular
 * @property string $celular2
 * @property string $aseguradora
 * @property string $folioAseguradora
 * @property string $montoAutorizado
 * @property string $deducible
 * @property string $cuaSeguro
 * @property string $excluciones
 * @property string $obervaciones
 * @property string $fechaAutorizacion
 * @property string $fechaDocumentacionCompleta
 * @property integer $pagoAeguradora
 * @property string $cantPagoAseg
 * @property integer $pagoProveedores
 * @property string $cantPagoProvee
 * @property integer $pagoHonorarios
 * @property string $cantPagoHonorarios
 * @property string $tipoPagoAseg
 * @property string $detallesPagoAseg
 * @property string $fechaPagoAseguradora
 * @property string $fechaCreacion
 */
class PacientesAseguradoras extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pacientes_aseguradoras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apMat, apPat, direccion, email, telefono, aseguradora, folioAseguradora, montoAutorizado, deducible, cuaSeguro, excluciones', 'required'),
			array('pagoAeguradora, pagoProveedores, pagoHonorarios', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('apMat, apPat, aseguradora, folioAseguradora, tipoPagoAseg', 'length', 'max'=>20),
			array('direccion, email, email2', 'length', 'max'=>100),
			array('telefono, telefono2, celular, celular2', 'length', 'max'=>15),
			array('montoAutorizado, cantPagoAseg, cantPagoProvee, cantPagoHonorarios', 'length', 'max'=>30),
			array('deducible, cuaSeguro', 'length', 'max'=>25),
			array('excluciones', 'length', 'max'=>300),
			array('obervaciones', 'length', 'max'=>150),
			array('detallesPagoAseg', 'length', 'max'=>200),
			array('fechaAutorizacion, fechaDocumentacionCompleta, fechaPagoAseguradora, fechaCreacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apMat, apPat, direccion, email, email2, telefono, telefono2, celular, celular2, aseguradora, folioAseguradora, montoAutorizado, deducible, cuaSeguro, excluciones, obervaciones, fechaAutorizacion, fechaDocumentacionCompleta, pagoAeguradora, cantPagoAseg, pagoProveedores, cantPagoProvee, pagoHonorarios, cantPagoHonorarios, tipoPagoAseg, detallesPagoAseg, fechaPagoAseguradora, fechaCreacion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre del Paciente',
			'apPat' => 'Apellido Paterno',
			'apMat' => 'Apellido Materno',
			'direccion' => 'Direccion',
			'email' => 'Email',
			'email2' => 'Email 2',	
			'telefono' => 'Telefono',
			'telefono2' => 'Telefono 2',
			'celular' => 'Celular',
			'celular2' => 'Celular 2',
			'aseguradora' => 'Nombre de la Aseguradora',
			'folioAseguradora' => 'Folio Aseguradora',
			'montoAutorizado' => 'Monto Autorizado',
			'deducible' => 'Deducible',
			'cuaSeguro' => 'CuaSeguro',
			'excluciones' => 'Excluciones',
			'obervaciones' => 'Obervaciones',
			'fechaAutorizacion' => 'Fecha Autorizacion',
			'fechaDocumentacionCompleta' => 'Fecha Documentacion Completa',
			'pagoAeguradora' => 'Pago la  Aseguradora?',
			'cantPagoAseg' => 'Cantidad de Pago de Aseguradora',
			'pagoProveedores' => 'Se Pago a los Proveedores?',
			'cantPagoProvee' => 'Cantidad de Pago de Proveedores',
			'pagoHonorarios' => 'Se pagaron Honorarios?',
			'cantPagoHonorarios' => 'Cantidad de Pago de Honorarios',
			'tipoPagoAseg' => 'Tipo Pago Aseguradora',
			'detallesPagoAseg' => 'Detalles Pago Aseg',
			'fechaPagoAseguradora' => 'Fecha Pago Aseguradora',
			'fechaCreacion' => 'Fecha Creacion',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apMat',$this->apMat,true);
		$criteria->compare('apPat',$this->apPat,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('telefono2',$this->telefono2,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('celular2',$this->celular2,true);
		$criteria->compare('aseguradora',$this->aseguradora,true);
		$criteria->compare('folioAseguradora',$this->folioAseguradora,true);
		$criteria->compare('montoAutorizado',$this->montoAutorizado,true);
		$criteria->compare('deducible',$this->deducible,true);
		$criteria->compare('cuaSeguro',$this->cuaSeguro,true);
		$criteria->compare('excluciones',$this->excluciones,true);
		$criteria->compare('obervaciones',$this->obervaciones,true);
		$criteria->compare('fechaAutorizacion',$this->fechaAutorizacion,true);
		$criteria->compare('fechaDocumentacionCompleta',$this->fechaDocumentacionCompleta,true);
		$criteria->compare('pagoAeguradora',$this->pagoAeguradora);
		$criteria->compare('cantPagoAseg',$this->cantPagoAseg,true);
		$criteria->compare('pagoProveedores',$this->pagoProveedores);
		$criteria->compare('cantPagoProvee',$this->cantPagoProvee,true);
		$criteria->compare('pagoHonorarios',$this->pagoHonorarios);
		$criteria->compare('cantPagoHonorarios',$this->cantPagoHonorarios,true);
		$criteria->compare('tipoPagoAseg',$this->tipoPagoAseg,true);
		$criteria->compare('detallesPagoAseg',$this->detallesPagoAseg,true);
		$criteria->compare('fechaPagoAseguradora',$this->fechaPagoAseguradora,true);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PacientesAseguradoras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
