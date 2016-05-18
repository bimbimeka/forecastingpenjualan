<?php
class UserLevel {
    const ADMIN = 'administrator';
    const KEYUSER = 'keyuser';
    const ENDUSER = 'enduser';
    public static function getLabel ($user){
        if ($user == self::ADMIN)
            return ADMIN;
        if ($user == self::KEYUSER)
            return KEYUSER;
        if ($user == self::ENDUSER)
            return ENDUSER;
    }
    public static function getList(){
        return array (
			self::ADMIN => self::getLabel(self::ADMIN),
			self::KEYUSER => self::getLabel(self::KEYUSER),
			self::ENDUSER => self::getLabel(self::ENDUSER),
        );
    }
}
?>