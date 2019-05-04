<?php  
	$banner_image = file_create_url($node->field_banner['und'][0]['uri']);
?>

<section id="fixed-banner" class="fixed-banner" style="background-image: url(<?php echo $banner_image ?>);"></section>

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