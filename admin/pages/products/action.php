<?php
include "../../../config/koneksi.php";
session_start();
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    if ($act == "insert") {
        $product_code = $_POST['product_code'];
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];


        $qcheckproduct = "SELECT * FROM products WHERE product_code = '$product_code'";
        $execheckproduct = mysqli_query($koneksi, $qcheckproduct);
        $cekproduct = mysqli_num_rows($execheckproduct);

        if ($cekproduct > 0) {
            $_SESSION['message'] = 'Kode Product Already Exists';
            $_SESSION['alert_type'] = 'alert-danger';
            $_SESSION['type'] = 'failed';
            header("location:../../dashboard.php?page=products");
            exit;
        }



        $query = "INSERT INTO products (product_code, product_name,category_id,price,stock)
        VALUES ('$product_code','$product_name','$category_id','$price','$stock')";
    }
    $exceute = mysqli_query($koneksi, $query);

    if ($exceute) {
        $_SESSION['message'] = 'Data Berhasil Disimpan';
        $_SESSION['alert_type'] = 'alert-success';
        $_SESSION['type'] = 'success';
        mysqli_close($koneksi);
        header("location:../../dashboard.php?page=products");
    } else {
        $_SESSION['message'] = 'Data Gagal Disimpan';
        $_SESSION['alert_type'] = 'alert-danger';
        $_SESSION['type'] = 'error';
        mysqli_close($koneksi);
        header("location:../../dashboard.php?page=products");
        exit;
    }
}
