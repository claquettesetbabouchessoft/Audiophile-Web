<?php
    require_once File::build_path(array("model", "Auth.php"));
    require_once File::build_path(array("model", "User.php"));

    class DBUser{
        
        public static function getById($id){
            $sql = "SELECT U.userID, U.nickname, U.mail, U.passwordHash, L.statusID
                    FROM Users U
                    JOIN Users_level L ON L.userID = U.userID
                    WHERE U.userID = :id";
            $req_prep = Auth::$PDO->prepare($sql);
            $req_prep->execute(array("id" => $id));
            $req_prep->setFetchMode(PDO::FETCH_ASSOC);
            $tab = $req_prep->fetchAll();
            
            if(count($tab) < 1)return NULL;
            return new User($tab[0]);
        }
        
        public static function getByMail($mail){
            $sql = "SELECT U.userID, U.nickname, U.mail, U.passwordHash, L.statusID
                    FROM Users U
                    JOIN Users_level L ON L.userID = U.userID
                    WHERE U.mail = :mail";
            $req_prep = Auth::$PDO->prepare($sql);
            $req_prep->execute(array("mail" => $mail));
            $req_prep->setFetchMode(PDO::FETCH_ASSOC);
            $tab = $req_prep->fetchAll();
            if(count($tab) < 1)return NULL;
            return new User($tab[0]);
        }
        
    }
?>