<?php 

if(!class_exists('element_gva_icon_box_style')):
   class element_gva_icon_box_style{
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
            'type'            => 'gva_icon_box_style',
            'title'           => t('Icon Box Style'),
            'fields' => array(
               array(
                  'id'        => 'info_1',
                  'type'      => 'info',
                  'title'     => t('Content'),
               ),
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => 'Title',
                  'admin'     => true
               ),
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => 'Icon',
                  'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="http://gaviasthemes.com/icons/">Custom icon</a>'),
               ),
               array(
                  'id'        => 'icon_color',
                  'type'      => 'text',
                  'title'     => 'Icon Font Color',
                  'desc'      => t('ex. #f5f5f5'),
               ),
               
               array(
                  'id'        => 'image',
                  'type'      => 'upload',
                  'title'     => t('Image Icon'),
                  'desc'      => t('Use image icon instead of icon class'),
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content'),
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
               ),
               
               array(
                  'id'        => 'info_2',
                  'type'      => 'info',
                  'title'     => t('Text Styling'),
               ),
               array(
                  'id'        => 'style_text',
                  'type'      => 'select',
                  'title'     => t('Skin Text for box'),
                  'options'   => array(
                        'text-dark'   => 'Text dark',
                        'text-light'   => 'Text light'
                  )
               ),
               array(
                  'id'        => 'info_3',
                  'type'      => 'info',
                  'title'     => t('Arrow Styling'),
               ),
               array(
                  'id'        => 'arrow',
                  'type'      => 'select',
                  'title'     => t('Enable Arrow'),
                  'options'   => array( 
                     'disable-arrow'  => t('-- Disable Arrow --'),
                     'enable-arrow'   => t('Enable Arrow'), 
                  )
               ),
               array(
                  'id'        => 'info_4',
                  'type'      => 'info',
                  'title'     => t('Box Style'),
               ),
               array(
                  'id'        => 'style',
                  'type'      => 'select',
                  'title'     => t('Style'),
                  'options'   => array( 
                     'style-1' => t('Icon Top Center'),
                     'style-2' => t('Icon Top Left'), 
                     'style-3' => t('Icon Top Right') 
                  )
               ),
               array(
                  'id'        => 'hightlight',
                  'type'      => 'select',
                  'title'     => t('Hightlight'),
                  'options'   => array( 'off' => 'No', 'on' => 'Yes' ),
               ),
               array(
                  'id'        => 'info_5',
                  'type'      => 'info',
                  'title'     => t('Extra Settings'),
               ),
               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link'),
                  'options'   => array( 0 => 'No', 1 => 'Yes' ),
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

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         extract(gavias_merge_atts(array(
            'title'                 => '',
            'icon'                  => '',
            'image'                 => '',
            'content'               => '',
            'link'                  => '',
            'style'                 => '',
            'hightlight'            => 'off',
            'style_text'            => '',
            'arrow'                 => '',
            'target'                => '',
            'el_class'              => '',
            'animate'               => '',
            'animate_delay'         => ''
         ), $attr));

         if($image) $image = $base_url . $image; 

         if( $target ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }
         if($image) $el_class .= ' icon-image';
         $el_class .= ' ' . $style_text;
         $el_class .= ' ' . $style;
         $el_class .= ' ' . $arrow;

         if($hightlight == 'on') $el_class .= ' highlight-box'; 
         
         $css = '';
         $css .= !empty($icon_color) ? "color:{$icon_color};" : "";
         if(!empty($css)){
            $css = " style=\"{$css}\"";
         }

         if($animate) $el_class .= ' wow ' . $animate; 

         ob_start();
         ?>
         <div class="widget gsc-icon-box-style clearfix <?php print $el_class; ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
            <div class="box-content">
               <div class="box-icon">                  
                  <?php if($icon){ ?>
                     <span class="icon <?php print $icon ?>"<?php print $css ?>></span> 
                  <?php } ?>
                  <?php if($image){ ?>
                     <span class="icon-image">
                        <img src="<?php print $image ?>" alt="<?php print strip_tags($title) ?>"/> 
                     </span> 
                  <?php } ?>                  
               </div>   
               <div class="content-inner">
                  <?php if($title){ ?>
                     <h3 class="box-title">
                        <?php if($link){ ?>
                           <a class="link" <?php if($link) print 'href="'. $link .'"' ?> <?php print $target ?>>
                        <?php } ?>
                        <?php print $title ?>
                        <?php if($link){ ?></a><?php } ?>
                     </h3>
                  <?php } ?>
                  <div class="box-desc"><?php print $content ?></div>
               </div>
            </div> 
            <?php if($arrow == 'enable-arrow'){ ?>
               <a class="arrow" <?php if($link) print 'href="'. $link .'"' ?> <?php print $target ?>><i class="gv-icon-165"></i></a>
            <?php } ?>
         </div>
         <?php return ob_get_clean() ?>
         <?php
      }

   }
endif;   




