<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('ticket/editlog/'. $ticket["ID_TICKET_LOG"]); ?>" method="POST">
            <div class="form-group row">
                    <label for="user_complain" class="col-sm-3 control-label">ID TICKET</label>
                    <input type="disable" name="id_ticket_log" value="<?php echo $ticket['ID_TICKET_LOG']?>" disabled>
                    <?= form_error('user_complain', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="user_complain" class="col-sm-3 control-label">User Complain</label>
                    <input type="text" class="form-control col-sm-9" id="user_complain" name="user_complain" value="<?= $ticket['USER_COMPLAIN'] ?>">
                    <?= form_error('user_complain', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="contact" class="col-sm-3 control-label">Contact</label>
                    <input type="text" class="form-control col-sm-9" id="contact" name="contact" value="<?= $ticket['CONTACT'] ?>">
                    <?= form_error('contact', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="divisi" class="col-sm-3 control-label">Divisi</label>
                    <select name="divisi" id="divisi" class="form-control col-sm-9">
                        <option value="<?= $ticket['ID_DIVISI'] ?>"><?= $ticket['DIVISI'] ?></option>
                        <?php foreach ($divisi as $v) : ?>
                            <option value="<?= $v['ID_DIVISI']; ?>"><?= $v['DIVISI']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="place" class="col-sm-3 control-label">Place</label>
                    <input type="text" class="form-control col-sm-9" id="place" name="place" value="<?= $ticket['PLACE'] ?>">
                    <?= form_error('place', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-sm-3 control-label">Category</label>
                    <select name="category" id="category" class="form-control col-sm-9">
                        <option value="<?= $ticket['ID_CATEGORY'] ?>"><?= $ticket['CATEGORY'] ?></option>
                        <?php foreach ($category as $v) : ?>
                            <option value="<?= $v['ID_CATEGORY']; ?>"><?= $v['CATEGORY']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-floating row mb-3">
                    <label for="detail" class="col-sm-3 control-label">Detail</label>
                    <textarea class="form-control col-sm-9" id="detail" name="detail" style="height: 100px" ><?php echo $ticket['DETAIL'] ?></textarea>
                </div>
                <div class="form-group row">
                    <label for="technician" class="col-sm-3 control-label">Technician</label>
                    <select name="technician" id="technician" class="form-control col-sm-9">
                        <option value="<?= $ticket['ID_TECHNICIAN'] ?>"><?= $ticket['TECHNICIAN_NAME'] ?> - <?= $ticket['CATEGORY'] ?></option>
                        <?php foreach ($technician as $v) : ?>
                            <option value="<?= $v['ID_TECHNICIAN']; ?>"><?= $v['TECHNICIAN_NAME']; ?> - <?= $v['DIVISI']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="status_problem" class="col-sm-3 control-label">Status</label>
                    <select name="status_problem" id="status_problem" class="form-control col-sm-9">
                        <option value="<?= $ticket['ID_STATUS']; ?>"><?= $ticket['STATUS']; ?></option>
                        <?php foreach ($status as $v) : ?>
                            <option value="<?= $v['ID_STATUS']; ?>"><?= $v['STATUS']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-floating row mb-3">
                    <label for="how_to_solve" class="col-sm-3 control-label">How To Solve</label>
                    <textarea class="form-control col-sm-9" id="how_to_solve" name="how_to_solve" style="height: 100px" value="<?php echo $ticket['HOW_TO_SOLVE'] ?>"><?php echo $ticket['HOW_TO_SOLVE'] ?></textarea>
                </div>
                <div class="form-floating row mb-3">
                    <label for="note" class="col-sm-3 control-label">Note</label>
                    <textarea class="form-control col-sm-9" id="note" name="note" style="height: 100px" value="<?php echo $ticket['NOTE'] ?>"><?php echo $ticket['NOTE'] ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->