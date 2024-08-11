<?php

  $modals = get_field('lct_modals', 'option');

  foreach($modals as $modal): 

      $modal_title = $modal['title']
    ?>

          <div id="<?= $modal['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="<?= $modal['id']; ?>">
              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">

                  <div class="modal-header justify-content-center">
                    <?php if($modal_title): ?> 
                      <h4 class="modal-title"><?= $modal_title; ?></h4>
                    <?php endif; ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fa-sharp fa-thin fa-xmark"></i></span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <?= $modal['content']; ?>
                  </div>

                </div>
              </div>
            </div> <?php 
  
  endforeach;

  ?>