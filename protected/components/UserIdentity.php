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
	public function authenticate()
	{
		$user = User::model()->findByAttributes(array('username'=>$this->username));
		$pass = 'kepo'.sha1($this->password);
        if (isset($user)){
            if($pass === $user->password){
                $this->setState('id', $user->id);
                $this->setState('_level', $user->level);
               
                $this->errorCode=self::ERROR_NONE;            
            }else{
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
            }
        } else{
         $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
        return !$this->errorCode;
	}
}