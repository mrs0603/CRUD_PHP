<?php

$host="localhost";
//$port=3306
$username="root";
$password= 1234;
$dbname="crud_php";

try{

    $conexao= new PDO("mysql:host=$host; dbname=$dbname", $username,$password);

}catch(exception $e){

    echo $e;
}



?>