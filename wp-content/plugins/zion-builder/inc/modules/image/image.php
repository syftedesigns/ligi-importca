<?php if(! defined('ABSPATH')){ return; }

class ZNB_Image extends ZionElement
{

	/**
	 * This method is used to retrieve the configurable options of the element.
	 * @return array The list of options that compose the element and then passed as the argument for the render() function
	 */
	function options()
	{
		$uid = $this->data['uid'];

		$options = array(
			'has_tabs'  => true,
			'general' => array(
				'title' => __('GENERAL','zion-builder'),
				'options' => array(

					array (
						"name"        => __( "Image", 'zion-builder' ),
						"description" => __( "Please select an image that will appear above the title.", 'zion-builder' ),
						"id"          => "image",
						"std"         => "",
						"type"        => "media"
					),

					array (
						"name"        => __( "Image Size", 'zion-builder' ),
						"description" => __( "Choose the image's size", 'zion-builder' ),
						"id"          => "image_size",
						"std"         => "container_width",
						'type'        => 'select',
						'options'        => zn_get_image_sizes_list(array( 'custom'=> 'Custom Size' )),
					),

					array (
						"name"        => __( "Image Resize", 'zion-builder' ),
						"description" => __( "Resize the image with your custom desired dimensions. Keep in mind that you can add a width AND | OR height, in order to maintain the aspect ration of the image.", 'zion-builder' ),
						"id"          => "custom_size",
						"type"        => "image_size",
						"std"        => '',
						"dependency"  => array( 'element' => 'image_size' , 'value'=> array('custom') ),
					),

					array (
						"name"        => __( "Alignment", 'zion-builder' ),
						"description" => __( "Choose the image's alignment.", 'zion-builder' ),
						"id"          => "alignment_breakpoints",
						"std"         => "lg",
						"tabs"        => true,
						"type"        => "zn_radio",
						"options"     => array ( "lg" => '', "md" => '', "sm" => '', "xs" => '' ),
						"class"       => "zn_breakpoints zn--minimal"
					),

							array (
								"name"        => __( "Alignment", 'zion-builder' ),
								"description" => __( "Select the image alignment.", 'zion-builder' ),
								"id"          => "alignment",
								"std"         => "center",
								"type"        => "select",
								"options"     => array(
									"left" => __("Left", 'zion-builder' ),
									"center" => __("Center", 'zion-builder' ),
									"right" => __("Right", 'zion-builder' ),
								),
								'live'        => array(
									'type'      => 'class',
									'css_class' => '.'.$uid,
									'val_prepend'  => 'text-',
								),
								"dependency"  => array( 'element' => 'alignment_breakpoints' , 'value'=> array('lg') ),
							),

							array (
								"name"        => __( "Alignment (Tablets)", 'zion-builder' ),
								"description" => __( "Select the image alignment.", 'zion-builder' ),
								"id"          => "alignment_md",
								"std"         => "",
								"type"        => "select",
								"options"     => array(
									"" => __("Default", 'zion-builder' ),
									"left" => __("Left", 'zion-builder' ),
									"center" => __("Center", 'zion-builder' ),
									"right" => __("Right", 'zion-builder' ),
								),
								"dependency"  => array( 'element' => 'alignment_breakpoints' , 'value'=> array('md') ),
							),
							array (
								"name"        => __( "Alignment (Small tablets)", 'zion-builder' ),
								"description" => __( "Select the image alignment.", 'zion-builder' ),
								"id"          => "alignment_sm",
								"std"         => "",
								"type"        => "select",
								"options"     => array(
									"" => __("Default", 'zion-builder' ),
									"left" => __("Left", 'zion-builder' ),
									"center" => __("Center", 'zion-builder' ),
									"right" => __("Right", 'zion-builder' ),
								),
								"dependency"  => array( 'element' => 'alignment_breakpoints' , 'value'=> array('sm') ),
							),
							array (
								"name"        => __( "Alignment (Smartphones)", 'zion-builder' ),
								"description" => __( "Select the image alignment.", 'zion-builder' ),
								"id"          => "alignment_xs",
								"std"         => "",
								"type"        => "select",
								"options"     => array(
									"" => __("Default", 'zion-builder' ),
									"left" => __("Left", 'zion-builder' ),
									"center" => __("Center", 'zion-builder' ),
									"right" => __("Right", 'zion-builder' ),
								),
								"dependency"  => array( 'element' => 'alignment_breakpoints' , 'value'=> array('xs') ),
							),

					array (
						"name"        => __( "Link To", 'zion-builder' ),
						"description" => __( "Select the link type", 'zion-builder' ),
						"id"          => "link_to",
						"std"         => "",
						'type'        => 'select',
						'options'        => array(
							'' => __( "None", 'zion-builder' ),
							'media' => __( "Media", 'zion-builder' ),
							'custom' => __( "Custom URL", 'zion-builder' ),
						),
					),

					array (
						"name"        => __( "Custom URL", 'zion-builder' ),
						"description" => __( "Choose a custom URL", 'zion-builder' ),
						"id"          => "link",
						"std"         => "",
						"type"        => "link",
						"options"     => zn_get_link_targets(),
						"dependency"  => array( 'element' => 'link_to' , 'value'=> array('custom') ),
					),


				),
			),

			'style' => array(
				'title' => 'STYLE',
				'options' => array(

					array(
						"name"        => __( "Size (Max-Width)", 'zion-builder' ),
						"description" => __( "Customize the size of this image.", 'zion-builder' ),
						"id"          => "max_width",
						'type'        => 'smart_slider',
						'std'        => '',
						'helpers'     => array(
							'min' => '0',
							'max' => '2000'
						),
						'supports' => array('breakpoints'),
						'units' => array('%', 'px'),
						'live' => array(
							'type'      => 'css',
							'css_class' => '.'.$uid. ' .zn-imageImg',
							'css_rule'  => 'max-width',
							'unit'      => '%'
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
							'css_class' => '.'.$uid. ' .zn-imageImg',
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
						"dependency"  => array( 'element' => 'border_style' , 'value'=> array('solid', 'dotted', 'dashed', 'double') ),
					),

					array (
						"name"        => __( "Border-Color HOVER", 'zion-builder' ),
						"description" => __( "Select button custom border color on hover. If not specified, the normal state color will be used with a 20% color adjustment in brightness.", 'zion-builder' ),
						"id"          => "border_custom_color_hover",
						"std"         => "",
						"alpha"     => true,
						"type"        => "colorpicker",
						"dependency"  => array( 'element' => 'border_style' , 'value'=> array('solid', 'dotted', 'dashed', 'double') ),
					),

					array (
						"name"        => __( "Border Radius", 'zion-builder' ),
						"description" => __( "Customize the border radius (corner roundness)", 'zion-builder' ),
						"id"          => "border_radius",
						"std"         => "",
						"type"        => "slider",
						"helpers"     => array (
							"step" => "1",
							"min" => "0",
							"max" => "300"
						),
						// 'class'       => 'zn_full',
					),

					array (
						"name"        => __( "Hover Animation", 'zion-builder' ),
						"description" => __( "Choose a hover animation.", 'zion-builder' ),
						"id"          => "hover_anim",
						"std"         => "",
						'type'        => 'select',
						'options'        => array(
							'' => __( "None.", 'zion-builder' ),
							'zn-trans-fadein' => __( "Fade In.", 'zion-builder' ),
							'zn-trans-fadeout' => __( "Fade Out.", 'zion-builder' ),
							'zn-trans-zoomin' => __( "Zoom In.", 'zion-builder' ),
							'zn-trans-zoomout' => __( "Zoom Out.", 'zion-builder' ),
						),
					),

					array (
						"name"        => __( "Image Shadow", 'zion-builder' ),
						"description" => __( "Please select a shadow style.", 'zion-builder' ),
						"id"          => "shadow",
						"std"         => "",
						"options"     => array(
							''  => __( 'No shadow', 'zion-builder' ),
							'1'  => __( 'Shadow 1x', 'zion-builder' ),
							'2'  => __( 'Shadow 2x', 'zion-builder' ),
							'3'  => __( 'Shadow 3x', 'zion-builder' ),
							'4'  => __( 'Shadow 4x', 'zion-builder' ),
							'5'  => __( 'Shadow 5x', 'zion-builder' ),
							'6'  => __( 'Shadow 6x', 'zion-builder' ),
						),
						"type"        => "select",
						'live' => array(
							'type'		=> 'class',
							'css_class' => '.'.$uid. ' .zn-imageImg',
							'val_prepend'	=> 'znBoxShadow-',
						),
					),

					array (
						"name"        => __( "Image Shadow - Hover", 'zion-builder' ),
						"description" => __( "Please select a shadow style for hover state.", 'zion-builder' ),
						"id"          => "shadow_hover",
						"std"         => "",
						"options"     => array(
							''  => __( 'No shadow', 'zion-builder' ),
							'1'  => __( 'Shadow 1x', 'zion-builder' ),
							'2'  => __( 'Shadow 2x', 'zion-builder' ),
							'3'  => __( 'Shadow 3x', 'zion-builder' ),
							'4'  => __( 'Shadow 4x', 'zion-builder' ),
							'5'  => __( 'Shadow 5x', 'zion-builder' ),
							'6'  => __( 'Shadow 6x', 'zion-builder' ),
						),
						"type"        => "select",
					),

				),
			),

			'spacing' => array(
				'title' => 'SPACING',
				'options' => array(

				),
			),

			'ADVANCED' => array(
				'title' => 'ADVANCED',
				'options' => array(

					array (
						"name"        => __( "Enable Object Scrolling", 'zn_framework' ),
						"description" => __( "This will add a very nice slide up or down effect to this element, upon scrolling.", 'zn_framework' ),
						"id"          => "obj_parallax_enable",
						"std"         => "",
						"type"        => "toggle2",
						"value"        => "yes",
					),

					array (
						"name"        => __( "Distance", 'zn_framework' ),
						"description" => __( "Select the Y axis distance to run the effect. The effect will run on the entire screen, from entering the viewport until leaving it.", 'zn_framework' ),
						"id"          => "obj_parallax_distance",
						"std"         => '1',
						"type"        => "slider",
						"helpers"     => array (
							"step" => "1",
							"min" => "1",
							"max" => "10"
						),
						"dependency"  => array( 'element' => 'obj_parallax_enable' , 'value'=> array('yes') ),
					),

					array (
						"name"        => __( "Easing", 'zn_framework' ),
						"description" => sprintf( __( "Select the effect's easing. You can play with the easing effects <a href='%s' target='_blank'>here</a>.", 'zn_framework' ), 'http://greensock.com/ease-visualizer' ),
						"id"          => "obj_parallax_easing",
						"std"         => "linear",
						"type"        => "select",
						"options"     => array(
							"none"     => __("No Easing",'zion-builder'),
							"linear" => __("Ease Out Linear",'zion-builder'),
							"quad"   => __("Ease Out Quad",'zion-builder'),
							"cubic"  => __("Ease Out Cubic",'zion-builder'),
							"quart"  => __("Ease Out Quart",'zion-builder'),
							"quint"  => __("Ease Out Quint",'zion-builder'),
						),
						"dependency"  => array( 'element' => 'obj_parallax_enable' , 'value'=> array('yes') ),
					),

					array (
						"name"        => __( "Tween in reverse?", 'zn_framework' ),
						"description" => __( "This will make the tween effect to run in opposite direction of the scroll.", 'zn_framework' ),
						"id"          => "obj_parallax_reverse",
						"std"         => "",
						"type"        => "toggle2",
						"value"        => "yes",
						"dependency"  => array( 'element' => 'obj_parallax_enable' , 'value'=> array('yes') ),
					),

				),
			),

			'help' => znpb_get_helptab( array(
				// 'video'   => 'https://my.hogash.com/video_category/',
				// 'docs'    => 'https://my.hogash.com/documentation/image-box/',
				'copy'    => $uid,
				'general' => true,
				'custom_id' => true,
			)),

		);

		$options['spacing']['options'] = array_merge($options['spacing']['options'], zn_margin_padding_options($uid) );

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
		$classes[] = 'zn-image';
		$classes[] = znb_alignment_breakpoint_classes_output( array(
				'lg' => $this->opt('alignment', 'center'),
				'md' => $this->opt('alignment_md', ''),
				'sm' => $this->opt('alignment_sm', ''),
				'xs' => $this->opt('alignment_xs', ''),
			) );

		$attributes[] = zn_get_element_attributes($options, $this->opt('custom_id', $uid));

		if( $this->opt('obj_parallax_enable','') == 'yes' ){
			// Classes
			$classes[] = 'js-doObjParallax zn-objParallax';
			$classes[] = 'zn-objParallax--ease-'.$this->opt('obj_parallax_easing', 'linear');
			// Attributes
			$dir = $this->opt('obj_parallax_reverse', '') == 'yes' ? '' : '-';
			$attributes[] = 'data-rellax-speed="' . $dir . $this->opt('obj_parallax_distance', '1' ) .'"';
			$attributes[] = 'data-rellax-percentage="0.5"';
		}


		echo '<div class="'.zn_join_spaces($classes).'" '. zn_join_spaces( $attributes ) .'>';

			$attachment_url = $this->opt('image','');
			if( ! empty( $attachment_url ) ){

				// Get the image id from url
				$attachment_id = attachment_url_to_postid( $attachment_url );

				/**
				 * Get Image HTML
				 */
				$attachment_size = $this->opt('image_size','large');
				$attachment_size_custom = $this->opt('custom_size', array());
				$attachment_url = wp_get_attachment_url( $attachment_id );
				$attachment_title = get_the_title($attachment_id);

				// Image Classes
				$img_classes[] = 'zn-imageImg';
				$img_classes[] = 'u-img-inline-responsive';
				$img_classes[] = $this->opt('shadow','') ? 'znBoxShadow-'.$this->opt('shadow','') : '';
				$img_classes[] = $this->opt('shadow_hover','') ? 'znBoxShadow--hov-'.$this->opt('shadow_hover','') : '';
				$img_classes[] = $this->opt('hover_anim','');

				if( $attachment_size == 'custom' && !empty($attachment_size_custom) ){

					$_img_resized = znb_vt_resize('', $attachment_url, $attachment_size_custom['width'], $attachment_size_custom['height'], true);

					$image = sprintf(
						'<img src="%s" title="%s" alt="%s" class="%s" %s />',
						esc_attr( $_img_resized ),
						$attachment_title,
						get_post_meta($attachment_id, '_wp_attachment_image_alt', true),
						zn_join_spaces($img_classes),
						image_hwstring( $attachment_size_custom['width'], $attachment_size_custom['height'] )
					);
				}
				else {
					$image = wp_get_attachment_image( $attachment_id, $attachment_size, false, 'class='.zn_join_spaces($img_classes) );
				}


				/**
				 * Get Link
				 */
				$url = $link['start'] = $link['end'] = '';

				if( $link_to = $this->opt('link_to', '') ){
					if( $link_to == 'media' ){
						$url['url'] = $attachment_url;
						$url['target'] = 'modal';
						$url['title'] = $attachment_title;
					}
					elseif( $link_to == 'custom' ){
						$url = $this->opt('link','');
					}
					$link = zn_extract_link($url, 'zn-imageLink');
				}

				echo $link['start'];
				echo $image;
				echo $link['end'];
			}
		echo '</div>';

	}


	/**
	 * Output the inline css to head or after the element in case it is loaded via ajax
	 */
	function css(){

		$uid = $this->data['uid'];
		$css = '';

		if( $max_width = $this->opt('max_width','') ){
			$css .= zn_smart_slider_css( $max_width, '.'.$uid.' .zn-imageImg', 'max-width', '%');
		}

		// Border
		if( $border_style = $this->opt('border_style','') ){

			// Style
			$css .= '.'.$uid.' .zn-imageImg{border-style:'.$border_style.'}';

			// Width
			$borders['lg'] = $this->opt('border_width', '' );
			if( !empty($borders) ){
				$borders['selector'] = '.'.$uid.' .zn-imageImg';
				$borders['type'] = 'border-width';
				$css .= zn_push_boxmodel_styles( $borders );
			}

			// Button Border Color
			if( $border_color = $this->opt('border_custom_color','') ){
				$css .= '.'.$uid.' .zn-imageImg{border-color:'. $border_color .';}';
				$css .= '.'.$uid.' .zn-imageImg:hover,.'.$uid.' .zn-imageImg:focus{border-color:'.$this->opt('border_custom_color_hover', adjustBrightness($border_color, 20) ).';}';
			}
		}

		// Border Radius
		if( $border_radius = $this->opt('border_radius', '') ){
			$css .= '.'.$uid.' .zn-imageImg{border-radius:'.$border_radius.'px}';
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


ZNB()->elements_manager->registerElement( new ZNB_Image(array(
	'id' => 'ZnImage',
	'name' => __('Image', 'zion-builder'),
	'description' => __('This element will display an image.', 'zion-builder'),
	'level' => 3,
	'category' => 'Content, Media',
	'legacy' => false,
	'keywords' => array('imagebox', 'picture', 'photo'),
)));
