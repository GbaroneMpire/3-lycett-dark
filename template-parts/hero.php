<?php 
/**
 * @param array $fields | required
 */
?>

<?php 

  extract($args);

  $bg = $fields['background_image']['ID'];
  $video_bg = $fields['video_background'];
  $buttons = $fields['buttons'];
  $show_logo = $fields['add_site_logo'];
?>

<section class="lct-hero">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/hero.css">

  <div class="container-xl p-0">
    <div class="row no-gutters">

      <div class="col-lg">
        <div class="lct-hero__content position-relative d-flex align-items-center">
          
          <?php 

            if ($bg || $video_bg): ?>
              <figure class="lct-hero__background lct-background-cover"> <?php

                if($video_bg):   
                  echo $video_bg;
                elseif($bg):
                  echo wp_get_attachment_image( $bg, 'lct-banner', null, array(
                    'class' => 'lct-object-fit bottom'
                  )); 
                endif; ?>
            
              </figure><?php 
            endif; 
          ?>
    
          <aside class="lct-hero__text-container position-relative">

              <div class="container lct-narrow">

                <div class="row">

                  <div class="col-sm d-flex flex-column lct-gap-1 lct-hero__text-content">

                    <?php 
                      if ($show_logo):
                        get_template_part('/template-parts/logo', 'square');
                      endif;
                    ?>

                    <span class="lct-hero__subtext display-block text-uppercase">
                      <?= $fields['subtext']; ?>
                    </span>
          
                    <span class="lct-hero__headline">
                      <?= $fields['headline']; ?>
                    </span>

                    <div class="lct-hero__buttons">
                      <?php 
                        if($buttons): 
                      
                          foreach ($buttons as $button): 
                      
                              $button = $button['button'];
                              $link_target = $button['target'] ? $button['target'] : '_self';
                            ?>

                              <div class="lct-hero__buttons">
                                <a href="<?= esc_url($button['url']) ?>" target="<?= esc_attr($link_target) ?>" class="lct-button"><?= esc_html($button['title']) ?></a>
                              </div> <?php

                          endforeach;
                        endif; 
                      ?>
                    </div>
    
                  </div>
                </div>

              </div>
    
         
          </aside>
          
        </div>
      </div>

    </div>
  </div>
</section>