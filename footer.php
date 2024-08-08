<footer id="footer">

  <div class="container">

    <!-- Check for footer widgets -->
    <?php if(is_active_sidebar('footer-widget-area')): ?>

      <div class="row pt-5 pb-4" id="footer" role="navigation">
        <?php dynamic_sidebar('footer-widget-area'); ?>
      </div>

    <?php else: ?>
    <!-- else: default footer -->
    
    <div class="row pt-3">

        <div class="col-sm">
          <p class="text-center text-sm-left">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
        </div>

        <div class="col-sm">
          <p class="text-center text-sm-right">Designed & Developed by <a href="https://mpirecreative.com"><span class="mpire-m">M</span>pire Creative</a></p>
        </div>
        
    </div>

    <?php endif; ?>
  </div>

</footer>

<?php wp_footer(); ?>

<?php 

  $layout_sections = get_field('lct_index_sections');

  foreach ($layout_sections as $section):



    lct_test($section);


  endforeach;

  
    /*
    foreach ($button_rows as $row): 
    
      $button = $row['button'];
      $is_modal = $row['is_modal'];
      $modal_content = $row['modal_content'];

      if($is_modal): ?>
                                    
        <div id="<?= str_replace('#', '', $button['url']); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="<?= str_replace('#', '', $button['url']); ?>" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title"><?= str_replace('#', '', $button['url']); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
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
    
    endforeach; */
?>

</body>
</html>
