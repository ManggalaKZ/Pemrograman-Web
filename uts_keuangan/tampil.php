<?php include 'koneksi.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
}
?>

<body>
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
                        <a class="nav-link" aria-current="page" href="input.php">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tampil.php">Tampil Data</a>
                    </li>

                    <li class="nav-item" style="cursor: pointer;">
                        <a class="nav-link" id="clickMeButton">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Mahasiswa Berprestasi</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                                <th>Prodi</th>
                                <th>Prestasi</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM datamhs";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['nim'] . "</td>";
                                    echo "<td>" . $row['nama'] . "</td>";
                                    echo "<td>" . $row['fakultas'] . "</td>";
                                    echo "<td>" . $row['prodi'] . "</td>";
                                    echo "<td>" . $row['prestasi'] . "</td>";
                                    echo "<td>";
                                    echo "<a href='proses_hapus.php?nim=" . $row['nim'] . "' class='btn btn-danger'>Hapus</a>";
                                    echo "</td>";
                                    echo "<td>";
                                    echo "<a href='edit.php?nim=" . $row['nim'] . "' class='btn btn-warning'>Edit</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7'>No data found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>