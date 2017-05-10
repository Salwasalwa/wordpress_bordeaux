<?php mh_before_footer(); ?>
<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) { ?>
    <footer class="mh-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
        <div class="slider">
            <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
        </div>

        <div class="mh-container mh-container-inner mh-footer-widgets mh-row clearfix">
            <?php if (is_active_sidebar('footer-1')) { ?>
                <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-1">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
                <?php } ?>
                <?php if (is_active_sidebar('footer-2')) { ?>
                    <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-2">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                    <?php } ?>
                    <?php if (is_active_sidebar('footer-3')) { ?>
                        <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-3">
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                        <?php } ?>
                        <?php if (is_active_sidebar('footer-4')) { ?>
                            <div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-4">
                                <p>Mairie de Bordeaux</p>
                                <p>Place Pey Berland</p>
                                <p>33000 Bordeaux</p>
                                <p>Adresse postale : </p>
                                <p>Place Pey-Berland</p>
                                <p>33045 Bordeaux Cedex</p></br>
                                <p>Contact</p>
                                <p>Du lundi au vendredi de 8h30 a 18h</p>
                                <p>Tél: 05 56 10 20 30</p></br>
                                <?php dynamic_sidebar('footer-4'); ?>
                            </div>
                            <?php } ?>
                        </div>
                    </footer>
                    <?php } ?>
                    <?php mh_after_footer(); ?>
                    <?php wp_footer(); ?>
                </body>
                </html>
