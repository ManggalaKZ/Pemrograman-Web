<!DOCTYPE html>
<html>

<head>
    <title>Registrasi Akun</title>

    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <style type="text/css">
            body {
                background-color: #f8f9fa;
            }

            .card {
                margin-top: 100px;
            }
        </style>
    </head>
</head>

<body>
    <?php
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newUsername = $_POST["new_username"];
        $newNama = $_POST["new_nama"];
        $newPassword = $_POST["new_password"];

        if (empty($newUsername) || empty($newNama) || empty($newPassword)) {
            $error = "Semua kolom harus diisi.";
        } else {
            include "koneksi.php";

            $checkUsernameQuery = "SELECT * FROM akun WHERE username = ?";
            $stmt = $conn->prepare($checkUsernameQuery);
            $stmt->bind_param("s", $newUsername);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $error = "Username sudah digunakan, silakan pilih yang lain.";
            } else {
                // $hashed_password = password_hash($newPassword, PASSWORD_BCRYPT);
                $insertQuery = "INSERT INTO akun (nama, username, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($insertQuery);
                $stmt->bind_param("sss", $newNama, $newUsername, $newPassword);
                if ($stmt->execute()) {
                    header("Location: index.php");
                    exit(); // Hindari eksekusi lebih lanjut setelah pengalihan
                } else {
                    $error = "Terjadi kesalahan saat mendaftar: " . $conn->error;
                }
            }

            $stmt->close();
            $conn->close();
        }
    }
    ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Registrasi</h4>
                    </div>
                    <div class="card-body">
                        <form method="post">

                            <div class="form-group">
                                <label for="new_password">nama </label>
                                <input type="text" id="new_nama" name="new_nama" required><br>
                            </div>
                            <div class="form-group">
                                <label for="new_username">Username </label>
                                <input type="text" id="new_username" name="new_username" required><br>
                            </div>
                            <div class="form-group">
                                <label for="new_password">Password </label>
                                <input type="password" id="new_password" name="new_password" required><br>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Registrasi</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>