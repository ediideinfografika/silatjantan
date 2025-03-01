<?php
if(!class_exists('element_gva_pricing_item')):
   class element_gva_pricing_item{
      public function render_form(){
         $fields = array(
            'type' => 'gsc_pricing_item',
            'title' => ('Pricing Item'), 
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title'),
                  'desc'      => t('Pricing item title'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'price',
                  'type'      => 'text',
                  'title'     => t('Price'),
               ),
               
               array(
                  'id'        => 'currency',
                  'type'      => 'text',
                  'title'     => t('Currency'),
               ),
                  
               array(
                  'id'        => 'period',
                  'type'      => 'text',
                  'title'     => t('Period'),
               ),
            
             
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content'),
                  'desc'      => t('HTML tags allowed.'),
                  'std'       => '<ul><li><strong>List</strong> item</li></ul>',
               ),
               array(
                  'id'        => 'link_title',
                  'type'      => 'text',
                  'title'     => t('Link title'),
                  'desc'      => t('Link will appear only if this field will be filled.'),
               ),
               
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
                  'desc'      => t('Link will appear only if this field will be filled.'),
               ),
               array(
                  'id'        => 'note',
                  'type'      => 'text',
                  'title'     => t('Note'),
               ),
               array(
                  'id'        => 'border_style',
                  'type'      => 'select',
                  'title'     => t('Border Style'),
                  'options'   => array(
                        ''          => 'No Border',
                        'border-style-1'   => 'Border Style Pink',
                        'border-style-2'   => 'Border Style Yellow',
                        'border-style-3'   => 'Border Style Purple',
                  )
               ),
               array(
                  'id'        => 'featured',
                  'type'      => 'select',
                  'title'     => t('Featured'),
                  'options'   => array( 'off' => 'No', 'on' => 'Yes' ),
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
         extract(gavias_merge_atts(array(
            'title'        => '',
            'currency'     => '',
            'price'        => '',
            'period'       => '',
            'content'      => '',
            'link_title'   => 'Sign Up Now',
            'link'         => '',
            'note'         => '',
            'border_style'  => '',
            'featured'     => 'off',
            'el_class'     => '',
            'animate'      => '',
            'animate_delay'   => ''
         ), $attr));

         if($border_style) $el_class .= $border_style;
         if($featured == 'on') $el_class .= ' highlight-plan'; 
         if($animate) $el_class .= ' wow ' . $animate; 
         ob_start();
         ?>
         <div class="pricing-table <?php print $el_class ?>" <?php print gavias_content_builder_print_animate_wow('', $animate_delay) ?>>
            <div class="content-wrap">
               <div class="content-inner">
                  <div class="plan-price">
                     <div class="price-value">
                        <?php if($currency){ ?>
                        <span class="dollar"><?php print $currency ?></span>
                        <?php } ?>
                        <?php if($price){ ?>
                        <span class="value"><?php print $price; ?></span>
                        <?php } ?>
                        <?php if($period){ ?>
                        <span class="interval"><span class="space">&nbsp;/&nbsp;</span><?php print $period ?></span>
                        <?php } ?>
                     </div>
                  </div>
                  <?php if($title){ ?>
                  <h4 class="plan-name"><span class="title"><?php print $title; ?></span></h4>
                  <?php } ?>
               </div>
               <?php if($content){ ?>
                  <div class="plan-list">
                     <?php print $content ?>
                  </div>
               <?php } ?>   
               <?php if($link){ ?>
                  <div class="plan-signup">
                     <a class="<?php print ( $featured == 'on' ? 'btn-theme' : 'btn-outline' ) ?>" href="<?php print $link; ?>"><?php print $link_title ?></a>
                  </div>
               <?php } ?> 
               <?php if($note){ ?>
                  <div class="plan-note">
                     <?php print $note ?>
                  </div>
               <?php } ?> 
            </div>      
         </div>
   	<?php return ob_get_clean();
      }
   }   
endif;   



