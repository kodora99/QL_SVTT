<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí sinh viên</title>
</head>
<body>

    <h2>Đăng kí sinh viên</h2>

    <form action="process.php" method="post">
        <label for="msv">Mã số sinh viên:</label>
        <input type="text" id="msv" name="msv" required><br>

        <label for="hoten">Họ tên:</label>
        <input type="text" id="hoten" name="hoten" required><br>

        <label for="gioitinh">Giới tính:</label>
        <select id="gioitinh" name="gioitinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select><br>

        <label for="sdt">Số điện thoại:</label>
        <input type="tel" id="sdt" name="sdt" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="diachi">Địa chỉ:</label>
        <input type="text" id="diachi" name="diachi" required><br>

        <label for="malop">Mã lớp:</label>
        <input type="text" id="malop" name="malop" required><br>

        <label for="khoa">Khóa:</label>
        <input type="text" id="khoa" name="khoa" required><br>

        <label for="nganhhoc">Ngành học:</label>
        <input type="text" id="nganhhoc" name="nganhhoc" required><br>

        <label for="truong">Trường:</label>
        <input type="text" id="truong" name="truong" required><br>

        <input type="submit" value="Đăng kí">
    </form>

</body>
</html>
