<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header__logo-wrapper">
          <div class="header__logo header__logo--img to-top-btn">
          <?php 
            $logo_img = '';
            $custom_logo_id = get_theme_mod( 'custom_logo' );
    
            if( $custom_logo_id ){
              $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
                'itemprop' => 'logo',
              ) );
            }
    
            echo $logo_img;
          ?>           
          </div>
          <div class="header__logo header__logo--text">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-antedata-text.svg" width="279" height="18" alt="altenative data investments.">
          </div>
        </div>
        <button type="button" class="header__nav-btn" js-dropdown-trigger data-id="#nav">
          <span></span>
        </button>
        <nav class="header__nav" id="nav">
          <ul class="header__nav-list list-reset">
            <li class="header__nav-item">
              <a href="#why" class="header__nav-link">Why Antedata?</a>
            </li>
            <li class="header__nav-item">
              <a href="#solutions" class="header__nav-link">Solutions</a>
            </li>
            <li class="header__nav-item">
              <a href="#partnership" class="header__nav-link">Partnership</a>
            </li>
            <li class="header__nav-item">
              <a href="#values" class="header__nav-link">Values</a>
            </li>
            <li class="header__nav-item">
              <a href="#team" class="header__nav-link">Team</a>
            </li>
            <li class="header__nav-item header__nav-item--contact">
              <a class="header__nav-link" href="#" data-open-modal="feedback">Contact</a>
            </li>
          </ul>
        </nav>
        <a href="/home/" class="header__home-link" title="Back to the home page.">
          <svg width="48" height="48">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#icon-close"></use>
          </svg>
        </a>
      </div>
    </header>