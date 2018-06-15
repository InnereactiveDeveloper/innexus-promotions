//Innexus Promotions Scripts
jQuery(document).ready(function($)
{
	function font_scale()
	{
		$promotion_line1 = $('.innexus-promotion-wrapper .innexus-promotion-line-1');
		
		if($promotion_line1.length > 0)
		{
			$desktop_size = $promotion_line1.data('desktop');
			$mobile_size = $promotion_line1.data('mobile');
			
			if($(document).outerWidth() > 1000)
			{
				//console.log($desktop_size);
				$promotion_line1.css('font-size', $desktop_size + 'px');
			}
			else
			{
				//console.log($mobile_size);
				$promotion_line1.css('font-size', $mobile_size + 'px');
			}
		}
	}
	
	
	//Resize Functions
	$(window).resize(function()
	{
		font_scale();
	});
});
