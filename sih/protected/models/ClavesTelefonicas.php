<?php

/**
 * This is the model class for table "claves_telefonicas".
 *
 * The followings are the available columns in table 'claves_telefonicas':
 * @property integer $id
 * @property integer $id_persona
 * @property integer $id_area
 * @property integer $clave
 * @property integer $nivel
 * @property string $p1
 * @property string $p2
 * @property string $p3
 * @property string $p4
 * @property string $p5
 * @property string $email
 * @property string $fechaCreacion
 *
 * The followings are the available model relations:
 * @property Personas $idPersona
 * @property Personas $idArea
 */
class ClavesTelefonicas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'claves_telefonicas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_persona, id_area,nivel', 'numerical', 'integerOnly'=>true),
			array('id_persona,id_area,nivel,email', 'required'),
			array('p1, p2, p3, p4, p5', 'length', 'max'=>10),
			array('clave', 'length', 'max'=>5),
			array('email', 'length', 'max'=>40),
			array('email', 'email'),
			array('fechaCreacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_persona, id_area, clave, nivel, p1, p2, p3, p4, p5, email, fechaCreacion', 'safe', 'on'=>'search'),
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
			'idPersona' => array(self::BELONGS_TO, 'Personas', 'id_persona'),
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
			'id_persona' => 'Empleado',
			'id_area' => 'Area',
			'clave' => 'Clave',
			'nivel' => 'Nivel',
			'p1' => 'P1',
			'p2' => 'P2',
			'p3' => 'P3',
			'p4' => 'P4',
			'p5' => 'P5',
			'email' => 'Email',
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
		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('id_area',$this->id_area);
		$criteria->compare('clave',$this->clave);
		$criteria->compare('nivel',$this->nivel);
		$criteria->compare('p1',$this->p1,true);
		$criteria->compare('p2',$this->p2,true);
		$criteria->compare('p3',$this->p3,true);
		$criteria->compare('p4',$this->p4,true);
		$criteria->compare('p5',$this->p5,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClavesTelefonicas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
