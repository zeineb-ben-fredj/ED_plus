<?php
  class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=order_managment', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }

// $servername = "localhost";
// $username = "root";
// $password = "";

// $con= mysqli_connect($servername,$username,$password);

// if (!$con)
// {
// die("connection failed:" . mysqli_connect_error());

// }
// echo "connect successfuly";

?>