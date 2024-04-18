<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

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
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="input.php">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil.php">Tampil Data</a>
                    </li>

                    <li class="nav-item" style="cursor: pointer;">
                        <a class="nav-link" id="clickMeButton">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Selamat datang di Dashboard</h1>
        <p>Selamat datang, <?php echo $_SESSION["username"]; ?>!</p>
        <p>Ini adalah halaman Beranda dashboard.</p>
        <button id="toggleButton" class="btn btn-primary">Tampilkan data mahasiswa</button>
        <div id="toggleContent" style="display: none;"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- jQuery -->
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


        $(document).ready(function() {
            
            $('#toggleButton').click(function() {
                
                $('#toggleContent').slideToggle(function() {
                    
                    if ($(this).is(':visible')) {
                        
                        $.ajax({
                            url: 'datamahasiswa.php', 
                            success: function(data) {
                                $('#toggleContent').html(data);
                            }
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>