<?php
// obtiene las categorias y las muestra en el componente aside.php
include_once "../models/Category.php";

$category= new Category;

$categories= $category->getCategories();

include "../views/components/aside.php";