<?php 
/**
 * @param array $fields | required
 */
?>

<?php

  extract($args);

  $callouts = $fields['callouts'];

?>

<?php if ($callouts): ?>
  
  <section class="lct-callouts lct-section border-bottom">
    <div class="container-md lct-smaller">
      <div class="row">
        <?php 
          foreach($callouts as $callout): 
          
              $callout = $callout['lct_icon_callout'];
            ?>

              <div class="col-6 col-md-4 col-lg pb-5">

                <?php get_template_part('/template-parts/icon-callout', null, array(
                  'fields' => $callout,
                  'is_icon_callout_section' => true
                )); ?>

              </div> <?php

          endforeach;
        ?>  
      </div>
    </div>
  </section>
 
<?php endif; ?>