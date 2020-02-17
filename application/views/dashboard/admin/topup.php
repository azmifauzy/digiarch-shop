
          <div class="content-wrapper">
          	<div class="row mb-3">
          		<div class="col-md-12">
          			<div class="card p-2 rounded"><b>Admin / Topup Request</b></div>
          		</div>
          	</div>
          	<!--  -->
          	<div class="row">
          		<div class="col-md-12">
          			<div class="card">
          				<div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Buyer ID</th>
                          <th>Buyer Name</th>
                          <th>Balance Topup</th>
                          <th>Process</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($topreq as $top) : ?>
                        <tr>
                          <td><?= $top['id'] ?></td>
                          <td><?= $top['buyer_id'] ?></td>
                          <td><a href="<?= base_url('profile/') . $top['buyer_id'] ?>"><?= $top['buyer_name'] ?></a></td>
                          <td>Rp. <?= number_format($top['balance'], 0, ',', '.'); ?>,-</td>
                          <td>
                            <?php if ($top['process'] === "Not Yet"): ?>
                              <b class="text-danger"><?= $top['process'] ?></b>
                            <?php else: ?>
                              <b class="text-primary"><?= $top['process'] ?></b>
                            <?php endif ?>
                          </td>
                          <td>
                              <?php if ($top['process'] === "DONE"): ?>
                                <button class="btn btn-danger" onclick="return confirm('Delete this Request?');">Delete</button>
                              <?php else: ?>
                                <form method="POST" action="">
                                <input type="hidden" name="id" value="<?= $top['id'] ?>">
                                <input type="hidden" name="buyer_id" value="<?= $top['buyer_id'] ?>">
                                <input type="hidden" name="balance" value="<?= $top['balance'] ?>">
                                <button class="btn btn-primary" onclick="return confirm('Confirm this Request?');">Confirm</button>
                                </form>
                              <?php endif ?>
                          </td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
          			</div>
          		</div>
          	</div>
          </div>