<?php 

if(!class_exists('element_gva_call_to_action')):
   class element_gva_call_to_action{
      public function render_form(){
         $option_1 = array(
            '00'   => '--Default--',
            '18'   => '18',
            '20'   => '20',
            '22'   => '22',
            '24'   => '24',
            '26'   => '26',
            '28'   => '28',
            '30'   => '30',
            '32'   => '32',
            '34'   => '34',
            '36'   => '36',
            '38'   => '38',
            '40'   => '40',
            '42'   => '42',
            '44'   => '44',
            '46'   => '46',
            '48'   => '48',
            '50'   => '50',
            '52'   => '52',
            '54'   => '54',
            '56'   => '56',
            '58'   => '58',
            '60'   => '60',
            '70'   => '70',
            '80'   => '80',
            '90'   => '90',
            '100'  => '100'
         );
         $fields = array(
            'type' => 'gsc_call_to_action',
            'title' => t('Call to Action'),
            'fields' => array(
                array(
                  'id'        => 'info_1',
                  'type'      => 'info',
                  'title'     => t('Content'),
               ),
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content'),
                  'desc'      => t('HTML tags allowed.'),
               ),
               array(
                  'id'           => 'button_align',
                  'type'         => 'select',
                  'title'        => 'Style',
                  'options'      => array(
                     'button-left'              => t('Button Left'),
                     'button-right'             => t('Button Right'),
                     'button-bottom'            => t('Button Bottom Left'),
                     'button-bottom-right'      => t('Button Bottom Right'),
                     'button-center'            => t('Button Bottom Center'),
                  )
               ),
               array(
                  'id'        => 'info_2',
                  'type'      => 'info',
                  'title'     => t('Title Styling'),
               ),
               array(
                  'id'        => 'title_font_size',
                  'type'      => 'select',
                  'title'     => t('Title Font Size'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'title_line_height',
                  'type'      => 'select',
                  'title'     => t('Title Line Height'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'title_font_weight',
                  'type'      => 'select',
                  'title'     => t('Title Font Weight'),
                  'options'   => array(
                     ''      => '-- Default --',
                     '400'   => '400',
                     '500'   => '500',
                     '600'   => '600',
                     '700'   => '700',
                     '800'   => '800',
                     '900'   => '900',
                  ),
                  'default'   => '600'
               ),
               array(
                  'id'        => 'title_color',
                  'type'      => 'select',
                  'title'     => t('Title Color'),
                  'options'   => array(
                     'text-black'   => 'Black Color',
                     'text-white'   => 'White Color',
                     'text-theme'   => 'Theme Color'
                  ),
                  'default'   => 'text-black'
               ),
               array(
                  'id'        => 'html_tags',
                  'type'      => 'select',
                  'title'     => t('Html Title Tags'),
                  'options'   => array(
                        'h1' => 'H1',
                        'h2' => 'H2',
                        'h3' => 'H3',
                        'h4' => 'H4',
                        'h5' => 'H5',
                        'h6' => 'H6',
                  ),
                  'default'       => 'h2'
               ),
               array(
                  'id'        => 'info_3',
                  'type'      => 'info',
                  'title'     => t('Style'),
               ),
               array(
                  'id'        => 'box_background',
                  'type'      => 'text',
                  'title'     => t('Box Background'),
                  'desc'      => t('Box Background, e.g: #f5f5f5')
               ),
               array(
                  'id'        => 'width',
                  'type'      => 'text',
                  'title'     => t('Max width for content'),
                  'desc'      => 'e.g 660px'
               ),
               array(
                  'id'        => 'style_text',
                  'type'      => 'select',
                  'title'     => 'Skin Text for box',
                  'options'   => array(
                        'text-light'  => 'Text light',
                        'text-dark'   => 'Text dark',
                  ),
                  'std'       => 'text-dark'
               ),
               array(
                 'id'        => 'info',
                 'type'      => 'info',
                 'title'      => 'Button'
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
               ),
               array(
                  'id'        => 'button_title',
                  'type'      => 'text',
                  'title'     => t('Button Title'),
                  'desc'      => t('Leave this field blank if you want Call to Action with Big Icon'),
               ),
               array(
                  'id'        => 'style_button',
                  'type'      => 'select',
                  'title'     => 'Style button',
                  'options'   => array(
                        'btn-theme'           => 'Button default of theme',
                        'btn-theme-second'    => 'Button second of theme',
                        'btn-white'           => 'Button white',
                        'btn-black'           => 'Button black',
                  ),
                  'std'       => 'text-dark'
               ),
               array(
                 'id'        => 'info',
                 'type'      => 'info',
                 'title'      => 'Quick Text'
               ),
               array(
                  'id'        => 'quick_text',
                  'type'      => 'text',
                  'title'     => t('Quick Text'),
               ),
               array(
                 'id'        => 'info',
                 'type'      => 'info',
                 'title'      => 'Settings Video Link'
               ),
               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link'),
                  'options'   => array( 'off' => 'Off', 'on' => 'On' ),
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation for element'),
                  'options'   => gavias_content_builder_animate(),
                  'class'     => 'width-1-2'
               ), 
               array(
                  'id'        => 'animate_delay',
                  'type'      => 'select',
                  'title'     => t('Animation Delay'),
                  'options'   => gavias_content_builder_delay_wow(),
                  'desc'      => '0 = default',
                  'class'     => 'width-1-2'
               ), 
            ),                                       
         );
      return $fields;
      }

      function render_content( $attr = array(), $content = ''  ){
         extract(gavias_merge_atts(array(
            'title'                 => '',
            'subtitle'              => '',
            'content'               => '',
            'button_align'          => '',
            'title_font_size'       => '00',
            'title_line_height'     => '',
            'title_font_weight'     => '600',
            'title_color'           => 'text-black',
            'html_tags'             => 'h2',
            'width'                 => '',
            'link'                  => '',
            'button_title'          => '',
            'style_button'          => 'btn-theme',
            'quick_text'            => '',
            'target'                => '',
            'el_class'              => '',
            'animate'               => '',
            'animate_delay'         => '',
            'style_text'            => 'text-dark',
            'box_background'        => '',
            'video'                 => ''
         ), $attr));
         
         // target
         if( $target =='on' ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }

         $classes_title_text = '';
         $classes_title = array();
         $classes_title[] = "lheight-{$title_line_height}";
         $classes_title[] = "fsize-{$title_font_size}";
         $classes_title[] = "fweight-{$title_font_weight}";
         $classes_title[] = $title_color;
         $classes_title_text = implode(' ', $classes_title);

         $class = array();
         $class[] = $el_class;
         $class[] = $button_align;
         $class[] = $style_text;
         if($animate) $class[] = 'wow ' . $animate; 
         if($box_background) $class[] = 'has-background';

         $style = '';
         if($width) $style .= "max-width: {$width};";
         if($box_background) $style .= "background: {$box_background};";
         $style = !empty($style) ? "style=\"".$style ."\"" : '';
         ob_start();
         ?>
         <div class="widget gsc-call-to-action <?php print implode(' ', $class) ?>" <?php print $style ?> <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
            <div class="content-inner clearfix" >
               <div class="content">
                  <<?php echo $html_tags ?> class="title <?php print $classes_title_text; ?>"><span><?php print $title; ?></span></<?php echo $html_tags ?>>
                  <?php if($content){ ?>
                     <div class="desc"><?php print $content; ?></div>
                  <?php } ?>   
               </div>
               <?php if($quick_text || $link){ ?>
                  <div class="button-action">
                     <?php if($quick_text){ ?><span class="quick-text"><?php print $quick_text ?></span><?php } ?>
                     <?php if($link){?>
                        <a href="<?php print $link ?>" class="<?php print $style_button ?> link-action" <?php print $target ?>><?php print $button_title ?></a>   
                     <?php } ?>
                  </div>
               <?php } ?>   
            </div>
         </div>
         <?php return ob_get_clean() ?>
      <?php
      }

   }
endif;   



