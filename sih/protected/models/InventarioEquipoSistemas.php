<?php

/**
 * This is the model class for table "inventario_equipo_sistemas".
 *
 * The followings are the available columns in table 'inventario_equipo_sistemas':
 * @property integer $id
 * @property integer $id_area
 * @property string $equipo
 * @property string $marca
 * @property string $modelo
 * @property string $numero_serie
 * @property string $fecha_reg
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property BitacoraSistemas[] $bitacoraSistemases
 * @property Areas $idArea
 */
class InventarioEquipoSistemas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inventario_equipo_sistemas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_area, equipo, marca, modelo, numero_serie', 'required'),
			array('id_area, activo', 'numerical', 'integerOnly'=>true),
			array('equipo, marca, modelo, numero_serie', 'length', 'max'=>250),
			array('fecha_reg', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_area, equipo, marca, modelo, numero_serie, fecha_reg, activo', 'safe', 'on'=>'search'),
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
			'bitacoraSistemases' => array(self::HAS_MANY, 'BitacoraSistemas', 'id_art'),
			'idArea' => array(self::BELONGS_TO, 'Areas', 'id_area'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_area' => 'Id Area',
			'equipo' => 'Equipo',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'numero_serie' => 'Numero Serie',
			'fecha_reg' => 'Fecha Reg',
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
		$criteria->compare('id_area',$this->id_area);
		$criteria->compare('equipo',$this->equipo,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('numero_serie',$this->numero_serie,true);
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
	 * @return InventarioEquipoSistemas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
