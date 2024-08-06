<footer id="footer" class="mt-5">

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

</body>
</html>
