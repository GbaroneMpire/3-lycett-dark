<?php 
/**
 * @param array $fields | required
 */
?>

<?php 
    extract($args);
    $callouts = $fields['callouts'];
    $info_links = $fields['info_links'];
    $image = $fields['image'];
?>

<section class="lct-side-by-side lct-section">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/side-by-side.css">

  <div class="container-md lct-smaller">

    <div class="row">

      <section class="col-md-6 pr-md-5">
        <div class="lct-side-by-side__content-wrapper pr-md-5">

          <div class="lct-side-by-side__content mb-5">
            <?= $fields['content'] ?>  
          </div>
  
          <?php if($callouts): ?>
            <section class="lct-side-by-side__callout-items pt-4">
              <div class="row">

                <?php 
                  foreach ($callouts as $callout): 
                      $callout = $callout['callout']['lct_icon_callout']; 
                    ?>

                      <div class="col-6 mb-5">

                        <?php  get_template_part('template-parts/icon-callout', null, array(
                          'fields' => $callout
                        )); ?>

                      </div> 
                      
                    <?php
                  endforeach;
                ?>

              </div>
            </section>
          <?php endif; ?>
  
          <?php if($info_links): ?>
            <section class="lct-side-by-side__info_links">
              <?php foreach ($info_links as $info_link): 
                  $file_source = $info_link['file_source'];
                  $text = $info_link['text'];
                ?>
  
                  <a href="<?= esc_url($file_source['url']) ?>" class="d-flex">
                    <i class="fa-regular fa-file-pdf"></i>
                    <span class="lct-info-link__text"><?= $text ?></span>
                  </a>
              
              <?php endforeach; ?>
              </section>
          <?php endif; ?>
        </div>

      </section>

      
      <?php if($image): ?>
        <section class="col-md-6 position-relative p-0">
          
          <div class="lct-side-by-side__image">
            <?= wp_get_attachment_image($image['ID'], null, null, array(
              'class' => 'lct-object-fit',
              'loading' => 'lazy'
            )); ?>
          </div>

        </section>
      <?php endif; ?>

      </div>
    
  </div>

  

</section>