<?php
    include_once('models/User.php');

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $db = new User(); //User Instance

    try{
        $register = $db->registerUser($name,$lastname,$phone,$email,$password); //Register User

        echo json_encode($db->getUser($register));
    }catch (Exception $e){
        echo "Não foi possivel cadastrar o usuario! $e->getMessage()";
    }
    