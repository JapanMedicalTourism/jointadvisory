<?php  
    $title = $node->title;
    $position = $node->field_position['und'][0]['value'];
?>

<section id="article-team-section" class="main-section">
    <div class="article-wrapper">
        <div class="container indent-section">
            <div class="row article-row"> 
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="./about-us.html">About Us</a></li>
                            <li class="breadcrumb-item"><a href="./the-team.html">Experts</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class=" article-content"><br> 
                        <div class="title">
                            <?php echo $title; ?>
                        </div>
                        <div class="category dark styled-links">
                            <?php echo $position; ?>
                        </div> 
                    </div>
                </div> 
                
                <?php 
                    $para_banner_arr = array();
                    if (isset($node->field_body['und'])) {
                        foreach ($node->field_body['und'] as $para) {
                            $para_banner_arr[] = $para['value'];
                        }
                    }

                    $banner_entities = entity_load('paragraphs_item', $para_banner_arr);
                    $paragraphs_banner_render = entity_view('paragraphs_item', $banner_entities, false);

                    foreach ($paragraphs_banner_render['paragraphs_item'] as $key => $para_banner) {
                        if(file_exists((drupal_get_path('theme', 'jointadvisory') . '/contentsections/' . $para_banner['#entity']->bundle . '.php'))){
                            include(drupal_get_path('theme', 'jointadvisory') . '/contentsections/' . $para_banner['#entity']->bundle . '.php');
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</section>