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