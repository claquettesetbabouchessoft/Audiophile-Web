<?php 
    class UserStatus{
        
        private $statusID;
        private $name;
        
        public function __construct($data = NULL){
            if(!is_null($data)){
                $this->statusID = $data["statusID"];
                $this->name = $data["name"];
            }
        }
    }
?>