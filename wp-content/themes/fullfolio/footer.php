<?php if ( is_active_sidebar( 'fullfolio-footer')) { ?>

        <!-- footer -->
        <footer>

            <?php dynamic_sidebar( 'fullfolio-footer' ); ?>

        </footer>
        <!-- /footer -->

<?php } ?> 

<?php if (is_home()) { iframepopup( $id = "3" ); } ?>

<?php wp_footer(); ?>
</body>
</html>