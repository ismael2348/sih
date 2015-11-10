<?php

/**
 * This is the model class for table "aseguradoras".
 *
 * The followings are the available columns in table 'aseguradoras':
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $domicilioFiscal
 * @property string $rfc
 * @property string $email
 * @property string $email2
 * @property string $telefono
 * @property string $telefono2
 * @property string $celular
 * @property string $celular2
 * @property string $direccionWeb
 * @property string $observaciones
 * @property string $fecha_reg
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property PacientesAseguradora[] $pacientesAseguradoras
 */
class Aseguradoras extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aseguradoras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'unique', 'attributeName'=>'nombre','message'=>'Ya exsiste esta Aseguradora.'),
			array('email', 'unique', 'attributeName'=>'email','message'=>'Ya exsiste este correo electronico. .'),
			array('nombre, direccion, email, telefono', 'required'),
			array('activo', 'numerical', 'integerOnly'=>true),
			array('nombre, direccion, domicilioFiscal, email, email2', 'length', 'max'=>50),
			array('rfc, telefono, telefono2', 'length', 'max'=>15),
			array('celular, celular2, direccionWeb', 'length', 'max'=>20),
			array('observaciones', 'length', 'max'=>255),
			array('fecha_reg', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, direccion, domicilioFiscal, rfc, email, email2, telefono, telefono2, celular, celular2, direccionWeb, observaciones, fecha_reg, activo', 'safe', 'on'=>'search'),
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
			'pacientesAseguradoras' => array(self::HAS_MANY, 'PacientesAseguradora', 'id_aseguradora'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Identificador',
			'nombre' => 'Nombre',
			'direccion' => 'Direcciòn',
			'domicilioFiscal' => 'Domicilio Fiscal',
			'rfc' => 'RFC',
			'email' => 'Email',
			'email2' => 'Email (2)',
			'telefono' => 'Telefono',
			'telefono2' => 'Telefono (2)',
			'celular' => 'Celular',
			'celular2' => 'Celular (2)',
			'direccionWeb' => 'Direccion Web',
			'observaciones' => 'Observaciones',
			'fecha_reg' => 'Fecha de creacion',
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
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('domicilioFiscal',$this->domicilioFiscal,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('telefono2',$this->telefono2,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('celular2',$this->celular2,true);
		$criteria->compare('direccionWeb',$this->direccionWeb,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('fecha_reg',$this->fecha_reg,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aseguradoras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/*protected function afterFind()
    {
        
        $this->activo = $this->activo == 1 ? "SI" : "NO"; 

        parent::afterFind();
    }*/
}
