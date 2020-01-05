<?php if(! defined('ABSPATH')){ return; }

class ZNB_Button extends ZionElement
{

	/**
	 * This method is used to retrieve the configurable options of the element.
	 * @return array The list of options that compose the element and then passed as the argument for the render() function
	 */
	function options()
	{
		$uid = $this->data['uid'];
		$colorzilla_url = 'http://www.colorzilla.com/gradient-editor/';
		$buttonStyles = znb_get_button_option_styles();

		$options = array(
			'has_tabs'  => true,
			'general' => array(
				'title' => __('CONTENT','zion-builder'),
				'options' => array(


					array (
						"name"        => __( "Text", 'zion-builder' ),
						"description" => __( "Text inside the button", 'zion-builder' ),
						"id"          => "text",
						"std"         => "",
						"type"        => "text",
					),

					array (
						"name"        => __( "Link", 'zion-builder' ),
						"description" => __( "Attach a link to the button", 'zion-builder' ),
						"id"          => "link",
						"std"         => array(
							'url' => '#',
							'target' => '_self',
							'title' => esc_html__('Click me', 'zion-builder'),
						),
						"type"        => "link",
						"options"     => zn_get_link_targets(),
					),


				),
			),

			'style' => array(
				'title' => 'STYLES',
				'options' => array(
					array (
						"name"        => __( "Style", 'zion-builder' ),
						"description" => __( "Select a style for the button", 'zion-builder' ),
						"id"          => "style",
						"std"         => "",
						"type"        => "smart_select",
						"options"     => $buttonStyles,
						'live' => array(
						   'type'           => 'class',
						   'css_class'      => '.'.$uid,
						),
						'can_show' => ( !empty($buttonStyles))
					),

					array (
						"name"        => __( "Button text Options", 'zion-builder' ),
						"description" => __( "Specify the typography properties for the button.", 'zion-builder' ),
						"id"          => "button_typo",
						"std"         => '',
						'supports'   => array( 'size', 'font', 'style', 'line', 'weight', 'spacing', 'case' ),
						"type"        => "font",
						'live' => array(
							'type'      => 'font',
							'css_class' => '.'.$uid,
						),
					),


					array (
						"name"        => __( "Button Corners", 'zion-builder' ),
						"description" => __( "Select the button corners type for this button", 'zion-builder' ),
						"id"          => "button_corners",
						"std"         => "btn--square",
						"type"        => "select",
						"options"     => array (
							'btn--rounded'  => __( "Smooth rounded corner", 'zion-builder' ),
							'btn--round'    => __( "Round corners", 'zion-builder' ),
							'btn--square'   => __( "Square corners", 'zion-builder' ),
						),
						'live' => array(
						   'type'           => 'class',
						   'css_class'      => '.'.$uid,
						),
					),

					array (
						"name"        => __( "Border Type", 'zion-builder' ),
						"description" => __( "Select the border type for this button.", 'zion-builder' ),
						'id'          => 'border_style',
						'std'         => 'none',
						'type'        => 'select',
						'options'	  => array(
							''  => __( "None", 'zion-builder' ),
							'solid'    => __( "Solid", 'zion-builder' ),
							'dotted'   => __( "Dotted", 'zion-builder' ),
							'dashed'   => __( "Dashed", 'zion-builder' ),
							'double'   => __( "Double", 'zion-builder' ),
						),
						'live' => array(
							'type'		=> 'css',
							'css_class' => '.'.$uid,
							'css_rule'	=> 'border-style',
							'unit'		=> ''
						),
					),

					array(
						'id'          => 'border_width',
						'name'        => __('Border Width', 'zion-builder'),
						'description' => __('Choose a border width.', 'zion-builder'),
						'type'        => 'boxmodel',
						'std'	      => array('linked'=>1),
						'placeholder' => '0px',
						'allow-negative'  => false,
						"dependency"  => array( 'element' => 'border_style' , 'value'=> array('solid', 'dotted', 'dashed', 'double') ),
						// 'live' => array(
						// 	'type'		=> 'boxmodel',
						// 	'css_class' => '.'.$uid,
						// 	'css_rule'	=> 'border-width',
						// ),
					),

				),
			),

			'color' => array(
				'title' => 'COLORS',
				'options' => array(

					array (
						"name"        => __( "Background Type", 'zn_framework' ),
						"description" => __( "Please select the type of the background.", 'zn_framework' ),
						"id"          => "bg_type",
						"std"         => "",
						"type"        => "select",
						"options"     => array (
							''  => __( "Solid color", 'zn_framework' ),
							'gradient'  => __( "Gradient", 'zn_framework' ),
						)
					),

					//#!-- DEPENDENCIES FOR BG TYPE
					array (
						"name"        => __( "Background-Color", 'zion-builder' ),
						"description" => __( "Select button custom color.", 'zion-builder' ),
						"id"          => "bg_custom_color",
						"std"         => "",
						"alpha"     => true,
						"type"        => "colorpicker",
						'live' => array(
							'type'      => 'css',
							'css_class' => '.'.$uid,
							'css_rule'  => 'background-color',
							'unit'      => ''
						),
						'dependency' => array( 'element' => 'bg_type' , 'value'=> array('') )
					),

					array (
						"name"        => __( "Background-Color HOVER", 'zion-builder' ),
						"description" => __( "Select button custom color on hover. If not specified, the normal state color will be used with a 20% color adjustment in brightness.", 'zion-builder' ),
						"id"          => "bg_custom_color_hover",
						"std"         => "",
						"alpha"     => true,
						"type"        => "colorpicker",
						'dependency' => array( 'element' => 'bg_type' , 'value'=> array('') )
					),

					array(
						'id'          => 'bg_gradient',
						'name'        => esc_html( __( 'Custom CSS Gradient', 'zn_framework' ) ),
						'description' => sprintf(__('You can use a tool such as <a href="%s" target="_blank">%s</a> to generate a unique custom gradient.
Here\'s a quick video explainer <a href="%s">%s</a> how to generate and paste the video here.', 'zn_framework'),
							$colorzilla_url,
							$colorzilla_url,
							'http://hogash.d.pr/8Dze',
							'http://hogash.d.pr/8Dze'),
						'type'        => 'textarea',
						'std'         => '',
						"dependency"  => array( 'element' => 'bg_type' , 'value'=> array('gradient') ),
					),
					array(
						'id'          => 'bg_gradient_hover',
						'name'        => esc_html( __( 'Custom CSS Gradient Hover', 'zn_framework' ) ),
						'description' => sprintf(__('You can use a tool such as <a href="%s" target="_blank">%s</a> to generate a unique custom gradient.
Here\'s a quick video explainer <a href="%s">%s</a> how to generate and paste the video here.', 'zn_framework'),
							$colorzilla_url,
							$colorzilla_url,
							'http://hogash.d.pr/8Dze',
							'http://hogash.d.pr/8Dze'),
						'type'        => 'textarea',
						'std'         => '',
						"dependency"  => array( 'element' => 'bg_type' , 'value'=> array('gradient') ),
					),
					//#!-- DEPENDENCIES FOR BG TYPE

					array (
						"name"        => __( "Text-Color", 'zion-builder' ),
						"description" => __( "Select button custom text color.", 'zion-builder' ),
						"id"          => "text_custom_color",
						"std"         => "",
						"alpha"     => true,
						"type"        => "colorpicker",
						'live' => array(
							'type'      => 'css',
							'css_class' => '.'.$uid,
							'css_rule'  => 'color',
							'unit'      => ''
						),
					),

					array (
						"name"        => __( "Text-Color HOVER", 'zion-builder' ),
						"description" => __( "Select button custom text color on hover. If not specified, the normal state color will be used with a 20% color adjustment in brightness.", 'zion-builder' ),
						"id"          => "text_custom_color_hover",
						"std"         => "",
						"alpha"     => true,
						"type"        => "colorpicker",
					),

					array (
						"name"        => __( "Border-Color", 'zion-builder' ),
						"description" => __( "Select button custom border color.", 'zion-builder' ),
						"id"          => "border_custom_color",
						"std"         => "",
						"alpha"     => true,
						"type"        => "colorpicker",
						'live' => array(
							'type'      => 'css',
							'css_class' => '.'.$uid,
							'css_rule'  => 'border-color',
							'unit'      => ''
						),
						// "dependency"  => array( 'element' => 'border_style' , 'value'=> array('solid', 'dotted', 'dashed', 'double') ),
					),

					array (
						"name"        => __( "Border-Color HOVER", 'zion-builder' ),
						"description" => __( "Select button custom border color on hover. If not specified, the normal state color will be used with a 20% color adjustment in brightness.", 'zion-builder' ),
						"id"          => "border_custom_color_hover",
						"std"         => "",
						"alpha"     => true,
						"type"        => "colorpicker",
						// "dependency"  => array( 'element' => 'border_style' , 'value'=> array('solid', 'dotted', 'dashed', 'double') ),
					),
				),
			),

			'size' => array(
				'title' => 'SIZE',
				'options' => array(
					array (
						"name"        => __( "Width", 'zion-builder' ),
						"description" => __( "Select a size for the button", 'zion-builder' ),
						"id"          => "button_width",
						"std"         => "",
						"type"        => "select",
						"options"     => array (
							''                          => __( "Default", 'zion-builder' ),
							'btn-block btn-fullwidth'   => __( "Full width (100%)", 'zion-builder' ),
							'btn-halfwidth'             => __( "Half width (50%)", 'zion-builder' ),
							'btn-third'                 => __( "One-Third width (33%)", 'zion-builder' ),
							'btn-forth'                 => __( "One-forth width (25%)", 'zion-builder' ),
						),
						'live' => array(
						   'type'           => 'class',
						   'css_class'      => '.'.$uid,
						),
					),

					array (
						"name"        => __( "Alignment", 'zion-builder' ),
						"description" => __( "Please select the alignment of the button.", 'zion-builder' ),
						"id"          => "alignment",
						"std"         => "left",
						"options"     => array (
							'left' => __( 'Left (default)', 'zion-builder' ),
							'right'          => __( 'Right', 'zion-builder' ),
							'center'          => __( 'Center', 'zion-builder' )
						),
						"type"        => "select",
						'live' => array(
						   'type'           => 'class',
						   'css_class'      => '.zn-buttonWrapper-'.$uid,
						   'val_prepend'   => 'text-',
						),
					),

				),
			),

			'icon' => array(
				'title' => 'ICON',
				'options' => array(

					array (
						"name"        => __( "Icon position", 'zion-builder' ),
						"description" => __( "Select the position of the icon", 'zion-builder' ),
						"id"          => "icon_pos",
						"std"         => "before",
						"type"        => "select",
						"options"     => array (
							'before'  => __( "Before text", 'zion-builder' ),
							'after'   => __( "After text", 'zion-builder' ),
						),
					),

					array (
						"name"        => __( "Select icon", 'zion-builder' ),
						"description" => __( "Select an icon to add to the button", 'zion-builder' ),
						"id"          => "button_icon",
						"std"         => "",
						"type"        => "icon_list",
						'class'       => 'zn_full',
					),

					array(
						'id'          => 'icon_size',
						'name'        => __('Icon size.','zion-builder'),
						'description' => __('Change the icon\'s size.','zion-builder'),
						'type'        => 'slider',
						'std'         => '14',
						"helpers"     => array (
							"step" => "1",
							"min" => "8",
							"max" => "80"
						),
					),

					array(
						'id'          => 'icon_distance',
						'name'        => __('Button icon distance.','zion-builder'),
						'description' => __('Change the default distance from the icon vs text.','zion-builder'),
						'type'        => 'slider',
						'std'         => '0',
						"helpers"     => array (
							"step" => "1",
							"min" => "0",
							"max" => "80"
						),
					),

				)
			),

			'help' => znpb_get_helptab( array(
				// 'video'   => 'https://my.hogash.com/video_category/',
				// 'docs'    => 'https://my.hogash.com/documentation/buttons/',
				'copy'    => $uid,
				'general' => true,
				'custom_id' => true,
			)),
		);

		$options['size']['options'] = array_merge($options['size']['options'], zn_margin_padding_options($uid) );


		return $options;
	}

	/**
	 * This method is used to display the output of the element.
	 *
	 * @return void
	 */
	function element()
	{
		$options = $this->data['options'];
		$classes = $attributes = array();
		$uid = $this->data['uid'];

		$classes[] = $uid;
		$classes[] = zn_get_element_classes($options);
		$classes[] = 'zn-button btn';
		$classes[] = $this->opt('style');
		$classes[] = $this->opt('size','');
		$classes[] = $this->opt('button_width','');
		$classes[] = $this->opt('button_corners','btn--square');

		$icon_pos = $this->opt('icon_pos','before');
		$classes[] = 'btn-icon--'.$icon_pos;

		$attributes[] = zn_get_element_attributes($options, $this->opt('custom_id', $uid));

		echo '<div class="zn-buttonWrapper zn-buttonWrapper-'.$uid.' text-'.$this->opt('alignment','left').'">';

			// Icon
			$has_icon = $this->opt('button_icon', '');
			$icon = !empty($has_icon['family']) ? '<span class="zn-buttonIcon" '.zn_generate_icon( $has_icon ).'></span>':'';

			$text = '<span class="zn-buttonText">'.$this->opt('text', esc_html__('Click me', 'zion-builder')).'</span>';

			// Icon position
			if( !empty($has_icon) ){
				if( $icon_pos == 'before' ){
					$text = $icon.$text;
				} else{
					$text = $text.$icon;
				}
			}

			// extract link and add attributes and classes
			$link = zn_extract_link(
				$this->opt('link', array(
					'url' => '#',
					'target' => '_self',
					'title' => esc_html__('Click me', 'zion-builder'),
				) ),
				zn_join_spaces( $classes ),
				zn_join_spaces( $attributes )
			);

			echo $link['start'] . $text . $link['end'];

		echo '</div>';

	}


	/**
	 * Output the inline css to head or after the element in case it is loaded via ajax
	 */
	function css(){

		$uid = $this->data['uid'];
		$css = '';

		// typography styles
		$typo = array();
		$typo['lg'] = $this->opt('button_typo', '' );
		if( !empty($typo) ){
			$typo['selector'] = '.'.$uid;
			$css .= zn_typography_css( $typo );
		}

		// Check for gradient or solid color
		$bgType = $this->opt('bg_type','');
		if( empty( $bgType ) ) {
			// Button Primary Custom BG
			if( $button_color = $this->opt('bg_custom_color','') ){
				$css .= '.'.$uid.'{background-color:'.$button_color.'}';
				$css .= '.'.$uid.':hover,.'.$uid.':focus{background-color:'.$this->opt('bg_custom_color_hover', adjustBrightness($button_color, 20) ).'}';
			}

		}
		else {
			$gradient = $this->opt('bg_gradient','');
			$gradientHover = $this->opt('bg_gradient_hover','');
			if( ! empty( $gradient ) ) {
				$css .= '.' . $uid . '{'.$gradient.'}';
			}
			if( ! empty( $gradientHover ) ) {
				$css .= '.' . $uid . ':hover {'.$gradientHover.'}';
			}
		}


		// Button Text Color
		if( $text_color = $this->opt('text_custom_color','') ){
			$css .= '.'.$uid.'{color:'. $text_color .';}';
			$css .= '.'.$uid.':hover,.'.$uid.':focus{color:'.$this->opt('text_custom_color_hover', adjustBrightness($text_color, 20) ).';}';
		}

		// Button Border Color
		if( $border_color = $this->opt('border_custom_color','') ){
			$css .= '.'.$uid.'{border-color:'. $border_color .';}';
			$css .= '.'.$uid.':hover,.'.$uid.':focus{border-color:'.$this->opt('border_custom_color_hover', adjustBrightness($border_color, 20) ).';}';
		}

		if( $this->opt('button_icon', '') ){

			$btn_icon_margin = $btn_icon_size = '';

			$icon_size = $this->opt('icon_size','14');
			$icon_pos = $this->opt('icon_pos','before');
			$icon_distance = $this->opt('icon_distance','0');

			if($icon_size != '14'){
				$btn_icon_size = 'font-size:'.$icon_size.'px;';
			}

			if($icon_distance != 0){
				$margin_pos = array('before'=>'right', 'after'=>'left');
				$btn_icon_margin = 'margin-'.$margin_pos[ $this->opt('icon_pos','before') ].':'.$icon_distance.'px;';
			}
			if($btn_icon_size || $btn_icon_margin){
				$css .= '.'.$uid.' .zn-buttonIcon{'.$btn_icon_size.$btn_icon_margin.'}';
			}
		}

		$border_style = $this->opt('border_style','');

		if( $border_style != '' ){

			$css .= '.'.$uid.'{border-style:'.$border_style.'}';

			$borders['lg'] = $this->opt('border_width', '' );
			if( !empty($borders) ){
				$borders['selector'] = '.'.$uid;
				$borders['type'] = 'border-width';
				$css .= zn_push_boxmodel_styles( $borders );
			}
		}

		// Margin
		$margins = array();
		$margins['lg'] = $this->opt('margin_lg', '' );
		$margins['md'] = $this->opt('margin_md', '' );
		$margins['sm'] = $this->opt('margin_sm', '' );
		$margins['xs'] = $this->opt('margin_xs', '' );
		if( !empty($margins) ){
			$margins['selector'] = '.'.$uid;
			$margins['type'] = 'margin';
			$css .= zn_push_boxmodel_styles( $margins );
		}

		// Padding
		$paddings = array();
		$paddings['lg'] = $this->opt('padding_lg', '' );
		$paddings['md'] = $this->opt('padding_md', '' );
		$paddings['sm'] = $this->opt('padding_sm', '' );
		$paddings['xs'] = $this->opt('padding_xs', '' );
		if( !empty($paddings) ){
			$paddings['selector'] = '.'.$uid;
			$paddings['type'] = 'padding';
			$css .= zn_push_boxmodel_styles( $paddings );
		}

		return $css;
	}
}

ZNB()->elements_manager->registerElement( new ZNB_Button(array(
	'id' => 'ZnButton',
	'name' => __('Button', 'zion-builder'),
	'description' => __('Create a button.', 'zion-builder'),
	'level' => 3,
	'category' => 'Content',
	'legacy' => false,
	'keywords' => array('call', 'action', 'anchor', 'link'),
)));
