<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Student</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
      <h1>Danh sách sinh viên</h1>
<!-- Button to Open the Modal -->
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm Mới Sinh Viên</button>
  <br>

    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Mã Sinh Viên</th>
        <th>Họ Tên</th>
        <th>Lớp</th>
        <th>Thao Tác</th>
        
      </tr>
    </thead>
    <tbody>
          <?php
           require_once 'database.php';
           $liststudent_sql = "SELECT * FROM sinhvien order by lop, hoten";
           $result = mysqli_query($conn, $liststudent_sql);
           while ($r = mysqli_fetch_assoc($result)){ 

          ?>
            <tr>
            <td><?php echo $r['masv'];?></td>
            <td><?php echo $r['hoten'];?></td>
            <td><?php echo $r['lop'];?></td>
            <td><a href="edit.php?id=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a>
            <a onclick="return confirm('Bạn Có Muốn Xóa Sinh Viên Này Không');"href="delete.php?id=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
            </tr>
         <?php
            }
         ?>
       </tbody> 
 </table>
        
        <a href="logout.php" class="btn btn-warning">Logout</a>
   </div>
   <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm Sinh Viên</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="add_student.php" method="POST">
            <div class="form-group">
                <label for="hoten">Họ Tên</label>
                <input type="text" id = "hoten" class="form-control" name = "hoten">
            </div>
            <div class="form-group">
                <label for="masv">Mã Sinh Viên</label>
                <input type="text" id="masv" class="form-control" name = "masv">
            </div>
            <div class="form-group">
                <label for="lop">Lớp</label>
                <input type="text" id="lop" class="form-control" name = "lop">
            </div>
            
            <button class="btn btn-success">Add Student</button>
         </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>
