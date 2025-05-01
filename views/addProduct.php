<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Producto</title>
    <link rel="stylesheet" href="../public/styles/product.css">
    <link rel="stylesheet" href="../public/styles/product.css">
    <link rel="stylesheet" href="../public/styles/addProduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
        
        <?php include_once"../controllers/asideCategory.php" ?>

        <!-- Main Content - Formulario -->
        <main class="main">
            <div class="main__header">
                <h2 class="main__title">Añadir Nuevo Producto</h2>
                <a href="listProducts.php" class="main__back-btn">
                    <i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
            
            <form  method="POST" class="product-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nombre del Producto</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="price">Precio ($)</label>
                        <input type="number" id="price" name="price" step="0.01" min="0" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" id="stock" name="stock" min="0" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="category">Categoría</label>
                    <select id="category" name="category" required>
                        <option value="">Seleccione una categoría</option>
                        <?php
                        try {
                                foreach ($categories as $row) {
                                    echo "<option value='" . $row['id_category'] ." '>" . $row['name'] . "</option>";
                                }
                                
                        } catch (\Throwable $th) {
                            echo"<option value=''>Error al cargar categorias...</option>";
                        }
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="image">Imagen del Producto</label>
                    <input type="text" id="image" name="image" accept="image/*">
                </div>
                
                <div class="form-actions">
                    <button type="reset" class="cancel-btn">Limpiar</button>
                    <button type="submit" class="submit-btn">Guardar Producto</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>

<?php
