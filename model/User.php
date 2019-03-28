<?php
    class User{
        
        private $userID;
        private $nickname;
        private $passwordHash;
        private $mail;
        
        public function __construct($data = NULL){
            if(!is_null($data)){
                $this->userID = $data["userID"];
                $this->nickname = $data["nickname"];
                $this->passwordHash = $data["passwordHash"];
                $this->mail = $data["mail"];
            }
        }
    }
?>