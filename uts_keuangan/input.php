<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<body>
<?php
    session_start();

    if (!isset($_SESSION["username"])) {
        header("Location: index.php");
    }
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h3><?php echo $_SESSION["username"]; ?></h3>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="input.php">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tampil.php">Tampil Data</a>
                    </li>
                    
                    <li class="nav-item" style="cursor: pointer;">
                        <a class="nav-link" id="clickMeButton">Logout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</body>
<div class="container mt-5" id="form">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Data Mahasiswa</h5>
                    <form action="proses_input.php" method="post">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" name="fakultas" placeholder="Fakultas">
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <input type="text" class="form-control" name="prodi" placeholder="Masukkan Prodi">
                        </div>
                        <div class="form-group">
                            <label for="prestasi">prestasi</label>
                            <input type="text" class="form-control" name="prestasi" placeholder="Masukkan prestasi mahasiswa">
                        </div>
                        <button type="submit" class="btn btn-primary" value="Tambahkan">Tambahkan</button>
                    </form>
                    <a href="beranda.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#clickMeButton').click(function() {
                var confirmation = confirm('Apakah Anda yakin ingin keluar?');

                
                if (confirmation) {
                    window.location.href = 'keluar.php';
                }
            });
        });
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>