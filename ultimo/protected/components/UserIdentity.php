<?php


class UserIdentity extends CUserIdentity
{
	public function authenticate()
	{
		$atts = array('rut' => $this->username);
			$empleado = Empleado::model()->findByAttributes($atts); 
			if(($empleado===null))
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			elseif($empleado->contrasena!==$this->password)
					$this->errorCode=self::ERROR_PASSWORD_INVALID;
			else
				$this->errorCode=self::ERROR_NONE;
	return !$this->errorCode;
	}
}