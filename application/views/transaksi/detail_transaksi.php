  <!-- Begin Page Content -->
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="card shadow mb-4">
          <div class="card-header py-3 justify-content-between row">
              <h3 class="m-0 font-weight-bold text-primary">Detail Transaksi</h3>
              <a href="<?= base_url('ticket/print_ticket/' . $transaksi['ID_TRANSAKSI']); ?>" class="btn btn-danger mb-3">Print Ticket</a>
          </div>
          <form action="<?= base_url('ticket/changestatus/' . $transaksi["ID_TRANSAKSI"]); ?>" method="POST">
              <div class="row mt-3">
                  <div class="col-lg-10 ml-5">
                      <div class="form-group row">
                          <label for="user_complain" class="col-sm-3 control-label">ID Transaksi</label>
                          <?= $transaksi['ID_TRANSAKSI'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="status_problem" class="col-sm-3 control-label">Status</label>
                          <select name="status_problem" id="status_problem" class="form-control col-sm-9">
                          <?php foreach ($status as $v) : ?>
                          <option <?php if($v['ID_STATUS'] == $transaksi['ID_STATUS']){ echo 'selected="selected"'; } ?> value="<?= $v['ID_STATUS']; ?>"><?= $v['STATUS']; ?></option>
                              <?php endforeach; ?>
                          </select>
                      </div>
                      <div class="form-group row">
                          <label for="user_complain" class="col-sm-3 control-label">User Complain</label>
                          <?= $transaksi['USER_COMPLAIN'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="contact" class="col-sm-3 control-label">Contact</label>
                          <?= $transaksi['CONTACT'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="date_insert" class="col-sm-3 control-label">Date Insert</label>
                          <?= $transaksi['DATE_INSERT'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="update_time" class="col-sm-3 control-label">Date Modified</label>
                          <?= $transaksi['UPDATE_TIME'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="date_solve" class="col-sm-3 control-label">Date Solve</label>
                          <?= $transaksi['DATE_SOLVE'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="divisi" class="col-sm-3 control-label">Divisi</label>
                          <?= $transaksi['DIVISI'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="place" class="col-sm-3 control-label">Place</label>
                          <?= $transaksi['PLACE'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="category" class="col-sm-3 control-label">Category</label>
                          <?= $transaksi['CATEGORY'] ?>
                      </div>
                      <div class="form-floating row mb-3">
                          <label for="detail" class="col-sm-3 control-label">Detail</label>
                          <?= $transaksi['DETAIL'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="id_technician" class="col-sm-3 control-label">Technician</label>
                          <?= $transaksi['TECHNICIAN_NAME'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="how_to_solve" class="col-sm-3 control-label">How To Solve</label>
                          <?= $transaksi['HOW_TO_SOLVE'] ?>
                      </div>
                      <div class="form-group row">
                          <label for="note" class="col-sm-3 control-label">Note</label>
                          <?= $transaksi['NOTE'] ?>
                      </div>
                  </div>
              </div>
              <div class="form-group ">
                  <div class="justify-between">
                      <a href="<?= base_url('ticket'); ?>" class="btn btn-success mb-3">Back</a>
                      <button type="submit" class="btn btn-primary">Change Status</button>
                  </div>
              </div>
          </form>
      </div>
  </div>