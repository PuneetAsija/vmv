  
      <?php include_once'header.php'?>
  <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/bg3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">Contact With Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft">
                <img src="assets/img/images/breadcrumb_shape03.png" alt="">
                <img src="assets/img/images/breadcrumb_shape04.png" alt="">
                <img src="assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13718.082351505891!2d76.7767346!3d30.7318753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fedbbd0b59ca3%3A0xb556ba7601849f3f!2sVmv%20immigration!5e0!3m2!1sen!2sin!4v1710936754497!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact__content">
                            <div class="section-title mb-35">
                                <h2 class="title">How can we help you?</h2>
                                <p>Feel free to contact us with any questions, feedback, or inquiries. Our dedicated team is here to assist you promptly and effectively.</p>
                            </div>
                            <div class="contact__info">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-pin"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Address</h4>
                                            <p>SCO 1096-1097, second Floor, Sector 22, Chandigarh </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Phone</h4>
                                            <a href="tel:+919779472446">+91-97794-72446</a>
                                            <a href="tel:+919779472449">+91-97794-72449</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-mail"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">E-mail</h4>
                                            <a href="mailto:info@vmvimmigiration.com"><span class="__cf_email__" data-cfemail="fa93949c95ba9d979b9396d4999597">info@vmvimmigration.com</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact__form-wrap">
                            <h2 class="title">Give Us a Message</h2>
              
                            <form id="contact-form" action="assets/mail.php" method="POST">
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="number" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-grp checkbox-grp">
                                    <input type="checkbox" name="checkbox" id="checkbox">
                                    <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                </div> -->
                                <button type="submit" class="btn">Submit </button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->


    </main>
    <!-- main-area-end -->
    <?php include_once'footer.php'?>