<?php  
	$image = file_create_url($para_banner['#entity']->field_image['und'][0]['uri']);
?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <img src="<?php echo $image; ?>" alt="" width="100%" style="vertical-align:middle;">
</div>