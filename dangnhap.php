<!-- Nguyễn Thanh Huy 20004060 Tạo form đăng nhập-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        max-width: 400px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <form method="POST">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Pass Word:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="dangnhap">Đăng nhập</button>
    </form>

</body>
<!-- setcookie("username", $username, time() + 3600);
setcookie("password", $password, time() + 3600);

if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
header('Location: index.php');
}

setcookie("username", "", time() - 3600);
setcookie("password", "", time() - 3600); -->


</html>


<?php
// setcookie("username", $username, time() + 3600);
// setcookie("password", $password, time() + 3600);

// if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
//     setcookie("username", "", time() - 3600);
//     setcookie("password", "", time() - 3600);
//     header('Location: dasboard.php');
// }

$conn = mysqli_connect("localhost", "root", "", "ql_svtt (1)");
if (!($conn)) {
    echo "thất bại";
}

if (isset($_POST['dangnhap'])) {

    $User = $_POST['username'];
    $Password = $_POST['password'];
    $sql = "select * from nguoihuongdan where Username='$User' and Password='$Password' ";
    // $result = mysqli_query($conn, $sql);
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $username = $_POST['username'];
       // $password = $_POST['password'];

        setcookie("username", $_POST['username'], time() + 3000);
      //  setcookie("password", $_POST['password'], time() + 3000);
        header("Location: hh.php");
    } else {
        echo "Tài khoản không tồn tại";
    }
}
// dangnhap.php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['logout'])) {
    // Xử lý đăng xuất

    unset($_COOKIE['username']);
    unset($_COOKIE['password']);

    header("Location: dangnhap.php");
    exit;
}


?>