<aside class="sidebar">
            <div class="sidebar__logo">
                <h1 class="sidebar__title">Mi Tienda</h1>
            </div>
            
            <div class="sidebar__admin">
                <h3 class="sidebar__subtitle">Administración</h3>
                <a href="../controllers/listProducts.php" class="sidebar__btn sidebar__btn--add">
                    <i class="fas fa-plus"></i> Gestionar Productos
                </a>
            
            </div>
            
            <!-- En la sección de categorías del aside -->
            <div class="sidebar__categories">
                <h3 class="sidebar__subtitle">Categorías</h3>
                <ul class="sidebar__list">
                    <li class="sidebar__item <?= !isset($_GET['category_id']) ? 'sidebar__item--active' : '' ?>">
                        <a href="showProducts.php" class="sidebar__link">
                            <i class="fas fa-box"></i> Todos los productos
                        </a>
                    </li>
                    <?php foreach ($categories as $cat): ?>
                    <li class="sidebar__item <?= (isset($_GET['category_id']) && $_GET['category_id'] == $cat['id_category']) ? 'sidebar__item--active' : '' ?>">
                        <a href="showProducts.php?category_id=<?= $cat['id_category'] ?>" class="sidebar__link">
                            <i class="fas <?= 
                                $cat['name'] == 'Electrónicos' ? 'fa-laptop' : 
                                ($cat['name'] == 'Ropa' ? 'fa-tshirt' : 
                                ($cat['name'] == 'Hogar' ? 'fa-home' : 'fa-box'))
                            ?>"></i>
                            <?= htmlspecialchars($cat['name']) ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>