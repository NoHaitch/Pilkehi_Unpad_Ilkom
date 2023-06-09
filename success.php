<?php
    session_start();
    if($_SESSION['login']!=true){
        header("location:login.php");
        exit;
    } 
    include "koneksi.php";
    $id = $_SESSION['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM `tabeldata` WHERE `id`=$id");
    foreach($data as $row){
        if($row['pilihan']==""){
            header("location:login.php");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima kasih atas suaranya!</title>
    <link rel="stylesheet" href="../styles/style.css">
	<link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg bg-primary sticky-top">
        <div class="container">
            <!-- Brand Website -->
            <a href="../index.html" class="navbar-brand d-flex flex-row align-items-center" aria-label="Logo Website">
                <img class="me-4" src="../src/logo/Logo Hima.png" alt="" srcset="">
                <h6 class="h5 text-light">Hima Humas Unpad</h6>
            </a>

            <!-- Tombol Toggle Saat Mobile Resolution -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-light"></i>
            </button>

            <!-- Navlink -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav col-lg-12 d-flex flex-lg-row justify-content-lg-end">
                    <li class="nav-item">
                        <button type="button" class="nav-link text-light h6 me-3" data-bs-toggle="modal" data-bs-target="#tataCara" style="background:none;border:none;">TATA CARA</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal Tata Cara -->
    <div class="modal fade" id="tataCara" tabindex="-1" role="dialog" aria-labelledby="tataCaraLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tataCaraLabel">Tata Cara Pemilu</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="background:none;border:none;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <main id="tataCara">
                        <div class="container d-flex flex-column align-items-center justify-content-center py-5">
                            <div class="d-flex flex-column col-lg-12">
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Pertama</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-1.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Kenali calon-calon ketua himpunan dengan menekan tulisan "Lihat Profil" di bawah nama calon.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Kedua</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-1.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Tekan tombol "login" di bagian kanan atas layar untuk menuju ke halaman login.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Ketiga</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-2-rev.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Masukkan data yang telah diberikan melalui email ke dalam kolom NPM dan 
                                                    password, pastikan data yang dimasukkan sudah benar, lalu tekan login.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Keempat</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-3.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Jika sudah yakin, tekan foto calon yang Anda pilih (akan ditandai dengan 
                                                    garis berwarna hijau), lalu tekan tombol kirim suara.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Jika Berhasil,</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-4-rev.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Jika proses berjalan dengan lancar akan muncul halaman seperti ini.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Jika Gagal,</h5>
                                            </div>
                                            <div class="card-body">
                                                
                                                <img src="../src/tatacara/langkah-5-rev.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Jika gagal akan muncul halaman seperti ini. Segera hubungi panitia agar masalah diperbaiki.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Section -->
    <main class="container d-flex justify-content-center align-items-center" style="height:93vh;">
        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-check-circle color-success" style="font-size:128px;"></i>
            <h2 class="h2 color-success text-center mb-3">Suara berhasil terkirim!</h2>
            <h4 class="h4-regular text-center mb-3">Terima kasih <?php echo $_SESSION['nama'];?> karena telah menggunakan hak suara dalam pemilihan ketua himpunan.</h4>
            <a href="../index.html" class="btn btn-secondary col-lg-4 col-8 py-2">Ke Halaman Utama</a>
        </div>
    </main>
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    session_destroy();
?>