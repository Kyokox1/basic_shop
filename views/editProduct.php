<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../public/styles/product.css">
    <link rel="stylesheet" href="../public/styles/product.css">
    <link rel="stylesheet" href="../public/styles/editProduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
        <?php include_once"../controllers/asideCategory.php" ?>

        <!-- Main Content -->
        <main class="main">
            <div class="main__header">
                <h2 class="main__title">Editar Producto</h2>
                <a href="listProducts.php" class="main__back-btn">
                    <i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>
            
            <?php if (isset($error)): ?>
                <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            
            <form method="POST" class="product-form">
                <input type="hidden" name="id_product" value="<?= $product['id_product'] ?>">
                
                <div class="form-group">
                    <label for="name">Nombre del Producto</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea id="description" name="description" rows="4" required><?= htmlspecialchars($product['description']) ?></textarea>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="price">Precio ($)</label>
                        <input type="number" id="price" name="price" step="0.01" min="0" value="<?= $product['price'] ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" id="stock" name="stock" min="0" value="<?= $product['stock'] ?>" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="category">Categoría</label>
                    <select id="category" name="category" required>
                        <option value="">Seleccione una categoría</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['id_category'] ?>" <?= $category['id_category'] == $product['id_category'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($category['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="form-actions">
                    <a href="manageProducts.php" class="cancel-btn">Cancelar</a>
                    <button type="submit" class="submit-btn">Guardar Cambios</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>