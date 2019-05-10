<section class="main-section">
    <div class="article-wrapper">
        <div class="container indent-section">
            <div class="row article-row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class=" article-content"><br> 
                        <div class="category dark styled-links">
                            <h6>Redirecting to payment page. If nothing happens please click the button below.</h6>
                        </div>
                        <div class="title">
                        	<form id="paypal-redirect" action="<?php echo $paypalUrl ?>" method="POST">
                        		<input type="hidden" name="cmd" value="_cart">
                        		<input type="hidden" name="upload" value="1">
                        		<input type="hidden" name="no_shipping" value="1">
						        <?php
							        foreach ($data as $a => $b) {
							            echo "<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."' />";
							        }
						        ?>
						        <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
					   		</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
	(function($){
		$(document).ready(function(){
			document.getElementById('paypal-redirect').submit();
		});
	})(jQuery);
</script>