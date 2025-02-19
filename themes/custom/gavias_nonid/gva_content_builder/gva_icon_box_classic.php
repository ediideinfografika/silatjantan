<?php 
if(!class_exists('element_gva_icon_box_classic')):
   class element_gva_icon_box_classic{
      public function render_form(){
         $option_1 = array(
            '00'   => '--Default--',
            '10'   => '10',
            '11'   => '11',
            '12'   => '12',
            '13'   => '13',
            '14'   => '14',
            '15'   => '15',
            '16'   => '16',
            '17'   => '17',
            '18'   => '18',
            '19'   => '19',
            '20'   => '20',
            '21'   => '21',
            '22'   => '22',
            '23'   => '23',
            '24'   => '23',
            '25'   => '25',
            '26'   => '26',
            '27'   => '27',
            '28'   => '28',
            '29'   => '29',
            '30'   => '30',
            '31'   => '31',
            '32'   => '32',
            '33'   => '33',
            '34'   => '34',
            '35'   => '35',
            '36'   => '36',
            '37'   => '37',
            '38'   => '38',
            '39'   => '39',
            '40'   => '40',
         );
         $fields = array(
            'type' => 'element_gva_icon_box_classic',
            'title' => ('Icon Box Classic'), 
            'fields' => array(
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
                  'desc'      => t('Some Shortcodes and HTML tags allowed'),
               ),
               array(
                  'id'            => 'hidden_content',
                  'type'          => 'select',
                  'options'       => array(
                     ''                      => t('Always Display'),
                     'hidden-xs hidden-sm'   => t('Hidden Small & Extra Small Screen (hidden-sm & hidden-xs)'), 
                     'hidden-sm'             => t('Hidden Small Screen (hidden-sm)'), 
                     'hidden-xs'             => t('hidden Extra Small Screen (hidden-xs)'), 
                  ),
                  'title'  => t('Hidden Content in Small Screen'),
               ),
               array(
                  'id'        => 'image',
                  'type'      => 'upload',
                  'title'     => t('Image Icon'),
                  'desc'      => t('Use image icon instead of icon class'),
               ),
               array(
                  'id'            => 'icon_position',
                  'type'          => 'select',
                  'options'       => array(
                     'top-center'            => 'Top Center', 
                     'top-left'              => 'Top Left',
                     'top-right'             => 'Top Right',
                     'right'                 => 'Right',
                     'left'                  => 'Left',
                     'top-left-title'        => 'Top Left Title',
                     'top-right-title'       => 'Top Right Title',
                  ),
                  'title'  => t('Icon Position'),
                  'std'    => 'top',
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
                  'desc'      => t('Link for text')
               ),
               array(
                  'id'        => 'box_background',
                  'type'      => 'text',
                  'title'     => t('Box Background'),
                  'desc'      => t('Box Background, e.g: #f5f5f5')
               ),
              
              array(
                 'id'        => 'info',
                 'type'      => 'info',
                 'title'      => 'Class, Background, Color Icon Font'
               ),
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => t('Icon class'),
                  'std'       => '',
                  'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="http://gaviasthemes.com/icons/">Custom icon</a>'),
               ),
               array(
                  'id'        => 'icon_bg_available',
                  'type'      => 'select',
                  'title'     => 'Background Icon Available',
                  'class'     => 'width-1-4',
                  'options'   => array(
                     ''             => '------',
                     'bg-theme'     => 'Background Theme',
                     'bg-black'     => 'Background Black',
                     'bg-dark'      => 'Background Dark',
                     'bg-white'     => 'Background White'
                  )
               ),
               array(
                  'id'        => 'icon_background',
                  'type'      => 'text',
                  'title'     => 'Custom Background Icon',
                  'desc'      => t('e.g: #f5f5f5'),
                  'class'     => 'width-1-4',
               ),
               array(
                  'id'        => 'icon_color_available',
                  'type'      => 'select',
                  'title'     => 'Icon Color Available',
                  'class'     => 'width-1-4',
                  'options'   => array(
                     ''                => '------',
                     'color-theme'     => 'Color Theme',
                     'color-black'     => 'Color Black',
                     'color-dark'      => 'Color Dark',
                     'color-white'     => 'Color White'
                  )
               ),
               array(
                  'id'        => 'icon_color',
                  'type'      => 'text',
                  'title'     => t('Custom Icon Color'),
                  'desc'      => t('e.g: #f5f5f5'),
                  'class'     => 'width-1-4',
               ),

               array(
                  'id'        => 'icon_width',
                  'type'      => 'select',
                  'title'     => t('Icon Width'),
                  'options'   => array(
                     'fa-1x'  => t('Fa 1x small'), 
                     'fa-2x'  => t('Fa 2x'), 
                     'fa-3x'  => t('Fa 3x'),
                     'fa-4x'  => t('Fa 4x'),
                     'width-full'  => t('Width Default'),
                  ),
                  'class'     => 'width-1-4',
               ),
               array(
                  'id'        => 'icon_radius',
                  'type'      => 'select',
                  'title'     => t('Icon Radius'),
                  'options'   => array(
                     ''           => t('--None--'), 
                     'radius-1x'  => t('Radius 1x'), 
                     'radius-2x'  => t('Radius 2x'),
                     'radius-5x'  => t('Radius 5x'),
                  ),
                  'class'     => 'width-1-4',
               ),
               array(
                  'id'        => 'icon_border',
                  'type'      => 'select',
                  'title'     => t('Icon Border'),
                  'options'   => array(
                     ''           => t('--None--'), 
                     'border-1'  => t('Border 1px'), 
                     'border-2'  => t('Border 2px'),
                     'border-3'  => t('Border 3px'),
                     'border-4'  => t('Border 4px'),
                     'border-5'  => t('Border 5px'),
                     'border-s1' => t('Border Padding'),
                  ),
                  'class'     => 'width-1-4',
               ),
               array(
                  'id'        => 'border_color',
                  'type'      => 'select',
                  'title'     => 'Border Color',
                  'class'     => 'width-1-4',
                  'options'   => array(
                     ''                => '------',
                     'theme'     => 'Color Theme',
                     'black'     => 'Color Black',
                     'dark'      => 'Color Dark',
                     'white'     => 'Color White'
                  ),
                  'class'     => 'width-1-4',
               ),
               array(
                  'id'        => 'box_shadow',
                  'type'      => 'select',
                  'title'     => 'Icon Box Shadow',
                  'options'   => array(
                     ''             => t('Disable Box Shadow'), 
                     'icon-shadow'  => t('Enable Box Shadow')
                  ),
                  'class'     => 'width-1-2',
               ),
               array(
                  'id'        => 'skin_text',
                  'type'      => 'select',
                  'title'     => 'Skin Text for box',
                  'options'   => array(
                     'text-dark'  => t('Text Dark'), 
                     'text-light' => t('Text Light')
                  ),
                  'class'     => 'width-1-2',
               ),
               array(
                  'id'        => 'margin',
                  'type'      => 'select',
                  'title'     => t('Icon Border'),
                  'options'   => array(
                     'box-margin-0'       => t('Remove Margin Bottom'), 
                     'box-margin-small'   => t('Margin Bottom Small'), 
                     'box-margin-medium'  => t('Margin Bottom Medium'),
                     'box-margin-large'   => t('Margin Bottom Large'),
                  ),
                  'default'   => 'box-margin-small'
               ),
               array(
                  'id'        => 'info_21',
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
                  'id'        => 'info_22',
                  'type'      => 'info',
                  'title'     => t('Description Styling'),
               ),
               array(
                  'id'        => 'desc_font_size',
                  'type'      => 'select',
                  'title'     => t('Description Font Size'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'desc_line_height',
                  'type'      => 'select',
                  'title'     => t('Description Line Height'),
                  'options'   => $option_1,
                  'default'   => '00'
               ),
               array(
                  'id'        => 'desc_font_weight',
                  'type'      => 'select',
                  'title'     => t('Description Font Weight'),
                  'options'   => array(
                     ''      => '-- Default --',
                     '400'   => '400',
                     '500'   => '500',
                     '600'   => '600',
                     '700'   => '700',
                     '800'   => '800',
                     '900'   => '900',
                  ),
                  'default'   => ''
               ),
               array(
                  'id'        => 'desc_color',
                  'type'      => 'select',
                  'title'     => t('Description Color'),
                  'options'   => array(
                     ''             => '-- Default --',
                     'text-body'    => 'Body Text Color',
                     'text-black'   => 'Black Color',
                     'text-white'   => 'White Color',
                     'text-theme'   => 'Theme Color'
                  ),
                  'default'   => 'text-body'
               ),

               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'options'   => array( 'off' => 'No', 'on' => 'Yes' ),
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link.'),
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
               
               array(
                  'id'     => 'el_class',
                  'type'      => 'text',
                  'title'  => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),

            ),                                       
         );
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         extract(gavias_merge_atts(array(
            'title'                       => '',
            'content'                     => '',
            'hidden_content'              => '',
            'icon'                        => '',
            'image'                       => '',
            'icon_position'               => 'top',
            'box_background'              => '',
            'icon_color_available'        => '',
            'icon_color'                  => '',
            'icon_bg_available'           => '',
            'icon_background'             => '',
            'icon_radius'                 => '',
            'icon_border'                 => '',
            'border_color'                => '',
            'margin'                      => 'box-margin-small',
            'icon_width'                  => 'fa-2x',
            'link'                        => '',
            'box_shadow'                  => '',
            'skin_text'                   => '',
            'title_font_size'             => '00',
            'title_line_height'           => '',
            'title_font_weight'           => '',
            'title_color'                 => 'text-black',
            'html_tags'                   => 'h2',
            'desc_font_size'              => '00',
            'desc_line_height'            => '',
            'desc_font_weight'            => '',
            'desc_color'                  => '',
            'target'                      => '',
            'animate'                     => '',
            'animate_delay'               => '',
            'min_height'                  => '',
            'el_class'                    => ''
         ), $attr));
         
         if($image) $image = $base_url . $image; 

         // target
         if( $target =='on' ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }

         $class = array();
         $class[] = $icon_position;
         $class[] = $margin;
         if($image) $class[] = 'icon-image';
         if($el_class) $class[] = $el_class;
         if($skin_text) $class[] = $skin_text;

         if($box_background) $class[] = 'box-background';
         if($icon_border) $class[] = 'icon-border';
         if($icon_background) $class[] = 'icon-background';
         
         if($icon_border == 'border-s1') $class[] .= " border-s1";

         $icon_class = "{$icon_width} {$icon_radius} {$icon_border}";
         if($border_color) $icon_class .= " i-border-{$border_color}";
         if( ($icon_border || $icon_background || $icon_bg_available) && !$image ) $icon_class .= ' fa-stack';

         if($icon_bg_available) $icon_class .= ' ' . $icon_bg_available;
         if($icon_color_available) $icon_class .= ' ' . $icon_color_available;

         $icon_class_inner = "";
         if($icon_border == 'border-s1'){
            $icon_class_inner .= "{$icon_radius} i-border-{$border_color}";
         }

         $classes_title_text = '';
         $classes_title = array();
         $classes_title[] = "lheight-{$title_line_height}";
         $classes_title[] = "fsize-{$title_font_size}";
         $classes_title[] = "fweight-{$title_font_weight}";
         $classes_title[] = $title_color;
         $classes_title_text = implode(' ', $classes_title);

         $classes_desc_text = '';
         $classes_desc = array();
         $classes_desc[] = "lheight-{$desc_line_height}";
         $classes_desc[] = "fsize-{$desc_font_size}";
         $classes_desc[] = "fweight-{$desc_font_weight}";
         $classes_desc[] = $desc_color;
         $classes_desc_text = implode(' ', $classes_desc);

         if($box_shadow) $icon_class .= " {$box_shadow}";

         $style = array(); // Style box
         if($min_height) $style[] = "min-height:{$min_height};";
         if($box_background) $style[] = "background-color:{$box_background};";
         
         $style_icon = ''; // Style icon
         if($icon_background) $style_icon .= "background: {$icon_background};";
         if($icon_color) $style_icon .= "color: {$icon_color};";
         if($style_icon) $style_icon = "style=\"{$style_icon}\"";

         if($animate) $class[] = 'wow ' . $animate;

         ob_start();
         ?>
         <?php if($icon_position=='top-center' || $icon_position=='top-left' || $icon_position=='top-right' || $icon_position=='right' || $icon_position=='left'){ ?>
            <div class="widget gsc-icon-box <?php if(count($class)>0) print implode(' ', $class) ?>" <?php if(count($style) > 0) print 'style="'.implode(';', $style).'"' ?> <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
               
               <?php if( ($icon||$image) && $icon_position != 'right'){ ?>
                  <div class="highlight-icon">
                     <span class="icon-inner <?php echo $icon_class_inner ?>">   
                        <span class="icon-container <?php print $icon_class ?>" <?php print $style_icon ?>>
                           <?php if($icon){ ?><span class="icon <?php print $icon ?>"></span> <?php } ?>
                           <?php if($image){ ?><span class="icon"><img src="<?php print $image ?>" alt="<?php print strip_tags($title) ?>"/> </span><?php } ?>
                        </span>
                     </span>
                  </div>
               <?php } ?>   

               <div class="highlight_content">
                  
                  <<?php echo $html_tags ?> class="title <?php print $classes_title_text; ?>">
                     <?php if($link){ ?><a href="<?php print $link ?>"> <?php } ?><?php print $title; ?><?php if($link){ ?> </a> <?php } ?>
                  </<?php echo $html_tags ?>>

                  <?php if($content){ ?>
                     <div class="desc <?php print $hidden_content ?> <?php print $classes_desc_text; ?>"><?php print $content; ?></div>
                  <?php } ?>   
               </div>

               <?php if( ($icon||$image) && $icon_position == 'right'){ ?>
                  <div class="highlight-icon">
                     <span class="icon-inner <?php echo $icon_class_inner ?>">   
                        <span class="icon-container <?php print $icon_class ?>" <?php print $style_icon ?>>
                           <?php if($icon){ ?><span class="icon <?php print $icon ?>"></span> <?php } ?>
                           <?php if($image){ ?><span class="icon icon-image"><img src="<?php print $image ?>" alt="<?php print strip_tags($title) ?>"/> </span><?php } ?>
                        </span>
                     </span>
                  </div>
               <?php } ?>   

            </div> 
         <?php } ?>   

         <?php if($icon_position == 'top-left-title' || $icon_position == 'top-right-title'){ ?>
            <div class="widget gsc-icon-box <?php if(count($class)>0) print implode(' ', $class) ?>" <?php if(count($style) > 0) print 'style="'.implode(';', $style).'"' ?> <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
               
               <div class="highlight_content">
                  <div class="title-inner">
                     
                     <?php if( ($icon||$image) && $icon_position=='top-left-title'){ ?>
                        <div class="highlight-icon">
                           <span class="icon-inner <?php echo $icon_class_inner ?>">   
                              <span class="icon-container <?php print $icon_class ?>" <?php print $style_icon ?>>
                                 <?php if($icon){ ?><span class="icon <?php print $icon ?>"></span> <?php } ?>
                                 <?php if($image){ ?><span class="icon icon-image"><img src="<?php print $image ?>" alt="<?php print strip_tags($title) ?>"/> </span><?php } ?>
                              </span>
                           </span>
                        </div>
                     <?php } ?>
                     
                     <<?php echo $html_tags ?> class="title <?php print $classes_title_text; ?>">
                        <?php if($link){ ?><a href="<?php print $link ?>"> <?php } ?><?php print $title; ?><?php if($link){ ?> </a> <?php } ?>
                     </<?php echo $html_tags ?>>

                     <?php if(($icon||$image) && $icon_position=='top-right-title'){ ?>
                        <div class="highlight-icon">
                           <span class="icon-inner <?php echo $icon_class_inner ?>">   
                              <span class="icon-container <?php print $icon_class ?>" <?php print $style_icon ?>>
                                 <?php if($icon){ ?><span class="icon <?php print $icon ?>"></span> <?php } ?>
                                 <?php if($image){ ?><span class="icon icon-image"><img src="<?php print $image ?>" alt="<?php print strip_tags($title) ?>"/> </span><?php } ?>
                              </span>
                           </span>
                        </div>
                     <?php } ?>

                  </div>
                  <?php if($content){ ?>
                     <div class="desc <?php print $hidden_content ?> <?php print $classes_desc_text; ?>"><?php print $content; ?></div>
                  <?php } ?>   
               </div>

            </div> 
         <?php } ?>   

         <?php return ob_get_clean() ?>
       <?php
      }

   } 
endif;   
