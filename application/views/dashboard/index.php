
          <div class="content-wrapper">
            <div class="row pop">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <!--  -->
                    <div class="row mb-4 banners">
                      <div class="col-md-12">
                        <div class="card">
                          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img src="<?= base_url('assets/img/coverusers/cover1.jpg'); ?>">
                              </div>
                              <div class="carousel-item">
                                <img src="<?= base_url('assets/img/coverusers/cover2.jpg'); ?>">
                              </div>
                              <div class="carousel-item">
                                <img src="<?= base_url('assets/img/coverusers/cover3.jpg'); ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--  -->
                    <div class="row carded">
                      <?php for($i = 0; $i < 2; $i++) : ?>
                      <div class="col-md-3">
                        <div class="card mb-2">
                          <img src="<?= base_url('assets/img/items/items1.jpg'); ?>">
                          <span>
                            <p class="text-white text-truncate">Interest Design</p>
                            <h3 class="text-white text-truncate">Digital Items</h3>
                          </span>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card mb-2">
                          <img src="<?= base_url('assets/img/items/items3.jpg'); ?>">
                          <span>
                            <p class="text-white text-truncate">Interest Design</p>
                            <h3 class="text-white text-truncate">Digital Items</h3>
                          </span>
                        </div>
                      </div>
                      <?php endfor; ?>
                    </div>
                    <!--  -->
                    <div class="row findall">
                      <div class="col-md-12">
                        <hr>
                        <h3 class="text-center"><span class="p-1">Find All Items</span></h3>
                        <hr style="margin-top: -25px;">
                      </div>
                    </div>
                    <div class="row finditems mt-3">
                      <?php foreach ($items as $item) : ?>
                        <div class="col-md-3 mb-2">
                          <div class="card">
                            <a href="<?= base_url('dashboard/detail/') . $item['id']; ?>"><img src="<?= base_url('assets/img/db_img/item_img/') . $item['item_img']; ?>"></a>
                            <div class="info">
                              <h4 class="text-truncate"><a href="<?= base_url('dashboard/detail/') . $item['id']; ?>"><?= $item['item_title'] ?></a></h4>
                              <img src="<?= base_url('assets/img/db_img/user_img/default.png') ; ?>" class="float-left mr-1" onclick="document.location.href = '<?= base_url('profile/') . $item['seller_id']; ?>';">
                              <b class="d-block text-truncate">Rp. <?= number_format($item['item_price'], 0, ',', '.') ?>,-</b>
                              <br>
                              <small class="d-block text-truncate" onclick="document.location.href = '<?= base_url('profile/') . $item['seller_id']; ?>';"><?= $item['item_seller'] ?></small>
                              <br>
                            </div>
                              <a href="<?= base_url('dashboard/detail/') . $item['id']; ?>" class="btn btn-success">Buy Now</a>
                          </div>
                        </div>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          