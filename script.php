<?php
$servername = "localhost";
$database = "kingdom";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}

// Ambil data dari formulir
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Lakukan operasi database sesuai kebutuhan (contoh: menyimpan data ke tabel pengguna)
$sql = "INSERT INTO anggota (Nama, Email, Password) VALUES ('$nama', '$email', '$password')";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses data dari formulir

    // Lakukan operasi database sesuai kebutuhan (contoh: menyimpan data ke tabel anggota)
    $sql = "INSERT INTO anggota (Nama, Email, Password) VALUES ('$nama', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Tutup koneksi
$conn->close();
?>