PLCJ = jQuery.noConflict();
jQuery(document).ready(function () {
	if (typeof(plcModuleIds) != 'undefined') {
		for (var i = 0; i < plcModuleIds.length; i++) {
			jQuery('#plcontentslider' + plcModuleIds[i]).css("direction", "ltr");
			jQuery('#plcontentslider' + plcModuleIds[i]).fadeIn("fast");
			
			if(plcModuleOpts[i].width=='auto'){
				jQuery('#plcontentslider' + plcModuleIds[i] + ' .slide').width(jQuery('#plcontentslider' + plcModuleIds[i] + ' .slide').width());
			}
			
			PLCJ('#plcontentslider' + plcModuleIds[i]).slides(plcModuleOpts[i]);
			if (jQuery("html").css("direction") == "rtl") {
				jQuery('#plcontentslider' + plcModuleIds[i] + ' .slides_control').css("direction", "rtl");
			}
		}
	}
	jQuery('img.hovereffect').hover(function () {
		jQuery(this).stop(true).animate({
			opacity : 0.5
		}, 300)
	}, function () {
		jQuery(this).animate({
			opacity : 1
		}, 300)
	})
})
