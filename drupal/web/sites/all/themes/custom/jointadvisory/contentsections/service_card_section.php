<?php  
	$para_banner2 = array();
	if (isset($para_banner['#entity']->field_service_card_item['und'])) {
        foreach ($para_banner['#entity']->field_service_card_item['und'] as $para2) {
            $para_banner_arr2[] = $para2['value'];
        }
    }

    $banner_entities2 = entity_load('paragraphs_item', $para_banner_arr2);
    $paragraphs_banner_render2 = entity_view('paragraphs_item', $banner_entities2, false);
?>

<section id="statistics-section" class="main-section">
	 <div class="statistics-wrapper">
        <div class="container-fluid indent-section">
			<div class="row">
				<?php 
					foreach ($paragraphs_banner_render2['paragraphs_item'] as $key => $para_banner2) {
						$image = file_create_url($para_banner2['#entity']->field_image['und'][0]['uri']);
					    $title = $para_banner2['#entity']->field_text_title['und'][0]['value'];
					    $description = $para_banner2['#entity']->field_description['und'][0]['value'];
					    $button_title = $para_banner2['#entity']->field_cta_button['und'][0]['title'];
					    $button_link = $para_banner2['#entity']->field_cta_button['und'][0]['url'];

					    $title = str_replace('<p>', '', $title);
                        $title = str_replace('</p>', '', $title);

                        $description = str_replace('<p>', '', $description);
                        $description = str_replace('</p>', '', $description);
				?>
		        <div class="col-lg-4">
		            <div class=" article-card service-card">
		                <div class="article-card__wrapper card__shadow--light"> 
		                    <div class="article-card__content article-content">
		                        <span class="category ">
		                            <img src="<?php echo $image; ?>" alt="">
		                        </span><br><br>
		                        <div class="title text-dark">
		                            <?php echo $title; ?>
		                        </div><br>
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
	</div>
</section>