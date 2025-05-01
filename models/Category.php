<?php
include_once "Connection.php";
class Category extends Connection{
    function getCategories(){
        try {
            $this->getConnection();
            
            $query="SELECT * FROM category";
            $pre=$this->conn->prepare($query);
            $pre->execute();

            $result= $pre->get_result();
            return $result;
        } catch (Exception $error) {
            error_log("Error al obtener Productos: " . $error->getMessage());
        }
    }
}
