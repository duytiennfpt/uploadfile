<?php
$id = $_GET['id'];
echo $id;
require_once 'connect.php';
$delete_sql = "DELETE FROM sinhvien WHERE id=$id";
mysqli_query($conn, $delete_sql);
echo"<h1>Xoá Thành Công</h1>";
header("Localtion: list_student.php");