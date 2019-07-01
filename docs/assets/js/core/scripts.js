/*   
	KBZPay Common script
*/

$('document').ready(function () {
    var trigger = $('#hamburger'),
        isClosed = true;

    trigger.click(function () {
        burgerTime();
    });

    function burgerTime() {
        if (isClosed == true) {
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = false;
            $('.sidebar').addClass('open');
        } else {
            trigger.removeClass('is-open');
            $('.sidebar').removeClass('open');
            trigger.addClass('is-close');
            isClosed = true;
        }
    }

});
$(document).ready(function () {
    $(".megamenu").on("click", function (e) {
        e.stopPropagation();
    });
});
 
var bone1;
$('#wave-1').wavify({
    height: 120,
    amplitude: 15,
    speed: 0.155,
    bones: bone1,
    color: 'rgba(21, 94, 99, 1)'
});  
$('#wave-3').wavify({
    height: 120,
    amplitude: 15,
    speed: 0.155,
    bones: bone1,
    color: 'rgba(21, 94, 99, 1)'
}); 
$('#banner-wave').wavify({
    height: 120,
    amplitude: 15,
    speed: 0.155,
    bones: bone1,
    color: '#FFF'
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


// Pathway div toggles
let pathwayToggles = $('.pathway-step-toggle');
pathwayToggles.on('click', function () {
    const pathwayStepTarget = $($(this).data('toggle'));
    pathwayStepTarget.toggleClass('open');
    $(this).text(($(this).text() == "Learn More" ? "Close" : "Learn More"));
});


$.fn.moveIt = function () {
    var $window = $(window);
    var instances = [];

    $(this).each(function () {
        instances.push(new moveItItem($(this)));
    });

    window.addEventListener('scroll', function () {
        var scrollTop = $window.scrollTop();
        instances.forEach(function (inst) {
            inst.update(scrollTop);
        });
    }, { passive: true });
}

var moveItItem = function (el) {
    this.el = $(el);
    this.speed = parseInt(this.el.attr('data-scroll-speed'));
};

moveItItem.prototype.update = function (scrollTop) {
    this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
};

// Initialization
$(function () {
    $('[data-scroll-speed]').moveIt();
});