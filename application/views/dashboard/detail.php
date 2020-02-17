
          <div class="content-wrapper">
          	<div class="row mb-3">
          		<div class="col-md-12"><div class="card p-2"><b>Dashboard / Detail</b></div></div>
          	</div>
          	<div class="row detailitem">
          		<div class="col-md-12">
          			<div class="card p-3">
          				<div class="row"><div class="col-md-12"><?= $this->session->flashdata('checkout'); ?></div></div>
          				<div class="row">
          					<div class="col-md-5">
          						<div class="card rounded">
          							<img src="<?= base_url('assets/img/db_img/item_img/') . $data_item['item_img']; ?>" width="100%">
          						</div>
          					</div>
          					<div class="col-md-7">
          						<div class="table-responsive">
		                          <table class="table table-striped table-hover">
		                            <thead>
		                              <tr>
		                                <th>Item Name</th>
		                                <th>Seller Name</th>
		                                <th>Price</th>
		                              </tr>
		                            </thead>
		                            <tbody>
		                             <tr>
		                                <td><?= $data_item["item_title"]; ?></td>
		                                <td><a href="<?= base_url('profile/') . $data_item['seller_id']; ?>"><?= $data_item["item_seller"]; ?></a></td>
		                                <td>Rp. <?= number_format($data_item["item_price"], 0, ',', '.'); ?>,-</td>
		                              </tr>
		                            </tbody>
		                          </table>
		                        </div>
		                        <div class="desc mt-3">
		                        	<b>Description : </b>
		                        	<p><?= $data_item["item_desc"]; ?></p>
		                        </div>
		                        <hr>
		                        <div class="action mt-4">
		                        	<a href="<?= base_url('dashboard/checkout/') . $data_item["id"]; ?>" class="btn btn-primary d-block p-3" onclick="return confirm('Checkout?');">Checkout</a>
		                        	<a href="<?= base_url('dashboard'); ?>" class="btn btn-danger d-block p-3 mt-2">Cancel</a>
		                        </div>
          					</div>
          				</div>
          			</div>
          		</div>
          	</div>
          </div>