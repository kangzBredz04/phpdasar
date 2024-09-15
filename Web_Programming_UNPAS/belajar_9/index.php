<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo with PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php
  // Data mahasiswa disimpan dalam array asosiatif
  $mahasiswa = [
    ['id' => 1, 'nama' => 'Ahmad Fauzi', 'nrp' => '121114084', 'email' => 'ahmad.fauzi@example.com', 'jurusan' => 'Akuntansi', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 2, 'nama' => 'Budi Santoso', 'nrp' => '121114085', 'email' => 'budi.santoso@example.com', 'jurusan' => 'Manajemen', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 3, 'nama' => 'Siti Aisyah', 'nrp' => '121114086', 'email' => 'siti.aisyah@example.com', 'jurusan' => 'Teknik Informatika', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 4, 'nama' => 'Rina Wijaya', 'nrp' => '121114087', 'email' => 'rina.wijaya@example.com', 'jurusan' => 'Sistem Informasi', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 5, 'nama' => 'Dewi Lestari', 'nrp' => '121114088', 'email' => 'dewi.lestari@example.com', 'jurusan' => 'Ekonomi', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 6, 'nama' => 'Eko Prasetyo', 'nrp' => '121114089', 'email' => 'eko.prasetyo@example.com', 'jurusan' => 'Ilmu Komputer', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 7, 'nama' => 'Andi Susanto', 'nrp' => '121114090', 'email' => 'andi.susanto@example.com', 'jurusan' => 'Hukum', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 8, 'nama' => 'Rizky Ramadhan', 'nrp' => '121114091', 'email' => 'rizky.ramadhan@example.com', 'jurusan' => 'Psikologi', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 9, 'nama' => 'Lina Marlina', 'nrp' => '121114092', 'email' => 'lina.marlina@example.com', 'jurusan' => 'Bioteknologi', 'gambar' => 'images/wabredz.jpg'],
    ['id' => 10, 'nama' => 'Farhan Maulana', 'nrp' => '121114093', 'email' => 'farhan.maulana@example.com', 'jurusan' => 'Desain Produk', 'gambar' => 'images/wabredz.jpg']
  ];
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
        <?php foreach ($mahasiswa as $index => $mhs): ?>
        <tr>
          <th scope="row"><?php echo $index + 1; ?></th>
          <td><?php echo $mhs['nama']; ?></td>
          <td><?php echo $mhs['nrp']; ?></td>
          <td><?php echo $mhs['email']; ?></td>
          <td><?php echo $mhs['jurusan']; ?></td>
          <td><img src="<?php echo $mhs['gambar']; ?>" alt="Profile Picture" class="img-fluid rounded" width="70"></td>
          <td>
            <button class="btn btn-warning btn-sm">Update</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
