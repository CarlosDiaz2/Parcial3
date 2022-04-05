<?php

/**
 * Esta clase te permitira conectar a tu base de datos
 * @Autor: Carlos R. Diaz
 */

class Conecction {

    public $driver;
    public $host;
    public $user;
    public $password;
    public $database;
    public $conn;

    function __construct(){
      $this->driver = "mysql";
      $this->host = "localhost";
      $this->user = "root";
      $this->password = "";
      $this->database = "clima2_0";

      $this->get_Connection();

    }

  public function get_Connection(){
      $this->conn = new PDO($this->driver.":"."host=".$this->host.";"."dbname=".$this->database,$this->user,$this->password);

      if (!$this->conn){
        echo "Error al conectar";
      }
   }

   public function insert_login($Correo_Electronico, $Contrasena){

    $sql = "CALL insert_login(?,?)";
    $statement = $this->conn->prepare($sql);

    $statement->bindParam(1,$Correo_Electronico);
    $statement->bindParam(2,$Contrasena);

    if($statement->execute()){

      $count=$statement->rowCount();
      
      if($count){
        $cookie_name = "sesion";
        $cookie_value = $Correo_Electronico;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        return true;
      }
      else{
        return false;
      }
    }
  }
}