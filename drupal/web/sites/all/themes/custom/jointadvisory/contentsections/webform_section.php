<?php  
    $title = $para_banner['#entity']->field_title['und'][0]['value'];
    $text = $para_banner['#entity']->field_text['und'][0]['value'];
?>

<section id="register-section" class="main-section">
        <div class="register-wrapper">
            <div class="container-fluid indent-section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title full-width register-animate-text"><?php echo $title; ?></div>
                    </div>
                    <div class="col-lg-6">
                        <!--  -->
                        <div class="article-content styled-links dark">
                            <?php echo $text; ?>
                        </div>
                        <!-- <a href="#" title="" class="link-re">For the meantime, browse our brochures</a>  -->
                    </div>
                    <div class="col-lg-6">
                        <?php  
                            if (isset($content['webform'])) {
                                #### Webform
                                $webform = $content['webform'];
                                $webform_content = render($webform);
                            }else{
                                $webform_content = '';
                            }

                            echo $webform_content;
                        ?>
                        <!-- Form -->
                       <!--  <form class="needs-validation register-form" novalidate id="register-form">
                            <div class="form-row styled-links dark">
                                <div class="col-md-12 mb-3" data-aos_hidden="fade-up">
                                    <label for="validationCustom01"><a>Full Name / Company</a></label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                           placeholder="やまだ たろう / ABC Company" required>
                                    <div class="invalid-feedback">
                                        Please enter a name.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3" data-aos_hidden="fade-up" data-aos_hidden-delay="100">
                                    <label for="validationCustom02"><a>Email Address</a></label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                           placeholder="hellothere@domain.com" required>
                                    <div class="invalid-feedback">
                                        Please provide us your email address.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3" data-aos_hidden="fade-up" data-aos_hidden-delay="200">
                                    <label for="validationCustom04"><a>Contact Number</a></label>
                                    <input type="text" class="form-control" id="validationCustom04"
                                           placeholder="Your valid contact number" required>
                                    <div class="invalid-feedback">
                                        Please provide us a phone number so we can contact you.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3" data-aos_hidden="fade-up" data-aos_hidden-delay="300">
                                    <label for="validationCustom03"><a>Message</a></label>
                                    <textarea class="form-control" id="validationCustom03" rows="4" required
                                              placeholder="Leave us your message and we'll be in touch shortly."></textarea>
                                    <div class="invalid-feedback">
                                        Please leave us a message.
                                    </div>
                                </div>
                            </div>
                            <div data-aos_hidden="fade-up" data-aos_hidden-delay="400"><button class="btn btn-primary"
                                        type="submit">Send Details</button></div>
                        </form> -->
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>