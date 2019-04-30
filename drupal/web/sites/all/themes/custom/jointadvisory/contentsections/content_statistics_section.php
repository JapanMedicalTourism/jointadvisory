<?php  
    $title = $para_banner['#entity']->field_title['und'][0]['value'];

    $para_banner_arr2 = array();
    if (isset($para_banner['#entity']->field_statistics_items['und'])) {
        foreach ($para_banner['#entity']->field_statistics_items['und'] as $para2) {
            $para_banner_arr2[] = $para2['value'];
        }
    }

    $banner_entities2 = entity_load('paragraphs_item', $para_banner_arr2);
    $paragraphs_banner_render2 = entity_view('paragraphs_item', $banner_entities2, false);

    $button_title = $para_banner['#entity']->field_cta_button['und'][0]['title'];
    $button_link = $para_banner['#entity']->field_cta_button['und'][0]['url'];
?>

<section id="about-section" class="main-section">
    <div class="register-wrapper">
        <div class="container-fluid indent-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title centered gradient-1"><?php echo $title; ?></div>
                </div>
            </div>
            <div class="stats-row">
                <?php 
                    foreach ($paragraphs_banner_render2['paragraphs_item'] as $key => $para_banner2) {
                        $stat = $para_banner2['#entity']->field_number['und'][0]['value'];
                        $description1 = $para_banner2['#entity']->field_description_1['und'][0]['value'];
                        $description2 = $para_banner2['#entity']->field_description_2['und'][0]['value'];

                        $description1 = str_replace('<p>', '', $description1);
                        $description1 = str_replace('</p>', '', $description1);

                        $description2 = str_replace('<p>', '', $description2);
                        $description2 = str_replace('</p>', '', $description2);
                ?>
                <div class="stats-card">
                    <h1 class="stats-title gradient-1"><?php echo $stat; ?></h1>
                    <h2 class="stats-desc gradient-1"><?php echo $description1; ?></h2>
                    <small class="stats-sub"><?php echo $description2; ?></small>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="<?php echo $button_link; ?>" title="" class="link-re"><?php echo $button_title ?></a>
                </div>
            </div>
        </div>
    </div>
</section>