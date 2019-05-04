<?php  
	$facebook = $para_banner['#entity']->field_facebook['und'][0]['url'];
	$twitter = $para_banner['#entity']->field_twitter['und'][0]['url'];
	$linkedin = $para_banner['#entity']->field_linkedin['und'][0]['url'];
?>

<div class="col-lg-3">
    <div class="article-content styled-links dark">
        <a><span class="category">Connect</span></a>
    </div>
    <div class="vertical-link-list dark">
    	<?php if($facebook){ ?>
        	<a href="<?php echo $facebook; ?>"><img src="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/icons/facebook.svg" height="25px" alt=""> Facebook</a>
    	<?php } ?>

        <?php if($twitter){ ?>
        	<a href="<?php echo $twitter; ?>"><img src="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/icons/twitter.svg" height="25px" alt=""> Twitter</a>
    	<?php } ?>

    	<?php if($linkedin){ ?>
        	<a href="<?php echo $linkedin; ?>"><img src="<?php echo base_path() . drupal_get_path('theme', 'jointadvisory'); ?>/assets/img/icons/linkedin.svg" height="25px" alt=""> LinkedIn</a>
    	<?php } ?>
    </div>
</div>