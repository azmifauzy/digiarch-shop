
          <div class="content-wrapper">
          	<div class="row mb-3">
          		<div class="col-md-12">
          			<div class="card p-2 rounded"><b>Admin / Transactions</b></div>
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
                          <th>Buyer Name</th>
                          <th>Seller Name</th>
                          <th>Item Name</th>
                          <th>Price</th>
                          <th>Date Checkout</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($transactions as $transaction) : ?>
                        <tr>
                          <td><?= $transaction['id']; ?></td>
                          <td><a href="<?= base_url('profile/') . $transaction['buyer_id'] ?>"><?= $transaction['buyer_name']; ?></a></td>
                          <td><a href="<?= base_url('profile/') . $transaction['seller_id'] ?>"><?= $transaction['item_seller']; ?></a></td>
                          <td><a href="<?= base_url('dashboard/detail/') . $transaction['item_id'] ?>"><?= $transaction['item_title']; ?></a></td>
                          <td>Rp. <?= number_format($transaction['item_price'], 0,',','.') ?>,-</td>
                          <td><?= date('d M Y', $transaction['date']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
          			</div>
          		</div>
          	</div>
          </div>