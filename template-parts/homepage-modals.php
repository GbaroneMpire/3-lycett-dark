<?php 

  $layout_sections = get_field('lct_index_sections');

  foreach ($layout_sections as $section):

    $layout = $section['acf_fc_layout'];

    if ($layout == 'hero'): 

      $button_rows = $section['hero']['lct_hero']['buttons'];

        foreach ($button_rows as $row): 
        
          $button = $row['button'];
          $is_modal = $row['is_modal'];
          $modal_content = $row['modal_content'];
          $styles = $row['custom_styles'];

          if($is_modal): ?>

            <?php if($styles): ?>
              <style>
                <?= $styles; ?>
              </style>
            <?php endif; ?>
                                        
            <div id="<?= str_replace('#', '', $button['url']); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="<?= str_replace('#', '', $button['url']); ?>" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                  <div class="modal-header justify-content-center">
                    <h4 class="modal-title"><?= str_replace('→', '', $button['title']); ?></h4>
                  </div>

                  <div class="modal-body">
                    <?= $modal_content; ?>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div> <?php 
          
          endif; 
        
        endforeach; 

    endif;

  endforeach;  
    
?>