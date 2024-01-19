
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="TTSV.css">

<script>
// Võ Khoa Trường Thọ và Nguyễn Bảo Việt
function updateInfo() {
        var selectNhom = document.getElementById('selectNhom');
        var nguoiHuongDanInput = document.getElementById('NguoiHuongDan');
        var moTaInput = document.getElementById('MoTa');
        
        
        var selectedOption = selectNhom.options[selectNhom.selectedIndex];
        
     
        nguoiHuongDanInput.value = selectedOption.getAttribute('data-nguoihuongdan');
        moTaInput.value = selectedOption.getAttribute('data-mota');
    }
</script>
</head>
<body>

<form method="post" action="dangky.php" class="form">

<h2 style="color:green">Đăng ký nhóm thực tập</h2>

Nhóm:  
<select id="selectNhom" name="TenNhom" onchange="updateInfo()"   >
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'ql_svtt');
        $sql = "SELECT * FROM detai";
        $result = mysqli_query($conn, $sql);
        foreach ($result as $row) {
            echo '<option data-nguoihuongdan="' . $row['NguoiHuongDan'] . '" data-mota="' . $row['MoTa'] . '">' . $row['Ten'] . '</option>';
        }
    ?>
</select></br>

Người hướng dẫn: <input type="text" id="NguoiHuongDan" name="NguoiHuongDan" value="" readonly>

Mô Tả: </br> <textarea id="MoTa" name="MoTa" value="" style="width: 298px; height: 118px;" readonly>  </textarea></br>
MSSV_HoTen nhóm trưởng: <input type="text" name="TenNhomTruong" value="" required/>
Số lượng sinh viên: <input type="text" name="SoLuong" value="" required/>
   <h3 style="color: green ">------------------------------------------------</h3>
<input type="submit" name="dangky" value="Đăng Ký" style= "color :green"/>
<?php require 'xuly.php';?>
</form>

</body>
</html>