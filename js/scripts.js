$(document).ready(function(){
	$(window).on('load', function(){
		$('.loader').hide();
	});
	$('#webticker').webTicker();
	//$('.coverflow').coverflow();
	$(function() {
		if ($.fn.reflect) {
			$('.coverflow .cover').reflect();	// only possible in very specific situations
		}

		$('.home.coverflow').coverflow({
			index:			6,
			density:		2,
			innerOffset:	50,
			innerScale:		.7,
			animateStep:	function(event, cover, offset, isVisible, isMiddle, sin, cos) {
				if (isVisible) {
					if (isMiddle) {
						$(cover).css({
							'filter':			'none',
							'-webkit-filter':	'none'
						});
					} else {
						var brightness	= 1 + Math.abs(sin),
							contrast	= 1 - Math.abs(sin),
							filter		= 'contrast('+contrast+') brightness('+brightness+')';
						$(cover).css({
							'filter':			filter,
							'-webkit-filter':	filter
						});
					}
				}
			}
		});
		$('.events.coverflow').coverflow({
			index:			1,
			density:		2,
			innerOffset:	50,
			innerScale:		.7,
			animateStep:	function(event, cover, offset, isVisible, isMiddle, sin, cos) {
				if (isVisible) {
					if (isMiddle) {
						$(cover).css({
							'filter':			'none',
							'-webkit-filter':	'none'
						});
					} else {
						var brightness	= 1 + Math.abs(sin),
							contrast	= 1 - Math.abs(sin),
							filter		= 'contrast('+contrast+') brightness('+brightness+')';
						$(cover).css({
							'filter':			filter,
							'-webkit-filter':	filter
						});
					}
				}
			}
		});
	});
	$('.tabs').tabulous({
		effect: 'scale'
	});
});