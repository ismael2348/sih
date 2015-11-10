<?php

/**
 * This is the model class for table "incidentes_seguim".
 *
 * The followings are the available columns in table 'incidentes_seguim':
 * @property integer $id
 * @property integer $id_usuario
 * @property integer $id_incidente
 * @property string $descripcion
 * @property string $fecha_creacion
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Usuarios $idUsuario
 * @property Incidentes $idIncidente
 */
class IncidentesSeguim extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'incidentes_seguim';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario, id_incidente, descripcion, fecha_creacion', 'required'),
			array('id_usuario, id_incidente, activo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_usuario, id_incidente, descripcion, fecha_creacion, activo', 'safe', 'on'=>'search'),
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
			'idUsuario' => array(self::BELONGS_TO, 'Usuarios', 'id_usuario'),
			'idIncidente' => array(self::BELONGS_TO, 'Incidentes', 'id_incidente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_usuario' => 'Id Usuario',
			'id_incidente' => 'Id Incidente',
			'descripcion' => 'Descripcion',
			'fecha_creacion' => 'Fecha Creacion',
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
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_incidente',$this->id_incidente);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IncidentesSeguim the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
