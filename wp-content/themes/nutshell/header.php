<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <?php // Insert Google Fonts <link> here. Please use &display=swap in your URL! ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="page-header" class="page-header">
        <div class="site-logo-container">
            <a class="site-logo" href="<?php echo esc_url( get_home_url() ); ?>">
                <?php echo fx_get_client_logo( 'logo' ); ?>
            </a>
        </div>
    </header>

    <?php get_search_form(); ?>