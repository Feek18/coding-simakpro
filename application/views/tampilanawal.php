<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMAKPRO</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            font-family: 'Open Sans';
        }

        #contact .col-6 {
            position: relative;
        }
    </style>

    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/logopnb.png">

    <!-- boostrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section id="header"
        style="background-image: url('<?php echo base_url(); ?>/assets/bgheader.png'); background-repeat: no-repeat; background-size: 100%; padding-top: 0px;">
        <nav class="navbar navbar-expand-lg bg-tranparant">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url(); ?>/assets/logopnb.png" alt="logo" width="33" height="30">
                    <span
                        style="color: #FBC102; font-family: 'Open Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 25px; text-transform: uppercase;">SIMAKPRO</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-4 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo base_url() ?>"
                                style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about" style="color: white; font-size: 16px;">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#program" style="color: white; font-size: 16px;">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galery" style="color: white; font-size: 16px;">Galery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" style="color: white; font-size: 16px;">Contact Us</a>
                        </li>
                    </ul>
                    <button type="button" class="btn"
                        style="border: none; background: #FBC102; color: #fff; margin-right: 0px;">
                        <a style="color: #fff; text-decoration: none; margin: 15px; padding: 2px 6px;" href="<?php echo base_url('clogin/formlogin') ?>">Login</a>
                    </button>
                    <button type="button" class="btn"
                        style="text-decoration: none; margin: 15px; padding: 6px 22px;">
                        <a style="color: #fff; margin: 15px; padding: 2px 6px; text-decoration: none;" href="<?php echo base_url('clogin/formregis') ?>">Register</a>
                    </button>
                </div>
            </div>
        </nav>

        <?php
        if (empty($konten)) {
            ?>
            <div class="landing">
                <div class="row">
                    <div class="col-6">
                        <p style="color: #FBC102; font-weight: 600; font-size: 16px; margin-bottom: 14px;">POLITEKNIK NEGERI
                            BALI</p>
                        <h1>Sistem Manajemen Prodi</h1>
                        <p class="paragraph">Sistem informasi manajemen kegiatan program studi pada dasarnya adalah sebuah
                            sistem untuk membantu pengarsipan dokumen program studi dalam kaitannya dengan pelaksanaan Tri
                            Dharma Perguruan Tinggi di program studi yang bersangkutan di Politeknik Negeri Bali. </p>
                        <div class="btn" style="margin-left: -13px;">
                            <a href="" style="text-decoration: none; margin-top: 12px; background: #FFFFFF;">Learn More</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo base_url(); ?>/assets/avatar.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="row">
                <div class="col-6">
                    <img style="margin-top: 80px; width: 95%; height: 399px;"
                        src="<?php echo base_url(); ?>/assets/gedung.jpg" alt="">
                </div>
                <div class="col-6">
                    <p
                        style="margin-top: 26px; font-style: normal; font-weight: 600; font-size: 16px; line-height: 25px; text-transform: uppercase; color: #253C56;">
                        About Us</p>
                    <h2 style="margin-top: 4px;">Program Studi Teknologi Rekayasa Perangkat Lunak</h2>
                    <div style="width: 45px; height: 7px; background-color: #FBC102; margin-bottom: 32px;"></div>
                    <p style="font-style: normal; font-weight: 400; font-size: 16px; line-height: 35px; color: #5A5A5A;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus leo. Dolor sit amet, consectetur adipiscing elit. Assumenda voluptates nemo
                        quod quia voluptatibus inventore ipsum?</p>
                    <p style="font-style: normal; font-weight: 400; font-size: 16px; line-height: 35px; color: #5A5A5A;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus leo. Dolor sit amet, consectetur adipiscing elit. Assumenda voluptates nemo
                        quod quia voluptatibus inventore ipsum? Accusantium quasi, deserunt molestiae natus</p>
                </div>
            </div>
        </section>
        <section id="galery"
            style="padding: 13px 128px; display: flex; justify-content: space-between; align-items: center;">
            <div class="row" style="padding-top: 100px;">
                <div class="col-6">
                    <p
                        style=" padding-top: 26px; font-style: normal; font-weight: 600; font-size: 17px; line-height: 25px; text-transform: uppercase; color: #253C56;">
                        TRPL</p>
                    <h2
                        style="font-style: normal; font-weight: 800; font-size: 38px; line-height: 52px; text-transform: uppercase; color: #253C56;">
                        Album Kegiatan</h2>
                    <div style="width: 45px; height: 7px; background-color: #FBC102; margin-bottom: 32px;"></div>
                    <p
                        style="font-family: 'Montserrat'; font-style: italic; font-weight: 500; font-size: 20px; line-height: 35px; color: #253C56;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet consec.</p>
                </div>
                <div class="col-6">
                    <div id="carouselExample" class="carousel slide" style="width: 74%; margin-left: 120px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url(); ?>/assets/gmbr1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url(); ?>/assets/gmbr2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url(); ?>/assets/mhsprestasi.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact"
            style="background: #F9F9F9; display: flex; align-items: center; justify-content: space-between; column-gap: 17px; margin-top: 108px;">
            <div class="row">
                <div class="col-6">
                    <h2
                        style="font-style: normal; font-weight: 800; font-size: 20px; line-height: 27px; text-transform: uppercase; color: #253C56; margin-bottom: 24px;">
                        Teknologi Rekayasa Perangkat Lunak</h2>
                    <p style="font-style: normal; font-weight: 400; font-size: 15px; line-height: 35px; color: #5A5A5A;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis, pulvinar dapibus leo.</p>
                </div>
                <div class="col-6">
                    <form class="d-flex" role="search" style="margin-top: 50px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </section>
        <footer id="footer"
            style="background: #253C56; padding: 13px 128px; color: #fff; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url(); ?>/assets/logopnb.png" alt="logo" width="33" height="30">
                    <span
                        style="color: #FBC102; font-family: 'Open Sans'; font-style: normal; font-weight: 600; font-size: 18px; line-height: 25px; text-transform: uppercase;">SIMAKPRO</span>
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum neque nemo doloribus tenetur</p>
            </div>
            <div class="social" style="display: flex; gap: 34px; cursor: pointer;">
                <img src="<?php echo base_url(); ?>/assets/Facebook.svg" alt="Facebook">
                <img src="<?php echo base_url(); ?>/assets/Instagram.svg" alt="Instagram">
                <img src="<?php echo base_url(); ?>/assets/Twitter.svg" alt="Twitter">
            </div>
        </footer>
        <?php
        } else {
            echo $konten;
        }
        ?>

    <!-- Modal Login
    <div class="modal" tabindex="-1" id="modallogin" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formlogin" name="formlogin" method="post"
                        action="<?php echo base_url('clogin/proseslogin'); ?>">
                        <div class="mb-3 mt-3">
                            <label class="form-label" style="">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukkan username anda"
                                name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label" style="">Password:</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Masukkan password anda " name="password">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="proseslogin();">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal Registrasi -->
    <div class="modal" tabindex="-1" id="modalregis" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create An Account To Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formlogin" name="formlogin" method="post"
                        action="<?php echo base_url('clogin/proseslogin'); ?>">
                        <div class="mb-3 mt-3">
                            <label class="form-label" style="">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="namalengkap"
                                placeholder="Masukkan username anda" name="namalengkap">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email anda "
                                name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="">Password:</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Masukkan password anda " name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="">Konfirmasi Password:</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Konfirmasi password anda " name="password">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>