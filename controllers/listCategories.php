<?php
//Obtiene las categorias para el select del formulario en manageProducts.php
include_once "../models/Category.php";
include_once "../models/Product.php";

$category=new Category;
$categories=$category->getCategories();

$product= new Product;


if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["name"];
    $desc=$_POST["description"];
    $price=$_POST["price"];
    $stock=$_POST["stock"];
    $urlImage=$_POST["image"];
    $idCategory=$_POST["category"];

    if($product->addProduct($name,$desc,$price,$stock,$urlImage,$idCategory)){
        header("Location: listProducts.php?success=1&message=Producto%20agregado%20correctamente");
        // exit();
    } else {
        header("Location: listProducts.php?success=0&message=No%20se%20pudo%20agregar%20el%20producto");

    }
    exit();
}


include_once "../views/addProduct.php";