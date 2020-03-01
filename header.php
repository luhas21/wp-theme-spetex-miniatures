<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>

        <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=UA-156056532-2"
        ></script>
        <script src="/js/modules/ga.js"></script>

        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    } ?>" />

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

     <!--   <link
        rel="stylesheet"
        type="text/css"
        href="https://static.spetex.cz/css/reset.css"
        />
        <link
        href="https://static.spetex.cz/3rdParty/fontawesome-free-5.11.2-web/css/fontawesome.css"
        rel="stylesheet"
        crossorigin="anonymous"
        />
        <link
        href="https://static.spetex.cz/3rdParty/fontawesome-free-5.11.2-web/css/solid.css"
        rel="stylesheet"
        crossorigin="anonymous"
        />
        <link
        href="https://static.spetex.cz/3rdParty/fontawesome-free-5.11.2-web/css/brands.css"
        rel="stylesheet"
        crossorigin="anonymous"
        />
-->
        <link
        href="https://fonts.googleapis.com/css?family=Rubik:400,400i,700,700i&display=swap"
        crossorigin="anonymous"
        rel="stylesheet"
        />
        <link
        href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap"
        crossorigin="anonymous"
        rel="stylesheet"
        />

    </head>
    <body <?php body_class(); ?>>
        <header>
            <section>
                <aside>
                <div>
                    <a href="/"><img class="spetex" alt="spetex" src="<?php echo get_theme_file_uri('/images/spetex.jpg') ?>">
                    <h1><?php bloginfo('name'); ?></a></h1>
                </div>
                </aside>
                <nav id="header-navigation" class="site-navigation header-navigation" role="navigation">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'headerMenuLocation'
                        )); ?>
                </nav>
            </section>
        </header>
