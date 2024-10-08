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
  $subtext = $fields['subtext'];
  $headline = $fields['headline'];
  $is_fullscreen = $fields['enable_fullscreen'];
?>

<section class="lct-hero">

  <?php if(is_front_page()): ?>
    <div id="intro-cover"></div>
  <?php endif; ?>

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/hero.css">

  <div class="p-0<?= (!$is_fullscreen) ? ' container-xl' : '' ?>">
    <div class="row no-gutters">

      <div class="col-lg">
        <div class="lct-hero__content position-relative d-flex align-items-center"<?= ($is_fullscreen) ? ' style="min-height:100svh;"' : '' ?>>
          
          <?php 
            if ($bg || $video_bg): ?>
              <figure class="lct-hero__background lct-background-cover"> <?php

                if($video_bg):   

                  if (is_string($video_bg)):

                    echo do_shortcode($video_bg);
                    
                  else:
                    echo $video_bg;
                  endif;

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

                  <div class="col-sm d-flex flex-column lct-gap-1 align-items-center lct-hero__text-content">

                    <?php if ($show_logo): ?>
                        <div class="lct-hero__logo">
                          <?= get_template_part('/template-parts/logo', 'square'); ?>

                          <?php if(is_front_page()): ?>
                            <div class="loader-line"></div>
                          <?php endif; ?>
                        </div> 

                    <?php endif; ?>

                    <?php if($subtext): ?>
                      <span class="lct-hero__subtext display-block text-uppercase text-center">
                        <?= $subtext; ?>
                      </span>
                    <?php endif; ?>
                      
                    <?php if($headline): ?>
                      <span class="lct-hero__headline">
                        <?= $fields['headline']; ?>
                      </span>
                    <?php endif; ?>

                    <div class="lct-hero__buttons d-flex lct-gap-1">
                      <?php 
                        if($buttons): 
                      
                          foreach ($buttons as $button_row): 
                      
                              $button = $button_row['button'];
                              $link_target = $button['target'] ? $button['target'] : '_self';
                              $is_modal = $button_row['is_modal'];

                            ?>

                              <a href="<?= esc_url($button['url']) ?>" target="<?= esc_attr($link_target) ?>" class="lct-button" <?= ($is_modal) ? 'data-toggle="modal"': ''; ?>><?= esc_html($button['title']) ?></a>

                            <?php

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