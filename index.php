<?php
$title = 'TDB';
require 'dists.php'; 
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head></head>

<body>
  <div class="navy sticky-top bg-white p-2 shadow bg-opacity-75">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand" href="#">WEB DEVELOPERS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navfeatures">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navblog">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navteam">our team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navcontact">contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-primary p-2" data-toggle="modal" data-target="#exampleModal">
        get started
      </button>
    </nav>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">join</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="p-4 rounded">
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
            </div>
            <div class="form-group">
              <div class="form-group">

                <button type="button" class="btn btn-primary mt-3 p-2">subscribe</button>
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  </div>
  <div class="py-5">
    <section class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2 class="display-4 mb-4">
            build <span class="text-warning">reactive</span> website easily!
          </h2>
          <p class="lead text-muted mb-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
            incidunt molestias ab, eveniet modi quasi architecto maxime
          </p>
          <button type="button" class="btn btn-primary p-3" data-toggle="modal" data-target="#exampleModal">
            get started
          </button>
        </div>
        <div class="col-md-6">
          <img src="img/Mansplaining-rafiki.png" alt="" class="img-fluid" />
        </div>
      </div>
    </section>
  </div>
  <div class="PY-5" style="background-color: rgb(235, 229, 229)" id="navfeatures">
    <div class="container">
      <h2 class="display-5 text-center py-4">Features</h2>
      <p class="lead text-muted mb-5">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa quis
        eius earum! Dolorum eum facilis voluptatum quibusdam suscipit
        praesentium, perferendis corporis doloremque explicabo odio, hic vel
        ducimus cupiditate accusamus vero.
      </p>
      <div class="row pb-5">
        <!----------------------------------------FEAUTURES---------------------------------------->
       <?php  $features=$capsule->table('features')->get();
       foreach($features as $c): ?>
        <div class="col-xl-4 col-md-6 mb-3">
          <div class="card text-center p-4">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="text-primary bi bi-reception-4 mb-3" viewBox="0 0 16 16">
                <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z" />
              </svg>
              <h5 class="card-title mb-2"><?php echo $c->title; ?></h5>
              <p class="card-text lead text-muted">
              <?php echo $c->text; ?>
              </p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <!----------------------------------------FEAUTURES---------------------------------------->
      </div>
    </div>
  </div>
  <div class="py-5">
    <section class="container">
      <div class="row align-items-center">
        <div class="col-md-6 p-5">
          <h2 class="display-4 mb-4">
            be <span class="text-success">fast</span> and
            <span class="text-success">reactive</span>
          </h2>
          <p class="lead text-muted mb-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
            incidunt molestias ab, eveniet modi quasi architecto maxime
          </p>
          <button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
            get started
          </button>
        </div>
        <div class="col-md-6">
          <img src="img/images.png" width="2800" alt="" class="img-fluid" />
        </div>
      </div>
    </section>
  </div>
  <div class="py-5 bg-dark my-3">
    <section class="container p-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="/undraw_react.svg" width="2800" alt="" class="img-fluid" />
        </div>
        <div class="col-md-6 p-5">
          <h2 class="display-4 mb-4 text-light">
            suitable for <span class="text-warning">big projects</span>
          </h2>
          <p class="lead text-white mb-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
            incidunt molestias ab, eveniet modi quasi architecto maxime
          </p>
          <button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
            get started
          </button>
        </div>
      </div>
    </section>
  </div>
  <div class="my-5" id="navblog">
    <main class="container">
      <h2 class="display-4 text-center py-4">recent posts from our blog</h2>
      <p class="lead text-muted mb-5">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa quis
        eius earum! Dolorum eum facilis voluptatum quibusdam suscipit
        praesentium, perferendis corporis doloremque explicabo odio, hic vel
        ducimus cupiditate accusamus vero.
      </p>
    </main>
    <!--------------------------------RECENT-POST-------------------------------->
    <div class="row">
    <?php 
    $posts=$capsule->table('posts')->get();
    foreach($posts as $a):
    ?>
      <div class="col-lg-4">
        <div class="card shadow">
          <img class="card-img-top" src="<?php echo $a->img_top; ?>" alt="Card image cap" />
          <div class="card-body">
            <p class="card-text" style="font-size: 20px">
              <?php echo $a->main_text; ?>
            </p><?php if($a->reed_more==1): ?>
            <a href="<?php echo $a->reed_more_link ?>" class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
              read more
            </a><?php endif ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <!--------------------------------RECENT-POST-------------------------------->
  </div>
  <div class="my-5" id="navteam">
    <main class="container">
      <h2 class="display-4 text-center py-4">our team</h2>
      <p class="lead text-muted mb-5">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa quis
        eius earum! Dolorum eum facilis voluptatum quibusdam suscipit
        praesentium, perferendis corporis doloremque explicabo odio, hic vel
        ducimus cupiditate accusamus vero.
      </p>
      <div class="row">
        <!---------------------------------------------OUR-TEAM--------------------------------------------->
        <?php $team=$capsule->table('team')->get();
        foreach($team as $b):
        ?>
        <div class="col-lg-3 text-center">
          <img src="<?php echo $b->img_top; ?>" class="img-fluid rounded-circle border p-2 mb-4 w-400" style="width: 250px; height: 250px" />
          <h5><?php echo $b->name; ?></h5>
          <p><?php echo $b->post; ?></p>
          <ul class="list-unstyled d-flex justify-content-center">
            <li class="mx-1">
              <a href="<?php echo $b->instagram; ?>" class="text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
              </a>
            </li>
            <li class="mx-1">
              <a href="<?php echo $b->facebook; ?>" class="text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
            <li class="mx-1">
              <a href="<?php echo $b->twiter; ?>" class="text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
              </a>
            </li>
            <li class="mx-1">
              <a href="<?php echo $b->telegram;?>" class="text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <?php endforeach; ?>
        <!---------------------------------------------OUR-TEAM--------------------------------------------->
      </div>
    </main>
  </div>
  <div class="my-5">
    <main class="container">
      <h2 class="display-4 text-center py-4">recent posts from our blog</h2>
      <p class="lead text-muted mb-5">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa quis
        eius earum! Dolorum eum facilis voluptatum quibusdam suscipit
        praesentium, perferendis corporis doloremque explicabo odio, hic vel
        ducimus cupiditate accusamus vero.
      </p>

      <div class="container">
        <div id="accordion" class="py-4">
          <div class="card border-0">
            <div class="card-header p-0 border-0" id="heading-239">
              <button class="btn btn-link accordion-title border-0 collapse" data-toggle="collapse" data-target="#collapse-239" aria-expanded="true" aria-controls="#collapse-239">
                <i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>lorem header 1
              </button>
            </div>
            <div id="collapse-239" class="collapse show" aria-labelledby="heading-239" data-parent="#accordion"></div>
          </div>
          <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
            <div class="card-header p-0 border-0" id="heading-240">
              <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-240" aria-expanded="false" aria-controls="#collapse-240">
                <i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Is there a 24/7 response for emergencies?
              </button>
            </div>
            <div id="collapse-240" class="collapse" aria-labelledby="heading-240" data-parent="#accordion">
              <div class="card-body accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
          <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
            <div class="card-header p-0 border-0" id="heading-241">
              <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-241" aria-expanded="false" aria-controls="#collapse-241">
                <i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>How are owners??? concerns handled?
              </button>
            </div>
            <div id="collapse-241" class="collapse" aria-labelledby="heading-241" data-parent="#accordion">
              <div class="card-body accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
          <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
            <div class="card-header p-0 border-0" id="heading-242">
              <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-242" aria-expanded="false" aria-controls="#collapse-242">
                <i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>How do I get repairs completed to my unit?
              </button>
            </div>
            <div id="collapse-242" class="collapse" aria-labelledby="heading-242" data-parent="#accordion">
              <div class="card-body accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
          <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
            <div class="card-header p-0 border-0" id="heading-243">
              <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-243" aria-expanded="false" aria-controls="#collapse-243">
                <i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>What are the duties of a property manager?
              </button>
            </div>
            <div id="collapse-243" class="collapse" aria-labelledby="heading-243" data-parent="#accordion">
              <div class="card-body accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
          <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
            <div class="card-header p-0 border-0" id="heading-244">
              <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-244" aria-expanded="false" aria-controls="#collapse-244">
                <i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>Do we receive copies of all invoices paid?
              </button>
            </div>
            <div id="collapse-244" class="collapse" aria-labelledby="heading-244" data-parent="#accordion">
              <div class="card-body accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
          <div class="card border-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp">
            <div class="card-header p-0 border-0" id="heading-245">
              <button class="btn btn-link accordion-title border-0 collapsed" data-toggle="collapse" data-target="#collapse-245" aria-expanded="false" aria-controls="#collapse-245">
                <i class="fas fa-minus text-center d-flex align-items-center justify-content-center h-100"></i>How are arrears handled?
              </button>
            </div>
            <div id="collapse-245" class="collapse" aria-labelledby="heading-245" data-parent="#accordion">
              <div class="card-body accordion-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <div class="mt-5" id="navcontact">
    <main class="container">
      <h2 class="display-4 text-center py-4">contact</h2>
      <p class="lead text-muted mb-5">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa quis
        eius earum! Dolorum eum facilis voluptatum quibusdam suscipit
        praesentium, perferendis corporis doloremque explicabo odio, hic vel
        ducimus cupiditate accusamus vero.
      </p>
      <div class="row">
        <div class="col-md-6">
          <div class="row g-2">
            <div class="col-md-6" style="background-color: rgb(200, 200, 218)">
              <div class="p-4 rounded">
                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="58" height="58" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <h2 class="mt-4">address</h2>
                <div>new york</div>
                <div>nv 5548865</div>
              </div>
            </div>

            <div class="col-md-6" style="background-color: rgb(200, 200, 218)">
              <div class="p-4 rounded">
                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="58" height="58" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <h2 class="mt-4">call us</h2>
                <div>+21 225998741</div>
                <div>+21 225998741</div>
              </div>
            </div>
            <div class="col-md-6" style="background-color: rgb(200, 200, 218)">
              <div class="p-4 rounded">
                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="58" height="58" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg>
                <h2 class="mt-4">email us</h2>
                <div>m.khodabande79@gmail.com</div>
                <div>m.khodabande79@gmail.com</div>
              </div>
            </div>
            <div class="col-md-6" style="background-color: rgb(200, 200, 218)">
              <div class="p-4 rounded">
                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="58" height="58" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>
                <h2 class="mt-4">open hours</h2>
                <div>monday-friday</div>
                <div>9:00 am - 17:00 pm</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <form class="p-4 rounded" style="background-color: rgb(200, 200, 218) ">
            <div class="form-group">
              <label for="exampleFormControlInput1">name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="MOHAMMAD KHODABANDEH" />
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
            </div>
            <div class="form-group">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button type="button" class="btn btn-primary mt-3 p-3">send</button>
              </div>
          </form>
        </div>
      </div>
    </main>
  </div>
  <div class="py-4 bg-dark  mt-5">
    <footer class="container text-light ">
      <div class="row mt-4">
        <div class="col-md-3 text-light">
          <h2 class="mb-4"> <span class="border border-5 border-primary m-2"></span> web developer</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, assumenda nemo! Facilis, </p>
        </div>
        <div class="col-md-3">
          <h3> <span class="border border-5 border-primary m-2"></span> pages</h3>
          <ul>
            <li>
              <a href="#" class="text-light">vue.js</a>

            </li>
            <li>
              <a href="#" class="text-light">react.js</a>

            </li>
            <li>
              <a href="#" class="text-light">our team.js</a>

            </li>
            <li>
              <a href="#" class="text-light">contact.js</a>

            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3><span class="border border-5 border-primary m-2"></span>
            more</h3>
          <ul>
            <li>
              <a href="#" class="text-light">vue.js</a>

            </li>
            <li>
              <a href="#" class="text-light">react.js</a>

            </li>
            <li>
              <a href="#" class="text-light">our team.js</a>

            </li>
            <li>
              <a href="#" class="text-light">contact.js</a>

            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3> <span class="border border-5 border-primary m-2"></span> posts</h3>
          <ul>
            <li>
              <a href="#" class="text-light">vue.js</a>

            </li>
            <li>
              <a href="#" class="text-light">react.js</a>

            </li>
            <li>
              <a href="#" class="text-light">our team.js</a>

            </li>
            <li>
              <a href="#" class="text-light">contact.js</a>

            </li>
          </ul>
        </div>
      </div>
      <div class="text-center text-secondary mt-3">designed and developed : <a href="#" class="text-light"> MOHAMMAD KHODABANDEH </a></div>
    </footer>
  </div>
</body>

</html>