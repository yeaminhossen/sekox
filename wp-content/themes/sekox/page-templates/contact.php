<?php

/**
* Template Name: Contact
 * @package sekox
 */

get_header();


?>

<main>

    <!-- contact-area-start -->
    <section class="contact-area grey-bg pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-30">
                    <div class="tp-contact__wrapper text-center">
                        <div class="tp-contact__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/services-6.png" alt="sec_img">
                        </div>
                        <div class="tp-contact__content">
                            <h4 class="tp-contact__title">Contact</h4>
                            <a href="mailto:support@seko.com">support@seko.com</a>
                            <a href="tell:0000664666">+018856 545 56545</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-30">
                    <div class="tp-contact__wrapper text-center">
                        <div class="tp-contact__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/services-7.png" alt="sec_img">
                        </div>
                        <div class="tp-contact__content">
                            <h4 class="tp-contact__title">Location</h4>
                            <a href="#">88 New South Head Rd, Triple, New York</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-30">
                    <div class="tp-contact__wrapper text-center">
                        <div class="tp-contact__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/services-3.png" alt="sec_img">
                        </div>
                        <div class="tp-contact__content">
                            <h4 class="tp-contact__title">Social</h4>
                            <div class="tp-contact__social">
                                <a href="#"><i class="social_facebook"></i></a>
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_vimeo"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- form-area-start -->
    <section class="form-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="tpsection__content text-center mb-40">
                        <h3 class="tpsection__title mb-15">Get In Touch</h3>
                        <p>He leged it owt to do with me butty vagabond. I don't want no agro chip shop sloshed.</p>
                    </div>
                    <div class="contact__form">
                        <form action="assets/mail.php">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                        <input type="email" placeholder="Your Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                        <textarea placeholder="Enter Your Message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="contact__form-agree  d-flex align-items-center mb-20">
                                        <input class="e-check-input mr-5" type="checkbox" id="e-agree">
                                        <label class="e-check-label" for="e-agree">I agree to the<a href="#">Terms &amp;
                                                Conditions</a></label>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="contact__btn">
                                        <button type="submit" class="tp-btn tp-btn-three">Send your message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form-area-end -->

    <!-- map-area -->
    <div class="map-area">
        <div class="map-wrapper">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16421992.915334428!2d-74.54900526175051!3d53.308708074896664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1654426516184!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- map-area-end -->

</main>

<div class="tpfooter__logo-area theme-bg pt-50">
    <div class="container">
        <div class="tpfooter__logo-area-border pb-10 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-3">
                    <div class="tpfooter__logo mb-30">
                        <a href="https://weblearnbd.net/wp/sekox/"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png"
                                alt="sec-img"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-9">
                    <div class="tpfooter__address d-flex align-items-center justify-content-end">
                        <div class="tpfooter__location d-flex align-items-start mb-30">
                            <div class="tpfooter__location-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="tpfooter__location-content">
                                <a href="#"> 14 Street, Modern Hall <br> New York, USA</a>
                            </div>
                        </div>
                        <div class="tpfooter__location d-flex align-items-start ml-80 mb-30">
                            <div class="tpfooter__location-icon">
                                <i class="fal fa-comments"></i>
                            </div>
                            <div class="tpfooter__location-content">
                                <a href="tel:012345678"> +007-234-4044</a>
                                <a href="mailto:info@example.com"> info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();