<?php
  // Kiểm tra xem các trường đã tồn tại trong mảng $_POST hay chưa
if (isset($_POST['hoten'], $_POST['masv'], $_POST['lop'])) {
  // Lấy dữ liệu từ form
  $ht = $_POST['hoten'];
  $masv = $_POST['masv'];
  $lop = $_POST['lop'];

  // Tiếp tục xử lý và thêm dữ liệu vào cơ sở dữ liệu

  require_once 'connect.php';

  $themsql = "INSERT INTO sinhvien(masv, hoten, lop) VALUES ('$masv', '$ht', '$lop')";
  //echo $themsql;exit;
  if (mysqli_query($conn, $themsql)) {
      echo "<h1>Add successfull</h1>";
      header("Location: list_student.php");
  }}