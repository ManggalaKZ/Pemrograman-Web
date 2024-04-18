<?php 
include "koneksi.php" ;

$nim = $_GET['nim'];
$query = "SELECT * FROM datamhs WHERE nim='$nim'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>


<link href="https://cdn.jsdelivr.net/npm/c@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<div class="container mt-5" id="form">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title"> Edit data Mahasiswa berprestasi</h5>
            <form action="update.php" method="post">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $data['nim'];?>" readonly>
            </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'];?>">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="fakultas" value="<?php echo $data['fakultas'];?>">
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" class="form-control" name="prodi" value="<?php echo $data['prodi'];?>">
                </div>
                <div class="form-group">
                    <label for="prestasi">prestasi</label>
                    <input type="text" class="form-control" name="prestasi" value="<?php echo $data['prestasi'];?>">
                </div>
                <button type="submit"  name="submit" class="btn btn-primary" value="Update">Update</button>
            </form>
            <a href="beranda.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>