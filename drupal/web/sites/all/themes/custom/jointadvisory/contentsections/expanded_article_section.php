<?php
    $image = file_create_url($para_banner['#entity']->field_image['und'][0]['uri']);
    $title = $para_banner['#entity']->field_title['und'][0]['value'];
    $description = $para_banner['#entity']->field_description['und'][0]['value'];
    $button_title = $para_banner['#entity']->field_cta_button['und'][0]['title'];
    $button_link = $para_banner['#entity']->field_cta_button['und'][0]['url'];
?>

<section id="expanded-article-section" class="main-section">
    <div class="article-wrapper">
        <div class="container-fluid indent-section">
            <div class="row article-row">
                <div class="col-md-12">
                    <div class="expanded-article-card article-card">
                        <div class="article-card__wrapper">
                            <a href="#">
                                <div class="article-card__thumbnail" style="background-image: url(<?php echo $image; ?>);"></div>
                            </a>
                            <div class="article-card__content article-content">
                                <div class="title">
                                    <?php echo $title; ?>
                                </div>
                                <div class="description styled-links dark">
                                    <?php echo $description; ?>
                                </div>
                                <a href="<?php echo $button_link; ?>" title="" class="link-re"><?php echo $button_title; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>