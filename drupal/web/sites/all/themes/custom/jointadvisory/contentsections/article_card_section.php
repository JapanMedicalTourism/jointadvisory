<?php  
    $para_banner_arr2 = array();
    if (isset($para_banner['#entity']->field_article_card_item['und'])) {
        foreach ($para_banner['#entity']->field_article_card_item['und'] as $para2) {
            $para_banner_arr2[] = $para2['value'];
        }
    }

    $banner_entities2 = entity_load('paragraphs_item', $para_banner_arr2);
    $paragraphs_banner_render2 = entity_view('paragraphs_item', $banner_entities2, false);
?>

<section id="article-about-section" class="main-section">
    <div class="article-wrapper">
        <div class="container-fluid indent-section">
            <div class="row article-row">
                <?php  
                    foreach ($paragraphs_banner_render2['paragraphs_item'] as $key => $para_banner2) {
                        $image = file_create_url($para_banner2['#entity']->field_banner['und'][0]['uri']);
                        $category = $para_banner2['#entity']->field_category['und'][0]['value'];
                        $title = $para_banner2['#entity']->field_title['und'][0]['value'];
                        $description = $para_banner2['#entity']->field_description['und'][0]['value'];
                        $button_title = $para_banner2['#entity']->field_cta_button['und'][0]['title'];
                        $button_link = $para_banner2['#entity']->field_cta_button['und'][0]['url'];
                ?>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class=" article-card">
                        <div class="article-card__wrapper card__shadow--light">
                            <a href="#">
                                <div class="article-card__thumbnail" style="background-image: url(<?php echo $image; ?>);"></div>
                            </a>
                            <div class="article-card__content article-content">
                                <span class="category ">
                                    <?php echo $category; ?>
                                </span>
                                <div class="title">
                                    <?php echo $title; ?>
                                </div>
                                <div class="description">
                                    <?php echo $description; ?>
                                </div>
                                <a href="<?php echo $button_link; ?>" title="" class="link-re"><?php echo $button_title; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php } ?>
            </div>
        </div>
</section>