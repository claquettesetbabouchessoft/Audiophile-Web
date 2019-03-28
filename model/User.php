<?php
    class User{
        
        private $userID;
        private $nickname;
        private $passwordHash;
        private $mail;
        private $status;
        
        public function __construct($data = NULL){
            if(!is_null($data)){
                $this->userID = $data["userID"];
                $this->nickname = $data["nickname"];
                $this->passwordHash = $data["passwordHash"];
                $this->mail = $data["mail"];
                $this->status = $data["statusID"];
            }
        }
        
        public function setStatus($status){
            $this->status = $status;
        }
        
        public function getPasswordHash(){
            return $this->passwordHash;
        }
        
        public function getUserID(){
            return $this->userID;
        }
        
        public function getNickname(){
            return $this->nickname;
        }
        
        public function getMail(){
            return $this->mail;
        }
    }
?>