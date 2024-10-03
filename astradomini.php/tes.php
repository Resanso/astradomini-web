<?php

include "config.php";
session_start();


if (!isset($_SESSION['nama'])) {
    header("location: index.php"); 
    exit();
}

if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboar.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="icon" type="image/x-icon" href="img/TelyuSend__1_-removebg-preview.png" />

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
        padding-top: 80px;

    }

    .card-group {
        margin-bottom: 5pc;
        padding-top: 2pc;
    }
    </style>
</head>

<body>
    <div class="container" style="font-family: 'Arial', sans-serif">
        <div class="row justify-content-center text-center">
            <nav class="navbar bg-body-tertiary fixed-top shadow-lg p-3">
                <div class="container d-flex align-items-center">
                    <form action="dashboar-admin.php" method="post">
                        <div class="d-flex align-items-center" role="search">
                            <input class="form-control me-2" type="search" id="searchInput"
                                placeholder="Cari nama mata kuliah" aria-label="Search"
                                style="border-radius: 25px; border-color: #2d3436" />
                            <button class="btn logout text-white" type="submit" name="logout"
                                style="background-color: #2d3436; border-radius: 25px">logout</button>
                        </div>
                    </form>

                </div>
            </nav>
            <!-- menu utamaku -->
            <!-- menu utamaku -->
            <!-- menu utamaku -->
            <!-- menu utamaku -->
            <div class="container" style="margin-top: 1pc; font-family: 'Arial', sans-serif">
                <div class="row">
                    <div class="card-group">
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">kalkulus</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">mtk diskrit</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">logika matematika</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">alpro praktikum</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">pancasila</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">pendidikan karakter</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">alpro teori</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">agama islam</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                        <div class="card mb-5 shadow-lg" style="border-radius: 25px">
                            <img src="img/bg.jpg" class="card-img-top" alt="..." height="150"
                                style="border-top-left-radius: 25px; border-top-right-radius: 25px" />
                            <div class="card-body">
                                <h5 class="card-title fw-bold">statistika</h5>
                                <div class="card-text" style="text-align: start">
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                    <span style="font-size: 12px; color: #2d3436"> Batas: 24/07/2024 | 23:00 </span>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                                        reiciendis doloribus vel totam rem delectus .</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">#tetapsolid</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <nav class="navbar fixed-bottom shadow-lg"
                style="background-color: white; padding-left: 25px; padding-right: 10px">
                <div class="container mb-3" style="color: #2d3436">
                    <a class="navbar-brand nav-item" href="#">
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
                    <a class="navbar-brand nav-item" href="#">
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

    <!-- Modal -->
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Astra Domini</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelectGrid">
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
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 120px"></textarea>
                        <label for="floatingTextarea2">Note</label>
                    </div>
                    <div class="form-floating">
                        <input type="datetime-local" class="form-control" id="floatingPassword"
                            placeholder="Password" />
                        <label for="floatingPassword">deadline</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        style="border-radius: 25px">tutup</button>
                    <button type="button" class="btn"
                        style="border-radius: 25px; background-color: #2d3436; color: white">uploud</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let titles = document.querySelectorAll('.card-title');
        const hilang = document.getElementById("tidak")

        titles.forEach(function(title) {
            if (title.textContent.toLowerCase().includes(filter)) {
                title.closest('.card').style.display = '';
            } else {
                title.closest('.card').style.display = 'none';
            }
        });
    });
    </script>
</body>

</html>