<div class="sidebar">
    <!--   This section should be at the top -->
    <div class="nav-sidebar section">
        <form class="needs-validation" method="GET" novalidate id="search-form" action="./search-results.html">
            <div class="form-row styled-links dark">
                <div class="col-md-12 mb-3" data-aos_hidden="fade-up">
                    <label for="validationCustom01"><a>Search Joint Advisory</a></label>
                    <input type="text" list="keyword" name="search" class="form-control" id="validationCustom01"
                    placeholder="What are you looking for?" required autocomplete="off">
                    <div class="invalid-feedback">
                        Please enter a keyword.
                    </div>
                    <datalist id="keyword">
                        <option value="Joint Advisory">
                            <option value="Learn Our Process">
                                <option value="Initial Survey Preparation Package">
                                    <option value="Continuous Survey Readiness Package">
                                        <option value="Documentation Package">
                                        </datalist>
                                    </div>
                                </div>
                                <button class="" style="display: none;"
                                type="submit">Send Details</button>
                            </form>
                            <div class="article-content styled-links dark">
                                <a><span class="category">BROWSE JOINT ADVISORY</span></a>
                            </div>
                            <!-- Vertical Links -->
                            <div class="vertical-link-list dark">
                                <a href="./index.html">Home</a>
                                <a href="./about-us.html">About Us</a>
                                <a href="./services.html">Services</a>
                                <a href="./the-team.html">The Team</a>
                                <a href="./investment.html">Investment</a>
                                <a href="./contact-us.html">Contact</a>
                            </div>
                            <hr> 
                            <!-- Vertical Links -->
                            <div class="article-content styled-links dark">
                                <a><span class="category">Latest News</span></a>
                            </div>
                            <div class="news-card">
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
                            <hr>
                            <div class="article-content styled-links dark">
                                <a><span class="category">Connect with Us</span></a>
                            </div>
                            <!-- Vertical Links -->
                            <div class="vertical-link-list dark">
                                <a href="#">Facebook</a>
                                <a href="#">Twitter</a>
                                <a href="#">LinkedIn</a>
                            </div>


                        </div>
                        <!--   This section should be at the bottom -->
                        <div class="section"> 
                            <div class="circle">
                                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
                                    <path id="wave-1" d="">
                                    </svg>

                                </div>
                            </div>

                        </div>
                        <!-- Navigation -->
                        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="ja-navbar">
                            <div id="hamburger" class="hamburglar is-close">
                                <div class="burger-icon">
                                    <div class="burger-container">
                                        <span class="burger-bun-top"></span>
                                        <span class="burger-filling"></span>
                                        <span class="burger-bun-bot"></span>
                                    </div>
                                </div>
                                <!-- svg ring containter -->
                                <div class="burger-ring">
                                    <svg class="svg-ring">
                                        <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4"
                                        d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                                    </svg>
                                </div>
                                <!-- the masked path that animates the fill to the ring -->
                                <svg width="0" height="0">
                                    <mask id="mask">
                                        <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10"
                                        stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                                    </mask>
                                </svg>
                                <div class="path-burger">
                                    <div class="animate-path">
                                        <div class="path-rotation"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="container-fluid">
                                <a class="navbar-brand" href="/">
                                    <img src="<?php echo base_path() . '/' . drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/logo.png" height="60" class="d-inline-block align-top" alt="">
                                </a>
                                <div class="collapse navbar-collapse" id="ja-navbar-contents">
                                    <ul class="navbar-nav ml-auto" <?php if(isset($_GET['q']) && ($_GET['q'] == 'trainings/codmancommunications-interpreter-training-application-form' || $_GET['q'] == 'node/43' || $_GET['q'] == 'node/44')){ echo 'style="display: none;"'; } ?>>
                                    <?php  
                                        $menu = menu_tree_all_data('main-menu');
                                        foreach ($menu as $key => $link) {
                                            if(!$link['link']['has_children']){
                                                echo '<li class="nav-item active">
                                                    <a class="nav-link" href="'.url(drupal_get_path_alias($link['link']['link_path'])).'">'.$link['link']['link_title'].'</a>
                                                </li>';
                                            }else{
                                                echo '<li class="nav-item dropdown megamenu-li">
                                                    <a class="nav-link dropdown-toggle" href="" id="megamenu-'.$link['link']['mlid'].'" data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false">'.$link['link']['link_title'].'</a>
                                                    <div class="dropdown-menu megamenu" aria-labelledby="megamenu-'.$link['link']['mlid'].'">
                                                        <div class="container-fluid container-megamenu">
                                                            <div class="row">';
                                                                foreach ($link['below'] as $linklevel2) {
                                                                    echo '<div class="col-md-4 sub-content">
                                                                        <div class="article-content styled-links dark">
                                                                            <a><span class="category">'.$linklevel2['link']['link_title'].'</span></a>
                                                                        </div>';
                                                                        if($linklevel2['link']['has_children']){
                                                                            echo '<div class="vertical-link-list dark">';
                                                                            foreach ($linklevel2['below'] as $linklevel3) {
                                                                                $m = menu_fields_load_by_mlid($linklevel3['link']['mlid']);
                                                                                echo '<a href="'.url(drupal_get_path_alias($linklevel3['link']['link_path'])).'">';
                                                                                if(isset($m->smalll_link['und'][0]) && $m->smalll_link['und'][0]){
                                                                                    echo '<small class="text-muted">';
                                                                                }

                                                                                echo $linklevel3['link']['link_title'];

                                                                                 if(isset($m->smalll_link['und'][0]) && $m->smalll_link['und'][0]){
                                                                                    echo '</small>';
                                                                                }
                                                                                echo '</a>';
                                                                            }
                                                                            echo '</div>';
                                                                        }
                                                                    echo '</div>';
                                                                }
                                                        echo '</div>
                                                        </div>
                                                    </div>
                                                </li>';
                                            }
                                            // echo '<pre>'; var_dump($link['link']); echo '</pre>';
                                            // exit();   
                                        }
                                    ?>
                                        <!-- <li class="nav-item dropdown megamenu-li">
                                            <a class="nav-link dropdown-toggle" href="" id="about-megamenu" data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">About</a>
                                            <div class="dropdown-menu megamenu" aria-labelledby="about-megamenu">
                                                <div class="container-fluid container-megamenu">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="article-content styled-links dark">
                                                                <a><span class="category">Explore Joint Advisory</span></a>
                                                            </div>
                                                            <div class="vertical-link-list dark">
                                                                <a href="./about-us.html">About Us</a>
                                                                <a href="./the-team.html">Meet the Experts</a>
                                                                <a href="./statistics.html">Know Us by the Numbers</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 sub-content">
                                                            <div class="article-content styled-links dark">
                                                                <a><span class="category">Connect with Us</span></a>
                                                            </div>
                                                            <div class="vertical-link-list dark">
                                                                <a href="#">Facebook</a>
                                                                <a href="#">Twitter</a>
                                                                <a href="#">LinkedIn</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="article-content styled-links dark">
                                                                <a><span class="category">Latest News</span></a>
                                                            </div>
                                                            <div class="news-card">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </li> -->
                                        <!-- <li class="nav-item dropdown megamenu-li">
                                            <a class="nav-link dropdown-toggle" href="" id="services-megamenu" data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">Services</a>
                                            <div class="dropdown-menu megamenu" aria-labelledby="services-megamenu">
                                                <div class="container-fluid container-megamenu">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="article-content styled-links dark">
                                                                <a><span class="category">FEATURED SERVICE</span></a>
                                                            </div>
                                                            <div class="news-card">
                                                                <div class="article-content">
                                                                    <a href="#" class="feature-head">
                                                                        <span class="category">Consulting Service</span>
                                                                        <div class="title">
                                                                            JMT JCI Accreditation
                                                                            Preparation Services
                                                                        </div>
                                                                        <span class="date">Learn More</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="article-content styled-links dark">
                                                                <a><span class="category">Consulting Services</span></a>
                                                            </div>
                                                            <div class="vertical-link-list dark">
                                                                <a href="./service-item.html">Initial Survey Preparation Package</a>
                                                                <a href="./service-item.html">Continuous
                                                                    Survey
                                                                    Readiness
                                                                Package</a>
                                                                <a href="./service-item.html">Documentation
                                                                Package</a>
                                                                <a href="./consulting-services.html"><small class="text-muted">Explore all our
                                                                services</small></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 sub-content">
                                                            <div class="article-content styled-links dark">
                                                                <a><span class="category">Other Offered Services</span></a>
                                                            </div>
                                                            <div class="vertical-link-list dark">
                                                                <a href="./service-item.html">Baseline
                                                                Assessment</a>
                                                                <a href="./service-item.html">Care
                                                                    Environment
                                                                Assessment</a>
                                                                <a href="./service-item.html">Continuous
                                                                    Improvement
                                                                Planning</a>
                                                                <a href="./consulting-services.html"><small class="text-muted">Explore all our
                                                                services</small></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./investment.html">Investment</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./contact.html">Contact</a>
                                        </li> -->

                                        <li class="nav-item dropdown megamenu-li">
                                            <a class="nav-link dropdown-toggle" href="" id="about-megamenu" data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"><img
                                            src="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/icons/search.svg" alt="Search Joint Advisory" width="20px"></a>
                                            <div class="dropdown-menu megamenu" aria-labelledby="about-megamenu">
                                                <div class="container-fluid container-megamenu">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form class="needs-validation" method="GET" novalidate id="search-form"
                                                            action="./search-results.html">
                                                            <div class="form-row styled-links dark">
                                                                <div class="col-md-12 mb-3" data-aos_hidden="fade-up">
                                                                    <label for="validationCustom01"><a>Search Joint Advisory</a></label>
                                                                    <input type="text" list="keyword" name="search" class="form-control"
                                                                    id="validationCustom01"
                                                                    placeholder="What are you looking for?" required
                                                                    autocomplete="off">
                                                                    <div class="invalid-feedback">
                                                                        Please enter a keyword.
                                                                    </div>
                                                                    <datalist id="keyword">
                                                                        <option value="Joint Advisory">
                                                                            <option value="Learn Our Process">
                                                                                <option value="Initial Survey Preparation Package">
                                                                                    <option value="Continuous Survey Readiness Package">
                                                                                        <option value="Documentation Package">
                                                                                        </datalist>
                                                                                    </div>
                                                                                </div>
                                                                                <button class="" style="display: none;"
                                                                                type="submit">Send Details</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>