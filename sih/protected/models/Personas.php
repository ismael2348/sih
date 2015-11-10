<?php

/**
 * This is the model class for table "personas".
 *
 * The followings are the available columns in table 'personas':
 * @property integer $id
 * @property string $nombres
 * @property string $ap_pat
 * @property string $ap_mat
 * @property string $fecha_nac
 * @property string $nss
 * @property string $seguroActivo
 * @property string $rfc
 * @property string $curp
 * @property string $sexo
 * @property string $estado_civil
 * @property string $escolaridad
 * @property string $fecha_ingreso
 * @property string $fecha_creacion
 * @property integer $id_area_puesto
 * @property integer $id_personas_info
 * @property integer $id_turno
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property AsistenciaPersonal[] $asistenciaPersonals
 * @property InventarioAsignado[] $inventarioAsignados
 * @property Nomina[] $nominas
 * @property AreasPuestos $idAreaPuesto
 * @property PersonasInfo $idPersonasInfo
 * @property Turnos $idTurno
 * @property Usuarios[] $usuarioses
 */
class Personas extends CActiveRecord
{
	//Variables de la tabla personasInfo 
	public $email;
	public $telefono;
	public $celular;




	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, ap_pat, ap_mat, fecha_nac, nss, seguroActivo, rfc, curp, sexo, estado_civil, escolaridad, fecha_ingreso, fecha_creacion, id_area_puesto, id_personas_info, id_turno', 'required'),
			array('id_area_puesto, id_personas_info, id_turno, activo', 'numerical', 'integerOnly'=>true),
			array('nombres, ap_pat, ap_mat, fecha_nac, nss, rfc, curp, escolaridad', 'length', 'max'=>100),
			array('sexo, estado_civil', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombres, ap_pat, ap_mat, fecha_nac, nss,seguroActivo, rfc, curp, sexo, estado_civil, escolaridad, fecha_ingreso, fecha_creacion, id_area_puesto, id_personas_info, id_turno, activo', 'safe', 'on'=>'search'),
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
			'asistenciaPersonals' => array(self::HAS_MANY, 'AsistenciaPersonal', 'id_persona'),
			'inventarioAsignados' => array(self::HAS_MANY, 'InventarioAsignado', 'id_encargado'),
			'nominas' => array(self::HAS_MANY, 'Nomina', 'id_persona'),
			'idAreaPuesto' => array(self::BELONGS_TO, 'AreasPuestos', 'id_area_puesto'),
			'idPersonasInfo' => array(self::BELONGS_TO, 'PersonasInfo', 'id_personas_info'),
			'idTurno' => array(self::BELONGS_TO, 'Turnos', 'id_turno'),
			'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'id_persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombres' => 'Nombres',
			'ap_pat' => 'Apellido Paterno',
			'ap_mat' => 'Apellido Materno',
			'fecha_nac' => 'Fecha de Nacimiento',
			'nss' => 'NSS',
			'rfc' => 'RFC',
			'curp' => 'CURP',
			'seguroActivo' => 'Asegurado?',
			'sexo' => 'Sexo',
			'estado_civil' => 'Estado Civil',
			'escolaridad' => 'Escolaridad',
			'fecha_ingreso' => 'Fecha de Ingreso',
			'fecha_creacion' => 'Fecha de Creacion',
			'id_area_puesto' => 'Id Area Puesto',
			'id_personas_info' => 'Id Personas Info',
			'id_turno' => 'Turno',
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
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('ap_pat',$this->ap_pat,true);
		$criteria->compare('ap_mat',$this->ap_mat,true);
		$criteria->compare('fecha_nac',$this->fecha_nac,true);
		$criteria->compare('nss',$this->nss,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('curp',$this->curp,true);
		$criteria->compare('seguroActivo',$this->seguroActivo,true);	
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('escolaridad',$this->escolaridad,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('id_area_puesto',$this->id_area_puesto);
		$criteria->compare('id_personas_info',$this->id_personas_info);
		$criteria->compare('id_turno',$this->id_turno);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
