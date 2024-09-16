<?php
// Memasukkan file koneksi database
require 'db_connect.php';

// Query untuk mengambil data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
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

<!-- Include modal form dari file form_modal.php -->
<?php include 'form_modal.php'; ?>

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
        window.location.href = "process.php?delete_id=" + id;
    }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
