<?php 

if(!class_exists('element_gva_box_hover')):
   class element_gva_box_hover{
      
      public function render_form(){
         $fields = array(
            'type'            => 'gsc_box_hover',
            'title'           => t('Box Hover'),
            'fields' => array(
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => t('Icon class'),
                  'std'       => '',
                  'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="http://gaviasthemes.com/icons/">Custom icon</a>'),
               ),
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => 'Title for box',
                  'admin'     => true
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
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link'),
                  'options'   => array( 'off' => 'No', 'on' => 'Yes' ),
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'height',
                  'type'      => 'text',
                  'title'     => t('Min Height of Box'),
                  'desc'      => t('e.g 220px')
               ),
               array(
                  'id'        => 'highlight',
                  'type'      => 'select',
                  'title'     => t('Highlight'),
                  'options'   => array( '' => 'No', 'highlight' => 'Yes' ),
                  'class'     => 'width-1-2'
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
                  'class'     => 'width-1-2'
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
               )
            )                                    
         );
         return $fields;
      }

      public static function render_content( $attr = array(), $content = '' ){
         extract(gavias_merge_atts(array(
            'icon'               => '',
            'title'              => '',
            'content'            => '',
            'link'               => '',
            'height'             => '',
            'target'             => '',
            'el_class'           => '',
            'highlight'          => '',
            'animate'            => '',
            'animate_delay'      => ''
         ), $attr));
         
         // target
         if( $target ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }

         $css = '';
         $css .= !empty($height) ? "min-height: {$height};" : "";
         if(!empty($css)){
            $css = " style=\"{$css}\"";
         }

         if($highlight) $el_class .= ' ' . $highlight;
         if($animate) $el_class .= ' wow ' . $animate; 

         $title_html = $title;
         if($link){
            $title_html = "<a class=\"box-link\" href=\"{$link}\" {$target}>" . $title . "</a>";
         }
         ob_start();
         ?>
         <div class="widget gsc-box-hover clearfix <?php print $el_class; ?>"<?php print $css ?> <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
            <?php if($link){ ?><a class="overlay-link" href="<?php print $link ?>"></a><?php } ?>   
            <div class="box-content">
               <div class="content-frontend">
                  <?php if($icon){ ?>
                     <div class="icon"><i class="<?php print $icon ?>"></i></div>
                  <?php } ?>
                  <?php if($title){ ?>
                     <div class="title"><?php print $title_html ?></div>
                  <?php } ?>
               </div>
               <div class="content-backend">
                  <div class="title"><?php print $title_html ?></div>
                  <div class="desc"><?php print $content ?></div>
               </div>
            </div>
         </div>  
         <?php return ob_get_clean() ?>
         <?php
      }
   }
endif;   




