<!DOCTYPE html>
<html>

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


<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Login</h4>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" name="username" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Login</button><br><br>
							</div>
							<div class="text-center">
								<a type="submit" class="btn btn-primary" href="registrasi.php">Registrasi?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	session_start();


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["password"];

		include "koneksi.php";

		$sql = "SELECT * FROM akun WHERE username = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();


			if ($password == $row["password"]) {
				$_SESSION["username"] = $row["username"];
				header("Location: beranda.php");
				exit();
			} else {
				$error = "Password tidak valid" . ' ' . $row["password"] . ' ' . $password;
			}
		} else {
			$error = "Username tidak ditemukan";
		}

		$stmt->close();
		$conn->close();
	}

	if (isset($error)) {
		echo "<p>$error</p>";
	}
	?>



</body>

</html>