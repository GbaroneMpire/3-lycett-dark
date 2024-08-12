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

        <div class="col-lg">
          <p class="text-center text-lg-left">&copy; <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> <?php echo date('Y'); ?></p>
        </div>

        <div class="col-lg">
          <p class="text-center">Contact <strong><a href="https://mailto:3lycett@gmail.com">3lycett@gmail.com</a></strong> for further questions or general inquiries.</p>
        </div>

        <div class="col-lg">
          <p class="text-center text-lg-right">Designed & Developed by <a href="https://mpirecreative.com"><span class="mpire-m">M</span>pire Creative</a></p>
        </div>
        
    </div>

    <?php endif; ?>
  </div>

</footer>

<?php wp_footer(); ?>

<?php get_template_part('/template-parts/homepage-modals'); ?>

<?php get_template_part('/template-parts/modals'); ?>

</body>
</html>
