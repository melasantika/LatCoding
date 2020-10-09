<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        .container {
            width: 30%;
            margin-top: 9%;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.3);
            padding: 40px;
        }

        button {
            width: 48%;
        }
    </style>

    <title><?= $judul; ?></title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">FORM LOGIN</h2>
        <hr>
        <form action="<?= base_url('login/aksi_login'); ?>" method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukan username anda">
                </div>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <li class="fas fa-unlock-alt"></li>
                        </div>
                    </div>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password anda">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.3.1.slim.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>