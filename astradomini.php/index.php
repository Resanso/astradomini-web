<?php 

include "config.php"; 
$pesan = "";

session_start();

if (isset($_SESSION["is_login"])) {
    header("location: dashboar-admin.php");
    exit();
}

if (isset($_POST["login"])) {
    $nim = $_POST["nim"];
    $password = $_POST["password"];
    

    $sql = $conn->prepare("SELECT * FROM users WHERE nim = ?");
    $sql->bind_param("s", $nim); 
    $sql->execute();
    $result = $sql->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
      
        if (password_verify($password, $user["password"])) {
            $_SESSION["is_login"] = true;
            $_SESSION["nama"] = $user["nama"];
            $_SESSION["nim"] = $user["nim"];
            $_SESSION['role'] = $user['role']; 
            
            header("location: dashboar-admin.php");
            exit();
        } else {
            $pesan = "Password salah."; 
        }
    } else {
        $pesan = "NIM tidak ditemukan."; 
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
            <h2 class="login" style="text-align: center; padding: 10px; color: white;">Login</h2>
            <form class="login-form" method="POST" action="index.php">
                <p style="color:red; padding: 5px; text-align: center;"><?=$pesan ?></p>
                <input type="number" placeholder="NIM" name="nim" required />
                <input type="password" placeholder="Password" name="password" required />
                <button type="submit" name="login">Login</button>
                <a href="regist.php" class="forgot-password">Belum registrasi? regist disini</a>
            </form>
        </div>
    </div>
</body>

</html>