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

  public function insert_usuarios($Nombre_Completo,
                                  $Correo_Electronico,
                                  $Contrasena){

     $sql = "CALL insert_usuarios(?,?,?)";
     $statement = $this->conn->prepare($sql);
     $statement->bindParam(1,$Nombre_Completo);
     $statement->bindParam(2,$Correo_Electronico);
     $statement->bindParam(3,$Contrasena);

    if($statement->execute()){
      return "USARIO REGISTRADO";
     }
     else{
      return "ERROR AL REGISTRAR, INTENTE NUEVAMENTE D:";
     }
    }
  }