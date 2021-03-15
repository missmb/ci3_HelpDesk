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
                            <td><?= $v['DATE_INSERTTICKET'] ?></td>
                            <td><?= $v['CATEGORY'] ?></td>
                            <td><?= $v['DETAIL'] ?></td>
                            <td><?= $v['STATUS'] ?></td>
                            <td class="text-center">
                                <?= $v['ID_TICKET'] ?>
                                <a href="<?= base_url('ticket/detail/' . $v['ID_TICKET']); ?>"><i class="fas fa-search text-success"></i></a>
                                <a href="<?= base_url('ticket/edit/' . $v['ID_TICKET']); ?>"><i class="fas fa-edit text-primary"></i></a>
                                <a href="<?= base_url('ticket/delete/' . $v['ID_TICKET']); ?>"><i class="fas fa-trash text-danger"></i></a>
                                <a href="" data-toggle="modal" data-target="#deleteTicket"><i class="fas fa-trash text-danger"></i></a>
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


<!-- Modal Delete Ticket -->
<div class="modal fade" id="deleteTicket" tabindex="-1" role="dialog" aria-labelledby="deleteTicketLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTicketLabel">Add New Role</h5>
                <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('ticket/delete/' . $v['ID_TICKET']); ?>" method="POST">
                <div class="modal-body">
                    <h3>Are you Sure Want to Delete <?= $v['ID_TICKET']; ?> ?>?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary delete_button">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>