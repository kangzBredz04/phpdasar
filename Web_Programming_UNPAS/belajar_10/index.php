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
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $sql_update . "<br>" . $conn->error;
        }
    } else {
        // Query untuk menambahkan data mahasiswa baru
        $sql_insert = "INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) 
                       VALUES ('$nama', '$nrp', '$email', '$jurusan', '$gambar')";
        if ($conn->query($sql_insert) === TRUE) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
}

// Menghapus data mahasiswa jika ada parameter 'delete_id'
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM mahasiswa WHERE id=$delete_id";
    if ($conn->query($sql_delete) === TRUE) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql_delete . "<br>" . $conn->error;
    }
}

// Query untuk mengambil data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo with PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Daftar Mahasiswa</h2>
    
    <!-- Button Tambah Mahasiswa -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahMahasiswaModal" onclick="resetForm()">
      Tambah Mahasiswa
    </button>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NRP</th>
          <th scope="col">Email</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Gambar</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($result->num_rows > 0): ?>
          <?php $index = 1; ?>
          <?php foreach ($result as $row): ?>
            <tr>
              <th scope="row"><?= $index++; ?></th>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['nrp']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['jurusan']; ?></td>
              <td><img src="<?= $row['gambar']; ?>" alt="Profile Picture" class="img-fluid rounded" width="70"></td>
              <td>
                <button class="btn btn-warning btn-sm" onclick="editMahasiswa(<?= $row['id']; ?>, '<?= $row['nama']; ?>', '<?= $row['nrp']; ?>', '<?= $row['email']; ?>', '<?= $row['jurusan']; ?>', '<?= $row['gambar']; ?>')" data-bs-toggle="modal" data-bs-target="#tambahMahasiswaModal">Update</button>
                <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $row['id']; ?>)">Delete</button>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="7">Tidak ada data mahasiswa.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
</div>

<!-- Bootstrap Modal untuk Form Tambah/Update Mahasiswa -->
<div class="modal fade" id="tambahMahasiswaModal" tabindex="-1" aria-labelledby="tambahMahasiswaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahMahasiswaModalLabel">Tambah Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" id="mahasiswaForm">
          <input type="hidden" name="id" id="mahasiswaId">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="text" class="form-control" id="nrp" name="nrp" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (URL)</label>
            <input type="text" class="form-control" id="gambar" name="gambar">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
// Fungsi untuk mengisi form modal ketika tombol Update diklik
function editMahasiswa(id, nama, nrp, email, jurusan, gambar) {
    document.getElementById('mahasiswaId').value = id;
    document.getElementById('nama').value = nama;
    document.getElementById('nrp').value = nrp;
    document.getElementById('email').value = email;
    document.getElementById('jurusan').value = jurusan;
    document.getElementById('gambar').value = gambar;
    document.getElementById('tambahMahasiswaModalLabel').innerText = "Update Mahasiswa";
}

// Fungsi untuk mereset form modal ketika ingin menambahkan mahasiswa baru
function resetForm() {
    document.getElementById('mahasiswaForm').reset();
    document.getElementById('mahasiswaId').value = "";
    document.getElementById('tambahMahasiswaModalLabel').innerText = "Tambah Mahasiswa";
}

// Fungsi untuk konfirmasi penghapusan data
function confirmDelete(id) {
    if (confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')) {
        window.location.href = "?delete_id=" + id;
    }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
