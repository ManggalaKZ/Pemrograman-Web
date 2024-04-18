<?php
include "koneksi.php";

$sql = "SELECT * FROM datamhs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Mahasiswa</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Fakultas</th>
                                        <th>Prodi</th>
                                        <th>prestasi</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>';

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

    echo '</tbody>
        </table>
        <a href="beranda.php" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
        </div>
        </div>';
} else {
    echo "<p>Tidak ada data mahasiswa yang ditemukan</p>";
}

mysqli_close($conn);
?>
