<?php 
/**
 * @param array $fields | required
 */
?>

<?php

  extract($args);
  $slides = $fields['highlight_slides'];
?>

<section class="lct-highlights lct-section">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/highlights.css">

  <div class="container-md lct-smaller">
    <div class="row mb-5">
      <div class="col-md-6">
        <h2 class="lct-highlights__heading lct-main-heading"><?= $fields['heading'] ?></h2>
      </div>
      <div class="col-md-6">
        <div class="lct-highlights__description">
          <p><?= $fields['description'] ?></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <section class="lct-highlight-slides" data-flickity='{ "wrapAround": true, "pageDots": false }'>

          <?php 
            
            foreach($slides as $slide): 
            
                $description = $slide['description'];
                
              ?>

                <div class="lct-highlights__slide">

                  <div class="lct-inner position-relative d-flex flex-column justify-content-end p-5">

                    <div class="lct-highlight-slide__background lct-background-cover">
                      <?= wp_get_attachment_image($slide['background_image']['ID'], null, null, array(
                        'class' => 'lct-object-fit'
                      )); ?>
                    </div>
  
                    <div class="lct-highlight-slide_text-wrapper text-center position-relative p-5">
  
                      <h4 class="lct-highlight-slide__heading"><?= $slide['heading'] ?></h4>
  
                      <?php if($description): ?>
                        <div class="lct-highlight-slide__description d-flex flex-column-reverse">
                          <details>
                            <summary class="lct-highlight-slide__summary">Read More</summary>
                            <?= $description ?>
                          </details>
                          <div class="lct-highlight-slide__preview"><?= $description ?></div>
                        </div>
                      <?php endif; ?>
  
                    </div>

                  </div>
                  
                </div>   
              <?php
            endforeach 
          ?>

        </section>
      </div>
    </div>
  </div>
</section>

