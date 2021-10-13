
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subj=$_POST['subject'];
		$msg=$_POST['message'];

		$to='armanh522@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Subject :".$subj."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <title>WhatsOn Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

<?php
session_start();
?>

<?php
  if($message_sent);
?>
  <h3>Thanks, We'll be in touch</h3>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <a href="index.html"><img src="assets/img/logo_fnal.png" class="img-fluid" alt=""></a>
      </h1>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>

          <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Sargam.html">Sargam Lesson Beginner/Advance</a></li>
              <li><a href="guitar-lesson.html">Guitar lesson for Beginner/Advanced</a></li>
              <li><a href="tabla-lesson.html">Tabla Lesson Beginner/Advance</a></li>
              <li><a href="hermonium-lesson.html">Hermonium Lesson Beginner/Advance</a></li>
            </ul>
          </li>
          <li><a href="events.html">Events</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
      </div>
      
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <?php
        if(isset($_SESSION['status']))
        {
          ?>
            <div class="alert alert-warning alert-dismissible text-center fade show" role="alert">
              <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <?php
          
          unset($_SESSION['status']);
        }
      ?>
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7714450018816!2d90.39641061536403!3d23.862248390410187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5802277c2d1%3A0x83872b7e320b64fd!2sWhatsOn%20BD%20Office!5e0!3m2!1sen!2sbd!4v1632988304919!5m2!1sen!2sbd" frameborder="0" allowfullscreen></iframe>

          
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>13A Cannon Street Birmingham B2 5EN</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@whatson.academy</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+44 (121) 655 1122</p>
              </div>

            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="connect.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                
                <textarea cols="30" rows="10" class="form-control" id="message" name="message" placeholder="Message" required></textarea>
            
              <div class="form-group mt-3">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

         

          <div class="col-lg-3 col-md-6 footer-contact">
            <img class="img-fluid" src="assets/img/logo_fnal.png" alt="">
            <p>
              13A Cannon Street  <br>
              Birmingham B2 5EN<br>
              United Kingdom <br><br>
              <strong>Phone:</strong> +44 (121) 655 1122<br>
              <strong>Email:</strong> contact@whatson.academy<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events.html">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Sargam.html">Sargam Lesson</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="guitar-lesson.html">Guitar Lesson</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tabla-lesson.html">Tabla Lesson</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hermonium-lesson.html">Hermonium Lesson</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>You are always our priority. We will let you know about offers and important stuffs.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span><a href="https://whatson.guide/" target="_blank">WhatsOn</a></span></strong>. All Rights Reserved
        </div>
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/groups/1082485545417953" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://twitter.com/WhatsOn_UK" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com/whatson_media/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/whatson/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.youtube.com/user/whatsonuk" target="_blank" class="linkedin"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

 

</body>

</html>