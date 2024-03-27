<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destinasi Wisata Indonesia</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Konten header -->
  </header>

  <section class="home" id="home">
    <!-- Konten section home -->
  </section>

  <section class="wisata" id="wisata">
    <div class="container">
      <h2>Tabel Paket</h2>
      <?php
      // Koneksi ke database
      $servername = "localhost";
      $username = "root";
      $password = "1234basdat";
      $dbname = "indonesia";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Memeriksa koneksi
      if (!$conn) {
          die("Koneksi gagal: " . mysqli_connect_error());
      }

      // Query untuk mendapatkan data paket
      $sql = "SELECT id_wisata, tujuan, keterangan, harga FROM paket";
      $result = mysqli_query($conn, $sql);

      // Memeriksa apakah query berhasil dieksekusi
      if (mysqli_num_rows($result) > 0) {
          echo "<table>";
          echo "<tr><th>ID Wisata</th><th>Tujuan</th><th>Keterangan</th><th>Harga</th></tr>";

          // Menampilkan data paket dalam tabel
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row["id_wisata"] . "</td>";
              echo "<td>" . $row["tujuan"] . "</td>";
              echo "<td>" . $row["keterangan"] . "</td>";
              echo "<td>" . $row["harga"] . "</td>";
              echo "</tr>";
          }
          echo "</table>";
      } else {
          echo "Tidak ada data paket yang tersedia.";
      }

      // Menutup koneksi ke database
      mysqli_close($conn);
      ?>
    </div>
  </section>

  <section class="pesan" id="pesan">
    <!-- Konten section pesan -->
  </section>

  <footer>
    <!-- Konten footer -->
  </footer>

  <script src="script.js"></script>
</body>
</html>