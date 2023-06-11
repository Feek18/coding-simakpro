<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/logopnb.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">


    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .login {
            height: 100vh;
        }

        .header h1 {
            font-style: normal;
            font-weight: 400;
            font-size: 34px;
            line-height: 46px;
            letter-spacing: 0.25px;
            color: #212121;
            mix-blend-mode: normal;
            opacity: 0.87;
        }

        .header p {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            letter-spacing: 0.444444px;
            color: #212121;
            opacity: 0.6;
        }

        .login-form label {
            margin-top: 20px;
            font-style: normal;
            font-weight: 400;
            font-size: 17px;
            line-height: 24px;
            color: #000;
        }

        .login-form input {
            background-color: #fff;
            border: 1px solid #A9A9A9;
            box-sizing: border-box;
            border-radius: 9px;
        }

        .login-form a {
            margin-top: 30px;
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 20px;
            letter-spacing: 0.25px;
            color: #3A86FF;
            mix-blend-mode: normal;
            opacity: 0.87;
        }

        button {
            margin-top: 19px;
            float: right;
            border-radius: 7px;
            text-decoration: none;
            font-style: normal;
            font-size: 15px;
            line-height: 19px;
            text-align: center;
            letter-spacing: 1.54286px;
            text-transform: uppercase;
            color: #FFFFFF;
            padding: 12px 40px;
            border: none;
        }

        .mb-3 {
            margin-top: 12px;
        }

    </style>


</head>

<body>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <form id="formlogin" name="formlogin" method="post"
                        action="<?php echo base_url('clogin/proseslogin'); ?>">
                        <div class="header">
                            <h2>Login Account</h2>
                            <p>Welcome back! Please fill in the blank</p>
                        </div>
                        <div class="login-form">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukan Username Anda"
                                name="username">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Masukan Password Anda" name="password">
                        </div>

                        <a href="#" class="text-decoration-none">Forgot password?</a>

                        <button class="bg-primary" type="submit">
                            SIGN IN
                        </button>
                </div>
                    </form>
            </div>
        </div>
        </div>

        <div style="background-color: #526D82" class="logint-right w-50 h-100">
            <img style="padding-top: 190px; padding-left: 180px;" class="img-right" src="<?php echo base_url('assets/img/edu.png'); ?>" alt="">
        </div>











    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>