<!doctype html>
<html lang="en">
  <head>
    <title>THÔNG TIN SINH VIÊN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="TTSV.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <!--Nguyễn Tiến Vang 20004292 - Công việc xây dựng HTML, CSS THÔNG TIN SINH VIÊN-->
  <!--Nguyễn Thanh Phú Thành 20004191 - Công việc connect PHP với MySQL PHPADMIN-->
  <body>
    <div class="container">
        <center><h2>THÔNG TIN SINH VIÊN</h2></center>
          <form action="" method="post" >
               <div class="form-group">
                <label for="">Mã Số Sinh Viên</label>
                <input type="text" class="form-control" id="masosv" name="masosv">
                </div>
  
               <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" class="form-control" id="hoten" name="hoten">
               </div>
  
              <div class="form-group">
                <label for="">Giới tính</label>
                  <select class="form-control" id="gioitinh" name="gioitinh" Required>
                    <option value = "Nam">Nam</option>
                    <option value = "Nu">Nữ</option>
                  </select>
                </div>
  
                <div class="form-group">
                  <label for="">Số điện thoại</label>
                  <input type="text" class="form-control" id="sodt" name="sodt">
                </div>
  
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" placeholder="Enter email" id="email" name = "email">
                </div>
  
                <div class="form-group">
                  <label for="">Địa chỉ</label>
                  <input type="text" class="form-control" id="diachi" name="diachi">
                </div>
  
                <div class="form-group">
                  <label for="">Mã Lớp</label>
                  <input type="text" class="form-control" id="malop" name="malop">
                </div>
                <div class="form-group">
                  <label for="">Trường</label>
                  <input type="text" class="form-control" id="truong" name="truong">
                </div>

                <div class="form-group">
                  <label for="">Ngành học</label>
                  <input type="text" class="form-control" id="nganh" name="nganh">
                </div>
               
                <div class="form-group">
                  <label for="">Khóa</label>
                  <input type="number" class="form-control" id="khoa" name="khoa" min="44" max="46">
                </div>
                <!-- NGUYỄN THANH PHÚ THÀNH đã bổ sung thêm -->
                <div class="form-group">
                    <label for="">Nhóm hướng dẫn</label>
                    <input type="number" class="form-control" id="nhom" name="nhom" min="1" max="4">
                </div>    
                <!-- -->
                <button type="submit" class="btn btn-primary" id="insert" name = "insert">LƯU THÔNG TIN</button>
                 
              
          </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "svtttn";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connected Failed". $conn->connect_error);
  }
  echo "Connected successfully";
  
  
  // INSERT INTO database NGUYỄN THANH PHÚ THÀNH 
  if (isset($_POST["insert"]))
  {
    $masosv = $_POST["masosv"];
    $hoten = $_POST["hoten"];
    $gioitinh = $_POST["gioitinh"];
    $sodt = $_POST["sodt"];
    $email = $_POST["email"];
    $diachi = $_POST["diachi"];
    $malop = $_POST["malop"];
    $truong = $_POST["truong"];
    $nganh = $_POST["nganh"];
    $khoa = $_POST["khoa"];
    $nhom = $_POST["nhom"];
    

    $query = "INSERT INTO sinhvien VALUES ('','$masosv','$hoten','$gioitinh','$sodt','$email','$diachi','$malop','$truong','$nganh','$khoa','$nhom')";
    mysqli_query($conn, $query);
    echo 
    "
    <script> alert('Thêm Dữ Liệu Thành Công'); </script>
    ";
  }
  $conn->close();
?>