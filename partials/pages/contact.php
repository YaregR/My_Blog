<section class="page-title section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-0 text-lg">Get in Touch</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0 col-md-4">
                <h4>Location Info</h4>
                <p class="mb-0">Kyiv</p>
                <p class="mb-0">Ukraine</p>
            </div>
            <!-- <div class="col-lg-4 mb-4 mb-lg-0 col-md-4">
                <h4>Address</h4>
                <p>3971 Wines Lane Houston, Texas 77036 <br>363 Detroit Street</p>
            </div> -->
            <div class="col-lg-4 col-md-4">
                <h4>Contact</h4>
                 <p class="mb-0">yard2print@gmail.com</p>
                <p class="mb-0">+38 067 121-43-01</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="google-map mt-5 mb-5">
                    <!-- <div id="map"></div> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d39439.13677352046!2d30.58046269376191!3d50.51232154915521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1675082833736!5m2!1suk!2sua" width="1110" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5 contact-title">
                    <h2>Contact me</h2>
                </div>

                <form id="contact-form" class="contact__form mt-5" method="post" action="mail.php">
             <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                    </div>
                </div>
                <!-- end message -->
                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <input name="subject" type="text" class="form-control" placeholder="Your Subject">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-lg-12">
                         <div class="form-group-2 mb-4">
                            <textarea name="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-main" name="submit" type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>  
        </div>
    </div>
</section>
