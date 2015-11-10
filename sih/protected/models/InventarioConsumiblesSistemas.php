<?php

/**
 * This is the model class for table "inventario_consumibles_sistemas".
 *
 * The followings are the available columns in table 'inventario_consumibles_sistemas':
 * @property integer $id
 * @property string $area
 * @property string $consumible_de
 * @property string $tamano
 * @property string $cantidad
 * @property string $marca
 * @property string $modelo
 * @property string $fecha_reg
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property StockSistemas[] $stockSistemases
 */
class InventarioConsumiblesSistemas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inventario_consumibles_sistemas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area, consumible_de, tamano, cantidad, marca, modelo', 'required'),
			array('activo', 'numerical', 'integerOnly'=>true),
			array('area, consumible_de, tamano, cantidad, marca, modelo', 'length', 'max'=>250),
			array('fecha_reg', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, area, consumible_de, tamano, cantidad, marca, modelo, fecha_reg, activo', 'safe', 'on'=>'search'),
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
			'stockSistemases' => array(self::HAS_MANY, 'StockSistemas', 'id_inv_cat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'area' => 'Nombre',
			'consumible_de' => 'Consumible de',
			'tamano' => 'Tamano',
			'cantidad' => 'Cantidad',
			'marca' => 'Marca',
			'modelo' => 'Modelo',
			'fecha_reg' => 'Fecha de Registro',
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
		$criteria->compare('area',$this->area,true);
		$criteria->compare('consumible_de',$this->consumible_de,true);
		$criteria->compare('tamano',$this->tamano,true);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modelo',$this->modelo,true);
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
	 * @return InventarioConsumiblesSistemas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
