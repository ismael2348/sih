<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	private $_rol;
	private $_datosPersonales;
	private $_areaPuesto;
	private $_permisos;

	public function authenticate()
	{

		$user=Usuarios::model()->find("LOWER(usuario)=?",array(strtolower($this->username)));
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);*/
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($this->password!==$user->contrasena)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->_id=$user->id;
			$this->setState("id",$user->id);
			
			//$this->setState("rol",$user->rol);
			$empleado = Personas::model()->findByPk($user->id_persona);


			$permisosObj = RolesModulos::model()->findAllByAttributes(array("id_rol"=>$user->id_rol));
			$permisosArr = array();

			foreach($permisosObj as $valor)
				$permisosArr[Modulos::model()->findByPk($valor["id_modulo"])->nombre] = $valor["permisos"];

			$this->setState("permisos",$permisosArr);




			$this->setState("datosPersonales",strtoupper( substr($empleado->nombres,0,6)." ".$empleado->ap_pat." (".Roles::model()->findByPk($user->id_rol)->nombre.")"));
			$this->setState("areaPuesto",strtoupper(Puestos::model()->findByPk(AreasPuestos::model()->findByPk($empleado->id_area_puesto)->id_puesto)->nombre." EN EL ÁREA DE ".Areas::model()->findByPk(AreasPuestos::model()->findByPk($empleado->id_area_puesto)->id_area)->nombre));
			//Yii::app()->user->getState("usuario");
			//Yii::app()->user->getState("usuario");
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}

