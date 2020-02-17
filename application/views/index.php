<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6dab888157.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">

    <!-- WOW -->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">

    <title>Digiarch.</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Digiarch.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link btnHome text-white" href="dashboard">Dashboard</a>
            <a class="nav-item nav-link text-white" href="#">Become a Seller</a>
            <?php if ($this->session->userdata('id')): ?>
            <a class="nav-item nav-link text-white" href="<?= base_url('profile/') . $this->session->userdata('id'); ?>"><?= $this->session->userdata('name'); ?></a>
            <?php else: ?>
            <a class="nav-item nav-link text-white" href="#" data-toggle="modal" data-target="#login">Sign in</a>
            <a class="nav-item nav-link btn btn-primary btnJoin text-white" href="#" data-toggle="modal" data-target="#join">Join</a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- END OF NAVBAR -->

    <!-- BANNER -->
    <section>
      <div class="jumbotron jumbotron-fluid banner">
        <div class="container">
              <h1>Find The Perfect Digital Items<br> from Creative People around The World.</h1>
              <form method="POST" action="" class="mb-4">
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <button class="input-group-text bg-white" id="inputGroup-sizing-default"><i class="fas fa-search fa-fw"></i></button>
                  </div>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Search for Digital Items">
                </div>
              </form>
              <div class="mostpopular text-white">
                <b>Popular : </b>
                <a href="" class="rounded">Digital Arts</a>
                <a href="" class="rounded">Digital Books</a>
                <a href="" class="rounded">Digital Design</a>
              </div>
        </div>
      </div>
    </section>
    <!-- END OF BANNER -->

    <!-- POPULAR ITEMS -->
    <section>
      <div class="popitems jumbotron jumbotron-fluid bg-white">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h4>Most Popular Digital Items</h4>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-auto sm12">
              <?php for ($i=0; $i < 2; $i++) : ?>
              <div class="card float-left mr-2 mb-3">
                <img src="<?= base_url('assets/img/items/items1.jpg'); ?>">
                <div class="card-item">
                  <p class="text-truncate text-shadow">Interest Design</p>
                  <b class="text-shadow">Digital Design</b>
                </div>
              </div>
              <div class="card float-left mr-2 mb-3">
                <img src="<?= base_url('assets/img/items/items2.jpg'); ?>">
                <div class="card-item">
                  <p class="text-truncate text-shadow">Interest Digital Books</p>
                  <b class="text-shadow">Digital Books</b>
                </div>
              </div>
              <div class="card float-left mr-2 mb-3">
                <img src="<?= base_url('assets/img/items/items3.jpg'); ?>">
                <div class="card-item">
                  <p class="text-truncate text-shadow">Games Items and Voucher</p>
                  <b class="text-shadow">Games Items</b>
                </div>
              </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END OF POPULAR ITEMS -->

    <!-- BECOME A SELLER -->
    <section class="m-3">
      <div class="bseller container-fluid">
        <div class="row">
          <div class="col-md-5 p-5">
            <h5>Have a interest items?</h5>
            <h2>Make Money with That!</h2>
            <p><i class="fas fa-check-circle fa-fw"></i> <b>Upload your Interesting Items</b></p>
            <p><i class="fas fa-check-circle fa-fw"></i> <b>Promote your Items and Wait</b></p>
            <p><i class="fas fa-check-circle fa-fw"></i> <b>Guaranteed Transaction</b></p>
            <p><i class="fas fa-check-circle fa-fw"></i> <b>Get your Money.</b></p>
            <a href="" class="btn btn-primary btnBseller">Become a Seller</a>
          </div>
          <div class="col-md-7">
            <img src="<?= base_url('assets/svg/1.svg') ?>">
          </div>
        </div>
      </div>
    </section>
    <!-- END OF BECOME A SELLER -->


    <!-- CATEGORIES -->
    <section>
      <div class="categories container-fluid mt-5">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="mb-2">Explore the Categories</h4>
          </div>
        </div>
        <div class="row justify-content-center">

          <div class="col md3 sm6 text-center">
            <div class="card p-5">
              <a href="">
                <i class="fab fa-sketch mb-3"></i>
                <p>Graphic Design</p>
              </a>
            </div>
          </div>
          <div class="col md3 sm6 text-center">
            <div class="card p-5">
              <a href="">
                <i class="fas fa-laptop-code mb-3"></i>
                <p>Application</p>
              </a>
            </div>
          </div>
          <div class="col md3 sm6 text-center">
            <div class="card p-5">
              <a href="">
                <i class="fab fa-viadeo-square mb-3"></i>
                <p>Video Effects</p>
              </a>
            </div>
          </div>
          <div class="col md3 sm6 text-center">
            <div class="card p-5">
              <a href="">
                <i class="fas fa-book mb-3"></i>
                <p>Digital Books</p>
              </a>
            </div>
          </div>

        </div>

        <div class="row justify-content-center">

          <div class="col md4 sm6 text-center">
            <div class="card p-5">
              <a href="">
                <i class="fas fa-palette mb-3"></i>
                <p>Arts</p>
              </a>
            </div>
          </div>
          <div class="col md4 sm6 text-center">
            <div class="card p-5">
              <a href="">
                <i class="fas fa-compact-disc mb-3"></i>
                <p>Music</p>
              </a>
            </div>
          </div>
          <div class="col md4 sm6 mb-5 text-center">
            <div class="card p-5">
              <a href="">
                <i class="fas fa-gamepad mb-3"></i>
                <p>Games</p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- END OF CATEGORIES -->


    <!-- EXPLORE PROF CREATOR -->
    <section>
        <div class="exploreC container-fluid p-3 pt-4 pb-4 mb-5">
          <div class="row justify-content-center">
            <div class="col-md-11">
              <h4>Digiarch.</h4>
              <h3 class="mt-3 mb-4">Find Creative and Professional Creator, <br> for Make your Interesting Items.</h3>
              <a href="" class="btn btn-primary">Explore Professional Creator</a>
            </div>
          </div>
        </div>
    </section>
    <!-- END OF EXPLORE PROF CREATOR -->

    <!-- CREATOR -->
    <section>
      <div class="creator container-fluid mb-5">
        <div class="row"><div class="col"><h4>Professional Creator</h4></div></div>
        <div class="row">
          <?php for ($i=0; $i < 2; $i++) : ?>
          <div class="col-md-3">
            <div class="card shadow-sm overflow-hidden mb-3">
              <img src="<?= base_url('assets/img/coverusers/cover1.jpg'); ?>" class="imgCover">
              <div class="carditem p-2">
                <img src="<?= base_url('assets/img/users/user1.png'); ?>" class="float-left mr-2">
                <b class="text-truncate">Sketch Designer</b>
                <br>
                <small>Alexander</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm overflow-hidden mb-3">
              <img src="<?= base_url('assets/img/coverusers/cover2.jpg'); ?>" class="imgCover">
              <div class="carditem p-2">
                <img src="<?= base_url('assets/img/users/user2.png'); ?>" class="float-left mr-2">
                <b class="text-truncate">Fullstack Developer</b>
                <br>
                <small>Victor Perez</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm overflow-hidden mb-3">
              <img src="<?= base_url('assets/img/coverusers/cover3.jpg'); ?>" class="imgCover">
              <div class="carditem p-2">
                <img src="<?= base_url('assets/img/users/user3.png'); ?>" class="float-left mr-2">
                <b class="text-truncate">Photographer</b>
                <br>
                <small>Mada Riyanhadi</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm overflow-hidden mb-3">
              <img src="<?= base_url('assets/img/coverusers/cover4.jpg'); ?>" class="imgCover">
              <div class="carditem m-1 p-1 position-relative">
                <img src="<?= base_url('assets/img/users/user4.png'); ?>" class="float-left mr-2">
                <b class="text-truncate">Art and Designer</b>
                <br>
                <small>Alfian Alvaro</small>
              </div>
            </div>
          </div>
        <?php endfor; ?>
        </div>
      </div>
    </section>
    <!-- END OF CREATOR -->



    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center mt-3"><p>Copyright &copy; 2020 All rights reserved <a href="<?= base_url(''); ?>">Digiarch.com</a></p></div>
        </div>
      </div>
    </footer>
    <!-- END OF FOOTER -->





    <!-- JOIN MODAL -->
    <div class="modal fade" id="join" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="modal-title text-center" id="exampleModalLabel">Join to Digiarch.</h5>
            <hr>
            <form method="POST" action="<?= base_url('home/signUp'); ?>">
                <input type="text" name="name" placeholder="Enter Name" required="">
                <input type="email" name="email" placeholder="Enter Email Address" required="">
                <input type="password" name="password" placeholder="Enter Password" required="">
                <input type="password" name="password2" placeholder="Confirmation Password" required="">
                <button type="submit" class="btn btn-primary">Join Now</button>
            </form>
          </div>
          <div class="modal-footer">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-12 text-center"><span>Have an account? <a href="">Sign in</a></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF JOIN MODAL -->

    <!-- LOGIN Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h5 class="modal-title text-center" id="exampleModalLabel">Login to Digiarch.</h5>
            <hr>
            <form method="POST" action="<?= base_url('home/signIn'); ?>">
                <input type="email" name="email" placeholder="Enter Email Address" required="">
                <input type="password" name="password" placeholder="Enter Password" required="">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
          </div>
          <div class="modal-footer">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-12 text-center"><span>Not Have an account? <a href="">Join Now</a></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/wow.js') ?>"></script>
    <script>new WOW().init();</script>
    <script>
      $(document).ready(function() {
        $('.popitems .card').hover(function(e) {
          if (this.className == "card float-left mr-2 mb-3") {
            $(this).addClass('shadow-lg bounceInDown');
          } else {
            $(this).removeClass('shadow-lg bounceInDown');
          }
        });
      });

      $(window).scroll(function() {
        if(window.pageYOffset > 0) {
          $('.navbar').addClass('bg-dark fixed-top');
        } else {
          $('.navbar').removeClass('bg-dark fixed-top');  
        }
      });

    </script>
  </body>
</html>