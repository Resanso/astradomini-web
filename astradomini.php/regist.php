<?php  
include "config.php";
$pesan = "";

session_start();

if(isset($_SESSION["is_login"])){
    header("location: dashboar-admin.php");
    exit();
}

if (isset($_POST["regist"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $password = $_POST["passwoard"]; 

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  
    $sql = $conn->prepare("INSERT INTO users (nama, nim, password) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $nama, $nim, $hashed_password); 


    if ($sql->execute()) {
        header("Location: index.php");
        exit();
    } else {
        $pesan = "Data gagal diinputkan ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="img/TelyuSend__1_-removebg-preview.png" />
</head>

<body>
    <div class="container" style="height: 100vh">
        <div class="login-box">
            <div class="avatar">
                <img src="img/TelyuSend__1_-removebg-preview.png" alt="Avatar" />
            </div>
            <h2 class="login" style="text-align: center; color: white; padding: 10px">Registrasi</h2>
            <form class="login-form" method="POST" action="regist.php">
                <p style="color:red; padding: 5px;  text-align: center;"><?=$pesan ?></p>
                <input type="text" placeholder="Nama Lengkap" name="nama" required />
                <input type="number" placeholder="NIM" name="nim" required />
                <input type="password" placeholder="Password" name="passwoard" required />
                <button type="submit" name="regist">Regist</button>
                <a href="index.php" class="forgot-password">Sudah registrasi? login disini</a>
            </form>
        </div>
    </div>
</body>

</html>