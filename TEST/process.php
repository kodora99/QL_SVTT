<?php
ini_set('display_errors', 1);
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msv = $_POST["msv"];
    $hoten = $_POST["hoten"];
    $gioitinh = $_POST["gioitinh"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $diachi = $_POST["diachi"];
    $malop = $_POST["malop"];
    $khoa = $_POST["khoa"];
    $nganhhoc = $_POST["nganhhoc"];
    $truong = $_POST["truong"];

    $sql_check = "SELECT * FROM sinhvien WHERE msv='$msv'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows == 0) {
        $sql_insert = "INSERT INTO sinhvien (msv, hoten, gioitinh, sdt, email, diachi, malop, khoa, nganhhoc, truong)
                       VALUES ('$msv', '$hoten', '$gioitinh', '$sdt', '$email', '$diachi', '$malop', '$khoa', '$nganhhoc', '$truong')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "Đăng kí thành công!";
        } else {
            echo "Lỗi: " . $sql_insert . "<br>" . $conn->error;
        }
    } else {
        echo "Mã số sinh viên đã tồn tại, vui lòng kiểm tra lại.";
    }
}

$conn->close();
?>
