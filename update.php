<?php
  //nhan du lieu tu form
  if (isset($_POST['hoten'], $_POST['masv'], $_POST['lop'])) {
    // Lấy dữ liệu từ form
    $ht = $_POST['hoten'];
    $masv = $_POST['masv'];
    $lop = $_POST['lop'];
    $id = $_POST['id'];
    require_once 'connect.php';

    $updatesql = "UPDATE sinhvien SET masv = '$masv', hoten = '$ht', lop = '$lop' WHERE id=$id";
       echo $updatesql;exit;
    if (mysqli_query($conn, $updatesql)) {
        echo "<h1>Add success</h1>";
        header("localtion: list_student.php");
    }

    mysqli_close($conn);
  }

