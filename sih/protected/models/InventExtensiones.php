<?php

/**
 * This is the model class for table "invent_extensiones".
 *
 * The followings are the available columns in table 'invent_extensiones':
 * @property integer $id
 * @property integer $id_ip
 * @property integer $id_area
 * @property string $tipo_equipo
 * @property integer $num_ext
 * @property string $fecha_reg
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property InventIp $idIp
 * @property Areas $idArea
 */
class InventExtensiones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'invent_extensiones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ip, id_area, tipo_equipo, num_ext', 'required'),
			array('id_ip, id_area, num_ext, activo', 'numerical', 'integerOnly'=>true),
			array('tipo_equipo', 'length', 'max'=>250),
			array('fecha_reg', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_ip, id_area, tipo_equipo, num_ext, fecha_reg, activo', 'safe', 'on'=>'search'),
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
			'idIp' => array(self::BELONGS_TO, 'InventIp', 'id_ip'),
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
			'id_ip' => 'Direccion IP',
			'id_area' => 'Area de la Extencion',
			'tipo_equipo' => 'Tipo Equipo',
			'num_ext' => 'Numero de Extencion',
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
		$criteria->compare('id_ip',$this->id_ip);
		$criteria->compare('id_area',$this->id_area);
		$criteria->compare('tipo_equipo',$this->tipo_equipo,true);
		$criteria->compare('num_ext',$this->num_ext);
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
	 * @return InventExtensiones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	protected function afterFind()
    {
        
        $this->activo = $this->activo == 1 ? "SI" : "NO"; 

        parent::afterFind();
    }
    
}
