<div class="container">
    <a href="<?= base_url('ticket/add'); ?>" class="btn btn-primary mb-3">Add New Ticket</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
        </div>

        <div class="rom">
            <div class="col-md-5 ml-auto">
                <form action="<?= base_url('ticket/detail_ticket'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" autofocus>
                        <button class="btn btn-primary" type="submit" nama="submit">Search</button>
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
                            <th>Date Solve</th>
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
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($ticket as $v) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $v['ID_TICKET'] ?></td>
                                <td><?= $v['USER_COMPLAIN'] ?></td>
                                <td><?= $v['CONTACT'] ?></td>
                                <td><?= $v['DIVISI'] ?></td>
                                <td><?= $v['PLACE'] ?></td>
                                <td><?= $v['DATE_INSERT'] ?></td>
                                <td><?= $v['CATEGORY'] ?></td>
                                <td><?= $v['DETAIL'] ?></td>
                                <td><?= $v['STATUS'] ?>
                                <td><?= $v['DATE_SOLVE'] ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('ticket/detail/' . $v['ID_TICKET']); ?>"><i class="fas fa-search text-success"></i></a>
                                    <a href="<?= base_url('ticket/edit/' . $v['ID_TICKET']); ?>"><i class="fas fa-edit text-primary"></i></a>
                                    <a href="" data-toggle="modal" data-target="#deleteTicket"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
                    <h3>Are you Sure Want to Delete?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>