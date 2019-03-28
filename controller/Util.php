<?php
    class Util{
        
        public static function getFromPOSTOrGET($name){
            if(array_key_exists($name, $_POST)){
                return $_POST[$name];
            }else if(array_key_exists($name, $_GET)){
                return $_GET[$name];
            }else{
                return NULL;
            }
        }
        
        public static function isAdmin(){
            if(!array_key_exists("connected", $_SESSION))return false;
            return $_SESSION["connected"];
        }
        
        public function hashPassword($password){
            return password_hash($password, PASSWORD_BCRYPT);
        }
    }
?>