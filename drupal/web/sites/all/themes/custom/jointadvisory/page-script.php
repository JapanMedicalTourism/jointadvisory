<script type="text/javascript">
	(function($){
		$(function () {
			AOS.init({
				offset: 0, // offset (in px) from the original trigger point
				delay: 0, // values from 0 to 3000, with step 50ms
				duration: 500, // values from 0 to 3000, with step 50ms 
				once: true, // whether animation should happen only once - while scrolling down 
				});
			});

			$(window).on('load', function () {
				AOS.refresh();
			});

			$('.animated-text').each(function () {
				new SplitLine(this);
			});

			var featured_ch = false;
			var news_ch = false;
			var register_ch = false;
			$(window).on('scroll load', function () {
				if (featured_ch == false) {
					$('.feature-animate-text').css('opacity', 0);
				}
				if ($('#featured-section .section-title').is(':visible')) {
					if (featured_ch == false) {
						setTimeout(function () {
							$('.feature-animate-text').each(function () {
								$(this).css('opacity', 1);
								if ($(this).is(':visible')) {
									new SplitLine(this);
								}
							});
						}, 500);
						featured_ch = true;
					}
				}
				if (news_ch == false) {
					$('.news-animate-text').css('opacity', 0);
				}
				if ($('#news-section .news-row').is(':visible')) {
					if (news_ch == false) {
						setTimeout(function () {
							$('.news-animate-text').each(function () {
								$(this).css('opacity', 1);
								if ($(this).is(':visible')) {
									new SplitLine(this);
								}
							});
						}, 500);
						news_ch = true;
					}
				}
				if (register_ch == false) {
					$('.register-animate-text').css('opacity', 0);
				}
				if ($('#register-section .article-content').is(':visible')) {
					if (register_ch == false) {
						setTimeout(function () {
							$('.register-animate-text').each(function () {
								$(this).css('opacity', 1);
								if ($(this).is(':visible')) {
									new SplitLine(this);
								}
							});
						}, 500);
						register_ch = true;
					}
				}
			});

			$(document).ready(function () {
				$('.single-item').slick({
					infinite: true,
					arrows: false,
					dots: true,
					autoplay: true,
					autoplaySpeed: 8000,
					cssEase: 'cubic-bezier(0.215, 0.620, 0.110, 0.840)',
				});
			});

			(function () {
				'use strict';
				window.addEventListener('load', function () {
					// Fetch all the forms we want to apply custom validation styles to
					var forms = document.getElementsByClassName('needs-validation');
					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function (form) {
						form.addEventListener('submit', function (event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();
	})(jQuery);
</script>