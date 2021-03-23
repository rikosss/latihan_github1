<?php
session_start();
require 'config.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);


    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $query = $koneksi->query($sql);

    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
        $_SESSION['namaLog'] = $row['nama'];
        header('location:admin.php');
    } else {
        echo "<script>alert('Username & Password Salah !!!'); window.location.href='index.php'</script>";
    }
    exit();
}