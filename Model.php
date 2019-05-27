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

function loginAction($connection, $nickname, $password){
    $statement = $connection->prepare('SELECT * FROM users WHERE nickname = :nickname AND password = :password LIMIT 1');
    $statement->execute(array(
            ':nickname' => $nickname,
            ':password' => $password
    ));

    return $statement->fetch();
}

function createUser($connection, $name, $nickname, $password){
   
    $statement = $connection->prepare('INSERT INTO users(id, name, nickname, password) VALUES(NULL, :well, :nickname, :pass)');
    $result = $statement->execute(array(
    ':well' => $name,
    ':nickname' => $nickname,
    ':pass' => $password
    ));

    if($result === TRUE) {
        return TRUE;
    } else {
        return FALSE;
    }

}

function createNewMovie($connection, $title, $synopsis, $date){
    $statement = $connection->prepare('INSERT INTO movies(id, name, synopsis, date,) VALUES(NULL, :title, :synopsis, :dat)');
    $result = $statement->execute(array(
        ':title' => $title,
        ':synopsis' => $synopsis,
        ':dat' => $date        
    ));

    if ($result === TRUE) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function getAllMovies($connection){
    $statement = $connection->prepare('SELECT * FROM movies');
    $statement->execute();

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}