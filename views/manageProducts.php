<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="icon" href="../public/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="../public/styles/product.css">
    <link rel="stylesheet" href="../public/styles/manageProduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="app">
        <!-- Sidebar (igual al original) -->
        <?php include_once"../controllers/asideCategory.php" ?>

        <!-- Main Content - Tabla de productos -->
        <main class="main">
            <div class="main__header">
                <div class="main__search">
                    <input type="text" class="main__search-input" placeholder="Buscar productos...">
                    <button class="main__search-btn"><i class="fas fa-search"></i></button>
                </div>
                <a href="../controllers/listCategories.php" class="main__add-btn">
                    <i class="fas fa-plus"></i> Añadir Producto
                </a>
            </div>
            
            <h2 class="main__title">Gestión de Productos</h2>
            
            <div class="products-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        try {
                            foreach ($products as $row) {
                                echo "<tr>";
                                    echo "<td>" . $row['id_product'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['description']. "...</td>";
                                    echo "<td>$" . $row['price']. "</td>";
                                    echo "<td>" . $row['stock'] . "</td>";
                                    echo "<td>" . ($row['category_name'] ?? 'Sin categoría') . "</td>";
                                    echo "<td class='actions'>";
                                        echo "<a href='../controllers/updateProduct.php?id=" . $row['id_product'] . "' class='edit-btn'><i class='fas fa-edit'></i></a>";
                                        echo "<a href='../controllers/deleteProduct.php?id=" . $row['id_product'] . "' class='delete-btn' onclick='return confirm(\"¿Estás seguro de eliminar este producto?\")'><i class='fas fa-trash'></i></a>";
                                    echo "</td>";
                                echo "</tr>";
                            }
                        } catch(PDOException $e) {
                            echo "<tr><td colspan='7'>Error al cargar los productos: " . $e->getMessage() . "</td></tr>";
                        }
                        $conn = null;
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <!-- Incluir el mensaje de alerta al final del body -->
    <?php include_once "../views/components/alertMessage.php"; ?>
</body>
</html>