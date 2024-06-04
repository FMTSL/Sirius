<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'?>

<body>

  <!-- ======= Top Bar ======= -->
  <?php include 'partials/topbar.php'?>

  <!-- ======= Modal ======= -->
  <?php include 'partials/modal.php'?>

  <!-- ======= Header ======= -->
  <?php include 'includes/header.php'?>

  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Política de Privacidade</h2>
          <ol>
            <li><a href="<?php echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http'; ?>://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php">Inicio</a></li>
            <li>Política de Privacidade</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= hero-2 Section ======= -->
    <section id="hero-2">

        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
              <div data-aos="zoom-out">
                <h1>Política de Privacidade</span></h1>
                <h2>Protegendo sua privacidade, honrando sua confiança - Nossa política de privacidade, sua tranquilidade online.</h2>
                
              </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-2-img" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/logo-branco.png" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

        <svg class="hero-2-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
          <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
          </defs>
          <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
          </g>
          <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
          </g>
          <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
          </g>
        </svg>

      </section><!-- End hero-2 -->

      <section class="d-flex justify-content-center align-items-center vh-100">
      <div class="text-center">
      <div class="col-lg-12 order-1 order-lg-2 hero-2-img" data-aos="zoom-out" data-aos-delay="300">
              
      </div>
    </section>
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'?>

  <!-- Vendor JS Files -->
  <?php include 'partials/scripts.php'?>

</body>

</html>