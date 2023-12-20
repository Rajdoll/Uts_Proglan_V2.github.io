
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota Kerajaan</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"/>
</head>
<body>
    <nav>
        <div style="text-align: center;">
            <div class="nav-items">
                <a href="index.html">Home(Kingdom)</a>
            </div>
        </div>
    </nav>
   
        <h1>Daftar Anggota Kerajaan</h1>
        <h4>Gratis, Tidak dipungut Biaya</h4>
    <div class="signup-box">
        <form action="sc2.php" method="post">
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="" required />
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="" required />
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="" required />
            <input type="submit" value="Daftar" />
        </form>
    </div>
    <p class="para-2">Anggota Kerajaan? <br><a href="login.html">Masuk Disini</a></p>
</body>
</html>

<?php
session_start();

include 'koneksi.php';

//login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM anggota WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: homepage1.html"); 
        exit();
    } else {
        echo "<script>alert('Login gagal. Coba lagi!')</script>";
    }
}

// register
if (isset($_POST['register'])) {
    $registerUsername = $_POST['registerUsername'];
    $registerEmail = $_POST['registerEmail'];
    $registerPassword = $_POST['registerPassword'];

    $sql = "INSERT INTO anggota (username, email, password) VALUES ('$registerUsername', '$registerEmail', '$registerPassword')";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "<script>alert('Pendaftaran berhasil!')</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal. " . mysqli_error($koneksi) . "')</script>";
    }
}
?>



