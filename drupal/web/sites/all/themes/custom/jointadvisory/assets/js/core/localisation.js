/*Language Detection*/
var lang 	= getParam('lang'),
	pageURL = 'assets/lang/localisation_';
if(lang == null){
	lang = 'en';
}
if(page == 'personal' || page == 'business'){
	pageURL += page + '.xml';
	console.log('Executing ' + pageURL + ' Lang: '+ lang);
}
$(function() { 
	$('.select-lang-group > div').removeClass('active');
	$('#lang_'+lang).addClass('active');
    $('body').addClass('lang_' + lang);
	$.get( pageURL, function( xml ) {
	  	$(xml).find('translation').each(function(){
            var selector 	= $(this).attr('selector'),
            	input		= $(this).attr('type');
            var str 		= $(this).find(lang).text(); 
            if(input){
            	$(selector).addClass('lang_'+lang); 
            	$(selector + ' label').html(str); 
            	$(selector + ' input').attr('placeholder', str); 
            }else{
            	$(selector).addClass('lang_'+lang).html(str); 
            }
        });
	}); 
	// Common localisation to elements
	$.get( 'assets/lang/localisation_commons.xml', function( xml ) {
	  	$(xml).find('translation').each(function(){ 
            var selector    = $(this).attr('selector'),
                input       = $(this).attr('type');
            var str         = $(this).find(lang).text(); 
            if(input){
                $(selector).addClass('lang_'+lang); 
                $(selector + ' label').html(str); 
                $(selector + ' input').attr('placeholder', str); 
                $(selector + ' textarea').attr('placeholder', str); 
            }else{
                $(selector).addClass('lang_'+lang).html(str); 
            }
        });
	}); 
});