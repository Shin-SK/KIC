<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="wrapper" class="w-100">
    <header class="header">

    <nav id="navigation" class="nav">

        <div class="nav__wrap">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.svg">
                </a>
            </div>
            <ul class="menu">
                <?php get_template_part('common/parts/nav' , 'inner'); ?>
            </ul>

            <button type="button" class="drawer-toggle drawer-hamburger">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span>
            </button>
            <aside class="drawer-nav drawer-close" role="navigation">
                <ul class="drawer-menu">
                    <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png">
                    </a>                        
                    </div>
                    <?php get_template_part('common/parts/nav' , 'inner'); ?>
                </ul>
            </aside>
        </div>

    </nav>

    </header>

    <div id="container">
        <main id="content" role="main">