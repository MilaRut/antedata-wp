<footer class="footer">
      <div class="container">
        <p class="footer__copyright">© Copyright Antedata, 2024</p>
        <div class="footer__links">
          <a class="footer__link accent" href="/page-terms/">Terms of Use</a>
          <a class="footer__link accent" href="/page-privacy/">Privacy policy</a>
        </div>
      </div>
    </footer>
  </div>

  <button type="button" class="to-top-btn" id="to-top-btn" title="To top">
    <svg width="53" height="29" fill="currentColor">
      <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#to-top"></use>
    </svg>
  </button>

  <!-- Модалки -->
  <div class="modal modal--preload modal--fit-content" id="collective" data-modal="collective">
    <div class="modal__wrapper">
      <div class="modal__overlay" data-close-modal></div>
      <div class="modal__content">
        <p class="modal__title semibold-condensed">ranked best 1% at&nbsp;Collective2</p>
        <div class="modal__image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/img/rated.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/rated@2x.webp 2x">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/rated.png" srcset="<?php bloginfo('template_url'); ?>/assets/img/rated@2x.png 2x" width="1050" height="525" loading="lazy"
              alt="Company rating at Collective2.">
          </picture>
        </div>
        <button class="modal__close-btn btn-reset" type="button" aria-label="Close popup" data-close-modal>
          <svg width="48" height="48">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#icon-close"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="modal modal--preload modal--fit-content" id="performance" data-modal="performance">
    <div class="modal__wrapper">
      <div class="modal__overlay" data-close-modal></div>
      <div class="modal__content">
        <p class="modal__title semibold-condensed">Performance of strategy</p>
        <div class="modal__image">
          <picture>
            <source type="image/webp" srcset="<?php bloginfo('template_url'); ?>/assets/img/graph.webp 1x, <?php bloginfo('template_url'); ?>/assets/img/graph@2x.webp 2x">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/graph.png" srcset="<?php bloginfo('template_url'); ?>/assets/img/graph@2x.png 2x" width="1050" height="525" loading="lazy"
              alt="Performance graphic.">
          </picture>
        </div>
        <button class="modal__close-btn btn-reset" type="button" aria-label="Close popup" data-close-modal>
          <svg width="48" height="48">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#icon-close"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="modal modal--preload modal--fit-content" id="certificate" data-modal="certificate">
    <div class="modal__wrapper">
      <div class="modal__overlay" data-close-modal></div>
      <div class="modal__content">
        <p class="modal__title semibold-condensed">Details of certificate</p>
        <div class="modal__table">
          <div class="modal__row">
            <span>Name</span>
            <span class="accent">AMC on Marbling AnteData long-short</span>
          </div>
          <div class="modal__row">
            <span>ISIN</span>
            <span>CH1335773789</span>
          </div>
          <div class="modal__row">
            <span>SSPA Product Type</span>
            <span>Tracker Certificate (1300)</span>
          </div>
          <div class="modal__row">
            <span>Issuer</span>
            <span>UBS</span>
          </div>
          <div class="modal__row">
            <span>Denomination</span>
            <span>USD 100</span>
          </div>
          <div class="modal__row">
            <span>Issue Price</span>
            <span>USD 100</span>
          </div>
          <div class="modal__row">
            <span>Portfolio Advisor</span>
            <span>Marbling Financial Group AG</span>
          </div>
          <div class="modal__row">
            <span>Research Provider</span>
            <span>AnteData</span>
          </div>
          <div class="modal__row">
            <span>Settlement Currency</span>
            <span>USD</span>
          </div>
          <div class="modal__row">
            <span>Advisor Fee</span>
            <span>1.5% + 15% Performance Fee</span>
          </div>
          <div class="modal__row">
            <span>Clearing</span>
            <span>SIX Swiss Exchange</span>
          </div>
          <div class="modal__row">
            <span>Public Offering</span>
            <span>Switzerland</span>
          </div>
        </div>
        <a class="modal__get-info-btn btn" href="#" data-open-modal="feedback">Get more info</a>
        <button class="modal__close-btn btn-reset" type="button" aria-label="Close popup" data-close-modal>
          <svg width="48" height="48">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#icon-close"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="modal modal--preload modal--fit-content" id="feedback" data-modal="feedback">
    <div class="modal__wrapper">
      <div class="modal__overlay" data-close-modal></div>
      <div class="modal__content">
        <div class="modal__inner-content feedback">
          <div class="modal__heading">
            <p class="modal__title semibold-condensed">Contact us</p>
            <p class="modal__text">Reach out to our expert team for a detailed consultation on how our unique insights
              and bespoke strategies can help you improve your financial performance.</p>
          </div>
          <div class="feedback__contact-wrapper">
            <div class="feedback__logo">
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
            <div class="feedback__logo-text">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg/logo-antedata-text.svg" width="159" height="15" alt="alternative data solutions.">
            </div>
            <address class="feedback__address-wrapper">
              <p class="feedback__address feedback__address--tel">
                <span class="icon">
                  <svg width="34" height="34">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#phone"></use>
                  </svg>
                </span>
                <a href="tel:+<?php the_field('phone_link')?>"><?php the_field('phone')?></a>
              </p>
              <p class="feedback__address feedback__address--address">
                <span class="icon">
                  <svg width="20" height="29">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#address"></use>
                  </svg>
                </span>
                <a><a><?php the_field('address')?></a></a>
              </p>
              <p class="feedback__address feedback__address--email">
                <span class="icon">
                  <svg width="36" height="36">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#email"></use>
                  </svg>
                </span>
                <a href="mailto:<?php the_field('email')?>"><?php the_field('email')?></a>
              </p>
            </address>
            <div class="feedback__socials">
              <ul class="feedback__socials-list list-reset">
                <li class="feedback__socials-item">
                  <a href="<?php the_field('linkedin_link')?>" target="_blank"
                    rel="noreferrer noopener nofollow">
                    <svg width="16" height="16">
                      <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#linkedin"></use>
                    </svg>
                  </a>
                </li>
                <li class="feedback__socials-item">
                  <a href="<?php the_field('twitter_link')?>" target="_blank" rel="noreferrer noopener nofollow">
                    <svg width="26" height="26">
                      <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#twitter"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="feedback__form">
              <p class="feedback__form-title">Send us a message</p>
              <?php echo do_shortcode('[contact-form-7 id="6211e86" title="Контактная форма"]'); ?>
            </div>
        </div>
        <button class="modal__close-btn btn-reset" type="button" aria-label="Close popup" data-close-modal>
          <svg width="48" height="48">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#icon-close"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>

</html>