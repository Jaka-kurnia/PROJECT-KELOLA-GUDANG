<!-- content.php -->
<?php
include "../config/koneksi.php";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    // Parameter Produk
    switch ($page) {
        case "products":
            include "pages/products/view.php";
            break;

            case "addproduct":
                include "pages/products/create.php";
                break;

        case "editproduct":
            include "pages/products/edit.php";
            break;
    }
    // Parameter Kostomer
    switch ($page) {
        case "customer":
            include "pages/customer/view.php";
            break;

            case "addcustomer":
                include "pages/customer/create.php";
                break;

        case "editcustomer":
            include "pages/customer/edit.php";
            break;
    }
    // Paramete Kategori
    switch ($page) {
        case "categories";
            include "pages/categories/view.php";
            break;

            case "addcategory";
            include "pages/categories/create.php";
            break;

            case "editcategory";
            include "pages/categories/edit.php";
            break;
    }
    // Parameter Sales
    switch ($page) {
        case "sales":
            include "pages/sales/view.php";
            break;
    }
} else {
    include "pages/home.php";
}
