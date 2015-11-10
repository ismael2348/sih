<?php

/**
 * This is the model class for table "roles_modulos".
 *
 * The followings are the available columns in table 'roles_modulos':
 * @property integer $id
 * @property integer $id_rol
 * @property integer $id_modulo
 * @property integer $activo
 * @property integer $permisos
 *
 * The followings are the available model relations:
 * @property Roles $idRol
 * @property Modulos $idModulo
 */
class RolesModulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'roles_modulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rol, id_modulo', 'required'),
			array('id_rol, id_modulo, activo, permisos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_rol, id_modulo, activo, permisos', 'safe', 'on'=>'search'),
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
			'idRol' => array(self::BELONGS_TO, 'Roles', 'id_rol'),
			'idModulo' => array(self::BELONGS_TO, 'Modulos', 'id_modulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_rol' => 'Id Rol',
			'id_modulo' => 'Id Modulo',
			'activo' => 'Activo',
			'permisos' => 'Permisos',
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
		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('id_modulo',$this->id_modulo);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('permisos',$this->permisos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RolesModulos the static model class
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
