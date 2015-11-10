<?php

/**
 * This is the model class for table "incidentes".
 *
 * The followings are the available columns in table 'incidentes':
 * @property integer $id
 * @property string $folio
 * @property integer $de_id_usuario
 * @property integer $para_id_area
 * @property string $asunto
 * @property string $descripcion
 * @property string $fecha_creacion
 * @property string $fecha_cierre
 * @property string $estado
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Usuarios $deIdUsuario
 * @property Areas $paraIdArea
 * @property IncidentesSeguim[] $incidentesSeguims
 */
class Incidentes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'incidentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('folio, de_id_usuario, para_id_area', 'required'),
			array('de_id_usuario, para_id_area, activo', 'numerical', 'integerOnly'=>true),
			array('folio, estado', 'length', 'max'=>50),
			array('asunto', 'length', 'max'=>250),
			array('descripcion, fecha_creacion, fecha_cierre', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, folio, de_id_usuario, para_id_area, asunto, descripcion, fecha_creacion, fecha_cierre, estado, activo', 'safe', 'on'=>'search'),
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
			'deIdUsuario' => array(self::BELONGS_TO, 'Usuarios', 'de_id_usuario'),
			'paraIdArea' => array(self::BELONGS_TO, 'Areas', 'para_id_area'),
			'incidentesSeguims' => array(self::HAS_MANY, 'IncidentesSeguim', 'id_incidente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'folio' => 'Folio',
			'de_id_usuario' => 'Usuarios que envia',
			'para_id_area' => 'Área de envio',
			'asunto' => 'Asunto',
			'descripcion' => 'Descripción',
			'fecha_creacion' => 'Fecha de Envio',
			'fecha_cierre' => 'Fecha Cierre',
			'estado' => 'Estado',
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
		$criteria->compare('folio',$this->folio,true);
		$criteria->compare('de_id_usuario',$this->de_id_usuario);
		$criteria->compare('para_id_area',$this->para_id_area);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_cierre',$this->fecha_cierre,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Incidentes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
