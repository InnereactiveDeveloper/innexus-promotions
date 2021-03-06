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
		/***********************************
		Universal Settings
		***********************************/
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
			'key' => 'field_5a09e12882ins',
			'label' => '',
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
			'message' => '<h3 style="margin-top: 0;">Instructions</h3>
			<strong><i>This plugin provides two shortcodes to be placed on the site.</i></strong>
			<br>
			<br>
			<strong>[promotions]</strong> - Place in highly visible location(s) to encourage users to view whatever promotions the site is running.
			<br>
			<br>
			<strong>[promotions_content]</strong> - Place on the equivalent of a promotions page, it outputs full length content describing any promotions that are designed to rotate on a quarterly basis. Other promotions can also be placed above and below it, as it is intended to be flexible in it\'s location and placement.
			<br>
			<br><strong>Q1</strong> - Jan, Feb, Mar.
			<br><strong>Q2</strong> - Apr, May, Jun.
			<br><strong>Q3</strong> - Jul, Aug, Sep.
			<br><strong>Q4</strong> - Oct, Nov, Dec.
			<br><strong>FQ</strong> - Floating Quarter, no date based attachment.
			<br>',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5b1eueb40215b',
			'label' => 'Force Quarter',
			'name' => 'force_quarter',
			'type' => 'button_group',
			'instructions' => 
				'Forces a quarter to be active regardless of the current date to allow for review of placed promotions.
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
				'fq' => 'FQ',
			),
			'allow_null' => 0,
			'default_value' => 'none',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5b1eueb4msqfq',
			'label' => 'Member Signup Quarter',
			'name' => 'member_signup_quarter',
			'type' => 'button_group',
			'instructions' => 
				'Controls what quarter the floating quarter (FQ) is attached to, adjust this to match what quarter the member signed up in.
				<br> When the selected quarter ends, content will be moved from the FQ to the selected quarter.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'q1' => 'Q1',
				'q2' => 'Q2',
				'q3' => 'Q3',
				'q4' => 'Q4',
			),
			'allow_null' => 0,
			'default_value' => 'q4',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5b1eueb4cmtfq',
			'label' => 'Content Migration Trigger',
			'name' => 'content_migration_trigger',
			'type' => 'button_group',
			'instructions' => 
				'Controls the migration functionality.
				<br>
				<br>
				While set to <strong>Active</strong> the floating quarter WILL migrate under appropriate conditions.
				<br>
				While set to <strong>Inactive</strong> the floating quarter WILL NOT migrate content, this is to prevent unnecessary runs of the function.
				<br>
				<br>
				<strong>Note:</strong> After the content is migrated, this toggle will switch to <strong>Inactive</strong> to prevent display issues.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'active' => 'Active',
				'inactive' => 'Inactive'
			),
			'allow_null' => 0,
			'default_value' => 'reset',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		/***********************************
		Quarter 1
		***********************************/
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
			'key' => 'field_5a09dd4bq1pfc',
			'label' => 'Quarter 1 Promotion Full Content',
			'name' => 'q1_full_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear where [promotions_content] shortcode is placed.',
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
		/***********************************
		Quarter 2
		***********************************/
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
			'key' => 'field_5a09dd4bq2pfc',
			'label' => 'Quarter 2 Promotion Full Content',
			'name' => 'q2_full_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear where [promotions_content] shortcode is placed.',
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
		/***********************************
		Quarter 3
		***********************************/
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
			'key' => 'field_5a09dd4bq3pfc',
			'label' => 'Quarter 3 Promotion Full Content',
			'name' => 'q3_full_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear where [promotions_content] shortcode is placed.',
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
		/***********************************
		Quarter 4
		***********************************/
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
		array(
			'key' => 'field_5a09dd4bq4pfc',
			'label' => 'Quarter 4 Promotion Full Content',
			'name' => 'q4_full_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear where [promotions_content] shortcode is placed.',
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
		/***********************************
		Floating Quarter
		***********************************/
		array(
			'key' => 'field_fq09df821f1c3',
			'label' => 'Floating Quarter',
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
			'key' => 'field_fq09e17e82c02',
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
			'message' => 'Binds to the selected <strong>Member Signup Quarter</strong> and passes it\'s information to that quarter when that quarter ends.',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_fq1e7eb40245b',
			'label' => 'Text Position',
			'name' => 'fq_text_position',
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
			'key' => 'field_fq1e7fbf0245c',
			'label' => 'Image Style',
			'name' => 'fq_image_style',
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
			'key' => 'field_fq09dfa81f1c7',
			'label' => 'Floating Quarter Promotion Image',
			'name' => 'fq_image',
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
			'key' => 'field_fq09dd5f4f1bc',
			'label' => 'Floating Quarter Promotion Link',
			'name' => 'fq_link',
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
			'key' => 'field_fq4e1eb40245b',
			'label' => 'Link Target',
			'name' => 'fq_link_target',
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
			'key' => 'field_fq09dd4b4f1bb',
			'label' => 'Floating Quarter Promotion Line 1',
			'name' => 'fq_line_1',
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
			'key' => 'field_fq4e8ffb738ad',
			'label' => 'Line 1 Size',
			'name' => 'fq_line_1_size',
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
			'key' => 'field_fq1e8ffb738a4',
			'label' => 'Line 1 Color',
			'name' => 'fq_line_1_color',
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
			'key' => 'field_fq09dd4b4f1bc',
			'label' => 'Floating Quarter Promotion Line 2',
			'name' => 'fq_line_2',
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
			'key' => 'field_fq4e9033738ae',
			'label' => 'Line 2 Size',
			'name' => 'fq_line_2_size',
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
			'key' => 'field_fq1e9543a3434',
			'label' => 'Line 2 Color',
			'name' => 'fq_line_2_color',
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
			'key' => 'field_fq09dd4b4f1bd',
			'label' => 'Floating Quarter Promotion Extended Content',
			'name' => 'fq_extended_content',
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
			'key' => 'field_fq09dd4bq4pfc',
			'label' => 'Floating Quarter Promotion Full Content',
			'name' => 'fq_full_content',
			'type' => 'wysiwyg',
			'instructions' => 'Content that will appear where [promotions_content] shortcode is placed.',
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
	function promotions_quarter_migrate()
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
		
		//The quarter the member signed up in
		$msq = get_field('member_signup_quarter', 'option');
		
		//Floating Quarter Content Migration Trigger
		$fq_cmt	= get_field('content_migration_trigger', 'option');
		
		//Check if the override is active
		if($quarter_control == 'q1' || $quarter_control == 'q2' || $quarter_control == 'q3' || $quarter_control == 'q4' || $quarter_control == 'fq')
		{
			$q = $quarter_control;
		}
		
		//Make sure the reset is armed before running.
		if($fq_cmt == 'active')
		{
		
			//Floating Quarter Content Settings
			$fq_text_position 	= get_field('fq_text_position', 'option');
			$fq_image_style 	= get_field('fq_image_style', 'option');
			$fq_image 			= get_field('fq_image', 'option');
			$fq_line1 			= get_field('fq_line_1', 'option');
			$fq_line1_size 		= get_field('fq_line_1_size', 'option');
			$fq_line1_color 	= get_field('fq_line_1_color', 'option');
			$fq_line2 			= get_field('fq_line_2', 'option');
			$fq_line2_size 		= get_field('fq_line_2_size', 'option');
			$fq_line2_color 	= get_field('fq_line_2_color', 'option');
			$fq_content 		= get_field('fq_extended_content', 'option');
			$fq_full_content 	= get_field('fq_full_content', 'option');
			$fq_link 			= get_field('fq_link', 'option');
			$fq_link_target 	= get_field('fq_link_target', 'option');
		
			//Move FQ to Q4
			if($q == 'q1' && $msq == 'q4')
			{
				update_field('content_migration_trigger', 'inactive' , 'option');
				
				if(!empty($fq_text_position))
				{
					update_field($msq . '_text_position', $fq_text_position ,'option');
				}
				
				if(!empty($fq_image_style))
				{
					update_field($msq . '_image_style', $fq_image_style ,'option');
				}
				
				if(!empty($fq_image))
				{
					update_field($msq . '_image', $fq_image ,'option');
				}
				
				if(!empty($fq_line1))
				{
					update_field($msq . '_line_1', $fq_line1 ,'option');
				}
				
				if(!empty($fq_line1_size))
				{
					update_field($msq . '_line_1_size', $fq_line1_size ,'option');
				}
				
				if(!empty($fq_line1_color))
				{
					update_field($msq . '_line_1_color', $fq_line1_color ,'option');
				}
				
				if(!empty($fq_line2))
				{
					update_field($msq . '_line_2', $fq_line2 ,'option');
				}
				
				if(!empty($fq_line2_size))
				{
					update_field($msq . '_line_2_size', $fq_line2_size ,'option');
				}
				
				if(!empty($fq_line2_color))
				{
					update_field($msq . '_line_2_color', $fq_line2_color ,'option');
				}
				
				if(!empty($fq_content))
				{
					update_field($msq . '_extended_content', $fq_content ,'option');
				}
				
				if(!empty($fq_full_content))
				{
					update_field($msq . '_full_content', $fq_full_content ,'option');
				}
				
				if(!empty($fq_link))
				{
					update_field($msq . '_link', $fq_link ,'option');
				}
				
				if(!empty($fq_link_target))
				{
					update_field($msq . '_link_target', $fq_link_target ,'option');
				}
			}
			
			//Move FQ to Q1
			if($q == 'q2' && $msq == 'q1')
			{
				
				update_field('content_migration_trigger', 'inactive' , 'option');
				
				if(!empty($fq_text_position))
				{
					update_field($msq . '_text_position', $fq_text_position ,'option');
				}
				
				if(!empty($fq_image_style))
				{
					update_field($msq . '_image_style', $fq_image_style ,'option');
				}
				
				if(!empty($fq_image))
				{
					update_field($msq . '_image', $fq_image ,'option');
				}
				
				if(!empty($fq_line1))
				{
					update_field($msq . '_line_1', $fq_line1 ,'option');
				}
				
				if(!empty($fq_line1_size))
				{
					update_field($msq . '_line_1_size', $fq_line1_size ,'option');
				}
				
				if(!empty($fq_line1_color))
				{
					update_field($msq . '_line_1_color', $fq_line1_color ,'option');
				}
				
				if(!empty($fq_line2))
				{
					update_field($msq . '_line_2', $fq_line2 ,'option');
				}
				
				if(!empty($fq_line2_size))
				{
					update_field($msq . '_line_2_size', $fq_line2_size ,'option');
				}
				
				if(!empty($fq_line2_color))
				{
					update_field($msq . '_line_2_color', $fq_line2_color ,'option');
				}
				
				if(!empty($fq_content))
				{
					update_field($msq . '_extended_content', $fq_content ,'option');
				}
				
				if(!empty($fq_full_content))
				{
					update_field($msq . '_full_content', $fq_full_content ,'option');
				}
				
				if(!empty($fq_link))
				{
					update_field($msq . '_link', $fq_link ,'option');
				}
				
				if(!empty($fq_link_target))
				{
					update_field($msq . '_link_target', $fq_link_target ,'option');
				}
			}
			
			//Move FQ to Q2
			if($q == 'q3' && $msq == 'q2')
			{
				
				update_field('content_migration_trigger', 'inactive' , 'option');
				
				if(!empty($fq_text_position))
				{
					update_field($msq . '_text_position', $fq_text_position ,'option');
				}
				
				if(!empty($fq_image_style))
				{
					update_field($msq . '_image_style', $fq_image_style ,'option');
				}
				
				if(!empty($fq_image))
				{
					update_field($msq . '_image', $fq_image ,'option');
				}
				
				if(!empty($fq_line1))
				{
					update_field($msq . '_line_1', $fq_line1 ,'option');
				}
				
				if(!empty($fq_line1_size))
				{
					update_field($msq . '_line_1_size', $fq_line1_size ,'option');
				}
				
				if(!empty($fq_line1_color))
				{
					update_field($msq . '_line_1_color', $fq_line1_color ,'option');
				}
				
				if(!empty($fq_line2))
				{
					update_field($msq . '_line_2', $fq_line2 ,'option');
				}
				
				if(!empty($fq_line2_size))
				{
					update_field($msq . '_line_2_size', $fq_line2_size ,'option');
				}
				
				if(!empty($fq_line2_color))
				{
					update_field($msq . '_line_2_color', $fq_line2_color ,'option');
				}
				
				if(!empty($fq_content))
				{
					update_field($msq . '_extended_content', $fq_content ,'option');
				}
				
				if(!empty($fq_full_content))
				{
					update_field($msq . '_full_content', $fq_full_content ,'option');
				}
				
				if(!empty($fq_link))
				{
					update_field($msq . '_link', $fq_link ,'option');
				}
				
				if(!empty($fq_link_target))
				{
					update_field($msq . '_link_target', $fq_link_target ,'option');
				}
			}
			
			//Move FQ to Q3
			if($q == 'q4' && $msq == 'q3')
			{
				
				update_field('content_migration_trigger', 'inactive' , 'option');
				
				if(!empty($fq_text_position))
				{
					update_field($msq . '_text_position', $fq_text_position ,'option');
				}
				
				if(!empty($fq_image_style))
				{
					update_field($msq . '_image_style', $fq_image_style ,'option');
				}
				
				if(!empty($fq_image))
				{
					update_field($msq . '_image', $fq_image ,'option');
				}
				
				if(!empty($fq_line1))
				{
					update_field($msq . '_line_1', $fq_line1 ,'option');
				}
				
				if(!empty($fq_line1_size))
				{
					update_field($msq . '_line_1_size', $fq_line1_size ,'option');
				}
				
				if(!empty($fq_line1_color))
				{
					update_field($msq . '_line_1_color', $fq_line1_color ,'option');
				}
				
				if(!empty($fq_line2))
				{
					update_field($msq . '_line_2', $fq_line2 ,'option');
				}
				
				if(!empty($fq_line2_size))
				{
					update_field($msq . '_line_2_size', $fq_line2_size ,'option');
				}
				
				if(!empty($fq_line2_color))
				{
					update_field($msq . '_line_2_color', $fq_line2_color ,'option');
				}
				
				if(!empty($fq_content))
				{
					update_field($msq . '_extended_content', $fq_content ,'option');
				}
				
				if(!empty($fq_full_content))
				{
					update_field($msq . '_full_content', $fq_full_content ,'option');
				}
				
				if(!empty($fq_link))
				{
					update_field($msq . '_link', $fq_link ,'option');
				}
				
				if(!empty($fq_link_target))
				{
					update_field($msq . '_link_target', $fq_link_target ,'option');
				}
			}
		}
		
		
	}
	
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
		if($quarter_control == 'q1' || $quarter_control == 'q2' || $quarter_control == 'q3' || $quarter_control == 'q4' || $quarter_control == 'fq')
		{
			$q = $quarter_control;
		}
		
		//Content Settings
		$text_position 	= 'position ' . get_field($q . '_text_position', 'option');
		$image_style 	= get_field($q . '_image_style', 'option');
		$image 			= get_field($q . '_image', 'option');
		$image 			= $image['sizes']['1980'];
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
						$promotion_output .= '<img src="'.$image.'" title="'.$line1.'" alt="'.$line1.'"/>';
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
		
		//promotions_quarter_migrate();
		
		//Return the assembled promotion
		return $promotion_output;
	}
	
	function promotions_content_func( $atts, $content = "" ) 
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
		
		//The quarter the member signed up in
		$member_signup_quarter = get_field('member_signup_quarter', 'option');
		
		//Check if the override is active
		if($quarter_control == 'q1' || $quarter_control == 'q2' || $quarter_control == 'q3' || $quarter_control == 'q4' || $quarter_control == 'fq')
		{
			$q = $quarter_control;
		}
		
		//Content Settings
		$full_content 	= get_field($q . '_full_content', 'option');
		
		//Blank Promotion Output
		$promotion_output = '';
		
		//Promotion Wrapper
		$promotion_output .= '<div class="innexus-promotion-content-wrapper">';
		
			$promotion_output .= $full_content;
			
		//Close Promotion Wrapper
		$promotion_output .= '</div>';
		
		promotions_quarter_migrate();
		
		//Return the assembled promotion
		return $promotion_output;
	}
	
	add_shortcode( 'promotions_content', 'promotions_content_func' );
	add_shortcode( 'promotions', 'promotions_func' );
}
