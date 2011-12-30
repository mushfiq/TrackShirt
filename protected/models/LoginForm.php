<?php

class LoginForm extends CFormModel {

    public $username;
    public $password;

    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // password needs to be authenticated
            array('password', 'authenticate'),
        );
    }
    public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())  // we only want to authenticate when no input errors
		{
			$identity=new UserIdentity($this->username,$this->password);
			$identity->authenticate();
			switch($identity->errorCode)
			{
				case UserIdentity::ERROR_NONE:
					Yii::app()->user->login($identity);
					break;
				case UserIdentity::ERROR_USERNAME_INVALID:
					$this->addError('username','Email address is incorrect.');
					break;
				default: // UserIdentity::ERROR_PASSWORD_INVALID
					$this->addError('password','Password is incorrect.');
					break;
			}
		}
	}

}