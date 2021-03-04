<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body onload="window.print();">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 justify-content-between row">
                <h3 class="m-0 font-weight-bold text-primary">Detail Ticket - <?= $ticket['ID_TICKET'] ?></a></h3>
            </div>
            <div class="row mt-3">
                <div class="col-lg-10">
                    <form action="<?= base_url('ticket/detail_ticket'); ?>">
                        <div class="form-group row">
                            <label for="user_complain" class="col-sm-3 control-label">ID Ticket</label>
                            <?= $id['ID_TICKET'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="user_complain" class="col-sm-3 control-label">User Complain</label>
                            <?= $id['USER_COMPLAIN'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-sm-3 control-label">Contact</label>
                            <?= $id['CONTACT'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="divisi" class="col-sm-3 control-label">Divisi</label>
                            <?= $ticket['DIVISI'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="place" class="col-sm-3 control-label">Place</label>
                            <?= $ticket['PLACE'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 control-label">Category</label>
                            <?= $ticket['CATEGORY'] ?>
                        </div>
                        <div class="form-floating row mb-3">
                            <label for="detail" class="col-sm-3 control-label">Detail</label>
                            <?= $ticket['DETAIL'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="id_technician" class="col-sm-3 control-label">Technician</label>
                            <?= $ticket['TECHNICIAN_NAME'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="id_status" class="col-sm-3 control-label">Status</label>
                            <?= $ticket['STATUS'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="how_to_solve" class="col-sm-3 control-label">How To Solve</label>
                            <?= $ticket['HOW_TO_SOLVE'] ?>
                        </div>
                        <div class="form-group row">
                            <label for="note" class="col-sm-3 control-label">Note</label>
                            <?= $ticket['NOTE'] ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>
</body>

</html>