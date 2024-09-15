<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo with PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php
  // Koneksi ke database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "phpdasar";

  // Membuat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Cek koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  // Query untuk mengambil data mahasiswa
  $sql = "SELECT * FROM mahasiswa";
  $result = $conn->query($sql);

  ?>

  <div class="container mt-5">
    <h2 class="mb-4">Daftar Mahasiswa</h2>
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
        <?php if ($result->num_rows >= 0): ?>
          <?php $index = 1; ?>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr>
              <th scope="row"><?= $index++; ?></th>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['nrp']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['jurusan']; ?></td>
              <td><img src="<?= $row['gambar']; ?>" alt="Profile Picture" class="img-fluid rounded" width="70"></td>
              <td>
                <button class="btn btn-warning btn-sm">Update</button>
                <button class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="7">Tidak ada data mahasiswa.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <?php
  // Menutup koneksi
  $conn->close();
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
