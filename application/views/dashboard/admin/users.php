
          <div class="content-wrapper">
          	<div class="row mb-3">
          		<div class="col-md-12">
          			<div class="card p-2 rounded"><b>Admin / Users</b></div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-5">
          			<div class="card p-3 rounded">
          				<b class="mb-3">Add Users</b>
                  <?= $this->session->flashdata('add'); ?>
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" required="">
                    </div>
      						  <div class="form-group">
      						    <label for="email">Email Address</label>
      						    <input type="email" class="form-control" name="email" required="">
                      <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
      						  </div>
      						  <div class="form-group">
      						    <label for="password">Password</label>
      						    <input type="password" class="form-control" name="password" required="">
      						  </div>
      						  <div class="form-group">
      						    <label for="password2">Confirmation Password</label>
                      <input type="password" class="form-control" name="password2" required="">
      						  </div>
      						  <button type="submit" class="btn btn-primary" onclick="return confirm('Add Users?')">Add Users</button>
      						</form>
          			</div>
          		</div>
          		<!--  -->
          		<div class="col-md-7">
          			<div class="card p-3 rounded">
                        <b class="mb-3">List Users</b>
                        <?= $this->session->flashdata('delete'); ?>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Join</th>
                                <th>Role</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($users as $users) : ?>
                              <tr>
                                <td><?= $users['id']; ?></td>
                                <td><?= $users['name']; ?></td>
                                <td><?= $users['email']; ?></td>
                                <td><?= $users['password']; ?></td>
                                <td><?= date('d M Y', $users['created']); ?></td>
                                <td><?= $users['role']; ?></td>
                                <td>
                                  <a href="<?= base_url('dashboard/users/delete/') ?><?= $users['id']; ?>" class="btn btn-danger d-block mb-1" onclick="return confirm('Delete this?')">Delete</a>
                                  <a href="<?= base_url('profile/') . $users['id']; ?>" class="btn btn-info d-block mb-1">Details</a>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                    </div>
          		</div>
          	</div>
          </div>