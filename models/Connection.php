<?php
    //DB connection Class
    class Connection{
        private $host = 'mysql:host=localhost;dbname=crudphpajaxbs;port=3306'; //BD Path
        private $user = 'root'; //Username
        private $pass = ''; //Password

        //Do connection
        protected function doConnection(){
            return new PDO($this->host,$this->user,$this->pass);
        }
    }
?>