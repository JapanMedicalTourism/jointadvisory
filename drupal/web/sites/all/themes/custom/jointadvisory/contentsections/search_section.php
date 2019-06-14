<?php  
    $uri = file_create_url($para_banner['#entity']->field_image['und'][0]['uri']);
?>
<section id="" class="main-section">
        <div class="register-wrapper">
            <div class="container-fluid indent-section">
                <div class="row">
                    <div class="col-lg-5 col-md-8">
                        <div class="article-content styled-links dark">
                            <h1 class="" data-aos_hidden="fadeUp"><?php echo $para_banner['#entity']->field_title['und'][0]['value'] ?></h1>
                            <p data-aos_hidden="fade-up">
                                <?php echo $para_banner['#entity']->field_description['und'][0]['value'] ?>
                            </p> 
                        </div>
                        <!-- <form class="needs-validation" novalidate id="register-form" action="search.html" method="GET">
                            <div class="form-row styled-links dark">
                                <div class="col-md-12 mb-3" data-aos_hidden="fade-up">
                                    <label for="validationCustom01"><a>Let's get right to the things you want.</a></label>
                                    <input type="text" name="search" class="form-control" id="validationCustom01"
                                           placeholder="Type here and hit enter to search..." list="services" required autocomplete="on">
                                        <datalist id="services">
                                            <option value="Initial Survey Preparation  Package">
                                            <option value="Documentation Package">
                                            <option value="Continuous Survey Readiness Package"> 
                                        </datalist> 
                                    <div class="invalid-feedback">
                                        Please enter a keyword.
                                    </div>
                                </div> 
                            </div> 
                        </form> -->
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-4 ">
                        <div class="services-banner-img">
                            <img src="<?php echo $uri; ?>" alt="">
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>