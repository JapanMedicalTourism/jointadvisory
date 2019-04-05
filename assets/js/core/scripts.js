/*   
	KBZPay Common script
*/


$(document).ready(function () {
    $(".megamenu").on("click", function (e) {
        e.stopPropagation();
    });
});
 

var mobile_breakpoint = 768;
var mobile_xs_breakpoint = 660;

$(document).ready(function() {
    setTimeout(function() {
        $('body').fadeIn();
    }, 100);
});


/*
	Mobile nav helper
*/
var scrollTop = $(window).scrollTop();
if($(window).width() < mobile_breakpoint){
	$(window).on('scroll', function(){ 
		if($(window).scrollTop() > 300){
			$('body.business .main-menu-bar').addClass('scrolled');
		}else{ 
			$('body.business .main-menu-bar').removeClass('scrolled');
		}
	});	
}

/*
	Desktop Megamenu 
*/
$(".megamenu").on("click", function(e) {
    e.stopPropagation();
});

/*
	Bootstrap Tooltip
*/
$(function() {
    $('[data-init="tooltip"]').tooltip();
});

/*
	Carousel Events
	- Used in general 
*/
$(function() {
    $('.business-feature-slick').slick({
        slideToShow: 1,
        arrows: false
    });
    //Slick (Carousel)
    $('.slick-welcome').slick({
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        waitForAnimate: false,
        dots: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="./assets/img/icons/noun-arrow-left.png" alt="Scroll to previous image" /></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="./assets/img/icons/noun-arrow-right.png" alt="Scroll to next image" /></button>'
    });
    $('.slick-single').slick({
        speed: 700,
        waitForAnimate: false,
        dots: false,
        arrows: false
    });
});

/* 
	KBZ Form Scripts 
	- Used in general form, contact-us
*/
function checkValue(element) {
    // check if the input has any value (if we've typed into it)
    if ($(element).val())
        $(element).addClass('has-value');
    else
        $(element).removeClass('has-value');
}

$(document).ready(function() {
    // Run on page load
    $('.form-control').each(function() {
            checkValue(this);
        })
        // Run on input exit
    $('.form-control').blur(function() {
        checkValue(this);
    });

});
$('#contact-us-form').on('submit', function(e) {
    e.preventDefault();
    $('#thankyou-modal').modal("show");
});

 

/*
	Mobile Nav Menu Trigger
	- Used in general
*/
$(document).ready(function() {
    $('#mobile-nav-menu-trigger').click(function() {
        $(this).toggleClass('open');
        $('#mobile-nav').toggleClass('open');
    });
});

/*
	Mobile ShareGroup Trigger
	- Used in general
*/
$(document).ready(function() {
    var stickyShare__ = $('#sticky-share');
    var stickyShare__close = $('#close-share-group');
    var stickyShare__open = $('#open-share-group');
    stickyShare__open.click(function() {
        $(this).toggleClass('active-cta');
        stickyShare__close.toggleClass('active-cta');
        stickyShare__.toggleClass('open');
    });
    stickyShare__close.click(function() {
        $(this).toggleClass('active-cta');
        stickyShare__open.toggleClass('active-cta');
        stickyShare__.toggleClass('open');
    });
});

/*
	Full width video 
	- autoplays an embedded YouTube video
	- Used in personal, business, agent
*/
$('.videoplay').on('click', function() {
    $(".youtube-video").fadeIn();
    $(".video-placeholder").fadeOut();
    $(".youtube-video")[0].src += "&autoplay=1";
});

/* 
	Accordion Title 
	- this event injects ID of the main (adjacent) accordion div;  for the scrollspy bs js
	- Used in general
*/
$(function() {
    $('.accordion-title').each(function(index, element) {
        $(this).attr('id', $(this).next().attr('id') + '__title');
    });
});


/*
    Accordion FAQ helper
    - Repositions scroll when user opens accordion card
*/
$(function(){
    $(".faq-accordion .card > .card-header").on('click', function(event) {
        // alert(this.hash); 
        var self = $(this);
        setTimeout(function(){
            if (this.hash !== "") { 
            console.log(self.attr('id'));
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $('#' + self.attr('id')).offset().top - 170
                }, 800, function(){ 
                // window.location.hash = hash; 
            });
         }
     }, 300);
     });
});
/*
	Duplicate Dropdown block component
	- duplicates an existing static anchor list
	i.e. consecutive <a> tags to a dropdown menu 
	by adding [data-dropdown-mobile-duplicate] attribute
	to the parent container of the anchor list
	- Used in faq-personal/faq-business for mobile
*/
$(function() {
    $('[data-dropdown-mobile-duplicate]').each(function(index, element) {
        var dropdown_mobile = "data-dropdown-mobile-duplicate";
        var dropdown_target = $(this).attr(dropdown_mobile);
        var dropdown_target_menu = $(this).attr(dropdown_mobile) + ' + .dropdown-menu';
        //Clone inner html to dropdown
        $(dropdown_target_menu).html($(this).html());
        //Replace old classes / label
        $(dropdown_target_menu + " > a").removeClass().addClass('dropdown-item');
        $(dropdown_target).html($(dropdown_target_menu + " > a:first-child").text());
        $(dropdown_target_menu + " > a:first-child").addClass('active');
        //Bind click event stuff
        $(dropdown_target_menu + " > a").on('click', function() {
            $(dropdown_target_menu + " > a").removeClass('active');
            $(this).addClass('active');
            $(dropdown_target).html($(this).text());
        });

        //Reinit smooth scroll on mobile
        // alert(dropdown_target + " + .dropdown-menu a ");
        $(dropdown_target + " + .dropdown-menu a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 200
                    }, 800, function(){
                    // window.location.hash = hash; 
                });
             }
         });
        //
        $(window).scroll(function(e){
            if($('[data-dropdown-mobile-duplicate] a.active').text()){
                $(dropdown_target).text($('[data-dropdown-mobile-duplicate] a.active').text());
            }else{
                 $(dropdown_target).text($('[data-dropdown-mobile-duplicate] a:first-child').text());
            }
            
        });
        //
    });
});

/*
	KBZ Custom Dropdown Helper
	- Used in agent-locator
*/
$('.locator-search .dropdown-menu > .dropdown-item').on('click', function(){
	var txt = $(this).text();
	$(this).closest('button').text(txt);
	//Fill Input
	$('.kbz-locator input').val(txt);
	$('.kbz-locator input').autofocus;
	//Manage other elements
	$('.kbz-input').parent().removeClass('focused');
	setLocatorPane('show');
	seekLocation(txt);
});

/*
	KBZ Custom Input Helper
	- Used in agent-locator
*/
$('.kbz-input').on('focus', function(event) {
    $(this).parent().addClass('focused');
    event.stopPropagation(); 
});
$('.kbz-input').one('focus', function(event) { 
    getLocation();
});
$('.kbz-locator > a').on('click', function(){
	getLocation();
});
$('.locator-search .dropdown-item, .locator-sear .map-locations, .locator-container:not(.locator-search)').on('click focus', function(event) {
    setTimeout(function(){
    	$('.kbz-input').parent().removeClass('focused');
    }, 300);
});
$('.map-locations').iframeTracker({
    blurCallback: function() {
        $('.kbz-input').parent().removeClass('focused');
    }
});
$('.kbz-input').on('focus keyup change paste click',function(){
    seekLocation($(this).val());
});
$('.kbz-input').on('keyup change',function(){
    seekLocation($(this).val());
    setLocatorPane('show');
});


function seekLocation($val){
	$('.location-item').hide();
	$('.location-none').remove();
    var txt = $val;
    var counter_agent = 0;
    var counter_merchant = 0;
    $('.locator-agent-list .location-item').each(function(){
       if($(this, 'b').text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
           counter_agent++;
       } 
    });
    $('.locator-merchant-list .location-item').each(function(){
       if($(this, 'b').text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
           counter_merchant++;
       } 
    });
    if(counter_agent == 0){
    	var msg = '<a class="kbz-location location-none"><div class="location-item">'+
              '  <b>No location found.</b>'+
              '  <p>Sorry, your search yielded no results.</p>'+ 
              '</div></a>';
    	$('.locator-agent-list .kbz-location:last-child').after(msg);	 
    }
    if(counter_merchant == 0){
    	var msg = '<a class="kbz-location location-none"><div class="location-item location-none">'+
              '  <b>No location found.</b>'+
              '  <p>Sorry, your search yielded no results.</p>'+ 
              '</div></a>';
    	$('.locator-merchant-list .kbz-location:last-child').after(msg);	 
    }
}

/*
	Locator Tabs for mobile
	- Used in agent-locator
*/
if ($(window).width() < mobile_breakpoint) {
    $(".locator-tabs .nav-link").click(function() {
         setLocatorPane('show');  
    });
}
$('.locator-handle').on('click', function() {
    $(this).parent().addClass('locator-hidden');
});
$(function() {
    var count = 0;
    $(".locator-handle").swipe({
        swipeDown: function(event, direction, distance, duration, fingerCount) {
           setLocatorPane('hide');
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold: 50,
        allowPageScroll: 'vertical'
    });
    
});

/*
	Geolocation Helper
	- Used in kbz-locator
*/
function getLocation() {
    if ("geolocation" in navigator) {
        //Check geolocation available 
        //Try to get user current location using getCurrentPosition() method 
        
        if($(window).width() < mobile_breakpoint){
	    	$('.locator-main').addClass('locator-hidden');
	    } 
        navigator.geolocation.getCurrentPosition(function(position) { 
        	$('.frame_overlap').fadeIn();
            console.info("KBZPay: Found your location \nLat : " + position.coords.latitude + " \nLang :" + position.coords.longitude);
            $('.kbz-locator').addClass('pulse'); 
            $('.map-locations').attr('src', 'http://maps.google.com/maps?q=' + position.coords.latitude + ', ' + position.coords.longitude + '&z=15&output=embed');
            setTimeout(function(){
            	$('.frame_overlap').fadeOut();
            }, 1000);
 
        });
    } else {
        console.warn("KBZPay: Browser doesn't support geolocation!");
    }
}

/*
	KBZ Locator Helper
*/
$('.kbz-location').on('click', function() {
    var longitude = $(this).data('longitude'),
        latitude = $(this).data('latitude');
    $('.frame_overlap').fadeIn();
    if($(window).width() < mobile_breakpoint){
    	$('.locator-main').addClass('locator-hidden');
    }
    $('.map-locations').attr('src', 'http://maps.google.com/maps?q=' + latitude + ', ' + longitude + '&z=15&output=embed');
    $('.map-locations').on('load', function() {
        $('.frame_overlap').fadeOut();
    });
});

function setLocatorPane(type){
	if(type == "hide"){
		$('.locator-handle').parent().addClass('locator-hidden');
	}else{
		$('.locator-handle').parent().removeClass('locator-hidden');
	}
	
}


/*
    FAQ Dropdown helper
*/
$(document).ready(function () { 
     $(".faq-group a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 100
                }, 800, function(){ 
            });
         }
     });
});

$(function() {
    if($(window).width() <= mobile_breakpoint){ 
        var scroll = $(window).scrollTop();
        if(scroll > 144){
            $('.faq-dropdown').addClass('fixed-nav-dropdown');
        }else{
            $('.faq-dropdown').removeClass('fixed-nav-dropdown'); 
        }
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            // console.log(scroll);
            if(scroll > 144){
                $('.faq-dropdown').addClass('fixed-nav-dropdown');
            }else{
                $('.faq-dropdown').removeClass('fixed-nav-dropdown'); 
            }
        });
        
        //trigger the scroll
        $(window).scroll();//ensure if you're in current position when page is refreshed
    }
})
// Read a page's GET URL variables and return them as an associative array.
function getParam(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}