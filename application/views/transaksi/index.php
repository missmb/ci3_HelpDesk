<div class="row mt-3 mb-3">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <form action="<?= base_url('ticket/searchtransaksi'); ?>" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Keyword" name="keywordlog" autofocus>
                <button class="btn btn-primary" type="submit" nama="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title ?> <small>Result : <?= $result ?></small></h6>
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
                        <th>Date Solve</th>
                        <th>Update Time</th>
                        <th>Action</th>
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
                        <th>Date Solve</th>
                        <th>Update Time</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = $this->uri->segment('3') + 1; ?>
                    <?php foreach ($data as $v) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="<?= base_url('ticket/detailtransaksi/' . $v['ID_TRANSAKSI']); ?>"><?= $v['ID_TRANSAKSI'] ?></a></td>
                            <td><?= $v['USER_COMPLAIN'] ?></td>
                            <td><?= $v['CONTACT'] ?></td>
                            <td><?= $v['DIVISI'] ?></td>
                            <td><?= $v['PLACE'] ?></td>
                            <td><?= $v['DATE_INSERT'] ?></td>
                            <td><?= $v['CATEGORY'] ?></td>
                            <td><?= $v['DETAIL'] ?></td>
                            <td><?= $v['STATUS'] ?>
                            <td><?= $v['DATE_SOLVE'] ?>
                            <td><?= $v['UPDATE_TIME'] ?>
                            </td>
                            <td>
                                <a href="<?= base_url('ticket/detailtransaksi/' . $v['ID_TRANSAKSI']); ?>"><i class="fas fa-sync text-success"></i></a>
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
