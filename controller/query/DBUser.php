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
        
        public static function pushNew($mail, $nickname, $password){
        	//insert user
        	$sql = "INSERT INTO Users (mail, nickname, passwordHash) VALUES (:mail, :nickname, :passwordHash)";
        	$req_prep = Auth::$PDO->prepare($sql);
        	$req_prep->execute(array("mail" => $mail, "nickname" => $nickname, "passwordHash" => password_hash($password, PASSWORD_BCRYPT)));
        	
        	///get user
        	$sql_user = "SELECT userID
						 FROM Users
						 WHERE mail = :mail";
        	$req_prep_user = Auth::$PDO->prepare($sql_user);
        	$req_prep_user->execute(array("mail" => $mail));
        	$req_prep_user->setFetchMode(PDO::FETCH_ASSOC);
        	$tab_user = $req_prep_user->fetchAll();
        	$userID = $tab_user[0]["userID"];
        	
        	//insert user level
        	$sql_level = "INSERT INTO Users_Level VALUES (:userID, :statusID)";
        	$req_prep_level = Auth::$PDO->prepare($sql_level);
        	$req_prep_level->execute(array("userID" => $userID, "statusID" => "0"));
        }
        
    }
?>