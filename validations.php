<?php

class Validation
{
    private $name;
    private $password;
    private $email;
    private $phone;
    
    public function __construct($name, $password, $email, $phone){
        $this->name = $name;
        $this->password = $password;    
        $this->email = $email;
        $this->phone = $phone;
    }
    public function notEmpty(){
        if(!empty($this->name)){
            return true;
        }else{
            return false;
        }
        if(!empty($this->email)){
            return true;
        }else{
            return false;
        }
        if(!empty($this->password)){
            return true;
        }else{
            return false;
        }
        if(!empty($this->phone)){
            return true;
        }else{
            return false;
        }
    }
    public static function validateEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
    public static function validateUserName($username){
        if(preg_match('/^[a-zA-Z0-9]+$/', $username)){
            return true;
    }else{
        return false;
    }
}
        public static function validatePhone($phone){
            if(preg_match('/^[0-9]+$/', $phone)){
                if(strlen($phone) == 11){
                return true;
        }else{
            return false;
        }
    }
}
public static function validatePassword($password){
    if(strlen($password) >= 8 && strlen($password) <= 25){
        return true;
    }else{
        return false;
    }
}
}
