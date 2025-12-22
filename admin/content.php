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
    }
    // Parameter Kostomer
    switch ($page) {
        case "customer":
            include "pages/customer/view.php";
            break;
    }
    // Paramete Suplier
    switch ($page) {
        case "suppliers";
            include "pages/suppliers/view.php";
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
