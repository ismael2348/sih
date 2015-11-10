<?php

/**
 * This is the model class for table "bitacora_sistemas".
 *
 * The followings are the available columns in table 'bitacora_sistemas':
 * @property integer $id
 * @property integer $id_codigo
 * @property integer $id_area
 * @property integer $id_art
 * @property integer $id_personaRepo
 * @property integer $personaAtendio
 * @property integer $personaSolu
 * @property string $descripcionSolucion
 * @property string $comentarios
 * @property string $fechaSolucion
 * @property string $fechaCreacionReg
 *
 * The followings are the available model relations:
 * @property CatalogoCodigosSistemas $idCodigo
 * @property Areas $idArea
 * @property InventarioEquipoSistemas $idArt
 * @property Personas $idPersonaRepo
 */
class BitacoraSistemas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bitacora_sistemas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcionSolucion, comentarios', 'length', 'max'=>255),
			array(' fechaSolucion, fechaCreacionReg', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_codigo, id_area, id_art,id_consumible, id_personaRepo, personaAtendio, personaSolu, descripcionSolucion, comentarios, fechaSolucion, fechaCreacionReg', 'safe', 'on'=>'search'),
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
			'idCodigo' => array(self::BELONGS_TO, 'CatalogoCodigosSistemas', 'id_codigo'),
			'idArea' => array(self::BELONGS_TO, 'Areas', 'id_area'),
			'idArt' => array(self::BELONGS_TO, 'InventarioEquipoSistemas', 'id_art'),
			'idConsumible' => array(self::BELONGS_TO, 'InventarioConsumiblesSistemas', 'id_consumible'),
			'idPersonaRepo' => array(self::BELONGS_TO, 'Personas', 'id_personaRepo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_codigo' => 'Id Codigo',
			'id_area' => 'Id Area',
			'id_art' => 'Id Art',
			'id_personaRepo' => 'Reporto',
			'id_consumible' => 'Consumible',
			'personaAtendio' => 'Atendio',
			'personaSolu' => 'Soluciono',
			'descripcionSolucion' => 'Descripcion Solucion',
			'comentarios' => 'Comentarios',
			'fechaSolucion' => 'Fecha Solucion',
			'fechaCreacionReg' => 'Fecha Creacion Reg',
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
		$criteria->compare('id_codigo',$this->id_codigo);
		$criteria->compare('id_area',$this->id_area);
		$criteria->compare('id_art',$this->id_art);
		$criteria->compare('id_consumible',$this->id_consumible);	
		$criteria->compare('id_personaRepo',$this->id_personaRepo);
		$criteria->compare('personaAtendio',$this->personaAtendio);
		$criteria->compare('personaSolu',$this->personaSolu);
		$criteria->compare('descripcionSolucion',$this->descripcionSolucion,true);
		$criteria->compare('comentarios',$this->comentarios,true);
		$criteria->compare('fechaSolucion',$this->fechaSolucion,true);
		$criteria->compare('fechaCreacionReg',$this->fechaCreacionReg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BitacoraSistemas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
