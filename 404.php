<!DOCTYPE html>
<html lang="pt-br">

<?php include 'includes/head.php'?>

<body>

  <!-- ======= Barra superior ======= -->
  <?php include 'partials/topbar.php'?>

  <!-- ======= Modal ======= -->
  <?php include 'partials/modal.php'?>

  <!-- ======= Header ======= -->
  <?php include 'includes/header.php'?>
  <!-- End Header -->
  
  <main id="main">
    
    <section class="d-flex justify-content-center align-items-center vh-100">
      <div class="text-center">
      <div class="col-lg-12 order-1 order-lg-2 hero-2-img" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/logo.png" class="img-fluid animated" alt="">
            </div>
        <h1 class="display-1">404</h1>
        <h2 class="display-4">Desculpe, página não encontrada</h2>
        <p class="lead">A página solicitada não pôde ser encontrada.</p>
        <a href="<?php echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http'; ?>://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php"" class="btn btn-primary btn-lg">Voltar para casa</a>
      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'?>

  <!-- ======= Scripts ======= -->
  <?php include 'partials/scripts.php'?>

</body>

</html>