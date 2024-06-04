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

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contato</h2>
          <ol>
            <li><a href="<?php echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http'; ?>://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php">Inicio</a></li>
            <li>Contato</li>
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
                <h1>Contato</span></h1>
                <h2>Conecte-se conosco - Estamos aqui para ouvir e ajudar, apenas um clique de distância!</h2>
                
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
    
    <section id="contact" class="contact d-flex justify-content-center align-items-center vh-100">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contate-nos</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Endereço</h3>
              <p><strong>Av. Berna, 64 - Veleiros, São Paulo - SP <br>
              CEP: 04774-020</strong></p>
            </div>
          </div>

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>E-Mail</h3>
              <p>contato@siriusautomotive.com.br</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Telefone</h3>
              <p>+55 11 99999-9999<br>+55 11 99999-9999</p>
            </div>
          </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.7805875085796!2d-46.70671242406637!3d-23.68380327871592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5029632d9817%3A0xdbf183fb1715ec58!2sAv.%20Berna%2C%2064%20-%20Veleiros%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004774-020%2C%20Brazil!5e0!3m2!1sen!2sus!4v1716680767045!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px; padding: 20px 0 30px 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
          </div>

        </div>
      </div>
      
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php'?>

  <!-- ======= Scripts ======= -->
  <?php include 'partials/scripts.php'?>

</body>

</html>