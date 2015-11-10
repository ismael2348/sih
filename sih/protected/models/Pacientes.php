<?php

/**
 * This is the model class for table "pacientes".
 *
 * The followings are the available columns in table 'pacientes':
 * @property integer $id
 * @property string $nombre
 * @property string $apMat
 * @property string $apPat
 * @property string $sexo
 * @property string $estadoCivil
 * @property string $calleNum
 * @property string $colonia
 * @property string $cp
 * @property string $municipio
 * @property string $estado
 * @property string $pais
 * @property string $email
 * @property string $email2
 * @property string $telefono
 * @property string $telefono2
 * @property string $celular
 * @property string $celular2
 * @property integer $depositoRiesgos
 * @property string $montoDepositado
 * @property string $fechaCreacion
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property PacientesAseguradora[] $pacientesAseguradoras
 * @property Visitas[] $visitases
 */
class Pacientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pacientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apMat, apPat, sexo, religion,estadoCivil, calleNum, colonia, cp, municipio, estado, pais, email, telefono', 'required'),
			array('depositoRiesgos, activo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('apMat, apPat, montoDepositado', 'length', 'max'=>20),
			array('sexo, cp', 'length', 'max'=>10),
			array('estadoCivil, telefono, telefono2, celular, celular2', 'length', 'max'=>15),
			array('calleNum, colonia, municipio, estado, pais, email, email2', 'length', 'max'=>100),
			array('fechaCreacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apMat, apPat, sexo, estadoCivil, calleNum, colonia, cp, municipio, estado, pais, email, email2, telefono, telefono2, celular, celular2, depositoRiesgos, montoDepositado, fechaCreacion, activo', 'safe', 'on'=>'search'),
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
			'pacientesAseguradoras' => array(self::HAS_MANY, 'PacientesAseguradora', 'id_visita'),
			'visitases' => array(self::HAS_MANY, 'Visitas', 'id_paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apMat' => 'Apellido Materno',
			'apPat' => 'Apellido Paterno',
			'sexo' => 'Sexo',
			'religion' => 'Religion',
			'estadoCivil' => 'Estado Civil',
			'calleNum' => 'Calle y numero',
			'colonia' => 'Colonia',
			'cp' => 'Cp',
			'municipio' => 'Municipio',
			'estado' => 'Estado',
			'pais' => 'País',
			'email' => 'Email',
			'email2' => 'Email2',
			'telefono' => 'Teléfono',
			'telefono2' => 'Teléfono2',
			'celular' => 'Celular',
			'celular2' => 'Celular2',
			'depositoRiesgos' => 'Deposito Riesgos',
			'montoDepositado' => 'Monto Depositado',
			'fechaCreacion' => 'Fecha Creacion',
			'activo' => 'Activo',
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
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('estadoCivil',$this->estadoCivil,true);
		$criteria->compare('calleNum',$this->calleNum,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('cp',$this->cp,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('telefono2',$this->telefono2,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('celular2',$this->celular2,true);
		$criteria->compare('depositoRiesgos',$this->depositoRiesgos);
		$criteria->compare('montoDepositado',$this->montoDepositado,true);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pacientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
