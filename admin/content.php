<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
// Parameter Produk
    switch($page){
        case "products":
            include "pages/products/view.php";
    }
// Parameter Kostomer
    switch($page){
        case "customer":
            include "pages/customer/view.php";
    }
// Parameter Sales
    switch($page){
        case "sales":
            include "pages/sales/view.php";
    }

}else{
    include "pages/home.php";
}
?>