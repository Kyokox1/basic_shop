<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Shop</title>
    <link rel="icon" href="../public/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="../public/styles/product.css">
    <link rel="stylesheet" href="../public/styles/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
         <?php include_once"../controllers/asideCategory.php" ?>
        
        <!-- Main Content -->
        <main class="main">
            <div class="main__search">
                <input type="text" class="main__search-input" placeholder="Buscar productos...">
                <button class="main__search-btn"><i class="fas fa-search"></i></button>
            </div>
            
            <h2 class="main__title">Productos Destacados</h2>
            
            <div class="products">
                <?php
                try {
                    
                    foreach ($products as $row) {
                        echo '<div class="products__card">';
                        echo     '<div class="products__image">';
                        echo         "<img src=".($row["image_url"] ?? "https://via.placeholder.com/200")." alt='Producto' class='products__img'>";
                        echo     '</div>';
                        echo     '<div class="products__info">';
                        echo         '<h3 class="products__name">'. $row["name"] .'</h3>';
                        echo         '<h2 class="products__description">'. $row["description"] .'</h2>';
                        echo         '<p class="products__price">'. $row["price"].'</p>';
                        echo         '<p class="products__stock">Disponibles: '.$row["stock"].'</p>';
                        echo         '<button class="products__btn">Añadir al carrito</button>';
                        echo     '</div>';
                        echo '</div>';
                    }
                } catch (Exception $error) {
                    echo "<h2> Error al cargar productos: ".$error->getMessage()."</h2>";
                }
                
                ?>
            </div>
        </main>
    </div>
</body>
</html>