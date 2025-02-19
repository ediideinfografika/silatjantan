<?php 

if(!class_exists('element_gva_image_parallax')):
   class element_gva_image_parallax{
      public function render_form(){
         return array(
           'type'          => 'gva_image_parallax',
            'title'        => t('Image Parallax'),
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => t('Title for Admin'),
                  'admin'     => true
               ),
               array(
                  'id'        => 'image_1',
                  'type'      => 'upload',
                  'title'     => t('Images 1')
               ),
               array(
                  'id'        => 'image_2',
                  'type'      => 'upload',
                  'title'     => t('Images 2')
               ),
               array(
                  'id'        => 'bg_shape_1',
                  'type'      => 'text',
                  'title'     => t('Background Shape 1')
               ),
               array(
                  'id'        => 'bg_shape_2',
                  'type'      => 'text',
                  'title'     => t('Background Shape 2')
               ),
               array(
                  'id'        => 'bg_shape_3',
                  'type'      => 'text',
                  'title'     => t('Background Shape 3')
               ),
               array(
                  'id'        => 'bg_shape_4',
                  'type'      => 'text',
                  'title'     => t('Background Shape 4')
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
      }

      public static function render_content( $attr = array(), $content = '' ){
         global $base_url;
         extract(gavias_merge_atts(array(
            'title'              => '',            
            'image_1'            => '',
            'image_2'            => '',
            'bg_shape_1'         => '',
            'bg_shape_2'         => '',
            'bg_shape_3'         => '',
            'bg_shape_4'         => '',            
            'el_class'           => '',
            'animate'            => '',
            'animate_delay'      => ''
         ), $attr));

         
         if($image_1) $image_1 = $base_url . $image_1; 
         if($image_2) $image_2 = $base_url . $image_2; 

         if($animate) $el_class .= ' wow ' . $animate; 
         
         ob_start();
         ?>

         <div class="widget gsc-images-parallax <?php print $el_class; ?> ">
           <div class="widget-content">
             <div class="box-images-top">
               <?php if($image_1){ ?>
                 <img class="image-1" src="<?php print $image_1 ?>" alt="<?php print $title; ?>" />
               <?php } ?>
               <div class="shape-right">
                <?php if($bg_shape_1){ ?>
                  <span class="shape-1" style="background: <?php echo $bg_shape_1 ?>"></span>
                <?php } ?>
                <?php if($bg_shape_2){ ?>
                  <span class="shape-2" style="background: <?php echo $bg_shape_2 ?>"></span>
                <?php } ?>
               </div>
            </div>
            <div class="box-images-bottom">
               <?php if($image_2){ ?>
                 <img class="image-2" src="<?php print $image_2 ?>" alt="<?php print $title; ?>" />
               <?php } ?>
               <div class="shape-left">
                <?php if($bg_shape_3){ ?>
                  <span class="shape-3" style="background: <?php echo $bg_shape_3 ?>"></span>
                <?php } ?>
                <?php if($bg_shape_4){ ?>
                  <span class="shape-4" style="background: <?php echo $bg_shape_4 ?>"></span>
                <?php } ?>
               </div>
            </div>  

           </div>
         </div>

         <?php return ob_get_clean() ?>
        <?php            
      } 

   }
endif;   
