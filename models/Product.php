<?php
include_once "Connection.php";
class Product extends Connection{
    

    function addProduct($name,$desc,$price,$stock,$urlImg,$idCat){
        try {
            $this->getConnection();
            $query="INSERT INTO product(name,description,price,stock,image_url,id_category) VALUES (?,?,?,?,?,?)";
    
            $pre=$this->conn->prepare($query);
    
            $pre->bind_param("ssdisi",$name,$desc,$price,$stock,$urlImg,$idCat);
            $pre->execute();
            return $pre;
        } catch (Exception $error) {
            print("No se pudo agregar Producto: ". $error->getMessage());
        }
    }

    function deleteProduct($id){
        try {
            $this->getConnection();
            $query="DELETE FROM product WHERE id_product = ?";
    
            $pre=$this->conn->prepare($query);
    
            $pre->bind_param("i",$id);
            return $pre->execute();
        } catch (Exception $error) {
            print("No se pudo eliminar Producto: ". $error->getMessage());
            return false;
        }
    }

    function updateProduct($id, $name, $desc, $price, $stock, $urlImg, $idCat){
        $this->getConnection();
        $query = "UPDATE product SET 
                name = ?, 
                description = ?, 
                price = ?,
                stock = ?,
                image_url = ?,
                id_category = ?
                WHERE id_product = ?";
    
        $pre = $this->conn->prepare($query);
        $pre->bind_param("ssdisii", $name, $desc, $price, $stock, $urlImg, $idCat, $id);
        return $pre->execute();
    }

    function getProducts(){
        try {
            $this->getConnection();
            $query="SELECT * FROM product";
    
            $pre=$this->conn->prepare($query);
    
            $pre->execute();
            $result= $pre->get_result();
    
            return $result;
        } catch (Exception $error) {
            print("Error al obtener Productos: " . $error->getMessage());
        }
    }

    function getProductById($id){
        try {
            $this->getConnection();
            $query = "SELECT * FROM product WHERE id_product = ?";
            $pre = $this->conn->prepare($query);
            $pre->bind_param("i", $id);
            $pre->execute();
            $result = $pre->get_result();
            
            // Convierte a array
            return $result->fetch_assoc();
    
        } catch (Exception $error) {
            print("Error al obtener Productos: " . $error->getMessage());
            return false;
        }
    }
    

    function getProductsByCategory($id){
        try {
            $this->getConnection();
            $query="SELECT * FROM product WHERE id_category=?";
    
            $pre=$this->conn->prepare($query);
            $pre->bind_param("i",$id);
            $pre->execute();
            $result= $pre->get_result();
    
            return $result;
        } catch (Exception $error) {
            print("Error al obtener Productos: " . $error->getMessage());
        }
    }

    function getProductsWithCategories() {
        try {
            $this->getConnection();
            $query = "SELECT p.*, c.name AS category_name 
                      FROM product p 
                      LEFT JOIN category c ON p.id_category = c.id_category";
            
            $pre = $this->conn->prepare($query);
            $pre->execute();
            $result = $pre->get_result();
            
            $products = [];
            while($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
            return $products;
            
        } catch (Exception $error) {
            error_log("Error al obtener productos con categorías: " . $error->getMessage());
            return false;
        }
    }
} 
