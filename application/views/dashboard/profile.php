
        <div class="content-wrapper">
        	<div class="custom-card bg-white p-3 rounded shadow">
        		<div class="row">
        			<div class="col-md-2 text-center"><img src="<?= base_url('assets/img/db_img/user_img/') . $user['img'] ?>" width="150" height="150" class=""></div>
        			<div class="col-md-10">
        				<h3><?= $user['name'] ?></h3>
        				<p><?= $user['email'] ?></p>
        				<?php if ($this->session->userdata('id') == $user['id']): ?>
						<p>Balance : Rp. <?= number_format($user["balance"], 0, ',', '.'); ?>,-</p>
						<a data-toggle="collapse" href="#topup">Top Up</a>
						<br>
						<a data-toggle="collapse" href="#editprofile">Edit Profile</a>
					<?php endif ?>
        			</div>
        		</div>
        		<div class="row mt-2">
					<div class="col-md-12">
					<?php echo $this->session->flashdata('topup'); ?>
					</div>
				</div>
        		<div class="row mt-2">
        			<div class="col-md-12 collapse" id="topup">
        				Top Up Balance : 
        				<form method="POST" action="">
        					<select name="balance">
        						<?php for ($i=1; $i < 6; $i++) : ?>
        						<option value="<?= $i; ?>00000">Rp. <?= $i; ?>00.000,-</option>
        						<?php endfor; ?>
        					</select>
        					<br>
        					<button type="submit" name="topup" class="btn btn-primary" onclick="return confirm('Topup Balance?')">Topup</button>
        					<a class="btn btn-danger" data-toggle="collapse" href="#topup">Cancel</a>
        				</form>
        			</div>
        			<div class="col-md-12 collapse" id="editprofile">
        				<h4>Edit Profile</h4>
        				<form method="POST" action="" enctype="multipart/form-data" class="border p-3">
							<div class="form-group">
	  						    <label for="name">Name</label>
	  						    <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>">
	  						</div>
	  						<div class="form-group">
	  						    <label for="email">Email Address</label>
	  						    <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
	  						</div>
	  						<div class="form-group">
	  						    <label for="password">Password</label>
	  						    <input type="password" class="form-control" name="password">
	  						</div>
	  						<div class="form-group">
	  						    <label for="npassword">New Password</label>
	  						    <input type="password" class="form-control" name="npassword">
	  						</div>
	  						<div class="form-group">
	  						    <label name="img">Images (.jpg / .png)</label>
	  						    <input type="file" class="form-control-file" id="img" name="img">
	  						</div>
	  						<button type="submit" class="btn btn-primary" onclick="return confirm('Add items?')">Save Changes</button>
	  						<a type="submit" class="btn btn-danger" data-toggle="collapse" href="#editprofile">Cancel</a>
						</form>
        			</div>
        		</div>
			</div>

			<div class="row store">
				<div class="col-md-12">
					<div class="card p-3 mt-3 rounded shadow">
						<div class="row">
							<div class="col-md-12">
								<?php if ($this->session->userdata('id') == $user['id']): ?>
									<h3><a data-toggle="collapse" href="#store" class="text-primary">My Store</a></h3>
								<?php else: ?>
									<h3><a data-toggle="collapse" href="#store" class="text-primary"><?= $user['name'] ?> Store</a></h3>
								<?php endif ?>
								<hr class="text-primary">
							</div>
							<div class="col-md-12 collapsed" id="store">
								<div class="row">
									<div class="col-md-12">
									<?php echo $this->session->flashdata('add'); ?>
									<?php echo $this->session->flashdata('delete'); ?>
									</div>
								</div>
								<div class="row">
									<?php if ($this->session->userdata('id') == $user['id']): ?>
										<div class="col-md-5 mb-3">
                  							<form method="POST" action="" enctype="multipart/form-data" class="border p-3">
												<div class="form-group">
					      						    <label for="title">Name of Items</label>
					      						    <input type="text" class="form-control" name="title" required="">
					      						</div>
					      						<div class="form-group">
					      						    <label for="price">Price of Items</label>
					      						    <input type="number" class="form-control" name="price" required="">
					      						</div>
					      						<div class="form-group">
					      						    <label for="desc">Description</label>
					      						    <textarea class="form-control" name="desc" rows="3" required="" placeholder="Describe a little about your item"></textarea>
					      						</div>
					      						<div class="form-group">
					      						    <label name="img">Images (.jpg / .png)</label>
					      						    <input type="file" class="form-control-file" id="img" name="img">
					      						</div>
					      						<button type="submit" class="btn btn-primary" onclick="return confirm('Add items?')">Add Items</button>
				      						</form>
										</div>
										<div class="col-md-7">
											<div class="table-responsive border">
							                    <table class="table table-striped table-hover">
							                      <thead>
							                        <tr>
							                          <th>No.</th>
							                          <th>Item Name</th>
							                          <th>Price</th>
							                          <th>Date</th>
							                          <th>Action</th>
							                        </tr>
							                      </thead>
							                      <tbody>
							                        <?php foreach ($items as $item) : ?>
							                        <tr>
							                          <td><?= $item['id']; ?></td>
							                          <td><?= $item['item_title'] ?></td>
							                          <td>Rp. <?= number_format($item['item_price'], 0,',','.') ?>,-</td>
							                          <td><?= date('d M Y', $item['item_uploaded']) ?></td>
							                          <td>
							                          	<a href="<?= base_url('profile/delete/') . $item['id']; ?>" class="btn btn-danger d-block mb-1" onclick="return confirm('Delete this?')">Delete</a>
	                                  					<a href="<?= base_url('dashboard/detail/') . $item['id']; ?>" class="btn btn-info d-block mb-1">Details</a>
							                          </td>
							                        </tr>
							                        <?php endforeach ?>
							                      </tbody>
							                    </table>
							                </div>
										</div>
									<?php else: ?>
										<div class="col-md-12">
											<div class="table-responsive border">
							                    <table class="table table-striped table-hover">
							                      <thead>
							                        <tr>
							                          <th>No.</th>
							                          <th>Item Name</th>
							                          <th>Price</th>
							                          <th>Date</th>
							                          <th>Action</th>
							                        </tr>
							                      </thead>
							                      <tbody>
							                        <?php foreach ($items as $item) : ?>
							                        <tr>
							                          <td><?= $item['id']; ?></td>
							                          <td><?= $item['item_title'] ?></td>
							                          <td>Rp. <?= number_format($item['item_price'], 0,',','.') ?>,-</td>
							                          <td><?= date('d M Y', $item['item_uploaded']) ?></td>
							                          <td>
							                          	<?php if ( $item['seller_id'] == $this->session->userdata('id')) : ?>
							                          	<a href="<?= base_url('profile/delete/') . $item['id']; ?>" class="btn btn-danger d-block mb-1" onclick="return confirm('Delete this?')">Delete</a>
							                          	<?php endif ?>
	                                  					<a href="<?= base_url('dashboard/detail/') . $item['id']; ?>" class="btn btn-info d-block mb-1">Details</a>
							                          </td>
							                        </tr>
							                        <?php endforeach ?>
							                      </tbody>
							                    </table>
							                </div>
										</div>
									<?php endif ?>
								</div>
							</div>
						</div>
					</div>
					<!--  -->
					<?php if ($this->session->userdata('id') == $user['id']): ?>
						<div class="card p-3 mt-3 rounded shadow">
							<div class="row">
								<div class="col-md-12">
									<h3><a data-toggle="collapse" href="#transaksion">My Transaction</a></h3>
									<hr class="text-primary">
								</div>
								<div class="col-md-12 collapse" id="transaksion">
									<table class="table table-striped table-hover border">
				                      <thead>
				                        <tr>
				                          <th>Type</th>
				                          <th>Buyer Name</th>
				                          <th>Item Name</th>
				                          <th>Price</th>
				                          <th>Date Checkout</th>
				                          <th>Process</th>
				                          <th>Action</th>
				                        </tr>
				                      </thead>
				                      <tbody>
				                      	<?php foreach ($transactions as $tr) : ?>
				                        <tr>
				                          <td>
				                          	<?php if ($tr['buyer_id'] == $this->session->userdata('id')): ?>
				                          		<b class="text-info">Buying</b>
				                          	<?php else: ?>
				                          		<b class="text-danger">Selling</b>
				                          	<?php endif ?>
				                          </td>
				                          <td><a href="<?= base_url('profile/') . $tr['buyer_id'] ?>"><?= $tr['buyer_name'] ?></a></td>
				                          <td><a href="<?= base_url('dashboard/detail/') . $tr['item_id'] ?>"><?= $tr['item_title'] ?></a></td>
				                          <td>Rp. <?= number_format($tr['item_price'], 0,',','.') ?>,-</td>
				                          <td><?= date('d M Y', $tr['date']) ?></td>
				                          <td>
				                          	<?php if ($tr['process'] === "Not Yet"): ?>
				                          		<b class="text-danger"><?= $tr['process'] ?></b>
				                          	<?php else: ?>
				                          		<b class="text-primary"><?= $tr['process'] ?></b>
				                          	<?php endif ?>
				                          </td>
				                          <td>
				                          	<?php if ($tr['buyer_id'] == $this->session->userdata('id') && $tr['process'] === "Not Yet"): ?>
	                      						<a href="" class="btn btn-primary d-block mb-1">Confirmation</a>
				                          	<?php endif ?>

				                          	<?php if ($tr['buyer_id'] != $this->session->userdata('id') && $tr['process'] === "Not Yet"): ?>
	                      						<a href="" class="btn btn-info d-block mb-1">Send Files</a>
				                          	<?php endif ?>

				                          	<?php if ($tr['process'] === "DONE"): ?>
	                      						<a href="" class="btn btn-danger d-block mb-1">Delete</a>
				                          	<?php endif ?>

				                          </td>
				                        </tr>
				                      	<?php endforeach ?>
				                      </tbody>
				                    </table>
								</div>
							</div>
						</div>
					<?php endif ?>
				</div>
			</div>
        </div>