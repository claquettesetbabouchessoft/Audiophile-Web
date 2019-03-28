<?php
    class File{
        public static function build_path($path_array) {
            //Dossier racine
            $ROOT_FOLDER = __DIR__;
            $DS = DIRECTORY_SEPARATOR;
            
            //Construction du chemin spécifié
            return $ROOT_FOLDER. $DS . "..". $DS . join($DS, $path_array);
        }
    }
?>