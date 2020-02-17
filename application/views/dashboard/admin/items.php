
          <div class="content-wrapper">
          	<div class="row mb-3">
          		<div class="col-md-12">
          			<div class="card p-2 rounded"><b>Admin / Items</b></div>
          		</div>
          	</div>
          	<div class="row">
          		<div class="col-md-5">
          			<div class="card p-3 rounded">
          				<b class="mb-3">Add Items</b>
                  <?= $this->session->flashdata('add'); ?>
                  <?php echo form_open_multipart('dashboard/items');?>
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
          		</div>
          		<!--  -->
          		<div class="col-md-7">
          			<div class="card p-3 rounded">
                        <b class="mb-3">List Items</b>
                        <?= $this->session->flashdata('delete'); ?>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Seller</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Uploaded</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($items as $item) : ?>
                              <tr>
                                <td><?= $item['id']; ?></td>
                                <td><?= $item['item_seller']; ?></td>
                                <td><?= $item['item_title']; ?></td>
                                <td>Rp. <?= $item['item_price']; ?>,-</td>
                                <td><?= date('d M Y', $item['item_uploaded']); ?></td>
                                <td>
                                  <a href="<?= base_url('dashboard/items/delete/') ?><?= $item['id']; ?>" class="btn btn-danger d-block mb-1" onclick="return confirm('Delete this?')">Delete</a>
                                  <a href="<?= base_url('dashboard/detail/') . $item['id']; ?>" class="btn btn-info d-block mb-1">Details</a>
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