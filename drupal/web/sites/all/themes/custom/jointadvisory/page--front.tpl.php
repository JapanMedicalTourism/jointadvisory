<?php
    include("page-header.php");
    echo render($page['content']['metatags'])
?>
 <section id="video-banner">
        <div class="full-window-height video-bg">
            <div class="video-filter"></div>
            <!-- Video -->
            <!-- <div class="video-div"></div> -->
            <video src="<?php echo drupal_get_path('theme', 'jointadvisory'); ?>/assets/videos/jointadvisory-official-optimized.mp4" preload="auto" autoplay="true"
                   muted="true" loop="true" controls="false" poster="<?php echo drupal_get_path('theme', 'jointadvisory'); ?>/assets/videos/poster.jpg"></video>
            <!-- Content -->
            <div class="container-fluid indent-section">
                <div class="row">
                    <div class="col-lg-8 col-md-12 text-left banner-text">
                        <h1 class="animated-text banner-title">We turn information into actionable insights</h1>
                        <p class="animated-text banner-subtext">By offering the resources and know-how as well as
                            working in partnership with local medical institutions to meet the growing demand in the
                            market. </p>
                    </div>
                </div>
            </div>
            <div class="learn-more">
                <span class="animated-text">Learn More</span><br>
                <img src="<?php echo drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/icons/caret-down.svg" alt="Learn More">
            </div> 
        </div> 
    </section>
    <!-- End Video Banner -->
    <!-- Featured -->
    <section id="featured-section" class="main-section">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave wave-up white">
            <path id="banner-wave" d="">
        </svg>
        <div class="featured-wrapper">
            <div class="container-fluid indent-section">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Content -->
                        <div class="section-title feature-animate-text"><?php echo t('Featured'); ?></div>
                        <div class="slick single-item featured-banner featured-slick">
                            <!-- Loopable divs .slick-holder -->
                            <?php
                                global $language;

                                $query = new EntityFieldQuery;
                                $query->entityCondition('entity_type', 'node')
                                            ->entityCondition('bundle', 'service')
                                            ->fieldCondition('field_featured', 'value', 1)
                                            ->propertyCondition('status', 1)
                                            ->propertyOrderBy("created", $direction = 'DESC')
                                            ->propertyCondition('language', $language->language, '=');  

                                $results = $query->execute();  
                                if(!empty($results['node'])){
                                    foreach ($results['node'] as $key => $value) {
                                        $node = node_load($value->nid);
                                        $image = file_create_url($node->field_banner['und'][0]['uri']);

                                        $options = array('absolute' => TRUE);
                                        $url = url('node/' . $node->nid, $options);

                                        $term = taxonomy_term_load($node->field_content_category['und'][0]['tid']);

                                        $body_details_string = strip_tags($node->field_summary['und'][0]['value']);
                                        $trimmed_details_string = (strlen($body_details_string) > 320) ? substr($body_details_string,0,320)."..." : $body_details_string;
                            ?>
                            <div class="slick-holder">
                                <div class="featured-img"
                                     style="background-image:url('<?php echo $image; ?>')"></div>
                                <div class="article-content" data-aos_hidden="fade-up">
                                    <a href="<?php echo $url; ?>" class="feature-head" title="<?php echo $node->title ?>">
                                        <span class="category ">
                                            <?php echo $term->name; ?> SERVICE
                                        </span>
                                        <div class="title">
                                            <?php echo $node->title; ?>
                                        </div>
                                    </a>
                                    <div class="description styled-links dark">
                                        <p><?php echo $trimmed_details_string; ?></p>
                                    </div>
                                    <a href="<?php echo $url; ?>" title="<?php echo $node->title ?>" class="link-re"><?php echo t('Discover More'); ?></a>
                                </div>
                            </div>
                            <?php 
                                    }
                                } 
                            ?>
                            <!-- End Loopable divs -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php 
                            $trending = module_invoke('views', 'block_view', 'trending_services-block');
                            print render($trending['content']);

                            $popular = module_invoke('views', 'block_view', 'most_popular_services-block');
                            print render($popular['content']);
                        ?>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->
    <!-- News Section -->
    <section id="news-section" class="main-section">
        <div class="news-wrapper">
            <div class="container-fluid indent-section">
                <div class="row">
                    <div class="col-12">
                        <!-- Content -->
                        <div class="section-title full-width news-animate-text">New at Joint Advisory</div>
                        <div class="row news-row">
                            <div class="col-lg-4 col-sm-12">
                                <!--  -->
                                <div class="news-card" data-aos_hidden="fade-up">
                                    <a href="#">
                                        <div class="thumbnail"
                                             style="background-image:url('<?php echo drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/media/nb1.jpg');"></div>
                                    </a>
                                    <div class="article-content">
                                        <a href="#" class="feature-head">
                                            <span class="category">Newsletter</span>
                                            <div class="title">
                                                JMT Joint Advisory Newsletter
                                            </div>
                                            <span class="date">February 12, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-lg-4 col-sm-12">
                                <!--  -->
                                <div class="news-card" data-aos_hidden="fade-up" data-aos_hidden-delay="200">
                                    <a href="#">
                                        <div class="thumbnail"
                                             style="background-image:url('<?php echo drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/media/nb2.jpg');"></div>
                                    </a>
                                    <div class="article-content">
                                        <a href="#" class="feature-head">
                                            <span class="category">Article</span>
                                            <div class="title">
                                                GO JMT Joint Advisory
                                            </div>
                                            <span class="date">February 12, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-lg-4 col-sm-12">
                                <!--  -->
                                <div class="news-card" data-aos_hidden="fade-up" data-aos_hidden-delay="300">
                                    <a href="#">
                                        <div class="thumbnail"
                                             style="background-image:url('<?php echo drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/media/N1.png');"></div>
                                    </a>
                                    <div class="article-content">
                                        <a href="#" class="feature-head">
                                            <span class="category">Article</span>
                                            <div class="title">
                                                EMR Evaluations
                                            </div>
                                            <span class="date">June 20, 2018</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                        <a href="#" title="" class="link-re">See all posts</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->
    <!-- Register Section -->
    <section id="register-section" class="main-section">
        <div class="register-wrapper">
            <div class="container-fluid indent-section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title full-width register-animate-text">REGISTER YOUR INTEREST</div>
                    </div>
                    <div class="col-lg-6">
                        <!--  -->
                        <div class="article-content styled-links dark">
                            <h1 class="register-animate-text" data-aos_hidden="fadeUp">A personalized plan to increase
                                growth and make your ideas a success.</h1>
                            <p data-aos_hidden="fade-up">
                                Would you like to speak to one of our consultants over the phone? Just submit your
                                details and we’ll be in touch shortly. You can also email us if you would prefer.
                            </p>
                            <p data-aos_hidden="fade-up" data-aos_hidden-delay="100">
                                We inspire clients to make their most challenging business decisions with confidence.
                                Send us a <a href="#register-form">message</a>, or phone <a href="tel:+81342436050">+81
                                    3-4243-6050</a> between 10:00 and 18:00 Monday to Friday — we would be delighted to
                                speak about how we could help your firm.
                            </p>
                        </div>
                        <a href="#" title="" class="link-re">For the meantime, browse our brochures</a>
                    </div>
                    <div class="col-lg-6">
                        <!-- Form -->
                        <form class="needs-validation register-form" novalidate id="register-form">
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
                            <div class="form-group">
                                <div class="captcha-wrapper">
                                    <img src="<?php echo drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/captcha-placeholder.png" alt="captcha-placeholder"
                                         height="80px">
                                </div>
                            </div>
                            <div data-aos_hidden="fade-up" data-aos_hidden-delay="400"><button class="btn btn-primary"
                                        type="submit">Send Details</button></div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include("page-footer.php");

    include("page-script.php");
    include("page-close-tag.php");
?>