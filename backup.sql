DROP DATABASE IF EXISTS basic_shop;

CREATE DATABASE basic_shop;


USE basic_shop;


CREATE TABLE category (
    id_category INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TEXT
);


CREATE TABLE product (
    id_product INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT DEFAULT 0,
    image_url VARCHAR(255),  
    id_category INT,
    FOREIGN KEY (id_category) REFERENCES category(id_category)
);

INSERT INTO category (name, description) VALUES
('Tecnología', 'Dispositivos electrónicos y componentes'),
('Ropa', 'Prendas de vestir y artículos de moda'),
('Alimentos', 'Productos comestibles'),
('Otros', 'Productos varios');

INSERT INTO product (name, description, price, stock, image_url, id_category) VALUES
('Ratón Inalámbrico', 'Ratón ergonómico inalámbrico con conectividad 2.4GHz', 19.99, 100, 'https://www.jobbi.com.bo/15552-thickbox_default/mouse-para-computadora-gamer-t-tgm310-imperial-t-dagger.jpg', 1),
('Camiseta de Algodón', 'Camiseta unisex 100% algodón en varios colores', 12.50, 200, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXfIoIctjhM4CB7VmEcJjza_owEiM72gxZQQ&s', 2),
('Papitas Lay', 'papas de campo, que se cocinan y condimentan a la perfección', 29.95, 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu2mlQPQkEf5qGSYinxCyH5rxR6m-bk_2DZw&s', 3),
('Teclado Mecánico', 'Teclado mecánico con retroiluminación RGB', 59.99, 75, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIrWY9ZpwKPaWuLDeGMzj_BoNjInxQTASMow&s', 1),
('Pantalón Vaquero', 'Pantalón jeans para hombre corte regular', 34.99, 150, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT93K_eCYhC0fPWn7OCme2HtWUMFo-yetoTfA&s', 2),
('Coca Cola', 'Bebida refrescante marca Coca-Cola', 34.99, 150, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3M-xR4PTf-oldWP8s2UWBCDxtZatNqXs1NA&s', 3),
('Juego de Sábanas', 'Juego de sábanas de algodón egipcio, tamaño queen', 45.50, 30, 'https://www.tiendaamiga.com.bo/media/catalog/product/cache/deb88dadd509903c96aaa309d3e790dc/j/g/jgo_de_sabanas_shell_stripe_3_plazas_0_1.jpg', 4);