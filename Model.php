<?php

define('URL', 'http://localhost/integro');

function Connection(){
    try {
        $connection = new PDO('mysql:host=localhost;dbname=integro;charset=UTF8','root', '');
        return $connection;

    } catch (Exception $e) {
        //echo "ocurrió un problema: ". $e->getMessage();
        return false;
    }
}

function validateIfUserExist($connection, $user){
    $statement = $connection->prepare('SELECT * FROM users WHERE nickname = :user');
    $statement->execute([
        ':user' => $user
    ]);
    
    $result = $statement->fetch();
    return $result;
}

function createUser($connection, $name, $nickname, $password){
   
    $statement = $connection->prepare('INSERT INTO users(id, name, nickname, password) VALUES(NULL, :well, :nickname, :pass)');
    $resultado = $statement->execute(array(
    ':well' => $name,
    ':nickname' => $nickname,
    ':pass' => $password
    ));

    if($resultado === TRUE) echo "Insertado correctamente";
    else echo "Algo salió mal. Por favor verifica que la tabla exista";

}

