<?php
require_once 'koneksi.php';
include('fungsi.php');
$sql = "SELECT * FROM artikel";
$all = $koneksi->query($sql);
$sql1 = "SELECT nama_kategori FROM kategori";
$all1 = $koneksi->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Harmony of Nature</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon(3).ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles1.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"> Wonderful Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Wonderful Indoneisa Blog!</h1>
                <p class="lead mb-0"> One country, diverse wonders!</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">

        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <?php
                $kategori = $_GET['kategori'];
                $teratas = mysqli_query($koneksi, "SELECT * FROM artikel WHERE kategori='$kategori'");
                while ($data = mysqli_fetch_array($teratas)) {
                ?>
                    <div class="card mb-4">

                        <a href="#!"><img class="card-img-top" src="image_view.php?id=<?php echo $data['id_artikel']; ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= ubahtanggal1($data["tanggal_upload"]) ?></div>
                            <h2 class="card-title"><?= $data["judul"] ?></h2>
                            <p class="card-text"><?= tampiltext($data["deskripsi"]) ?></p>
                            <a class="btn btn-primary" href="post.php?myid=<?= $data['id_artikel'] ?>"">Read more →</a>
                    </div>
                
                </div>
                        <?php
                    }
                        ?>
            </div>
            <!-- Side widgets-->
            <div class=" col-lg-4">
                                
                                <!-- Categories widget-->
                                <div class="card mb-4">
                                    <div class="card-header">Categories</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled mb-0">
                                                    <?php while ($row = mysqli_fetch_assoc($all1)) {
                                                        # code...
                                                    ?>
                                                        <li><a href="kategori.php?kategori=<?= $row['nama_kategori'] ?>""><?= $row['nama_kategori'] ?></a></li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Side widget-->
                                <div class="card mb-4">
                        <div class="card-header">About Us</div>
                        <div class="card-body">Welcome to the Wonderful Indonesia website! We are here to showcase the enchanting beauty, rich culture, and diverse wonders of Indonesia. From pristine beaches and majestic mountains to vibrant festivals and mouthwatering cuisine, Indonesia has it all. Explore our site and immerse yourself in the captivating charm of this incredible nation. Come and discover the wonders that make Indonesia truly extraordinary.</div>
                    </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Footer-->
                                <footer class="py-5 bg-dark">
                                    <div class="container">
                                        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
                                    </div>
                                </footer>
                                <!-- Bootstrap core JS-->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                                <!-- Core theme JS-->
                                <script src="admin/js/scripts1.js"></script>
</body>

</html>