jQuery(document).ready(function() {	
	
	var jQueryportfolioItem = jQuery('.gallery_entry');
	jQueryportfolioItem.find('.item_image').css('background-color','#fff');
	jQuery('.zoom-icon, .more-icon').css({'opacity':'0','visibility':'visible'});
	
	jQueryportfolioItem.hover(function(){
		jQuery(this).find('.item_image').stop(true, true).animate({top: -15}, 500).find('img.portfolio').stop(true, true).animate({opacity: 0.7},500);
		jQuery(this).find('.zoom-icon').stop(true, true).animate({opacity: 1, left: 12},400);
		jQuery(this).find('.more-icon').stop(true, true).animate({opacity: 1, left: 11},400);
	}, function(){
		jQuery(this).find('.zoom-icon').stop(true, true).animate({opacity: 0, left: 8},400);
		jQuery(this).find('.more-icon').stop(true, true).animate({opacity: 0, left: 12},400);
		jQuery(this).find('.item_image').stop(true, true).animate({top: 0}, 500).find('img.portfolio').stop(true, true).animate({opacity: 1},500);
	});
	
	var jQueryet_template_portfolio_thumb = jQuery('.et_pt_portfolio_entry');
	jQueryet_template_portfolio_thumb.hover(function(){
		jQuery(this).find('img').fadeTo('fast', 0.8);
		jQuery(this).find('.et_portfolio_more_icon,.et_portfolio_zoom_icon').fadeTo('fast', 1);
	}, function(){
		jQuery(this).find('img').fadeTo('fast', 1);
		jQuery(this).find('.et_portfolio_more_icon,.et_portfolio_zoom_icon').fadeTo('fast', 0);
	});
		
});