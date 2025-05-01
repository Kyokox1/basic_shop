<?php
// Mostrar cada producto en la tabla ed la view para gestionarlos (CRUD)
include_once "../models/Product.php";

$product = new Product;
$products = $product->getProductsWithCategories();

// Preparar mensaje de alerta si está presente en la URL
$alert = null;
if (isset($_GET['success']) && isset($_GET['message'])) {
    $alert = [
        'type' => $_GET['success'] == "1" ? 'alert-success' : 'alert-error',
        'message' => htmlspecialchars(urldecode($_GET['message']), ENT_QUOTES, 'UTF-8'),
        'icon' => $_GET['success'] == "1" ? '✓' : '✗'
    ];
}

include_once "../views/manageProducts.php";
?>