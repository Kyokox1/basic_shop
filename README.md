## Diagrama Entidad Relación

**copia el link en tu navegador**

https://excalidraw.com/#json=NgS62myCPf_OQ34F371We,Vze92btOL1HmO9D_7_ub5A

---

## 📄 Descripción de Archivos y Carpetas

```
/www
│
├── backup.txt                  # Instrucciones SQL para crear la base de datos y tablas
├── controllers                 # Controladores que manejan la lógica de la aplicación
│ ├── asideCategory.php         # Muestra las categorías en la barra lateral
│ ├── deleteProduct.php         # Elimina un producto y redirige a la gestión de productos
│ ├── listCategories.php        # Obtiene categorías para el formulario de gestión de productos
│ ├── listProducts.php          # Muestra productos en una tabla y maneja mensajes de alerta
│ ├── showProducts.php          # Muestra productos, filtrados por categoría si es necesario
│ └── updateProduct.php         # Maneja la actualización de productos existentes
│
├── index.php                   # Punto de entrada de la aplicación
│
├── models                      # Clases que interactúan con la base de datos
│ ├── Category.php              # Maneja operaciones relacionadas con las categorías
│ ├── Connection.php            # Establece la conexión a la base de datos
│ └── Product.php               # Maneja operaciones relacionadas con los productos
│
├── public                      # Archivos públicos, como estilos y imágenes
│ ├── styles                    # Contiene archivos CSS para el estilo de la aplicación
│ │ ├── addProduct.css          # Estilos para el formulario de añadir producto
│ │ ├── deleteProduct.css       # Estilos para mensajes de alerta de eliminación
│ │ ├── editProduct.css         # Estilos para el formulario de edición de productos
│ │ ├── manageProduct.css       # Estilos para la gestión de productos
│ │ └── product.css             # Estilos base y variables para la aplicación
│ └── images                    # Carpeta para imágenes
│
├── README.md                   # Documentación del proyecto
│
└── views                       # Vistas de la aplicación
├── addProduct.php              # Formulario para añadir un nuevo producto
├── components                  # Componentes reutilizables
│ ├── alertMessage.php          # Componente para mostrar mensajes de alerta
│ └── aside.php                 # Componente de la barra lateral que muestra categorías
├── editProduct.php             # Formulario para editar un producto existente
├── manageProducts.php          # Página que muestra la lista de productos
└── products.php                # Página que muestra los productos destacados
```

---

## 🚀 Características del Proyecto

-   **Gestión de Productos**: Añadir, editar y eliminar productos de manera sencilla.
-   **Interfaz de Usuario**: Diseño limpio y funcional.
-   **Gestión de Categorías**: Organizar productos en diferentes categorías.
-   **Mensajes de Alerta**: Notificaciones para informar sobre el éxito o error de las operaciones.

---

## 📋 Requisitos

-   PHP 7.0 o superior
-   MySQL
-   Servidor web (Apache o Nginx)

---

## 🛠 Instalación

1. Clona el repositorio o descarga los archivos.
2. Importa el archivo `backup.txt` en tu base de datos MySQL.
3. Configura la conexión a la base de datos en `Connection.php` si es necesario.
4. Accede a `index.php` en tu navegador para comenzar a usar la aplicación.

---
