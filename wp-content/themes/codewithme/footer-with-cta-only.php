<footer id="site-footer">
    <?php if ( is_active_sidebar( 'footer-section-one' ) ) : ?>
        <div class="footer-section-one">
            <?php dynamic_sidebar( 'footer-section-one' ); ?>
        </div>

    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
