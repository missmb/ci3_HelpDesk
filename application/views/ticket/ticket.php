<div class="container">
    <a href="<?= base_url('ticket/add'); ?>" class="btn btn-primary mb-3">Add New Ticket</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title ?> <small>Result : <?= $result ?></small></h6>
    </div>

    <div class="navdar-form navdar-right">
        <div class="col-md-5 ml-auto">
            <?php echo form_open('ticket/search') ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" autofocus>
                <button class="btn btn-primary" type="submit" name="submit">Search</button>
                <?php echo form_close() ?>
            </div>
            </form>
        </div>
    </div>

    <?= $this->session->flashdata('message'); ?>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>User_Complain</th>
                        <th>Contact</th>
                        <th>Divisi</th>
                        <th>Place</th>
                        <th>Date Insert</th>
                        <th>Category</th>
                        <th>Detail</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>User_Complain</th>
                        <th>Contact</th>
                        <th>Divisi</th>
                        <th>Place</th>
                        <th>Date Insert</th>
                        <th>Category</th>
                        <th>Detail</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = $this->uri->segment('3') + 1; ?>
                    <?php foreach ($data as $v) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $v['ID_TICKET'] ?></td>
                            <td><?= $v['USER_COMPLAIN'] ?></td>
                            <td><?= $v['CONTACT'] ?></td>
                            <td><?= $v['DIVISI'] ?></td>
                            <td><?= $v['PLACE'] ?></td>
                            <td><?= $v['DATE_INSERT'] ?></td>
                            <td><?= $v['CATEGORY'] ?></td>
                            <td><?= $v['DETAIL'] ?></td>
                            <td><?= $v['STATUS'] ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('ticket/detail/' . $v['ID_TICKET']); ?>"><i class="fas fa-search text-success"></i></a>
                            </td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col">
                    <!--Show pagination-->
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>