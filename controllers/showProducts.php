<?php
// Obtiene los productos y los muestra en la view products.php
include_once "../models/Product.php";

$product= new Product;

$categoryId = isset($_GET['category_id']) ? (int)$_GET['category_id'] : null;

// Obtener productos (todos o filtrados por categoría)
if ($categoryId) {
    $products = $product->getProductsByCategory($categoryId);
} else {
    $products = $product->getProducts();
}
include_once "../views/products.php";
