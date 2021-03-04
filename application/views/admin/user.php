<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th class="text-center">Cover</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Email</th>
                            <th>Username</th> 
                            <th class="text-center">Cover</th> 
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $v) : ?>
                            <tr>
                                <td class="text-center"><?= $i ?></td>
                                <td><?= $v['EMAIL'] ?></td>
                                <td><?= $v['NAME'] ?></td>
                                <td class="text-center">
                                <img class="img-profile rounded-circle" width="100" height="100" src="<?= base_url('assets/img/profile/') . $user['IMAGE']; ?>">
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>