
<?php

/* Nguyễn Thanh Tuấn và La Nguyễn Thành Nguyên  */


$conn = mysqli_connect('localhost', 'root', '', 'ql_svtt') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");


if(isset($_POST['dangky'])){
    $TenNhom = trim($_POST['TenNhom']);
    $NguoiHuongDan = trim($_POST['NguoiHuongDan']);
    $MoTa = trim($_POST['MoTa']);
    $TenNhomTruong = trim($_POST['TenNhomTruong']);
    $SoLuong = trim($_POST['SoLuong']);
    
    
    if (empty($TenNhom)) {
    array_push($errors, "Tên nhóm is required"); 
    }
    if (empty($NguoiHuongDan)) {
    array_push($errors, "Người hướng dẫn is required"); 
    }
    if (empty($MoTa)) {
    array_push($errors, "Mô tả is required"); 
    }
    if (empty($TenNhomTruong)) {
        array_push($errors, "Tên nhóm trưởng is required"); 
    }
    if (empty($SoLuong)) {
    array_push($errors, "Số Lượng is required"); 
    }
    


$sql = "INSERT INTO nhomdkthuctap (TenNhom, NguoiHuongDan, MoTa,TenNhomTruong, SoLuong) VALUES ('$TenNhom','$NguoiHuongDan','$MoTa','$TenNhomTruong','$SoLuong')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="dangky.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên nhóm: ".$_POST['TenNhom']."<br/>";
echo "Người hướng dẫn: " .$_POST['NguoiHuongDan']."<br/>";
echo "Mô tả: ".$_POST['MoTa']."<br/>";
echo "Tên nhóm trưởng : ".$_POST['TenNhomTruong']."<br/>";
echo "Số Lượng : ".$_POST['SoLuong']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangky.php";</script>';
}
}

?>
