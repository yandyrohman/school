<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Admin</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="<?= base_url().'assets/dist/css/style.min.css' ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">

        <?php $this->load->view('admin/header') ?>
        <?php $this->load->view('admin/menu') ?>

        <div class="content-wrapper">
            <?php $this->load->view($view) ?>
        </div>

    </div>
    
</body>

</html>

<style>
    * {

    }

    .content-wrapper {
        width: calc(100% - 250px);
        margin-left: 250px;
    }
</style>