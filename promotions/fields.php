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
			'key' => 'field_5a09fd6e1f1bd',
			'label' => 'Universal Settings',
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
			'key' => 'field_5b1eueb40215b',
			'label' => 'Force Quarter',
			'name' => 'force_quarter',
			'type' => 'button_group',
			'instructions' => 
				'Forces a quarter to be active regardless of the current date to allow for review of placed promotions.
				<br>
				<br> Q1 - Jan, Feb, Mar. 
				<br> Q2 - Apr, May, Jun. 
				<br> Q3 - Jul, Aug, Sep. 
				<br> Q4 - Oct, Nov, Dec. 
				<br>
				<br> ALWAYS set this toggle back to <strong>Auto</strong> when done testing!',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'auto' => 'Auto',
				'q1' => 'Q1',
				'q2' => 'Q2',
				'q3' => 'Q3',
				'q4' => 'Q4',
			),
			'allow_null' => 0,
			'default_value' => 'none',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
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
			'key' => 'field_5b1e7eb40215b',
			'label' => 'Text Position',
			'name' => 'q1_text_position',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top-left' => 'Top Left',
				'middle-left' => 'Middle Left',
				'bottom-left' => 'Bottom Left',
				'top-right' => 'Top Right',
				'middle-right' => 'Middle Right',
				'bottom-right' => 'Bottom Right',
			),
			'allow_null' => 0,
			'default_value' => 'middle-left',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5b1e7fbf0215c',
			'label' => 'Image Style',
			'name' => 'q1_image_style',
			'type' => 'button_group',
			'instructions' => 'Controls whether the content is full width, or held to one side',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'rectangle' => 'Rectangle',
				'square' => 'Square',
			),
			'allow_null' => 0,
			'default_value' => 'rectangle',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
			'key' => 'field_5b111eb40245b',
			'label' => 'Link Target',
			'name' => 'q1_link_target',
			'type' => 'button_group',
			'instructions' => 'Controls whether the link opens in a new tab, or the current tab',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'current' => 'Current',
				'new' => 'New'
			),
			'allow_null' => 0,
			'default_value' => 'current',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
				'width' => '50',
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
			'key' => 'field_5b1e8ffb738ad',
			'label' => 'Line 1 Size',
			'name' => 'q1_line_1_size',
			'type' => 'range',
			'instructions' => 'Default: 30px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 30,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e8ffb738a1',
			'label' => 'Line 1 Color',
			'name' => 'q1_line_1_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
				'width' => '50',
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
			'key' => 'field_5b1e9033738ae',
			'label' => 'Line 2 Size',
			'name' => 'q1_line_2_size',
			'type' => 'range',
			'instructions' => 'Default: 18px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 18,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e9543a3431',
			'label' => 'Line 2 Color',
			'name' => 'q1_line_2_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
			'key' => 'field_5b1e7eb40225b',
			'label' => 'Text Position',
			'name' => 'q2_text_position',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top-left' => 'Top Left',
				'middle-left' => 'Middle Left',
				'bottom-left' => 'Bottom Left',
				'top-right' => 'Top Right',
				'middle-right' => 'Middle Right',
				'bottom-right' => 'Bottom Right',
			),
			'allow_null' => 0,
			'default_value' => 'middle-left',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5b1e7fbf0225c',
			'label' => 'Image Style',
			'name' => 'q2_image_style',
			'type' => 'button_group',
			'instructions' => 'Controls whether the content is full width, or held to one side',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'rectangle' => 'Rectangle',
				'square' => 'Square',
			),
			'allow_null' => 0,
			'default_value' => 'rectangle',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
			'key' => 'field_5b2e1eb40245b',
			'label' => 'Link Target',
			'name' => 'q2_link_target',
			'type' => 'button_group',
			'instructions' => 'Controls whether the link opens in a new tab, or the current tab',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'current' => 'Current',
				'new' => 'New'
			),
			'allow_null' => 0,
			'default_value' => 'current',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
				'width' => '50',
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
			'key' => 'field_5b2e8ffb738ad',
			'label' => 'Line 1 Size',
			'name' => 'q2_line_1_size',
			'type' => 'range',
			'instructions' => 'Default: 30px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 30,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e8ffb738a2',
			'label' => 'Line 1 Color',
			'name' => 'q2_line_1_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
				'width' => '50',
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
			'key' => 'field_5b2e9033738ae',
			'label' => 'Line 2 Size',
			'name' => 'q2_line_2_size',
			'type' => 'range',
			'instructions' => 'Default: 18px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 18,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e9543a3432',
			'label' => 'Line 2 Color',
			'name' => 'q2_line_2_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
			'key' => 'field_5b1e7eb40235b',
			'label' => 'Text Position',
			'name' => 'q3_text_position',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top-left' => 'Top Left',
				'middle-left' => 'Middle Left',
				'bottom-left' => 'Bottom Left',
				'top-right' => 'Top Right',
				'middle-right' => 'Middle Right',
				'bottom-right' => 'Bottom Right',
			),
			'allow_null' => 0,
			'default_value' => 'middle-left',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5b1e7fbf0235c',
			'label' => 'Image Style',
			'name' => 'q3_image_style',
			'type' => 'button_group',
			'instructions' => 'Controls whether the content is full width, or held to one side',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'rectangle' => 'Rectangle',
				'square' => 'Square',
			),
			'allow_null' => 0,
			'default_value' => 'rectangle',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
			'key' => 'field_5b3e1eb40245b',
			'label' => 'Link Target',
			'name' => 'q3_link_target',
			'type' => 'button_group',
			'instructions' => 'Controls whether the link opens in a new tab, or the current tab',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'current' => 'Current',
				'new' => 'New'
			),
			'allow_null' => 0,
			'default_value' => 'current',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
				'width' => '50',
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
			'key' => 'field_5b3e8ffb738ad',
			'label' => 'Line 1 Size',
			'name' => 'q3_line_1_size',
			'type' => 'range',
			'instructions' => 'Default: 30px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 30,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e8ffb738a3',
			'label' => 'Line 1 Color',
			'name' => 'q3_line_1_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
				'width' => '50',
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
			'key' => 'field_5b3e9033738ae',
			'label' => 'Line 2 Size',
			'name' => 'q3_line_2_size',
			'type' => 'range',
			'instructions' => 'Default: 18px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 18,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e9543a3433',
			'label' => 'Line 2 Color',
			'name' => 'q3_line_2_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
			'key' => 'field_5b1e7eb40245b',
			'label' => 'Text Position',
			'name' => 'q4_text_position',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top-left' => 'Top Left',
				'middle-left' => 'Middle Left',
				'bottom-left' => 'Bottom Left',
				'top-right' => 'Top Right',
				'middle-right' => 'Middle Right',
				'bottom-right' => 'Bottom Right',
			),
			'allow_null' => 0,
			'default_value' => 'middle-left',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5b1e7fbf0245c',
			'label' => 'Image Style',
			'name' => 'q4_image_style',
			'type' => 'button_group',
			'instructions' => 'Controls whether the content is full width, or held to one side',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'rectangle' => 'Rectangle',
				'square' => 'Square',
			),
			'allow_null' => 0,
			'default_value' => 'rectangle',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
			'key' => 'field_5b4e1eb40245b',
			'label' => 'Link Target',
			'name' => 'q4_link_target',
			'type' => 'button_group',
			'instructions' => 'Controls whether the link opens in a new tab, or the current tab',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'current' => 'Current',
				'new' => 'New'
			),
			'allow_null' => 0,
			'default_value' => 'current',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
				'width' => '50',
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
			'key' => 'field_5b4e8ffb738ad',
			'label' => 'Line 1 Size',
			'name' => 'q4_line_1_size',
			'type' => 'range',
			'instructions' => 'Default: 30px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 30,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e8ffb738a4',
			'label' => 'Line 1 Color',
			'name' => 'q4_line_1_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
				'width' => '50',
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
			'key' => 'field_5b4e9033738ae',
			'label' => 'Line 2 Size',
			'name' => 'q4_line_2_size',
			'type' => 'range',
			'instructions' => 'Default: 18px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => 18,
			'min' => '',
			'max' => 50,
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5b1e9543a3434',
			'label' => 'Line 2 Color',
			'name' => 'q4_line_2_color',
			'type' => 'color_picker',
			'instructions' => 'Default #666666',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#666666',
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
		//fetch the current month
		$date = date('n');
		$q = '';
		
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
		
		//Force Quarter Override
		$quarter_control = get_field('force_quarter', 'option');
		
		//Check if the override is active
		if($quarter_control == 'q1' || $quarter_control == 'q2' || $quarter_control == 'q3' || $quarter_control == 'q4')
		{
			$q = $quarter_control;
		}
		
		//Content Settings
		$text_position 	= 'position ' . get_field($q . '_text_position', 'option');
		$image_style 	= get_field($q . '_image_style', 'option');
		$image 			= get_field($q . '_image', 'option');
		$image 			= $image['sizes']['large'];
		$line1 			= get_field($q . '_line_1', 'option');
		$line1_size 	= get_field($q . '_line_1_size', 'option');
		$line1_size_m 	= $line1_size - 10;
		$line1_color 	= get_field($q . '_line_1_color', 'option');
		$line2 			= get_field($q . '_line_2', 'option');
		$line2_size 	= get_field($q . '_line_2_size', 'option');
		$line2_size_m 	= $line2_size - 7;
		$line2_color 	= get_field($q . '_line_2_color', 'option');
		$content 		= get_field($q . '_extended_content', 'option');
		$link 			= get_field($q . '_link', 'option');
		$link_target 	= get_field($q . '_link_target', 'option');
		$placeholder 	= '';
		$link_target_output = '';
		
		//If there's no image, load the placeholder class to assist in blind placing of the shortcode
		if(empty($image))
		{
			$placeholder = ' placeholder';
		}
		
		if($link_target == 'new')
		{
			$link_target_output = 'target="_blank"';
		}
		
		//Blank Promotion Output
		$promotion_output = '';
		
		//Promotion Wrapper
		$promotion_output .= '<div class="innexus-promotion-wrapper'.$placeholder.'">';
			
			//Wrap the full promotion in a link
			$promotion_output .= '<a href="'.$link.'" '. $link_target_output .'>';
				$promotion_output .= '<div class="innexus-promotion-container">';
					
					//Keep the lines wrapped so we can easily shift the content around
					$promotion_output .= '<div class="innexus-promotion-line-container ' . $image_style .' '. $text_position . '">';
						
						//If Line 1 has content
						if(!empty($line1))
						{
							$promotion_output .= '<h3 class="innexus-promotion-line-1" data-desktop="'.$line1_size.'" data-mobile='.$line1_size_m.' style="font-size:'.$line1_size.'px; color: '.$line1_color.';">'.$line1.'</h3>';
						}
						
						//If Line 2 has content
						if(!empty($line2))
						{
							$promotion_output .= '<div class="innexus-promotion-line-2" data-desktop="'.$line2_size.'" data-mobile='.$line2_size_m.' style="font-size:'.$line2_size.'px; color: '.$line2_color.';">'.$line2.'</div>';
						}
					
					$promotion_output .= '</div>';
					
					//Only output img tag if there is an image mapped
					if(!empty($image))
					{
						$promotion_output .= '<img src=" '.$image.'" title="'.$line1.'" alt="'.$line1.'"/>';
					}
					
				$promotion_output .= '</div>';
			$promotion_output .= '</a>';
			
			//Keep extended content below the promotion
			if(!empty($content))
			{
				$promotion_output .= '<div class="innexus-promotion-extended-content">';
					$promotion_output .= $content;
				$promotion_output .= '</div>';
			}
			
			
		//Close Promotion Wrapper
		$promotion_output .= '</div>';
		
		//Return the assembled promotion
		return $promotion_output;
	}
	
	add_shortcode( 'promotions', 'promotions_func' );
}
