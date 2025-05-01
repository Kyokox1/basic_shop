<?php

class Connection{
    private $serverName= "localhost";
    private $user= "root";
    private $pass= "";
    private $db= "basic_shop";
    protected $conn=null;
    
    public function getConnection(){
        try {
            $this->conn=new mysqli($this->serverName,$this->user,$this->pass,$this->db);

            if($this->conn->connect_error){
                die("Error de conexion: ". $this->conn->connect_error);
            }
            
            return $this->conn;
        } catch (Exception $error) {
            print("Error al conectar: ". $error->getMessage());
        }

    }

    public function closeConnection(){
        try {
            if ($this->conn instanceof mysqli) {
                $this->conn->close();
                $this->conn = null;
            }
        } catch (Exception $error) {
            print("Error al cerrar la conexión: " . $error->getMessage());
        }
    }
}
