<?php
include_once "../models/Product.php";
include_once "../models/Category.php";

$prod = new Product();
$category = new Category();

$idProduct = (int)$_GET["id"] ?? 0;

if($idProduct <= 0){
    die("ID de producto inválido");
}

// Obtener producto por id
$product = $prod->getProductById($idProduct);
if(!$product){
    die("Producto no encontrado");
}

// Obtener categorías
$categoriesResult = $category->getCategories();
$categories = [];
while($row = $categoriesResult->fetch_assoc()){
    $categories[] = $row;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST["name"] ?? '';
    $desc = $_POST["description"] ?? '';
    $price = $_POST["price"] ?? 0;
    $stock = $_POST["stock"] ?? 0;
    $urlImage = $_POST["image"] ?? '';
    $idCategory = $_POST["category"] ?? 0;

    //busca si hay algun producto con el mismo nombre
    foreach ($prod->getProducts() as $row) {
        if(strtolower($name)==strtolower($row["name"])){
            header("Location: listProducts.php?success=0&message=Nombre%20Producto%20ya%20Existe");
            exit;
        }
    }

    if($prod->updateProduct($idProduct, $name, $desc, $price, $stock, $urlImage, $idCategory)){
        header("Location: listProducts.php?success=1&message=Producto%20actualizado%20correctamente");
        // exit();
    } else {
        header("Location: listProducts.php?success=0&message=No%20se%20pudo%20actualizar%20el%20producto");
    }
    exit();
}

include_once "../views/editProduct.php";
