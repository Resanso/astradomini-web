<?php
include "config.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="icon" type="image/x-icon" href="img/TelyuSend__1_-removebg-preview.png" />
    <!-- Style CSS ada di sini -->
    <style>
    .nav-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 14px;
    }

    .navbar-brand i {
        font-size: 24px;
    }

    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
        padding-top: 80px;
        /* Sesuaikan ini dengan tinggi navbar */
    }

    .id-card {
        width: 350px;
        height: 220px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        font-size: 14px;
        position: relative;
    }

    .id-card-header {
        background: #2d3436;
        color: white;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 25px;
    }

    .id-card-header img {
        border-radius: 50%;
        width: 60px;
        height: 60px;
        border: 2px solid #fff;
    }

    .id-card-header h2 {
        margin: 0;
        font-size: 16px;
    }

    .id-card-header h3 {
        margin: 0;
        font-size: 12px;
        font-weight: normal;
    }

    .id-card-body {
        padding: 15px;
    }

    .id-card-body p {
        margin: 5px 0;
    }

    .id-card-body span {
        font-weight: bold;
    }

    .id-card-footer {
        position: absolute;
        bottom: 10px;
        left: 15px;
        width: calc(100% - 30px);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .id-card-footer .signature {
        text-align: right;
    }

    .barcode {
        margin-left: auto;
        margin-right: auto;
        height: 30px;
        width: 120px;
        background: url('https://i.ibb.co/0ZQ5yx4/barcode.png') no-repeat center/contain;
    }

    .card-group {
        margin-bottom: 5pc;
        padding-top: 2pc;
    }
    </style>
</head>

<body>
    <div class="container p-5" style="font-family: 'Arial', sans-serif; margin-top: -10pc">
        <div class="row text-center justify-content-center">
            <div class="id-card-header" style="margin-bottom: 3px">
                <img src="img/bg.jpg" alt="Profile Image" />
                <div style="text-align: left">
                    <h2>Astra Domini Web</h2>
                    <h3>Kartu Tanda Anggota Kelas</h3>
                </div>
                <div>
                    <h3 style="padding-right: 40px; text-align: right">IF-11</h3>
                </div>
            </div>
            <div class="id-card mt-3 pt-3">
                <div class="id-card-body">
                    <p style="text-align: left"><span>Nama Lengkap :</span>
                        <?= isset($_SESSION["nama"]) ? $_SESSION["nama"] : "Tidak ada data" ?></p>
                    <p style="text-align: left"><span>NIM :</span>
                        <?= isset($_SESSION["nim"]) ? $_SESSION["nim"] : "Tidak ada data" ?></p>
                    <p style="text-align: left"><span>Kelas :</span> IF-48-11</p>
                    <p style="text-align: left"><span>Role :</span> <?= $_SESSION['role']?></p>
                </div>
                <div class="id-card-footer">
                    <div class="barcode"></div>
                    <div class="signature p-3" style="text-align: left">
                        <p>Mengetahui,</p>
                        <p>Kipling</p>
                    </div>
                </div>
            </div>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <nav class="navbar fixed-bottom shadow-lg"
                style="background-color: white; padding-left: 25px; padding-right: 10px">
                <div class="container mb-3" style="color: #2d3436">
                    <a class="navbar-brand nav-item" href="dashboar-admin.php">
                        <i class="bi bi-house-check-fill"></i>
                        <span>home</span>
                    </a>

                    <a class="navbar-brand nav-item" href="#">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            style="background-color: #2d3436; color: white; border-radius: 50%">
                            <i class="bi bi-plus-circle-fill"></i>
                        </button>
                        <span>tambah</span>
                    </a>

                    <a class="navbar-brand nav-item" href="profil.php">
                        <i class="bi bi-person-fill"></i>
                        <span>profil</span>
                    </a>
                </div>
            </nav>
            <?php endif; ?>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'user'): ?>
            <nav class="navbar fixed-bottom shadow-lg"
                style="background-color: white; padding-left: 25px; padding-right: 10px">
                <div class="container mb-3" style="color: #2d3436">
                    <a class="navbar-brand nav-item" href="dashboar-admin.php">
                        <i class="bi bi-house-check-fill"></i>
                        <span>home</span>
                    </a>

                    <a class="navbar-brand nav-item" href="#">
                        <img src="img/TelyuSend__1_-removebg-preview.png" alt="" width="45" height="45">
                        <span></span>
                    </a>

                    <a class="navbar-brand nav-item" href="profil.php">
                        <i class="bi bi-person-fill"></i>
                        <span>profil</span>
                    </a>
                </div>
            </nav>
            <?php endif; ?>


        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Astra Domini</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="dashboar-admin.php" method="POST">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectGrid" name="matkul" required>
                                <option selected></option>
                                <option value="kalkulus">kalkulus</option>
                                <option value="mtk-diskrit">mtk diskrit</option>
                                <option value="logmat">logmat</option>
                                <option value="alpro-teori">alpro teori</option>
                                <option value="alpro-praktikum">alpro praktikum</option>
                                <option value="statistika">statistika</option>
                                <option value="Pkarakter">pendidikan karakter</option>
                                <option value="pancasila">pancasila</option>
                                <option value="agama-islam">agama islam</option>
                            </select>
                            <label for="floatingSelectGrid">Pilih matkul</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="catatan" placeholder="Leave a comment here"
                                id="floatingTextarea2" style="height: 120px" required></textarea>
                            <label for="floatingTextarea2">Note</label>
                        </div>
                        <div class="form-floating">
                            <input type="datetime-local" name="deadline" class="form-control" id="floatingPassword"
                                placeholder="Password" required />
                            <label for="floatingPassword">deadline</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        style="border-radius: 25px">tutup</button>
                    <button type="submit" class="btn" name="tambah"
                        style="border-radius: 25px; background-color: #2d3436; color: white">uploud</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>