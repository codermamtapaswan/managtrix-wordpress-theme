<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php bloginfo('name') ?></title>

    <?php wp_head(); ?>

    <style>
        @font-face {
            font-display: swap;
            font-family: "BB Torsos Pro";
            font-style: normal;
            font-weight: medium;
            src: url("<?php echo MANAGTRIX_DIR_URI . '/assets/fonts/torsos/fonnts.com-bb-torsos-pro-medium-webfont.ttf' ?>") format("truetype");
        }

        @font-face {
            font-display: swap;
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 400;
            src: url('<?php echo MANAGTRIX_DIR_URI . "/assets/fonts/manrope/manrope-v15-latin-regular.woff2" ?>') format('woff2'),
                url("<?php echo  MANAGTRIX_DIR_URI . 'assets/fonts/manrope/manrope-v15-latin-regular.ttf' ?>") format('truetype');
        }

        /* manrope-500 - latin */
        @font-face {
            font-display: swap;
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 500;
            src: url('<?php echo MANAGTRIX_DIR_URI . "/assets/images/hr-process.svg" ?>') format('woff2'),
                url('<?php echo MANAGTRIX_DIR_URI . "/assets/fonts/manrope/manrope-v15-latin-500.ttf" ?>') format('truetype');
        }

        /* manrope-600 - latin */
        @font-face {
            font-display: swap;
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 600;
            src: url('<?php echo MANAGTRIX_DIR_URI . "/assets/fonts/manrope/manrope-v15-latin-600.woff2" ?>') format('woff2'),
                url('<?php echo MANAGTRIX_DIR_URI . "/assets/fonts/manrope/manrope-v15-latin-600.ttf" ?>') format('truetype');
        }

        @font-face {
            font-display: swap;
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 700;
            src: url('<?php echo MANAGTRIX_DIR_URI . "/assets/fonts/manrope/manrope-v15-latin-700.woff2" ?>') format('woff2'),
                url('<?php echo MANAGTRIX_DIR_URI . "/assets/fonts/manrope/manrope-v15-latin-700.ttf" ?>') format('truetype');
        }
    </style>

</head>

<body <?php body_class(); ?>>


    <!-- Header  ================================= START -->
    <header>
        <div class="container">
            <div class="menu-toggle-btn">
                <svg fill="#000" width="20" height="20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                    </path>
                </svg>
            </div>

            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                bloginfo('name');
            }
            ?>

            <div class="search-menu">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'Primary_menu',
                    'container' => 'nav',
                    'container_class' => 'menu',
                    'item_wrap' => '<ul id="%1%s" class="%2$s" >%3$s</ul>'
                ));

                ?>


                <div class="search-toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M7.333 12.667A5.333 5.333 0 1 0 7.333 2a5.333 5.333 0 0 0 0 10.667ZM14 14l-2.9-2.9" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>

            <form class="menu-search-form" action="<?php echo home_url('/'); ?>" method="get">
                <input type="search" placeholder="<?php echo esc_attr_x('What can we help you find today?', 'placeholder') ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" required="">
                <button type="submit" class="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17" fill="none">
                        <path d="M13.8086 12.1039L11.0824 9.37799C10.9594 9.25496 10.7926 9.1866 10.6176 9.1866H10.1719C10.9266 8.22146 11.375 7.00752 11.375 5.68694C11.375 2.54545 8.8293 0 5.6875 0C2.5457 0 0 2.54545 0 5.68694C0 8.82843 2.5457 11.3739 5.6875 11.3739C7.0082 11.3739 8.22227 10.9255 9.1875 10.1709V10.6165C9.1875 10.7915 9.25586 10.9583 9.37891 11.0813L12.1051 13.8072C12.3621 14.0643 12.7777 14.0643 13.032 13.8072L13.8059 13.0335C14.0629 12.7765 14.0629 12.3609 13.8086 12.1039ZM5.6875 9.1866C3.7543 9.1866 2.1875 7.62269 2.1875 5.68694C2.1875 3.75393 3.75156 2.18729 5.6875 2.18729C7.6207 2.18729 9.1875 3.7512 9.1875 5.68694C9.1875 7.61996 7.62344 9.1866 5.6875 9.1866Z" fill="#000"></path>
                    </svg>
                </button>
            </form>

            <div class="flex-wrap header-button">
                <a href="#" class="mg-btn-bg">Request a Demo</a>
                <a href="#" class="mg-btn-bd">Contact Sales</a>
            </div>

        </div>
    </header>
    <!-- Header  ======================-============ END -->

    <!-- Main layout Sections ===================== START -->
    <main class="all-page">