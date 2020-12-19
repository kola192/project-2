<?php 

  $pageTitle = "Reyada | اتصل بنا";
  $pageName = "اتصل بنا";
  $pageHeading = "اتصل بنا";
  
?>

<!-- including social-header -->
<?php include('../includes/social-header.php')?>


<!-- including header -->
<?php include('../includes/header.php')?>


<!-- including page title -->
<?php include('../includes/title.php')?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-header">
        <h3>اتصل بنا</h3>

        <!-- uncomment this if you want to add some text before the form -->
        <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
      
      </div>

      <div class="row contact-info">

        <div class="col-md-4" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>العنوان</h3>
            <address>A108 Adam Street, NY 535022, USA</address>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos="fade-up" data-aos-delay="400">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>الهاتف</h3>
            <p><a href="tel:+155895548855">+249 111094895</a></p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos="fade-up" data-aos-delay="600">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>البريد الالكتروني</h3>
            <p><a href="mailto:info@reyada.org">info@reyada.org</a></p>
          </div>
        </div>

      </div>

      <div class="form" data-aos="fade-up" data-aos="fade-up" data-aos-delay="400">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">أرسل</button></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->


<!-- including footer -->
<?php include('../includes/footer.php') ?>