<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('ticket/add'); ?>" method="POST">
                <div class="form-group row">
                    <label for="user_complain" class="col-sm-3 control-label">User Complain</label>
                    <input type="text" class="form-control col-sm-9" id="user_complain" name="user_complain">
                    <?= form_error('user_complain', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="contact" class="col-sm-3 control-label">Contact</label>
                    <input type="text" class="form-control col-sm-9" id="contact" name="contact">
                    <?= form_error('contact', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="divisi" class="col-sm-3 control-label">Divisi</label>
                    <select name="divisi" id="divisi" class="form-control col-sm-9">
                        <option value="">Select Divisi</option>
                        <?php foreach ($divisi as $v) : ?>
                            <option value="<?= $v['ID_DIVISI']; ?>"><?= $v['DIVISI']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="place" class="col-sm-3 control-label">Place</label>
                    <input type="text" class="form-control col-sm-9" id="place" name="place">
                    <?= form_error('place', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-sm-3 control-label">Category</label>
                    <select name="category" id="category" class="form-control col-sm-9">
                        <option value="">Select Category</option>
                        <?php foreach ($category as $v) : ?>
                            <option value="<?= $v['ID_CATEGORY']; ?>"><?= $v['CATEGORY']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-floating row mb-3">
                    <label for="detail" class="col-sm-3 control-label">Detail</label>
                    <textarea class="form-control col-sm-9" placeholder="explain your details problem" id="detail" name="detail" style="height: 100px"></textarea>
                </div>
                <div class="form-check row">
                <label for="solve" class="col-sm-3 control-label">Solve</label>
                    <input class="form-check-solve" type="checkbox" value="3" id="solve">
                    <label class="form-check-label" for="solve">
                        Can Solve Alone ?
                    </label>
                </div>
                <div class="form-group row">
                    <label for="technician" class="col-sm-3 control-label">technician</label>
                    <select name="technician" id="technician" class="form-control col-sm-9">
                        <option value="">Select Technician</option>
                        <?php foreach ($technician as $v) : ?>
                            <option value="<?= $v['ID_TECHNICIAN']; ?>"><?= $v['TECHNICIAN_NAME']; ?> - <?= $v['DIVISI']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-gropup">
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->