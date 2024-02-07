
<?php
$errors = array();

/* Nguyễn Thanh Tuấn và La Nguyễn Thành Nguyên  */


$conn = mysqli_connect('localhost', 'root', '', 'ql_svtt') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

$errors = [];

if (isset($_POST['dangky'])) {
    $TenNhom = trim($_POST['TenNhom']);
    $NguoiHuongDan = trim($_POST['NguoiHuongDan']);
    $MoTa = trim($_POST['MoTa']);
    $HoTen = trim($_POST['HoTen']); 

 
    if (empty($TenNhom)) array_push($errors, "Tên nhóm is required");
    if (empty($NguoiHuongDan)) array_push($errors, "Người hướng dẫn is required");
    if (empty($MoTa)) array_push($errors, "Mô tả is required");
    if (empty($HoTen)) array_push($errors, "MSSV họ tên is required");

    
    $sqlCheckMSSV = "SELECT * FROM nhomdkthuctap WHERE HoTen = '$HoTen'";
    $resultCheckMSSV = mysqli_query($conn, $sqlCheckMSSV);
    if (mysqli_num_rows($resultCheckMSSV) > 0) {
        array_push($errors, "Bạn Đã Đăng Ký Rồi!");
    }

   
    $sqlCheck = "SELECT SoLuongSV FROM detai WHERE Ten = '$TenNhom'";
    $resultCheck = mysqli_query($conn, $sqlCheck);
    if ($resultCheck && mysqli_num_rows($resultCheck) > 0) {
        $rowCheck = mysqli_fetch_assoc($resultCheck);
        if ($rowCheck['SoLuongSV'] <= 0) {
            array_push($errors, "Đề tài này đã đầy. Đăng ký thất bại!");
        }
    } else {
       
    }

    
    if (empty($errors)) {
        $sqlInsert = "INSERT INTO nhomdkthuctap (TenNhom, NguoiHuongDan, MoTa, HoTen) VALUES ('$TenNhom', '$NguoiHuongDan', '$MoTa', '$HoTen')";
        if (mysqli_query($conn, $sqlInsert)) {
            
            $newSoLuongSV = $rowCheck['SoLuongSV'] - 1;
            $sqlUpdate = "UPDATE detai SET SoLuongSV = $newSoLuongSV WHERE Ten = '$TenNhom'";
            mysqli_query($conn, $sqlUpdate);

            
            echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="dangky.php";</script>';
        } else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangky.php";</script>';
        }
    } else {
        foreach ($errors as $error) {
            echo "<script>alert('$error'); window.location.href = 'dangky.php';</script>";
        }
    }
}
?>
