<?php 
  
$url =  isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  
 
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="DiCLOWiN - Contact India's Safest Pain Management Brand">
  <meta name="description" content=""/>
  
  <link rel="canonical" href="<?php echo $url;?>">
  <title>DiCLOWiN - Contact India's Safest Pain Management Brand</title>
</head>

<?php include 'header.php';?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section id="breadcrumbs" class="breadcrumbs contacthed">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section> -->
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <!-- <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div> -->

    <section id="contact" class="contact">
      <div class="container">

        <!-- <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div> -->

        <!-- <div class="container">
          <div class="row align-items-center  border border-2 border-success">
            <div class="col-lg-6 pl-0 pr-0 rounded-3">
              <div class="row justify-content-center align-items-center text-center" data-aos="fade-up">
                <div class="col-lg-10">
                  <h2 class="text-white">QUERY FORM</h2>
                  <h4 class="text-white">Write Your Query Here</h4>
                  <br>
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form rounded-3">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" class="form-control" name="fname" id="fname"  placeholder="First Name" required>
                      </div>

                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                      </div>

                      <div class="form-group mt-3">
                        <input type="tel" class="form-control" name="number" id="number" placeholder="Your Number" required>
                      </div>

                      <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>

                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                      </div>

                      </div>
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                      </div>

                      <div class="mt-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>

                <h3 class="">Connect With Us Via Whatsapp</h3>
                <a href="https://api.whatsapp.com/send?phone=+919560453337&text=I%20want%20Diclowin%20Products" class="" target="_blank">
                  <i class="fa fa-whatsapp pb-3" aria-hidden="true" style="font-size:100px; color:green;"></i>
                </a>
                <div class="pt-2">
                  <a href="https://api.whatsapp.com/send?phone=+919560453337&text=I%20want%20Diclowin%20Products" class="border border-dark p-2 text-dark" target="_blank"> +91 95604 53337</a>
                </div>
              </div>

              
            </div>

            <div class="col-lg-6 text-center">
              <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                  <img src="assets/img/wings.png" class="img-fluid pb-3" alt="">
                  <h1>Get In Touch</h1>
                  <h3>Wings Pharmaceuticals Pvt. Ltd.</h3>

                  <br>
                  <div class="pb-1">
                      <h4>Address</h4>
                      <p class="fs-5">Wings Pharmaceuticals Pvt. Ltd. <br>
                         D-6 Udyog Nagar Indl. Area, <br>
                         New Delhi-110041, India</p>
                  </div>
                  
                  <div>
                      <h4>Toll Free Helpline</h4>
                      <div class="pt-2">
                        <a href="tel:18001205251" class="border border-dark p-2 text-dark"><i class="fa fa-phone"></i> 1800 120 5251</a>
                      </div>
                  </div>

                  <div class="pt-4">
                      <h4>Give a missed call <br>for Diclowin Knee Oil</h4>
                      <div class="pt-2">
                        <a href="tel:8010077780" class="border border-dark p-2 text-dark"><i class="fa fa-phone"></i> 8010 0777 80</a>
                      </div>
                  </div>

                  <div class="pt-4">
                      <h4>Write at</h4>
                      <div class="pt-2">
                      <a href="mailto:care@wingspharma.com" class="border border-dark p-2 text-dark"><i class="fa fa-envelope"></i> care@wingspharma.com</a>
                      </div>
                  </div>

                  <div class="pt-4 pb-3 w-100">
                      <h4>Follow Us</h4>
                      <a href="https://www.facebook.com/diclowin" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa fa-facebook" style="font-size:19px;"></i></a>
                      &nbsp;
                      <a href="https://www.instagram.com/diclowin" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa fa-instagram" style="font-size:19px;"></i></a>
                      &nbsp;
                      <a href="https://twitter.com/diclowinplus" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa fa-twitter" style="font-size:19px;"></i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div> -->

        



      </div>
    </section>
    
    <!-- End Contact Section -->


  <!-- <section>
    <div class="container text-center">

        <img src="assets/img/wings.png" class="img-fluid pb-3" alt="">
        <h1>Get In Touch</h1>
        <h3>Wings Pharmaceuticals Pvt. Ltd.</h3>

        <hr><br>
        <div class="row g-3 justify-content-center align-items-center">

          <div class="col-md-3">
              <div class="">
                <h3 class="">Connect With Us Via Whatsapp</h3>
                  <a href="https://api.whatsapp.com/send?phone=+919560453337&text=I%20want%20Diclowin%20Products" class="" target="_blank">
                    <i class="fa fa-whatsapp pb-3" aria-hidden="true" style="font-size:100px; color:green;"></i>
                  </a>
                  <div class="pt-2">
                    <a href="https://api.whatsapp.com/send?phone=+919560453337&text=I%20want%20Diclowin%20Products" class="border border-dark p-2 text-dark" target="_blank"> +91 95604 53337</a>
                  </div>
              </div>
          </div>

          <div class="col-md-3">
            <div class="">
              <div class="py-2">
                <h4>Address</h4>
                <p class="fs-5">
                  Wings Pharmaceuticals Pvt. Ltd. <br>
                  D-6 Udyog Nagar Indl. Area, <br>
                  New Delhi-110041, India
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="">
              <h4>Toll Free Helpline</h4>
                <div class="pt-2">
                  <a href="tel:18001205251" class="border border-dark p-2 text-dark"><i class="fa fa-phone"></i> 1800 120 5251</a>
                </div>
                <br>
              <h4>Give a missed call <br>for Diclowin Knee Oil</h4>
                <div class="pt-2">
                  <a href="tel:8010077780" class="border border-dark p-2 text-dark"><i class="fa fa-phone"></i> 8010 0777 80</a>
                </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="">
              <h4>Write at</h4>
                <div class="pt-2">
                  <a href="mailto:care@wingspharma.com" class="border border-dark p-2 text-dark"><i class="fa fa-envelope"></i> care@wingspharma.com</a>
                </div>
                <br>
                <h4>Follow Us</h4>
                  <a href="https://www.facebook.com/diclowin" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa fa-facebook" style="font-size:19px;"></i></a>
                    &nbsp;
                  <a href="https://www.instagram.com/diclowin" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa fa-instagram" style="font-size:19px;"></i></a>
                    &nbsp;
                  <a href="https://twitter.com/diclowinplus" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa fa-twitter" style="font-size:19px;"></i></a>
            </div>
          </div>

        </div>
    </div>
  </section> -->


  </main><!-- End #main -->






  <section id="services" class="services2">
      <div class="container text-center">

        <img src="assets/img/wings.png" class="img-fluid pb-3" alt="">
        <h1>Get In Touch</h1>
        <h2 class="h3" >Wings Pharmaceuticals Pvt. Ltd.</h2>

        <hr><br>

        <div class="row gx-3 justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
            <div class="icon-box w-100 border">
              <div class="">
                <h3 class="h4">Connect With Us Via Whatsapp</h3>
                  <a href="https://api.whatsapp.com/send?phone=+917428372007&text=I%20want%20Diclowin%20Products" class="" target="_blank">
                    <i class="fa-brands fa-whatsapp pb-3" aria-hidden="true" style="font-size:100px; color:green;"></i>
                  </a>
                  <div class="pt-2">
                    <a href="https://api.whatsapp.com/send?phone=+917428372007&text=I%20want%20Diclowin%20Products" class="border border-dark p-2 text-dark" target="_blank"> +91 74283 72007</a>
                    <!--95604 53337-->
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
            <div class="icon-box w-100 border">
              <div class="">
                <div class="py-2">
                  <h4>Address</h4>
                  <p class="fs-5">
                    Wings Pharmaceuticals Pvt. Ltd. <br>
                    D-6 Udyog Nagar Indl. Area, <br>
                    New Delhi-110041, India
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
            <div class="icon-box w-100 border">
              <div class="">
                <h5 class="h4">Toll Free Helpline</h5>
                  <div class="pt-2">
                    <a href="tel:18001205251" class="border border-dark p-2 text-dark"><i class="fa fa-phone"></i> 1800 120 5251</a>
                  </div>
                  <br>
                <h6 class="h4">Give a missed call <br>for Diclowin</h6>
                  <div class="pt-2">
                    <a href="tel:8010077780" class="border border-dark p-2 text-dark"><i class="fa fa-phone"></i> 8010 0222 15 </a>
                    <!-- 8010 0777 80 -->
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
            <div class="icon-box w-100 border">
              <div class="">
                <h2 class="h4">Write at</h2>
                  <div class="pt-2 border border-dark m-2">
                    <a href="mailto:care@wingspharma.com" class=" text-dark">
                        <i class="fa fa-envelope" style="font-size: 20px;"></i>
                        <br>
                        care@wingspharma.com</a>
                  </div>
                  <br>
                  <h3 class="h4">Follow Us</h3>
                    <a href="https://www.facebook.com/diclowin" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa-brands fa-facebook-f" style="font-size:19px;"></i></a>
                      &nbsp;
                    <a href="https://www.instagram.com/diclowin" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa-brands fa-instagram" style="font-size:19px;"></i></a>
                      &nbsp;
                    <a href="https://twitter.com/diclowinplus" target="_blank" class=" border border-dark px-2 py-1 text-dark"><i class="fa-brands fa-twitter" style="font-size:19px;"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
  </section>






<div class="container-fluid brands_con py-5">
  <div class="text-center h2 py-3 text-success border-bottom border-success">Our Brands</div>
    <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card" >
              <a href="https://www.kufma.com/" target="_blank">
                   <img src="assets/img/ct/kufma.jpg" alt="Kufma" class="img-fluid" width="100%"></a>
          </div>
        </div>
        <div class="col-md-3" >
           <div class="card">
               <a href="https://hairshield.co.in/" target="_blank">
            <img src="assets/img/ct/hairShield.jpg" alt="HairShield" class="img-fluid" width="100%"></a>
           </div>
        </div>
        <div class="col-md-3" >
            <div class="card">
                <a href="https://www.myheelmate.com/" target="_blank">
                <img src="assets/img/ct/heelmate.jpg" alt="Heelmate" class="img-fluid" width="100%"></a>
            </div>
        </div>
         <div class="col-md-3" >
            <div class="card">
                <a href="https://orasore.com/" target="_blank">
                <img src="assets/img/ct/orasore.jpg" alt="Orasore" class="img-fluid" width="100%"></a>
            </div>
        </div>
    </div>
</div>


  <!-- ======= Footer ======= -->
  <?php include 'footer.php';?>