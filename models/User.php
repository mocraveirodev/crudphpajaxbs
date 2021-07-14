<?php
    include_once 'Connection.php';
    
    class User extends Connection {
        public function registerUser($name,$lastname,$phone,$email,$password){
            $db = parent::doConnection(); //Call Connection class
            $query = $db->prepare("INSERT INTO users (name,lastname,phone,email,password) VALUES (?,?,?,?,?)"); //Prepare query to insert a DB
            $query->execute([$name,$lastname,$phone,$email,$password]); //Executa query para inserir no BD
            $last_insert_id = $db->lastInsertId();
            return $last_insert_id;
        }
        
        public function getUser($id){
            $db = parent::doConnection(); //Call Connection class
            $query = $db->prepare("SELECT * FROM users WHERE id = :id"); //Prepara e executa query para pegar todos os dados do usuario
            $query->bindValue(":id", $id);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ); //Transforma dados do BD em um array de Objetos
            unset($resultado->password);
            return $resultado;
        }
    }
?>