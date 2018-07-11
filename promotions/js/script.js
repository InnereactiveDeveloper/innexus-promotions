//Innexus Promotions Scripts
jQuery(document).ready(function($)
{
	function font_scale()
	{
		$promotion_line1 = $('.innexus-promotion-wrapper .innexus-promotion-line-1');
		$promotion_line2 = $('.innexus-promotion-wrapper .innexus-promotion-line-2');
		
		if($promotion_line1.length > 0)
		{
			$desktop_size1 = $promotion_line1.data('desktop');
			$mobile_size1 = $promotion_line1.data('mobile');
			$desktop_size2 = $promotion_line2.data('desktop');
			$mobile_size2 = $promotion_line2.data('mobile');
			
			if($(document).outerWidth() > 1000)
			{
				//console.log($desktop_size);
				$promotion_line1.css('font-size', $desktop_size1 + 'px');
				$promotion_line1.css('line-height', $desktop_size1 + 'px');
				$promotion_line2.css('font-size', $desktop_size2 + 'px');
				$promotion_line2.css('line-height', $desktop_size2 + 'px');
			}
			else
			{
				//console.log($mobile_size);
				$promotion_line1.css('font-size', $mobile_size1 + 'px');
				$promotion_line1.css('line-height', $mobile_size1 + 'px');
				$promotion_line2.css('font-size', $mobile_size2 + 'px');
				$promotion_line2.css('line-height', $mobile_size2 + 'px');
			}
		}
	}
	
	//Fire script on load
	font_scale();
	//$('.innexus-promotion-line-container').boxfit({multiline: true, maximum_font_size: 35, align_center: false});
	
	//Resize Functions
	$(window).resize(function()
	{
		font_scale();
		//$('.innexus-promotion-line-container').boxfit({multiline: true, maximum_font_size: 35, align_center: false});
	});
});
