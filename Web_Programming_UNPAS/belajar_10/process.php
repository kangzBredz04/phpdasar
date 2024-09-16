<?php
// Memasukkan file koneksi database
require 'db_connect.php';

// Menyimpan data baru atau memperbarui data jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : null; // Untuk Update, kita butuh ID
    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar']; // Asumsi gambar berupa URL
    
    if ($id) {
        // Query untuk update data mahasiswa
        $sql_update = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE id=$id";
        if ($conn->query($sql_update) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql_update . "<br>" . $conn->error;
        }
    } else {
        // Query untuk menambahkan data mahasiswa baru
        $sql_insert = "INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) 
                       VALUES ('$nama', '$nrp', '$email', '$jurusan', '$gambar')";
        if ($conn->query($sql_insert) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
}

// Menghapus data mahasiswa berdasarkan ID
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM mahasiswa WHERE id=$id";
    if ($conn->query($sql_delete) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql_delete . "<br>" . $conn->error;
    }
}
?>
