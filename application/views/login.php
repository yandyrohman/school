<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url().'assets/dist/css/style.min.css' ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="bg">
        <form class="card" action="<?= base_url('login/attempt') ?>" method="POST">
            <div class="card-body" style="width: 350px">
                <div class="text-center h3 mb-4">LOGIN</div>
                <?php if(isset($msg)) : ?>
                    <?= $msg ?>
                <?php endif; ?>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Masukan Username" name="username" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="Masukan Pasword" name="password" required>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a class="btn btn-secondary mr-2" href="<?= base_url('/') ?>">KEMBALI</a>
                    <button class="btn btn-primary">LOGIN</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<style>
    * {
        margin: 0;
        box-sizing: border-box;
    }

    .bg {
        position: fixed;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #039be5;
    }

    .card {
        box-shadow: 0 6px 10px 0 rgba(0,0,0,0.14), 0 1px 18px 0 rgba(0,0,0,0.12), 0 3px 5px -1px rgba(0,0,0,0.20);
        border-radius: 10px;
    }
</style>