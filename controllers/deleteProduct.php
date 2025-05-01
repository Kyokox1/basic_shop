<?php
// Elimina un producto y te redirige a la misma pagina para ver el cambio
include_once "../models/Product.php";

$product = new Product;
$id = $_GET['id']??0;

if ($product->deleteProduct($id)) {
    header("Location: listProducts.php?success=1&message=Producto%20eliminado%20correctamente");
} else {
    header("Location: listProducts.php?success=0&message=Error%20al%20eliminar%20el%20producto");
}
exit();
?>