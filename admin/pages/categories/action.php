<?php
include '../../../config/koneksi.php';

// Tambah Kategori
session_start();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == "insert") {
        $category_name = $_POST['category_name'];
        $qcheck_category = "SELECT * FROM categories WHERE category_name = '$category_name'";
        $exe_checkcategory = mysqli_query($koneksi, $qcheck_category);
        $checkcategory = mysqli_num_rows($exe_checkcategory);

        if ($checkcategory > 0) {
            $_SESSION['message'] = "Data category code sudah ada ";
            $_SESSION['alert_type'] = "alert-danger";
            $_SESSION['type'] = "failed";
            header('location:../../dashboard.php?page=categories');
            mysqli_close($koneksi);
            exit();
        }

        $query = "INSERT INTO categories (category_name) 
          VALUES ('$category_name')";
        $execute = mysqli_query($koneksi, $query);


        if ($execute) {
            $_SESSION['message'] = "Data berhasil ditambahkan";
            $_SESSION['alert_type'] = "alert-success";
            $_SESSION['type'] = "success";
            header('location:../../dashboard.php?page=categories');
            mysqli_close($koneksi);
            exit();
        } else {
            $_SESSION['message'] = "Data gagal ditambahkan";
            $_SESSION['alert_type'] = "alert-danger";
            $_SESSION['type'] = "failed";
            header('location:../../dashboard.php?page=categories');
            mysqli_close($koneksi);
            exit();
        }

    }elseif ($act == "update") {
        $category_name = $_POST['category_name'];

        $sql = "UPDATE categories SET category_name='$category_name' WHERE category_id='$_GET[category_id]'";
        $execute = mysqli_query($koneksi, $sql);
        if ($execute) {
            $_SESSION['message'] = "Data berhasil diupdate";
            $_SESSION['alert_type'] = "alert-success";
            $_SESSION['type'] = "success";
            header('location:../../dashboard.php?page=categories');
            mysqli_close($koneksi);
            exit();
        } else {
            $_SESSION['message'] = "Data gagal diupdate";
            $_SESSION['alert_type'] = "alert-danger";
            $_SESSION['type'] = "failed";
            header('location:../../dashboard.php?page=categories');
            mysqli_close($koneksi);
            exit();
        }
    }elseif ($act == "delete") {
        $sql = "DELETE  FROM categories WHERE category_id='$_GET[category_id]'";
        $execute = mysqli_query($koneksi, $sql);
        if ($execute) {
            $_SESSION['message'] = "Data berhasil diupdate";
            $_SESSION['alert_type'] = "alert-success";
            $_SESSION['type'] = "success";
            header('location:../../dashboard.php?page=categories');
            mysqli_close($koneksi);
            exit();
        } else {
            $_SESSION['message'] = "Data gagal diupdate";
            $_SESSION['alert_type'] = "alert-danger";
            $_SESSION['type'] = "failed";
            header('location:../../dashboard.php?page=categories');
            mysqli_close($koneksi);
            exit();
        }
    }
}