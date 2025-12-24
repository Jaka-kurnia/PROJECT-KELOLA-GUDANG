<?php
include '../../../config/koneksi.php';

// Tambah Customers
session_start();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == "insert") {
        $customer_code = $_POST['customer_code'];



        $qcheck_customer = "SELECT * FROM customers WHERE customer_code = '$customer_code'";

        $exe_checkcustomer = mysqli_query($koneksi, $qcheck_customer);
        $checkcustomer = mysqli_num_rows($exe_checkcustomer);
        if ($checkcustomer > 0) {
            $_SESSION['message'] = "Data customer code sudah ada ";
            $_SESSION['alert_type'] = "alert-danger";
            $_SESSION['type'] = "failed";
            header('location:../../dashboard.php?page=customer');
            mysqli_close($koneksi);
            exit();
        }

        $query = "INSERT INTO customers (customer_code, customer_name, phone, customer_address) 
          VALUES ('$customer_code', '$customer_name', '$phone', '$customer_address')";
        $execute = mysqli_query($koneksi, $query);


        if ($execute) {
            $_SESSION['message'] = "Data berhasil ditambahkan";
            $_SESSION['alert_type'] = "alert-success";
            $_SESSION['type'] = "success";
            header('location:../../dashboard.php?page=customer');
            mysqli_close($koneksi);
            exit();
        } else {
            $_SESSION['message'] = "Data gagal ditambahkan";
            $_SESSION['alert_type'] = "alert-danger";
            $_SESSION['type'] = "failed";
            header('location:../../dashboard.php?page=customer');
            mysqli_close($koneksi);
            exit();
        }
    }
}