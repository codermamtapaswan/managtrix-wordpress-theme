    <?php

    /**
     * Footer template file
     * 
     * @package Managtrix
     */

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }

    ?>
    </main>
    <!-- Main layout Sections ====================== END -->

    <!-- Footer  ================================= START -->
    <footer>
        <div class="container">
            <div class="row row-gap">
                <div class="col-lg-3 col-md-6">
                    <div class="title">Guideline</div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Footer_menu_1',
                            'container' => 'ul',
                            'item_wrap' => '<ul id="%1%" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="title">Retirement Benefit</div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Footer_menu_2',
                            'container' => 'ul',
                            'item_wrap' => '<ul id="%1%" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="title">Products</div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Footer_menu_3',
                            'container' => 'ul',
                            'item_wrap' => '<ul id="%1%" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="title">Importants Links</div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Footer_menu_4',
                            'container' => 'ul',
                            'item_wrap' => '<ul id="%1%" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="flex-between-wrap">

                        <div class="mail flex">
                            <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.5833 1.91675L17.125 26.0834L12.2916 15.2084L1.41663 10.3751L25.5833 1.91675Z" stroke="#009A77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <div class="mail-content">
                                <span class="h6">Say Hello</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                            </div>

                        </div>

                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        } else {
                            bloginfo('name');
                        }
                        ?>


                        <?php
                        if (is_active_sidebar('social_links')) {
                            dynamic_sidebar('social_links');
                        }
                        ?>



                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">Copyright Managetrix <?php echo date('Y') ?></div>
    </footer>
    <!-- Footer =================================== END -->


    <!-- Scroll to Top Button ==================== START -->
    <button title="back to top button" id="scroll_to_top">
        <svg width="16" viewBox="0 -4.5 20 20" xmlns="http://www.w3.org/2000/svg">
            <g stroke-width="0" />
            <g stroke-linecap="round" stroke-linejoin="round" />
            <path d="M19.708 10.634c.39-.405.39-1.06 0-1.464L11.444.607a1.95 1.95 0 0 0-2.827 0L.292 9.232c-.385.4-.39 1.048-.01 1.454a.976.976 0 0 0 1.425.01l7.617-7.893a.975.975 0 0 1 1.414 0l7.557 7.83a.974.974 0 0 0 1.413 0" fill-rule="evenodd" />
        </svg>
    </button>
    <!-- Scroll to Top Button ====================== END -->


    <!-- Scripts Links =========================== START -->
    <?php wp_footer(); ?>


    </body>

    </html>