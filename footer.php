        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="d-xs-none col-sm-3">
                        <?php
                        if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ):
                        endif;
                        ?>
                    </div>
                    <div class="d-xs-none col-sm-3">
                        <?php
                        if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ):
                        endif;
                        ?>
                    </div>
                    <div class="col-12 col-sm-3">
                        <?php
                        if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ):
                        endif;
                        ?>
                    </div>
                    <div class="footer__contact col-12 col-sm-3">
                        <?php
                        if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contact') ):
                        endif;
                        ?>
                    </div>
                    <div class="footer__realized text-center mtl col-xl-12">
                        <p><?php _e('Realisatie door', 'theme-name'); ?> <a target="_blank" href="https://www.zekerzichtbaar.nl">Zeker Zichtbaar</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <?php
        wp_footer();
        ?>

    </body>
</html>
