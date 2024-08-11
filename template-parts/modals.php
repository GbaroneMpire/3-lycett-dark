<?php

  $modals = get_field('lct_modals');

  foreach($modals as $modal): 

      $modal_title = $modal['title']
    ?>

          <div id="<?= $modal['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="<?= $modal['id']; ?>">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                  <?php if($modal_title): ?> 
                    <div class="modal-header justify-content-center">
                      <h4 class="modal-title"><?= $modal_title; ?></h4>
                    </div>
                  <?php endif; ?>

                  <div class="modal-body">
                    <?= $modal['content']; ?>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div> <?php 
  
  endforeach;

  ?>