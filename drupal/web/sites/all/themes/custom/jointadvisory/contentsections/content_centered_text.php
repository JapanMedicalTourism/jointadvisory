<?php  
	$text = $para_banner['#entity']->field_text['und'][0]['value'];
?>

<section id="about-section" class="main-section">
    <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave wave-up white">
        <path id="banner-wave" d="">
    </svg>
    <div class="about-wrapper">
        <div class="container-fluid indent-section">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h1 class="animated-text about-header"><?php echo $text; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>