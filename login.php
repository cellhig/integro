<?php
session_start();

if (isset($_SESSION['nickname'])) {
    header('Location: index.php');
}

require 'Model.php';

$connection = Connection();

if (!$connection) {
    //echo 'no se pudo conectar';
    header('location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nickname = $_POST['nickname'];
    $password = md5($_POST['password']);

    $loginAction = loginAction($connection, $nickname, $password);

    if ($loginAction != FALSE) {
        $_SESSION['nickname'] = $nickname;
        //echo $_SESSION['nickname'];
        header('location /../views/index.php');
    } else {
        echo 'usuario no existe';
    }
    

}

require 'views/login.php';