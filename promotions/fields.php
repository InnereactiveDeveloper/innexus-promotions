<?php
/**
 * Innexus Module - Promotions
 *
 * Innexus Promotions Fields and Settings
 *
 * @since   1.0.0
 * @package XPRO
 */

//Add Site Settings Option Page for ACF use
if( function_exists('acf_add_options_page') )
{
    
    //Add Promotions Option Page for ACF use
    $option_page1 = acf_add_options_page(array(
        'page_title'     => 'Promotions',
        'menu_title'     => 'Promotions',
        'menu_slug'     => 'promotions',
        'icon_url' 		=> 'dashicons-calendar-alt',
        'capability'     => 'edit_posts',
        'redirect'     => false
    ));
}

//Promotions
if( function_exists('acf_add_local_field_group') )
{
acf_add_local_field_group(array(
	'key' => 'group_5a09dcfe7e868',
	'title' => 'Promotions',
	'fields' => array(
		array(
			'key' => 'field_5a09dd6e1f1bd',
			'label' => 'Quarter 1',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5a09e12882bff',
			'label' => 'Active Timeframe',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Will display during January, February, and March.',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5a09dd051f1ba',
			'label' => 'Quarter 1 Promotion Image',
			'name' => 'q1_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5a09dd5f1f1bc',
			'label' => 'Quarter 1 Promotion Link',
			'name' => 'q1_link',
			'type' => 'text',
			'instructions' => 'Where the promotion will link to.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a09dd4b1f1bb',
			'label' => 'Quarter 1 Promotion Line 1',
			'name' => 'q1_line_1',
			'type' => 'textarea',
			'instructions' => 'Large text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b1f1bc',
			'label' => 'Quarter 1 Promotion Line 2',
			'name' => 'q1_line_2',
			'type' => 'textarea',
			'instructions' => 'Smaller text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b1f1bd',
			'label' => 'Quarter 1 Promotion Extended Content',
			'name' => 'q1_extended_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear below the promotion for extended information',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09ddac1f1be',
			'label' => 'Quarter 2',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5a09e15b82c00',
			'label' => 'Active Timeframe',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Will display during April, May, and June.',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5a09ddb41f1bf',
			'label' => 'Quarter 2 Promotion Image',
			'name' => 'q2_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5a09dd5f2f1bc',
			'label' => 'Quarter 2 Promotion Link',
			'name' => 'q2_link',
			'type' => 'text',
			'instructions' => 'Where the promotion will link to.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a09dd4b2f1bb',
			'label' => 'Quarter 2 Promotion Line 1',
			'name' => 'q2_line_1',
			'type' => 'textarea',
			'instructions' => 'Large text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b2f1bc',
			'label' => 'Quarter 2 Promotion Line 2',
			'name' => 'q2_line_2',
			'type' => 'textarea',
			'instructions' => 'Smaller text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b2f1bd',
			'label' => 'Quarter 2 Promotion Extended Content',
			'name' => 'q2_extended_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear below the promotion for extended information',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09df791f1c2',
			'label' => 'Quarter 3',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5a09e16e82c01',
			'label' => 'Active Timeframe',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Will display during July, August, and September.',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5a09df881f1c4',
			'label' => 'Quarter 3 Promotion Image',
			'name' => 'q3_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5a09dd5f3f1bc',
			'label' => 'Quarter 3 Promotion Link',
			'name' => 'q3_link',
			'type' => 'text',
			'instructions' => 'Where the promotion will link to.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a09dd4b3f1bb',
			'label' => 'Quarter 3 Promotion Line 1',
			'name' => 'q3_line_1',
			'type' => 'textarea',
			'instructions' => 'Large text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b3f1bc',
			'label' => 'Quarter 3 Promotion Line 2',
			'name' => 'q3_line_2',
			'type' => 'textarea',
			'instructions' => 'Smaller text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b3f1bd',
			'label' => 'Quarter 3 Promotion Extended Content',
			'name' => 'q3_extended_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear below the promotion for extended information',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09df821f1c3',
			'label' => 'Quarter 4',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5a09e17e82c02',
			'label' => 'Active Timeframe',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Will display during October, November, and December.',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5a09dfa81f1c7',
			'label' => 'Quarter 4 Promotion Image',
			'name' => 'q4_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5a09dd5f4f1bc',
			'label' => 'Quarter 4 Promotion Link',
			'name' => 'q4_link',
			'type' => 'text',
			'instructions' => 'Where the promotion will link to.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a09dd4b4f1bb',
			'label' => 'Quarter 4 Promotion Line 1',
			'name' => 'q4_line_1',
			'type' => 'textarea',
			'instructions' => 'Large text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b4f1bc',
			'label' => 'Quarter 4 Promotion Line 2',
			'name' => 'q4_line_2',
			'type' => 'textarea',
			'instructions' => 'Smaller text located on the image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5a09dd4b4f1bd',
			'label' => 'Quarter 4 Promotion Extended Content',
			'name' => 'q4_extended_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear below the promotion for extended information',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'promotions',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

};

//Shortcode
if( function_exists('acf_add_local_field_group') )
{
	function promotions_func( $atts, $content = "" ) 
	{
		//store our incoming variable, default to 0 if nothing is set
		$date = date('n');
		$q = '';
		
		if(!empty($type))
		{
			$type = $type;
		}
		else
		{
			$type = 'wide';
		}
		
		//Determine Which quarter we're in
		if($date == 1 || $date == 2 || $date == 3)
		{
			$q = 'q1';
		}
		else if ($date == 4 || $date == 5 || $date == 6)
		{
			$q = 'q2';
		}
		else if ($date == 7 || $date == 8 || $date == 9)
		{
			$q = 'q3';
		}
		else if ($date == 10 || $date == 11 || $date == 12)
		{
			$q = 'q4';
		}
		else
		{
			echo 'You broke something. How did you get here?';
		}
		
		$image 		= get_field($q . '_image', 'option');
		$image 		= $image['sizes']['large'];
		$line1 		= get_field($q . '_line_1', 'option');
		$line2 		= get_field($q . '_line_2', 'option');
		$content 	= get_field($q . '_extended_content', 'option');
		$link 		= get_field($q . '_link', 'option');
	
		echo '<div class="innexus-promotion-wrapper '.$type.'">';
			
			//Wrap the full promotion in a link
			echo '<a href="'.$link.'">';
				echo '<div class="innexus-promotion-container">';
					
					//Keep the lines wrapped so we can easily shift the content around
					echo '<div class="innexus-promotion-line-container">';
						echo '<div class="innexus-promotion-line-1">'.$line1.'</div>';
						echo '<div class="innexus-promotion-line-2">'.$line2.'</div>';
					echo '</div>';
					
					echo '<img src=" '.$image.'" title="'.$line1.' alt="'.$line1.'"/>';
				echo '</div>';
			echo '</a>';
			
			//Keep extended content below the promotion
			echo '<div class="innexus-promotion-extended-content">';
				echo $content;
			echo '</div>';
		echo '</div>';
	}
	
	add_shortcode( 'promotions', 'promotions_func' );
}
