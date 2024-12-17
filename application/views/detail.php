<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/front/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/front/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/front/') ?>css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>089517133959</a>
                    <a href="" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i><?= $konfig->email ?></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="<?= $konfig->facebook ?>" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= $konfig->instagram ?>" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="text-primary m-0"></i><?= $konfig->judul_website ?></h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= base_url('beranda ') ?>" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                        <div class="dropdown-menu m-0">
                            <?php foreach ($kategori as $kate) { ?>
                                <a href="<?= base_url('beranda/kategori/' . $kate['id_kategori']) ?>" class="dropdown-item"><?= $kate['nama_kategori'] ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('auth') ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Login</a>
            </div>
        </nav>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- Services Start -->

    <!-- Blog Start -->
    <!-- <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Our Blog</h4>
                </div>
                <h1 class="display-3 mb-4">trendy items</h1>
            </div>

            <div class="row g-4 justify-content-center">
                
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span><?= $konten->nama ?></a>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span><?= $konten->nama_kategori ?></a>
                                </div>
                                <a href="#" class="h4"><?= $konten->judul ?></a>
                                <span class="d-block text-truncate" style="max-width: 150px;">
                                    <?= $ktn['keterangan'] ?>
                                </span>
                                <a href="<?= base_url('beranda/artikel/' . $konten->slug) ?>" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5">
                        <span class="pr-2">Blog Detail Page</span>
                    </p>
                    <hr>
                    <h1 class="mb-3" style="font-family: Bebas neue;"><?= $konten->judul ?></h1>
                    <div class="d-flex">
                        <p class="mr-3"><i class="fa fa-user text-primary"></i> <?= $konten->nama ?></p>
                        <p class="ml-10">
                            <i class="fa fa-folder text-primary"></i> <?= $konten->nama_kategori ?>
                        </p>
                    </div>
                </div>
                <div class="mb-5 d-inline-flex">
                    <img
                        class="img-fluid rounded w-50"
                        src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>"
                        alt="Image" width="500px" height="500px" />
                    <p class="mx-3">
                        <?= $konten->keterangan ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid py-5 wow fadeIn bg-dark" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4"><i class="fas fa-tshirt m-12"></i><?= $konfig->judul_website ?></h4>
                        <p><?= $konfig->profil_website ?>
                        </p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="<?= $konfig->facebook ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="<?= $konfig->instagram ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <!-- <a href=""><i class="fa fa-map-marker-alt me-2"></i> <?= $konfig->alamat ?></a> -->
                        <a href=""><i class="fas fa-envelope me-2"></i> <?= $konfig->email ?></a>
                        <a href="https://bit.ly/m/Ravenskyzz"><i class="fas fa-phone me-2"></i> <?= $konfig->no_wa ?></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Location</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> <?= $konfig->alamat ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="<?= base_url('assets/front/') ?>js/main.js"></script>

</body>

</html>