<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMAKPRO</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/logopnb.png">

    <!-- boostrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section id="header"
        style="font-size: 17px; font-weight: 600; background-repeat: no-repeat; background-size: 100%; padding-top: 12px;">
        <nav class="navbar navbar-expand-lg bg-tranparant" style="">
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
                                style="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about" style="font-size: 16px;">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#program" style="font-size: 16px;">Programs</a>
                                        <li class="nav-item">
                            <a class="nav-link" href="#galery" style="font-size: 16px;">Galery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" style="font-size: 16px;">Contact Us</a>
                        </li>
                    </ul>
                    <button class="btn" style="background: #FBC102;" type="submit">
                        <a href="<?php echo base_url('clogin/formlogin') ?>"
                            style="color: white; text-decoration: none; margin: 15px;">Login</a>
                    </button>
                </div>
            </div>
        </nav>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>