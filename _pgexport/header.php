<!DOCTYPE html> 
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html class="h-full" <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">          
        <!--ICONS-->         
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-57x57.png"> 
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-60x60.png"> 
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-72x72.png"> 
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-76x76.png"> 
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-114x114.png"> 
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-120x120.png"> 
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-144x144.png"> 
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-152x152.png"> 
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/apple-icon-180x180.png"> 
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/android-icon-192x192.png"> 
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/favicon-32x32.png"> 
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/favicon-96x96.png"> 
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/favicon-16x16.png"> 
        <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/icons/manifest.json"> 
        <meta name="msapplication-TileColor" content="#ffffff"> 
        <meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png"> 
        <meta name="theme-color" content="#ffffff">                            
        <!--PLAUSIBLE TRACKING-->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>     
    <body class="flex flex-col h-screen <?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
        <header class="bg-black fixed shadow-lg w-full z-20"> 
            <nav class="container flex flex-wrap items-center justify-between mx-auto px-4 py-5"> 
                <div class="max-w-sm"> 
                    <a href="/" class="mr-auto shadow-lg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/BWLogo.png" alt="Sage Nine Creative"></a> 
                </div>                 
                <button class="px-3 py-2 rounded text-white lg:hidden" aria-label="Nav Toggle" data-name="nav-toggler" data-pg-ia='{"l":[{"trg":"click","a":{"l":[{"t":"^nav|[data-name=nav-menu]","l":[{"t":"set","p":0,"d":0,"l":{"class.remove":"hidden"}}]},{"t":"#gt# span:nth-of-type(1)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":45,"yPercent":300}}]},{"t":"#gt# span:nth-of-type(2)","l":[{"t":"tween","p":0,"d":0.2,"l":{"autoAlpha":0}}]},{"t":"#gt# span:nth-of-type(3)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":-45,"yPercent":-300}}]}]},"pdef":"true","trev":"true","name":"NavMenuToggler"}]}'> 
                    <span class="block border-b-2 border-current my-1 w-6"></span> 
                    <span class="block border-b-2 border-current my-1 w-6"></span> 
                    <span class="block border-b-2 border-current my-1 w-6"></span> 
                </button>                 
                <div data-name="nav-menu" class="lg:flex lg:space-x-4 lg:space-y-0 lg:w-auto w-full hidden lg:items-center  flex-grow"> 
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="font-light hover:font-bold hover:underline px-0 py-2 uppercase lg:px-4 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
                            wp_nav_menu( array(
                            	'container' => '',
                            	'theme_location' => 'primary',
                            	'items_wrap' => '<div class="%2$s flex flex-col lg:flex-row mx-auto text-white" id="%1$s">%3$s</div>',
                            	'walker' => new PG_Smart_Walker_Nav_Menu()
                        ) ); ?>
                    <?php endif; ?> 
                    <a href="<?php echo get_theme_mod( 'Contact Button Link', 'contact' ); ?>" class="bg-red hover:font-bold hover:underline inline-block mt-3 px-5 py-2 rounded text-white uppercase lg:mt-0"><?php echo get_theme_mod( 'Contact Button Text', __( 'Contact', 'sage_nine_creative' ) ); ?></a> 
                </div>                 
            </nav>             
        </header>         
        <main class="flex-shrink-0 mt-20 relative">