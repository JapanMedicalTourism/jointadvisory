<?php  
	function jointadvisory_preprocess_html(&$variables) {
		drupal_add_css(drupal_get_path('theme', 'jointadvisory') . '/assets/css/vendor/bootstrap.min.css', array('group' => CSS_DEFAULT, 'type' => 'file','rel'=>'stylesheet','media'=>'all'));
		drupal_add_css(drupal_get_path('theme', 'jointadvisory') . '/assets/css/vendor/slick.css', array('group' => CSS_DEFAULT, 'type' => 'file','rel'=>'stylesheet','media'=>'all'));
		drupal_add_css(drupal_get_path('theme', 'jointadvisory') . '/assets/css/vendor/slick-theme.css', array('group' => CSS_DEFAULT, 'type' => 'file','rel'=>'stylesheet','media'=>'all'));
		drupal_add_css(drupal_get_path('theme', 'jointadvisory') . '/assets/css/vendor/aos.css', array('group' => CSS_DEFAULT, 'type' => 'file','rel'=>'stylesheet','media'=>'all'));
		drupal_add_css(drupal_get_path('theme', 'jointadvisory') . '/assets/css/vendor/fontawesome/all.css', array('group' => CSS_DEFAULT, 'type' => 'file','rel'=>'stylesheet','media'=>'all'));
		drupal_add_css(drupal_get_path('theme', 'jointadvisory') . '/assets/css/main.css', array('group' => CSS_DEFAULT, 'type' => 'file','rel'=>'stylesheet','media'=>'all'));

		 // drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/core/jquery-3.3.1.min.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/vendor/popper.min.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/vendor/bootstrap.min.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/vendor/jquery.easing.compatibility.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/vendor/jquery.paroller.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/vendor/slick.min.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/vendor/aos.js');
		 drupal_add_js('https://vjs.zencdn.net/7.4.1/video.js');
		 drupal_add_js('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/vendor/wavify.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/core/splitline.js');
		 drupal_add_js(drupal_get_path('theme', 'jointadvisory') . '/assets/js/core/scripts.js');
	}

	function jointadvisory_js_alter(&$javascript) {
		$javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'jointadvisory') . '/assets/js/core/jquery-3.3.1.min.js';
	}

	function jointadvisory_preprocess_node(&$variables) {

	 	foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

		    if ($blocks = block_get_blocks_by_region($region_key)) {
		      	$variables['region'][$region_key] = $blocks;
		    }else {
		      	$variables['region'][$region_key] = array();
		    }
	  	}
	}
?>