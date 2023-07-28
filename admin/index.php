<?php
require "../global.php";
require "..$MODEL_URL/pdo.php";
require "..$MODEL_URL/product.php";

$action = isset($_GET['act']) ? $_GET['act'] : 'index';
switch ($action) {
    case 'index':
       require ".$VIEW_URL/main.php";
        break;
    case 'add_product':
        require ".$PRODUCT_URL/add_product.php";
        break;
    case 'view_product':
        require ".$PRODUCT_URL/productList.php";
        break;
    case 'update_product':
        require ".$PRODUCT_URL/update_product.php";
        break;
    case 'delete_product':
        require ".$PRODUCT_URL/delete_product.php";
        break;
    default:
        echo "Không có gì";
        echo "admin";
        break;
}