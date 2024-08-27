<!-- Start Header Site -->
<header id="header-content" class="site-header">

    <div class="header-wrapper header-type-1 nasa-header-sticky">
        <div class="nasa-topbar-wrap">
            <div id="top-bar" class="top-bar">
                <!-- Desktop | Responsive Top-bar -->
                <div class="row">
                    <div class="large-12 columns">
                        <marquee>
                            <div class="marq"><span>COD Available on Minimum Order of ₹499 /-</span> <span>
                                    Limited Time Only</span> <span> Our Exclusive Deals!</span> <span>Hurry,
                                    Grab Yours Now!</span> <span>Explore Our Premium Offers Now!</span></div>
                        </marquee>

                        <style>
                            .marq {
                                display: flex;
                                justify-content: space-between;
                                width: 100%;
                            }

                            .marq span {
                                margin-right: 30px;
                                text-align: center;
                            }
                        </style><!--                     <div class="left-text left rtl-right">
       <marquee><div class="marq"><span>COD Available on Minimum Order of ₹499 /-</span> <span> Limited Time Only</span> <span> Our Exclusive Deals!</span> <span>Hurry, Grab Yours Now!</span> <span>Explore Our Premium Offers Now!</span></div></marquee>

<style>
.marq {
display: flex;
justify-content: space-between;
width: 100%; 
}

.marq span {
margin-right:30px;
text-align: center; 
}
</style>                    </div> -->
                        <div class="right-text nasa-hide-for-mobile right rtl-left">
                            <div class="topbar-menu-container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nasa-hide-for-mobile">
                <a class="nasa-icon-toggle" href="javascript:void(0);" rel="nofollow">
                    <i class="nasa-topbar-up pe-7s-angle-up"></i>
                    <i class="nasa-topbar-down pe-7s-angle-down"></i>
                </a>
            </div>
        </div>


        <div class="sticky-wrapper">
            <div id="masthead" class="site-header">

                <div class="row">
                    <div class="large-12 columns header-container">
                        <div class="nasa-hide-for-mobile nasa-wrap-event-search">
                            <div
                                class="nasa-relative nasa-header-flex nasa-elements-wrap nasa-wrap-width-main-menu jbw">
                                <!-- Logo -->
                                <div class="order-1 logo-wrapper">
                                    <a class="logo nasa-logo-retina nasa-has-sticky-logo nasa-has-mobile-logo"
                                        href="<?php echo osc_base_url(); ?>" title="<?php echo osc_page_title(); ?> - "
                                        rel="Home">

                                        <?php if (file_exists(WebThemes::newInstance()->getCurrentThemePath() . "images/logo.jpg")) { ?>
                                            <a href="<?php echo osc_base_url(); ?>">
                                                <img src="<?php echo osc_current_web_theme_url('images/logo.jpg'); ?>"
                                                    alt="<?php echo osc_page_title(); ?>"
                                                    title="<?php echo osc_page_title(); ?>" />
                                            </a>
                                        <?php } else { ?>
                                            <h3><a href="<?php echo osc_base_url(); ?>"><?php echo osc_page_title(); ?></a>
                                            </h3>

                                        <?php } ?>
                                </div>

                                <!-- Group icon header -->
                                <div class="order-3 icons-wrapper">
                                    <div class="nasa-header-icons-wrap">
                                        <ul class="header-icons">
                                            <li>
                                                <?php if (osc_users_enabled()) { ?>
                                                    <?php if (osc_is_web_user_logged_in()) { ?>
                                                        <?php printf(__('Hi %s', 'twitter'), osc_logged_user_name() . '!'); ?>
                                                        &middot;
                                                        <a
                                                            href="<?php echo osc_user_dashboard_url(); ?>"><?php _e('My account', 'twitter'); ?></a>
                                                        &middot;
                                                        <a
                                                            href="<?php echo osc_user_logout_url(); ?>"><?php _e('Logout', 'twitter'); ?></a>
                                                    <?php } else { ?>
                                                        <a
                                                            href="<?php echo osc_user_login_url(); ?>"><?php _e('Login', 'twitter'); ?></a>
                                                        &middot;
                                                        <a
                                                            href="<?php echo osc_register_account_url(); ?>"><?php _e('Register', 'twitter'); ?></a>
                                                    <?php } ?>
                                                <?php } ?>
                                            </li>
                                            <?php if (osc_count_web_enabled_locales() > 1) { ?>
                                                <?php osc_goto_first_locale(); ?>
                                                <li class="languages">
                                                    &middot;
                                                    <a class="active" href="#"><?php _e('Language', 'twitter'); ?>
                                                        <?php while (osc_has_web_enabled_locales()) {
                                                            if (osc_locale_code() == osc_current_user_locale()) { ?>(<?php echo osc_locale_field('s_short_name'); ?>)<?php }
                                                        } ?></a>
                                                    <ul>
                                                        <?php $i = 0; ?>
                                                        <?php osc_goto_first_locale(); ?>
                                                        <?php while (osc_has_web_enabled_locales()) { ?>
                                                            <li <?php if ($i == 0) {
                                                                echo "class='first'";
                                                            } ?>><a
                                                                    id="<?php echo osc_locale_code(); ?>"
                                                                    href="<?php echo osc_change_language_url(osc_locale_code()); ?>"><?php echo osc_locale_field('s_short_name'); ?></a>
                                                            </li>
                                                            <?php $i++;
                                                        } ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        <?php } ?>
                                        <?/* <ul class="header-icons">
                                            <li class="first nasa-icon-account-mobile menus-account"><a
                                                    class="nasa-login-register-ajax nasa-flex" data-enable="1"
                                                    href="my-account/index.html" title="Login / Register"><i
                                                        class="nasa-icon pe7-icon pe-7s-user"></i></a></li>
                                            <li class="nasa-icon-mini-cart"><a href="shopping-cart/index.html"
                                                    class="cart-link mini-cart cart-inner nasa-flex jc"
                                                    title="Cart" rel="nofollow"><span class="icon-wrap"><i
                                                            class="nasa-icon cart-icon icon-nasa-cart-3"></i><span
                                                            class="nasa-cart-count nasa-mini-number cart-number hidden-tag nasa-product-empty">0</span></span><span
                                                        class="icon-text hidden-tag">Cart</span></a></li>
                                            <li class="nasa-icon-search nasa-hide-for-mobile"><a
                                                    class="search-icon desk-search nasa-flex"
                                                    href="javascript:void(0);" data-open="0" title="Search"
                                                    rel="nofollow"><i
                                                        class="nasa-icon nasa-search icon-nasa-if-search"></i></a>
                                            </li>
                                        </ul> */ ?>
                                    </div>
                                </div>

                                <!-- Main menu -->
                                <div class="wide-nav fgr-2 order-2 fjct nasa-bg-wrap nasa-nav-style-1">
                                    <div class="nasa-menus-wrapper nasa-menus-wrapper-reponsive nasa-loading"
                                        data-padding_x="35">
                                        <div class="nav-wrapper main-menu-warpper">
                                            <ul id="site-navigation"
                                                class="header-nav nasa-to-menu-mobile nasa-main-menu">
                                                <li
                                                    class="menu-item menu-item-home current-menu-item page_item page-item-3714 current_page_item default-menu root-item nasa_even">
                                                    <a title="Home" href="/" class="nasa-title-menu">
                                                        <i class="pe-7s-angle-down nasa-open-child"></i>Home
                                                    </a>
                                                </li>


                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children current_page_parent menu-parent-item nasa-megamenu root-item cols-5 nasa_odd">
                                                    <a href="https://aayuheal.com/shop/" class="nasa-title-menu"
                                                        style="font-size: 84.3125%; margin-right: 29.5094px; margin-left: 0px;"><i
                                                            class="pe-7s-angle-down nasa-open-child"></i>Shop<i
                                                            class="fa fa-angle-right nasa-has-items-child"></i></a>
                                                    <div class="nav-dropdown">
                                                        

                                                    <?php if (osc_count_categories() > 0) { ?>
    <ul class="sub-menu large-block-grid-5 medium-block-grid-5 small-block-grid-5">
        <?php while (osc_has_categories()) { ?>
            <?php if (osc_count_subcategories() > 0) { ?>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-parent-item megatop">
                    <a title="<?php echo osc_category_name(); ?>" href="<?php echo osc_search_category_url(); ?>" class="nasa-title-menu">
                        <?php echo osc_category_name(); ?>
                        <i class="fa fa-angle-right nasa-has-items-child"></i>
                    </a>
                    <div class="nav-column-links">
                        <ul class="sub-menu">
                            <?php while (osc_has_subcategories()) { ?>
                                <li class="menu-item menu-item-type-post_type menu-item-object-product">
                                    <a title="<?php echo osc_category_name(); ?>" href="<?php echo osc_search_category_url(); ?>" class="nasa-title-menu">
                                        <?php echo osc_category_name(); ?>
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="Menu_view_all menu-item menu-item-type-custom menu-item-object-custom">
                                <a title="View All" href="<?php echo osc_search_category_url(); ?>" class="nasa-title-menu">View All</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } else { ?>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat default-menu megatop">
                    <a title="<?php echo osc_category_name(); ?>" href="<?php echo osc_search_category_url(); ?>" class="nasa-title-menu">
                        <?php echo osc_category_name(); ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
<?php } ?>

                                                    </div>
                                                </li>
                                                <?php if (osc_count_categories() > 0) { ?>
                                                    <?php if (osc_count_subcategories() > 0) { ?>
                                                        <?php while (osc_has_categories()) { ?>
                                                            <li
                                                                class="<?php echo osc_category_slug(); ?> default-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item root-item">
                                                                <a title="<?php echo osc_category_name(); ?>"
                                                                    href="<?php echo osc_search_category_url(); ?>"
                                                                    class="nasa-title-menu">
                                                                    <i class="pe-7s-angle-down nasa-open-child"></i>
                                                                    <?php echo osc_category_name(); ?>
                                                                    <i class="fa fa-angle-right nasa-has-items-child"></i>
                                                                </a>
                                                                <div class="nav-dropdown">
                                                                    <ul class="sub-menu">
                                                                        <?php while (osc_has_subcategories()) { ?>
                                                                            <li class="<?php echo osc_category_slug(); ?>">
                                                                                <a href="<?php echo osc_search_category_url(); ?>"
                                                                                    class="menu-item">
                                                                                    <?php echo osc_category_name(); ?>
                                                                                </a>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <li
                                                            class="<?php echo osc_category_slug(); ?> menu-item menu-item-type-post_type menu-item-object-page default-menu root-item nasa_even">
                                                            <a title="<?php echo osc_category_name(); ?>"
                                                                href="<?php echo osc_search_category_url(); ?>"
                                                                class="nasa-title-menu">
                                                                <i class="pe-7s-angle-down nasa-open-child"></i>
                                                                <?php echo osc_category_name(); ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                <?php } ?>
                                                <li
                                                    class="menu-item menu-item-home current-menu-item page_item page-item-3714 current_page_item default-menu root-item nasa_even">
                                                    <a title="Home"
                                                        href="<?php echo osc_item_post_url_in_category(); ?>"
                                                        class="nasa-title-menu">
                                                        <i
                                                            class="pe-7s-angle-down nasa-open-child"></i><?php _e("Publish your ad for free", 'twitter'); ?>
                                                    </a>
                                                </li>
                                            </ul>


                                        </div><!-- nav-wrapper -->
                                    </div>
                                </div>
                            </div>

                            <!-- Search form in header -->
                            <div class="nasa-header-search-wrap nasa-hide-for-mobile">
                                <div class="nasa-search-space nasa-search-icon">
                                    <div
                                        class="nasa-show-search-form nasa-over-hide nasa-rightToLeft nasa-modern-layout">
                                        <div class="search-wrapper nasa-ajax-search-form-container modern">
                                            <form role="search" method="get" class="nasa-search nasa-ajax-search-form"
                                                action="https://aayuheal.com/">
                                                <label for="nasa-input-1" class="hidden-tag">
                                                    Search here </label>

                                                <input type="text" name="s" id="nasa-input-1"
                                                    class="search-field search-input live-search-input" value=""
                                                    placeholder="Search" />


                                                <span class="nasa-icon-submit-page">
                                                    <button class="nasa-submit-search hidden-tag">
                                                        Search </button>
                                                </span>

                                                <input type="hidden" name="post_type" value="product" />
                                            </form>

                                            <a href="javascript:void(0);" title="Close search"
                                                class="nasa-close-search nasa-stclose" rel="nofollow"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- End Header Site -->
<?/*
      <!-- Start Main Content Site -->
      <main id="main-content" class="site-main light nasa-after-clear">
          <div data-elementor-type="wp-page" data-elementor-id="3714" class="elementor elementor-3714">
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-10a5aa9b elementor-section-full_width elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
                  data-id="10a5aa9b" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;animation&quot;:&quot;none&quot;}">
                  <div class="elementor-container elementor-column-gap-no">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-16710df5"
                          data-id="16710df5" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-a6dbf5a elementor-widget elementor-widget-image-carousel"
                                  data-id="a6dbf5a" data-element_type="widget"
                                  data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                                  data-widget_type="image-carousel.default">
                                  <div class="elementor-widget-container">
                                      <style>
                                          .elementor-widget-image-carousel .swiper,
                                          .elementor-widget-image-carousel .swiper-container {
                                              position: static
                                          }

                                          .elementor-widget-image-carousel .swiper-container .swiper-slide figure,
                                          .elementor-widget-image-carousel .swiper .swiper-slide figure {
                                              line-height: inherit
                                          }

                                          .elementor-widget-image-carousel .swiper-slide {
                                              text-align: center
                                          }

                                          .elementor-image-carousel-wrapper:not(.swiper-container-initialized):not(.swiper-initialized) .swiper-slide {
                                              max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                                          }
                                      </style>
                                      <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                          <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch"
                                              aria-live="off">
                                              <div class="swiper-slide"><a data-elementor-open-lightbox="no"
                                                      href="product/nimorab-20-ointment-50gm/index.html" target="">
                                                      <figure class="swiper-slide-inner"><img decoding="async"
                                                              class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                              alt=""
                                                              data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1.webp" /><noscript><img
                                                                  decoding="async" class="swiper-slide-image"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1.webp"
                                                                  alt="" /></noscript></figure>
                                                  </a></div>
                                              <div class="swiper-slide"><a data-elementor-open-lightbox="no"
                                                      href="product/diabetes-care-kit/index.html" target="">
                                                      <figure class="swiper-slide-inner"><img decoding="async"
                                                              class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                              alt=""
                                                              data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Diabetes-1.webp" /><noscript><img
                                                                  decoding="async" class="swiper-slide-image"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Diabetes-1.webp"
                                                                  alt="" /></noscript></figure>
                                                  </a></div>
                                              <div class="swiper-slide"><a data-elementor-open-lightbox="no"
                                                      href="product/piles-care-kit/index.html" target="">
                                                      <figure class="swiper-slide-inner"><img decoding="async"
                                                              class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                              alt=""
                                                              data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/banner-resize11.webp" /><noscript><img
                                                                  decoding="async" class="swiper-slide-image"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/banner-resize11.webp"
                                                                  alt="" /></noscript></figure>
                                                  </a></div>
                                              <div class="swiper-slide"><a data-elementor-open-lightbox="no"
                                                      href="product/liver-care-kit/index.html" target="">
                                                      <figure class="swiper-slide-inner"><img decoding="async"
                                                              class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                              alt=""
                                                              data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/libar-banner-resize-2.webp" /><noscript><img
                                                                  decoding="async" class="swiper-slide-image"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/libar-banner-resize-2.webp"
                                                                  alt="" /></noscript></figure>
                                                  </a></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-17a637e elementor-section-full_width elementor-section-stretched elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
                  data-id="17a637e" data-element_type="section"
                  data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                  <div class="elementor-container elementor-column-gap-no">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5fd23e3"
                          data-id="5fd23e3" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-2ab1af7 elementor-widget elementor-widget-image"
                                  data-id="2ab1af7" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <style>
                                           .elementor-widget-image {
                                              text-align: center
                                          }

                                          .elementor-widget-image a {
                                              display: inline-block
                                          }

                                          .elementor-widget-image a img[src$=".svg"] {
                                              width: 48px
                                          }

                                          .elementor-widget-image img {
                                              vertical-align: middle;
                                              display: inline-block
                                          }
                                      </style> <a href="shop.html">
                                          <img fetchpriority="high" decoding="async" width="1920" height="600"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1.webp"
                                              class="attachment-full size-full wp-image-5777" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1.webp 1920w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1-450x141.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1-595x186.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1-150x47.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1-768x240.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/3.1-1536x480.webp 1536w"
                                              sizes="(max-width: 1920px) 100vw, 1920px" /> </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-3e39168 elementor-section-full_width elementor-section-stretched elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
                  data-id="3e39168" data-element_type="section"
                  data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                  <div class="elementor-container elementor-column-gap-no">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b773e5f"
                          data-id="b773e5f" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-cce513a elementor-widget elementor-widget-image"
                                  data-id="cce513a" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <a href="shop.html">
                                          <img decoding="async" width="595" height="714"
                                              src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%20714'%3E%3C/svg%3E"
                                              class="attachment-large size-large wp-image-6678" alt=""
                                              data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-595x714.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-250x300.webp 250w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-125x150.webp 125w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-768x922.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-450x540.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1.webp 1000w"
                                              data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                              data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-595x714.webp" /><noscript><img
                                                  decoding="async" width="595" height="714"
                                                  src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-595x714.webp"
                                                  class="attachment-large size-large wp-image-6678" alt=""
                                                  srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-595x714.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-250x300.webp 250w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-125x150.webp 125w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-768x922.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1-450x540.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/2-1-1.webp 1000w"
                                                  sizes="(max-width: 595px) 100vw, 595px" /></noscript> </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-4ef6add elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="4ef6add" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3414e299"
                          data-id="3414e299" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-35d41b09 elementor-widget elementor-widget-text-editor"
                                  data-id="35d41b09" data-element_type="widget"
                                  data-widget_type="text-editor.default">
                                  <div class="elementor-widget-container">
                                      <style>
                                           .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                              background-color: #69727d;
                                              color: #fff
                                          }

                                          .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                              color: #69727d;
                                              border: 3px solid;
                                              background-color: transparent
                                          }

                                          .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                              margin-top: 8px
                                          }

                                          .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                              width: 1em;
                                              height: 1em
                                          }

                                          .elementor-widget-text-editor .elementor-drop-cap {
                                              float: left;
                                              text-align: center;
                                              line-height: 1;
                                              font-size: 50px
                                          }

                                          .elementor-widget-text-editor .elementor-drop-cap-letter {
                                              display: inline-block
                                          }
                                      </style> <!-- wp:paragraph -->
                                      <p></p>
                                      <!-- /wp:paragraph -->

                                      <!-- wp:paragraph -->
                                      <p></p>
                                      <!-- /wp:paragraph -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-2fe1a1da elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="2fe1a1da" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-74a7f383"
                          data-id="74a7f383" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-158358a9 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="158358a9" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <style>
                                           .elementor-widget-divider {
                                              --divider-border-style: none;
                                              --divider-border-width: 1px;
                                              --divider-color: #0c0d0e;
                                              --divider-icon-size: 20px;
                                              --divider-element-spacing: 10px;
                                              --divider-pattern-height: 24px;
                                              --divider-pattern-size: 20px;
                                              --divider-pattern-url: none;
                                              --divider-pattern-repeat: repeat-x
                                          }

                                          .elementor-widget-divider .elementor-divider {
                                              display: flex
                                          }

                                          .elementor-widget-divider .elementor-divider__text {
                                              font-size: 15px;
                                              line-height: 1;
                                              max-width: 95%
                                          }

                                          .elementor-widget-divider .elementor-divider__element {
                                              margin: 0 var(--divider-element-spacing);
                                              flex-shrink: 0
                                          }

                                          .elementor-widget-divider .elementor-icon {
                                              font-size: var(--divider-icon-size)
                                          }

                                          .elementor-widget-divider .elementor-divider-separator {
                                              display: flex;
                                              margin: 0;
                                              direction: ltr
                                          }

                                          .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                          .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                              align-items: center
                                          }

                                          .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                          .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                          .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                          .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                              display: block;
                                              content: "";
                                              border-block-end: 0;
                                              flex-grow: 1;
                                              border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                          }

                                          .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                              flex-grow: 0;
                                              flex-shrink: 100
                                          }

                                          .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                              content: none
                                          }

                                          .elementor-widget-divider--element-align-left .elementor-divider__element {
                                              margin-left: 0
                                          }

                                          .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                              flex-grow: 0;
                                              flex-shrink: 100
                                          }

                                          .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                              content: none
                                          }

                                          .elementor-widget-divider--element-align-right .elementor-divider__element {
                                              margin-right: 0
                                          }

                                          .elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                              flex-grow: 0;
                                              flex-shrink: 100
                                          }

                                          .elementor-widget-divider--element-align-start .elementor-divider-separator:before {
                                              content: none
                                          }

                                          .elementor-widget-divider--element-align-start .elementor-divider__element {
                                              margin-inline-start: 0
                                          }

                                          .elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                              flex-grow: 0;
                                              flex-shrink: 100
                                          }

                                          .elementor-widget-divider--element-align-end .elementor-divider-separator:after {
                                              content: none
                                          }

                                          .elementor-widget-divider--element-align-end .elementor-divider__element {
                                              margin-inline-end: 0
                                          }

                                          .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                              border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                          }

                                          .elementor-widget-divider--separator-type-pattern {
                                              --divider-border-style: none
                                          }

                                          .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                          .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                          .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                          .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                              width: 100%;
                                              min-height: var(--divider-pattern-height);
                                              -webkit-mask-size: var(--divider-pattern-size) 100%;
                                              mask-size: var(--divider-pattern-size) 100%;
                                              -webkit-mask-repeat: var(--divider-pattern-repeat);
                                              mask-repeat: var(--divider-pattern-repeat);
                                              background-color: var(--divider-color);
                                              -webkit-mask-image: var(--divider-pattern-url);
                                              mask-image: var(--divider-pattern-url)
                                          }

                                          .elementor-widget-divider--no-spacing {
                                              --divider-pattern-size: auto
                                          }

                                          .elementor-widget-divider--bg-round {
                                              --divider-pattern-repeat: round
                                          }

                                          .rtl .elementor-widget-divider .elementor-divider__text {
                                              direction: rtl
                                          }

                                          .e-con-inner>.elementor-widget-divider,
                                          .e-con>.elementor-widget-divider {
                                              width: var(--container-widget-width, 100%);
                                              --flex-grow: var(--container-widget-flex-grow)
                                          }
                                      </style>
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  Products Categories </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-52839a51 elementor-widget elementor-widget-image"
                                  data-id="52839a51" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6911" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-595x48.png 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-450x36.png 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-150x12.png 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-768x61.png 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1.png 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-595x48.png" /><noscript><img
                                              decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/divider-n-1-595x48.png"
                                              class="attachment-large size-large wp-image-6911" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-595x48.png 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-450x36.png 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-150x12.png 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1-768x61.png 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/divider-n-1.png 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-873c463 elementor-widget elementor-widget-ucaddon_card_carousel"
                                  data-id="873c463" data-element_type="widget"
                                  data-widget_type="ucaddon_card_carousel.default">
                                  <div class="elementor-widget-container">

                                      <!-- start Card Carousel -->
                                      <link data-minify="1" id='font-awesome-css'
                                          href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/plugins/unlimited-elements-for-elementor/assets_libraries/font-awesome6/fontawesome-all.min.css?ver=1721995796'
                                          type='text/css' rel='stylesheet'>
                                      <link id='font-awesome-4-shim-css'
                                          href='<?php echo osc_current_web_theme_url(); ?>wp-content/plugins/unlimited-elements-for-elementor/assets_libraries/font-awesome6/fontawesome-v4-shims.min.css'
                                          type='text/css' rel='stylesheet'>
                                      <link data-minify="1" id='owl-carousel-css'
                                          href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/plugins/unlimited-elements-for-elementor/assets_libraries/owl-carousel-new/assets/owl.carousel4969.css?ver=1721995796'
                                          type='text/css' rel='stylesheet'>
                                      <link data-minify="1" id='uc_ac_assets_file_animate_css_77907-css'
                                          href='<?php echo osc_current_web_theme_url(); ?>wp-content/cache/min/1/wp-content/uploads/ac_assets/uc_classic_carousel/animate4969.css?ver=1721995796'
                                          type='text/css' rel='stylesheet'>

                                      <style>
                                          
                                          #uc_card_carousel_elementor_873c463-wrapper {
                                              min-height: 1px;
                                          }

                                          #uc_card_carousel_elementor_873c463 * {
                                              -webkit-box-sizing: border-box;
                                              -moz-box-sizing: border-box;
                                              box-sizing: border-box;
                                          }

                                          #uc_card_carousel_elementor_873c463 .ue-carousel-item {
                                              overflow: hidden;
                                              transition: 0.3s;
                                          }

                                          #uc_card_carousel_elementor_873c463 .uc_classic_carousel_container_holder {
                                              display: block;
                                              position: relative;
                                              width: 100%;
                                              box-sizing: border-box;
                                          }

                                          #uc_card_carousel_elementor_873c463 .uc_classic_carousel_placeholder {
                                              position: relative;
                                          }


                                          #uc_card_carousel_elementor_873c463 .uc_classic_carousel_placeholder img,
                                          #uc_card_carousel_elementor_873c463 .ue_card_carousel_image_overlay {
                                              transition: all 300ms;
                                          }

                                          .card_carousel_title {
                                              font-size: 21px;
                                          }

                                          .uc_classic_carousel .uc_classic_carousel_border {
                                              display: block;
                                              margin: 0 auto;
                                          }

                                          .uc_classic_carousel .uc_classic_carousel_placeholder img {
                                              width: 100%;
                                              display: inline-flex;
                                          }

                                          .uc_classic_carousel .uc_classic_carousel_content {
                                              display: flex;
                                              flex-flow: column nowrap;
                                          }

                                          .uc_classic_carousel .ue_button {
                                              margin-top: auto;
                                          }

                                          .uc_classic_carousel .uc_classic_carousel_content .uc_more_btn {
                                              display: inline-block;
                                              text-decoration: none;
                                              transition: all 0.5s ease;
                                          }

                                          #uc_card_carousel_elementor_873c463 .owl-dots {
                                              overflow: hidden;
                                              text-align: center;
                                          }

                                          #uc_card_carousel_elementor_873c463 .owl-dot {
                                              border-radius: 50%;
                                              display: inline-block;
                                          }

                                          #uc_card_carousel_elementor_873c463 .owl-nav .owl-prev,
                                          #uc_card_carousel_elementor_873c463 .owl-nav .owl-next {
                                              position: absolute;
                                              display: flex;
                                              justify-content: center;
                                              align-items: center;
                                              text-align: center;
                                          }

                                          #uc_card_carousel_elementor_873c463 .owl-nav .disabled {
                                              display: none;
                                          }


                                          #uc_card_carousel_elementor_873c463 .ue-item-icon {
                                              line-height: 1em;
                                              display: inline-flex;
                                              justify-content: center;
                                              align-items: center;
                                          }

                                          #uc_card_carousel_elementor_873c463 .ue-item-icon svg {
                                              height: 1em;
                                              width: 1em;
                                          }

                                          #uc_card_carousel_elementor_873c463 .ue-item-icon-wrapper {
                                              display: flex;
                                          }

                                          #uc_card_carousel_elementor_873c463 .uc_classic_carousel_container_holder {
                                              max-width: ;
                                          }



                                          @media screen and (max-width: 1024px) {
                                              #uc_card_carousel_elementor_873c463 .uc_classic_carousel_container_holder {
                                                  max-width: ;
                                              }
                                          }

                                          @media screen and (max-width: 767px) {
                                              #uc_card_carousel_elementor_873c463 .uc_classic_carousel_container_holder {
                                                  max-width: ;
                                              }
                                          }
                                      </style>

                                      <div class="uc_classic_carousel"
                                          id="uc_card_carousel_elementor_873c463-wrapper">
                                          <div class="uc_carousel owl-carousel uc-items-wrapper  "
                                              id="uc_card_carousel_elementor_873c463">
                                              <div id="uc_card_carousel_elementor_873c463_item1"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-3b861bf"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/multi-herbs-products/index.html"
                                                              title=""> <img decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Multi-Herbs" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/Multi-Herbs-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Multi-Herbs-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Multi-Herbs-1.jpg"
                                                                      alt="Multi-Herbs" width="600"
                                                                      height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Multi Herbs</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item2"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-6ae50fc"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/single-herbs-products/index.html"
                                                              title=""> <img decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Single-Herbs" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Single-Herbs-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Single-Herbs-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Single-Herbs-1.jpg"
                                                                      alt="Single-Herbs" width="600"
                                                                      height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Single Herbs</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item3"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-6a14e3e"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/kits/index.html" title=""> <img
                                                                  decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Kits-pack" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Kits-pack-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Kits-pack-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Kits-pack-1.jpg"
                                                                      alt="Kits-pack" width="600"
                                                                      height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Kits</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item4"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-afd2683"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/combo/index.html" title=""> <img
                                                                  decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Combo" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Combo-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Combo-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Combo-1.jpg"
                                                                      alt="Combo" width="600" height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Combo</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item5"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-4c78025"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/immunity-care/index.html"
                                                              title=""> <img decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Immunity" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Immunity-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Immunity-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Immunity-1.jpg"
                                                                      alt="Immunity" width="600"
                                                                      height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Immunity Care</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item6"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-d157bab"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/lady-care/index.html" title="">
                                                              <img decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Lady-Care" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Lady-Care-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Lady-Care-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Lady-Care-1.jpg"
                                                                      alt="Lady-Care" width="600"
                                                                      height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Lady Care</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item7"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-263f93e"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/liver-care/index.html" title="">
                                                              <img decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Liver" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Liver-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Liver-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Liver-1.jpg"
                                                                      alt="Liver" width="600" height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Liver Care</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item8"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-1ea894e"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/pain-care/index.html" title="">
                                                              <img decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Pain-Reliever" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Pain-Reliever-1.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Pain-Reliever-1.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Pain-Reliever-1.jpg"
                                                                      alt="Pain-Reliever" width="600"
                                                                      height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Pain Care</div>









                                                      </div>
                                                  </div>
                                              </div>
                                              <div id="uc_card_carousel_elementor_873c463_item9"
                                                  class="uc_classic_carousel_container_holder ue-item elementor-repeater-item-b603bba"
                                                  data-hide-item="false">
                                                  <div class="ue-carousel-item">
                                                      <div class="uc_classic_carousel_placeholder">
                                                          <a href="product-category/piles-care/index.html" title="">
                                                              <img decoding="async"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20600%20600'%3E%3C/svg%3E"
                                                                  alt="Piles-1" width="600" height="600"
                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Piles-1-2.jpg"><noscript><img
                                                                      loading="lazy" decoding="async"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Piles-1-2.jpg"
                                                                      src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/Piles-1-2.jpg"
                                                                      alt="Piles-1" width="600"
                                                                      height="600"></noscript>
                                                          </a>
                                                      </div>
                                                      <div class="uc_classic_carousel_content" style="direction:ltr;">




                                                          <div class="card_carousel_title">Piles Care</div>









                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <!-- end Card Carousel -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-3cc8f20 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="3cc8f20" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-db2c514"
                          data-id="db2c514" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-7a36cf0 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="7a36cf0" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  <a href="product-category/multi-herbs-products/index.html">Multi
                                                      Herbs Products</a> </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-30a50cb elementor-widget elementor-widget-image"
                                  data-id="30a50cb" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-33b5fa3b tabs-display elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="33b5fa3b" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6974e387"
                          data-id="6974e387" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-01f0eed elementor-widget elementor-widget-wp-widget-nasa_products_tabs_sc"
                                  data-id="01f0eed" data-element_type="widget"
                                  data-widget_type="wp-widget-nasa_products_tabs_sc.default">
                                  <div class="elementor-widget-container">
                                      <div class="nasa-tabs-content nasa-not-elementor-style letter-spacing-none">
                                          <div class="nasa-tabs-wrap text-right margin-bottom-15">
                                              <ul
                                                  class="nasa-tabs nasa-classic-style nasa-classic-2d nasa-tabs-no-border">
                                                  <li class="nasa-tab first active last"><a href="javascript:void(0);"
                                                          data-index="nasa-section-1603390973265" class="nasa-a-tab"
                                                          rel="nofollow"></a></li>
                                              </ul>
                                          </div>
                                          <div class="nasa-panels">
                                              <div
                                                  class="nasa-panel hidden-tag active first nasa-section-1603390973265">
                                                  <div
                                                      class="nasa-sc products woocommerce ns-type-grid padding-top-20">
                                                      <div
                                                          class="row nasa-row-child-clear-none mobile-padding-left-5 mobile-padding-right-5">
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5145 status-publish first instock product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;12&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5145"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/fat-burner-cap-60cap/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/fat-burner-cap-60cap/index.html"
                                                                          title="Fat Burner Cap 60Cap">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/fat-Burner-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Fat-Burner-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/fat-burner-cap-60cap/index.html"
                                                                          title="Fat Burner Cap 60Cap">
                                                                          Fat Burner Cap 60Cap </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>849.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;849.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>749.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;749.00.</span></span>
                                                                      <a href="indexc9a9.html?add-to-cart=5145"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5145" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Fat Burner Cap 60Cap&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5159 status-publish instock product_cat-multi-herbs-products product_cat-piles-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;16&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5159"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/trifla-ras-500-ml/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/trifla-ras-500-ml/index.html"
                                                                          title="Trifla Ras (500 ML)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Trifla-Ras.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/trifla-ras-500-ml/index.html"
                                                                          title="Trifla Ras (500 ML)">
                                                                          Trifla Ras (500 ML) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>499.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;499.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>419.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;419.00.</span></span>
                                                                      <a href="index3539.html?add-to-cart=5159"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5159" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Trifla Ras (500 ML)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5155 status-publish instock product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;10&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5155"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/all-booster-tab-30-tab/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/all-booster-tab-30-tab/index.html"
                                                                          title="All Booster Tab (30 Tab)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-booster.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/all-booster-tab-30-tab/index.html"
                                                                          title="All Booster Tab (30 Tab)">
                                                                          All Booster Tab (30 Tab) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>799.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;799.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>719.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;719.00.</span></span>
                                                                      <a href="index0be6.html?add-to-cart=5155"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5155" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;All Booster Tab (30 Tab)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5137 status-publish instock product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;18&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5137"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/kubjrol-28-tab-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/kubjrol-28-tab-60-tablets/index.html"
                                                                          title="Kubjrol-28 Tab (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kubjrol.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Kabjrol.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/kubjrol-28-tab-60-tablets/index.html"
                                                                          title="Kubjrol-28 Tab (60 Tablets)">
                                                                          Kubjrol-28 Tab (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>525.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;525.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>429.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;429.00.</span></span>
                                                                      <a href="index5688.html?add-to-cart=5137"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5137" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Kubjrol-28 Tab (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5075 status-publish last instock product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;6&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5075"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/swadraj-churna-50gm10-extra/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/swadraj-churna-50gm10-extra/index.html"
                                                                          title="SwadRaj Churna (50gm+10% extra)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Swadraj.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/swadraj-churna-50gm10-extra/index.html"
                                                                          title="SwadRaj Churna (50gm+10% extra)">
                                                                          SwadRaj Churna (50gm+10% extra) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>105.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;105.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>99.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;99.00.</span></span>
                                                                      <a href="index561d.html?add-to-cart=5075"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5075" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;SwadRaj Churna (50gm+10% extra)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5023 status-publish first instock product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5023"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/panch-ras-500-ml/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/panch-ras-500-ml/index.html"
                                                                          title="Panch Ras (500 ML)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Panch-Ras.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punch-ras.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/panch-ras-500-ml/index.html"
                                                                          title="Panch Ras (500 ML)">
                                                                          Panch Ras (500 ML) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>599.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;599.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>499.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;499.00.</span></span>
                                                                      <a href="index4ba6.html?add-to-cart=5023"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5023" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Panch Ras (500 ML)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3730 status-publish instock product_cat-liver-care product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;11&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3730"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/ranula-51-tablets-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/ranula-51-tablets-60-tablets/index.html"
                                                                          title="Ranula-51 Tablets ( 60 Tablets )">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-Tab-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/ranula-51-tablets-60-tablets/index.html"
                                                                          title="Ranula-51 Tablets ( 60 Tablets )">
                                                                          Ranula-51 Tablets ( 60 Tablets ) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>449.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;449.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>399.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;399.00.</span></span>
                                                                      <a href="index4302.html?add-to-cart=3730"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3730" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Ranula-51 Tablets ( 60 Tablets )&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3729 status-publish instock product_cat-liver-care product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;11&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3729"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/ranula-51-syrup-500-ml/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/ranula-51-syrup-500-ml/index.html"
                                                                          title="Ranula-51 SYRUP (500 ML)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ranula-51-srf.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/ranula-51-syrup-500-ml/index.html"
                                                                          title="Ranula-51 SYRUP (500 ML)">
                                                                          Ranula-51 SYRUP (500 ML) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>449.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;449.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>399.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;399.00.</span></span>
                                                                      <a href="indexc614.html?add-to-cart=3729"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3729" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Ranula-51 SYRUP (500 ML)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3728 status-publish instock product_cat-multi-herbs-products product_cat-piles-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;10&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3728"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/piles-cure-60-veg-capsules/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/piles-cure-60-veg-capsules/index.html"
                                                                          title="Piles cure (60 Veg capsules)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-piles-cure-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/piles-cure-60-veg-capsules/index.html"
                                                                          title="Piles cure (60 Veg capsules)">
                                                                          Piles cure (60 Veg capsules) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>999.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;999.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>899.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;899.00.</span></span>
                                                                      <a href="index17f1.html?add-to-cart=3728"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3728" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Piles cure (60 Veg capsules)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3727 status-publish last instock product_cat-multi-herbs-products product_cat-pain-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;13&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3727"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/nimorab-20-ointment-50gm/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/nimorab-20-ointment-50gm/index.html"
                                                                          title="Nimorab-20+ ointment (50Gm)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimorab-20.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimrab.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/nimorab-20-ointment-50gm/index.html"
                                                                          title="Nimorab-20+ ointment (50Gm)">
                                                                          Nimorab-20+ ointment (50Gm) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>399.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;399.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>349.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;349.00.</span></span>
                                                                      <a href="index0e12.html?add-to-cart=3727"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3727" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Nimorab-20+ ointment (50Gm)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-33be65c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="33be65c" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a28c847"
                          data-id="a28c847" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-d839ac9 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="d839ac9" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  <a href="product-category/single-herbs-products/index.html">Single
                                                      Herbs Products</a> </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-454d4a7 elementor-widget elementor-widget-image"
                                  data-id="454d4a7" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-81dd252 tabs-display elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="81dd252" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f7dbaca"
                          data-id="f7dbaca" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-d8b0b15 elementor-widget elementor-widget-wp-widget-nasa_products_tabs_sc"
                                  data-id="d8b0b15" data-element_type="widget"
                                  data-widget_type="wp-widget-nasa_products_tabs_sc.default">
                                  <div class="elementor-widget-container">
                                      <div class="nasa-tabs-content nasa-not-elementor-style letter-spacing-none">
                                          <div class="nasa-tabs-wrap text-right margin-bottom-15">
                                              <ul
                                                  class="nasa-tabs nasa-classic-style nasa-classic-2d nasa-tabs-no-border">
                                                  <li class="nasa-tab first active last"><a href="javascript:void(0);"
                                                          data-index="nasa-section-1603390973265" class="nasa-a-tab"
                                                          rel="nofollow"></a></li>
                                              </ul>
                                          </div>
                                          <div class="nasa-panels">
                                              <div
                                                  class="nasa-panel hidden-tag active first nasa-section-1603390973265">
                                                  <div
                                                      class="nasa-sc products woocommerce ns-type-grid padding-top-20">
                                                      <div
                                                          class="row nasa-row-child-clear-none mobile-padding-left-5 mobile-padding-right-5">
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5151 status-publish first instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;12&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5151"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/shilajeet-cap-60-cap/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/shilajeet-cap-60-cap/index.html"
                                                                          title="Shilajeet Extract Cap 60 cap">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shilajeet.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/shilajeet-cap-60-cap/index.html"
                                                                          title="Shilajeet Extract Cap 60 cap">
                                                                          Shilajeet Extract Cap 60 cap </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>849.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;849.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>749.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;749.00.</span></span>
                                                                      <a href="index7fd0.html?add-to-cart=5151"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5151" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Shilajeet Extract Cap 60 cap&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5146 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;11&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5146"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/noni-extract-cap-60-capsules/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/noni-extract-cap-60-capsules/index.html"
                                                                          title="Noni Extract cap (60 capsules)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/noni-extract-cap-60-capsules/index.html"
                                                                          title="Noni Extract cap (60 capsules)">
                                                                          Noni Extract cap (60 capsules) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>525.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;525.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>469.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;469.00.</span></span>
                                                                      <a href="index7b32.html?add-to-cart=5146"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5146" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Noni Extract cap (60 capsules)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5141 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;4&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5141"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/punch-tulsi-drop-20ml/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/punch-tulsi-drop-20ml/index.html"
                                                                          title="Punch Tulsi Drop 20ML">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Maha-Tulsi.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/punch-tulsi-drop-20ml/index.html"
                                                                          title="Punch Tulsi Drop 20ML">
                                                                          Punch Tulsi Drop 20ML </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>265.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;265.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>255.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;255.00.</span></span>
                                                                      <a href="indexfd69.html?add-to-cart=5141"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5141" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Punch Tulsi Drop 20ML&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5133 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;18&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5133"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/karela-extract-tablets-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/karela-extract-tablets-60-tablets/index.html"
                                                                          title="Karela Extract Tablets (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Karela.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/karela-extract-tablets-60-tablets/index.html"
                                                                          title="Karela Extract Tablets (60 Tablets)">
                                                                          Karela Extract Tablets (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>425.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;425.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>349.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;349.00.</span></span>
                                                                      <a href="index113f.html?add-to-cart=5133"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5133" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Karela Extract Tablets (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5129 status-publish last instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5129"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/tulsi-extract-tablets-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/tulsi-extract-tablets-60-tablets/index.html"
                                                                          title="Tulsi Extract Tablets (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Tulsi-Tab.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/tulsi-extract-tablets-60-tablets/index.html"
                                                                          title="Tulsi Extract Tablets (60 Tablets)">
                                                                          Tulsi Extract Tablets (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>419.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;419.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>349.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;349.00.</span></span>
                                                                      <a href="index49c0.html?add-to-cart=5129"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5129" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Tulsi Extract Tablets (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5125 status-publish first instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;20&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5125"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/shatavari-extract-tab-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/shatavari-extract-tab-60-tablets/index.html"
                                                                          title="Shatavari Extract Tab (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Shatavari.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/shatavari-extract-tab-60-tablets/index.html"
                                                                          title="Shatavari Extract Tab (60 Tablets)">
                                                                          Shatavari Extract Tab (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>499.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;499.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>399.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;399.00.</span></span>
                                                                      <a href="indexa48e.html?add-to-cart=5125"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5125" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Shatavari Extract Tab (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5121 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;18&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5121"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/punarnava-extract-tablets-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/punarnava-extract-tablets-60-tablets/index.html"
                                                                          title="Punarnava Extract Tablets (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Punarnava.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/punarnava-extract-tablets-60-tablets/index.html"
                                                                          title="Punarnava Extract Tablets (60 Tablets)">
                                                                          Punarnava Extract Tablets (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>425.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;425.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>349.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;349.00.</span></span>
                                                                      <a href="indexf6fd.html?add-to-cart=5121"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5121" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Punarnava Extract Tablets (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5117 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;20&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5117"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/papaya-extract-tab-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/papaya-extract-tab-60-tablets/index.html"
                                                                          title="Papaya Extract Tab (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/papaya-extract-tab-60-tablets/index.html"
                                                                          title="Papaya Extract Tab (60 Tablets)">
                                                                          Papaya Extract Tab (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>735.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;735.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>589.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;589.00.</span></span>
                                                                      <a href="index3c1f.html?add-to-cart=5117"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5117" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Papaya Extract Tab (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5113 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;19&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5113"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/aloe-vera-extract-tab-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/aloe-vera-extract-tab-60-tablets/index.html"
                                                                          title="Aloe Vera Extract Tab (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Aloevera-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Alovera.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/aloe-vera-extract-tab-60-tablets/index.html"
                                                                          title="Aloe Vera Extract Tab (60 Tablets)">
                                                                          Aloe Vera Extract Tab (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>399.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;399.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>325.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;325.00.</span></span>
                                                                      <a href="indexa689.html?add-to-cart=5113"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5113" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Aloe Vera Extract Tab (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5109 status-publish last instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;9&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5109"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/garlic-extract-tab-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/garlic-extract-tab-60-tablets/index.html"
                                                                          title="Garlic Extract Tab (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Garlic.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/garlic-extract-tab-60-tablets/index.html"
                                                                          title="Garlic Extract Tab (60 Tablets)">
                                                                          Garlic Extract Tab (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>549.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;549.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>499.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;499.00.</span></span>
                                                                      <a href="indexe012.html?add-to-cart=5109"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5109" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Garlic Extract Tab (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-8cc5f96 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="8cc5f96" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e97fa6d"
                          data-id="e97fa6d" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-e998a51 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="e998a51" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  <a href="product-category/kits/index.html">Best Kit Packs</a>
                                              </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-f41fade elementor-widget elementor-widget-image"
                                  data-id="f41fade" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-051d9b8 tabs-display elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="051d9b8" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-993d895"
                          data-id="993d895" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-e6be4af elementor-widget elementor-widget-wp-widget-nasa_products_tabs_sc"
                                  data-id="e6be4af" data-element_type="widget"
                                  data-widget_type="wp-widget-nasa_products_tabs_sc.default">
                                  <div class="elementor-widget-container">
                                      <div class="nasa-tabs-content nasa-not-elementor-style letter-spacing-none">
                                          <div class="nasa-tabs-wrap text-right margin-bottom-15">
                                              <ul
                                                  class="nasa-tabs nasa-classic-style nasa-classic-2d nasa-tabs-no-border">
                                                  <li class="nasa-tab first active last"><a href="javascript:void(0);"
                                                          data-index="nasa-section-1603390973265" class="nasa-a-tab"
                                                          rel="nofollow"></a></li>
                                              </ul>
                                          </div>
                                          <div class="nasa-panels">
                                              <div
                                                  class="nasa-panel hidden-tag active first nasa-section-1603390973265">
                                                  <div
                                                      class="nasa-sc products woocommerce ns-type-grid padding-top-20">
                                                      <div
                                                          class="row nasa-row-child-clear-none mobile-padding-left-5 mobile-padding-right-5">
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3739 status-publish first instock product_cat-diabetes-care product_cat-kits has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;16&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3739"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/diabetes-care-kit/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/diabetes-care-kit/index.html"
                                                                          title="Diabetes Care Kit">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Diabetes-care-Kit.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/diabetes-care-kit/index.html"
                                                                          title="Diabetes Care Kit">
                                                                          Diabetes Care Kit </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,697.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,697.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,419.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;1,419.00.</span></span>
                                                                      <a href="index2107.html?add-to-cart=3739"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3739" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Diabetes Care Kit&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3738 status-publish instock product_cat-kits product_cat-liver-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3738"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/liver-care-kit/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/liver-care-kit/index.html"
                                                                          title="Liver Care Kit">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Liver-Care-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-Syruf.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/liver-care-kit/index.html"
                                                                          title="Liver Care Kit">
                                                                          Liver Care Kit </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>898.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;898.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>749.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;749.00.</span></span>
                                                                      <a href="index5900.html?add-to-cart=3738"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3738" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Liver Care Kit&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3737 status-publish instock product_cat-kits product_cat-wellness-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;16&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3737"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/wellness-care-kit/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/wellness-care-kit/index.html"
                                                                          title="Wellness Care Kit">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/wellness-care-kit/index.html"
                                                                          title="Wellness Care Kit">
                                                                          Wellness Care Kit </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>2,547.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;2,547.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>2,129.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;2,129.00.</span></span>
                                                                      <a href="indexa2d6.html?add-to-cart=3737"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3737" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Wellness Care Kit&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3736 status-publish instock product_cat-kits product_cat-lady-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3736"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/lady-care-kit/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/lady-care-kit/index.html"
                                                                          title="Lady Care Kit">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Lady-Care-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Leuco-Srf.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/lady-care-kit/index.html"
                                                                          title="Lady Care Kit">
                                                                          Lady Care Kit </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>898.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;898.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>749.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;749.00.</span></span>
                                                                      <a href="indexa98b.html?add-to-cart=3736"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3736" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Lady Care Kit&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3735 status-publish last instock product_cat-immunity-care product_cat-kits has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;16&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3735"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/immunity-booster-kit/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/immunity-booster-kit/index.html"
                                                                          title="Immunity Care Kit">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Immunity-Care-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Cogo.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/immunity-booster-kit/index.html"
                                                                          title="Immunity Care Kit">
                                                                          Immunity Care Kit </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>848.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;848.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>709.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;709.00.</span></span>
                                                                      <a href="index8ab1.html?add-to-cart=3735"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3735" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Immunity Care Kit&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-6cd25f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="6cd25f5" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e64f600"
                          data-id="e64f600" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-61e49fd elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="61e49fd" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  <a href="product-category/combo/index.html">Best Combo Packs</a>
                                              </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-4579c18 elementor-widget elementor-widget-image"
                                  data-id="4579c18" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-40f9d021 tabs-display elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="40f9d021" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39737b5f"
                          data-id="39737b5f" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-29a2b456 elementor-widget elementor-widget-wp-widget-nasa_products_tabs_sc"
                                  data-id="29a2b456" data-element_type="widget"
                                  data-widget_type="wp-widget-nasa_products_tabs_sc.default">
                                  <div class="elementor-widget-container">
                                      <div class="nasa-tabs-content nasa-not-elementor-style letter-spacing-none">
                                          <div class="nasa-tabs-wrap text-right margin-bottom-15">
                                              <ul
                                                  class="nasa-tabs nasa-classic-style nasa-classic-2d nasa-tabs-no-border">
                                                  <li class="nasa-tab first active last"><a href="javascript:void(0);"
                                                          data-index="nasa-section-1603390973265" class="nasa-a-tab"
                                                          rel="nofollow"></a></li>
                                              </ul>
                                          </div>
                                          <div class="nasa-panels">
                                              <div
                                                  class="nasa-panel hidden-tag active first nasa-section-1603390973265">
                                                  <div
                                                      class="nasa-sc products woocommerce ns-type-grid padding-top-20">
                                                      <div
                                                          class="row nasa-row-child-clear-none mobile-padding-left-5 mobile-padding-right-5">
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5758 status-publish first instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;19&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5758"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/papaya-tab-tulsi-drop/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/papaya-tab-tulsi-drop/index.html"
                                                                          title="Papaya tab + Tulsi drop">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Tulsi-drop-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/papaya-tab-tulsi-drop/index.html"
                                                                          title="Papaya tab + Tulsi drop">
                                                                          Papaya tab + Tulsi drop </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,000.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,000.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>815.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;815.00.</span></span>
                                                                      <a href="index412d.html?add-to-cart=5758"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5758" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Papaya tab + Tulsi drop&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5755 status-publish instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;20&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5755"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/papaya-tab-ayush-kwath-tab/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/papaya-tab-ayush-kwath-tab/index.html"
                                                                          title="Papaya tab + Ayush Kwath tab">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Papaya-tab-Ayush-Kwath-tab-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Papaya.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/papaya-tab-ayush-kwath-tab/index.html"
                                                                          title="Papaya tab + Ayush Kwath tab">
                                                                          Papaya tab + Ayush Kwath tab </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,184.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,184.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>949.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;949.00.</span></span>
                                                                      <a href="indexf5d8.html?add-to-cart=5755"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5755" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Papaya tab + Ayush Kwath tab&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5752 status-publish instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;22&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5752"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/trifla-ras-kubjrol-28-tab/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/trifla-ras-kubjrol-28-tab/index.html"
                                                                          title="Trifla Ras + Kubjrol-28 tab">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Trifla-Ras-Kubjrol-28-tab-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Triphala-Syruf-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/trifla-ras-kubjrol-28-tab/index.html"
                                                                          title="Trifla Ras + Kubjrol-28 tab">
                                                                          Trifla Ras + Kubjrol-28 tab </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,024.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,024.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>799.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;799.00.</span></span>
                                                                      <a href="indexace7.html?add-to-cart=5752"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5752" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Trifla Ras + Kubjrol-28 tab&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5749 status-publish instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5749"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/piles-cure-cap-trifla-ras/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/piles-cure-cap-trifla-ras/index.html"
                                                                          title="Piles cure cap + Trifla Ras">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Piles-cure-cap-Trifla-Ras-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Total-Piles-Cure.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/piles-cure-cap-trifla-ras/index.html"
                                                                          title="Piles cure cap + Trifla Ras">
                                                                          Piles cure cap + Trifla Ras </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,498.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,498.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,249.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;1,249.00.</span></span>
                                                                      <a href="indexcbbc.html?add-to-cart=5749"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5749" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Piles cure cap + Trifla Ras&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5747 status-publish last instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5747"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/ranula-51-tab-trifla-ras/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/ranula-51-tab-trifla-ras/index.html"
                                                                          title="Ranula-51 tab + Trifla Ras">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Trifla-Ras-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/ranula-51-tab-trifla-ras/index.html"
                                                                          title="Ranula-51 tab + Trifla Ras">
                                                                          Ranula-51 tab + Trifla Ras </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>948.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;948.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>789.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;789.00.</span></span>
                                                                      <a href="index61e9.html?add-to-cart=5747"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5747" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Ranula-51 tab + Trifla Ras&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-1bff0c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="1bff0c4" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0d9d3e8"
                          data-id="0d9d3e8" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-a98ff97 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="a98ff97" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  <a href="shop/index.html">Best Selling Products</a> </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-5c959df elementor-widget elementor-widget-image"
                                  data-id="5c959df" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-e172c4a tabs-display elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="e172c4a" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e347e2"
                          data-id="1e347e2" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-2b35ffa elementor-widget elementor-widget-wp-widget-nasa_products_tabs_sc"
                                  data-id="2b35ffa" data-element_type="widget"
                                  data-widget_type="wp-widget-nasa_products_tabs_sc.default">
                                  <div class="elementor-widget-container">
                                      <div class="nasa-tabs-content nasa-not-elementor-style letter-spacing-none">
                                          <div class="nasa-tabs-wrap text-right margin-bottom-15">
                                              <ul
                                                  class="nasa-tabs nasa-classic-style nasa-classic-2d nasa-tabs-no-border">
                                                  <li class="nasa-tab first active last"><a href="javascript:void(0);"
                                                          data-index="nasa-section-1713181326656" class="nasa-a-tab"
                                                          rel="nofollow">TAB TITLE</a></li>
                                              </ul>
                                          </div>
                                          <div class="nasa-panels">
                                              <div
                                                  class="nasa-panel hidden-tag active first nasa-section-1713181326656">
                                                  <div class="nasa-sc products woocommerce ns-type-grid">
                                                      <div
                                                          class="row nasa-row-child-clear-none mobile-padding-left-5 mobile-padding-right-5">
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5698 status-publish first instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;49&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5698"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/mannight-tab-mannight-oil/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/mannight-tab-mannight-oil/index.html"
                                                                          title="ManNight Tab + ManNight oil">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-450x450.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-300x300.png 300w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-595x595.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-150x150.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-768x768.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-1536x1536.png.webp 1536w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-380x380.png 380w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-100x100.png.webp 100w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil.png 1600w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-450x450.png.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-450x450.png.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-450x450.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-300x300.png 300w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-595x595.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-150x150.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-768x768.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-1536x1536.png.webp 1536w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-380x380.png 380w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil-100x100.png.webp 100w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/ManNight-Tab-ManNight-oil.png 1600w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/mannight-tab-mannight-oil/index.html"
                                                                          title="ManNight Tab + ManNight oil">
                                                                          ManNight Tab + ManNight oil </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,948.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,948.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>999.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;999.00.</span></span>
                                                                      <a href="indexcf92.html?add-to-cart=5698"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5698" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;ManNight Tab + ManNight oil&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5100 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;12&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5100"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/gokhru-extract-tab-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/gokhru-extract-tab-60-tablets/index.html"
                                                                          title="Gokhru Extract Tab (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Gokhru.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/gokhru-extract-tab-60-tablets/index.html"
                                                                          title="Gokhru Extract Tab (60 Tablets)">
                                                                          Gokhru Extract Tab (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>735.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;735.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>649.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;649.00.</span></span>
                                                                      <a href="index31a1.html?add-to-cart=5100"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5100" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Gokhru Extract Tab (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5735 status-publish instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5735"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/allbooster-tab-ashwagandha-tab/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/allbooster-tab-ashwagandha-tab/index.html"
                                                                          title="AllBooster tab + Ashwagandha tab">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/AllBooster-tab-Ashwagandha-tab-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/All-Booster-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/allbooster-tab-ashwagandha-tab/index.html"
                                                                          title="AllBooster tab + Ashwagandha tab">
                                                                          AllBooster tab + Ashwagandha tab </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,324.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,324.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,099.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;1,099.00.</span></span>
                                                                      <a href="index6c8a.html?add-to-cart=5735"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5735" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;AllBooster tab + Ashwagandha tab&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3726 status-publish instock product_cat-multi-herbs-products product_cat-pain-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;14&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3726"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/nimoil-liniment-60ml/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/nimoil-liniment-60ml/index.html"
                                                                          title="NimOil Liniment 60ML">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nim-oil.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nimoil.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/nimoil-liniment-60ml/index.html"
                                                                          title="NimOil Liniment 60ML">
                                                                          NimOil Liniment 60ML </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>265.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;265.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>229.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;229.00.</span></span>
                                                                      <a href="index04f6.html?add-to-cart=3726"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3726" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;NimOil Liniment 60ML&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5146 status-publish last instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;11&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5146"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/noni-extract-cap-60-capsules/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/noni-extract-cap-60-capsules/index.html"
                                                                          title="Noni Extract cap (60 capsules)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Noni.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/noni-extract-cap-60-capsules/index.html"
                                                                          title="Noni Extract cap (60 capsules)">
                                                                          Noni Extract cap (60 capsules) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>525.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;525.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>469.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;469.00.</span></span>
                                                                      <a href="index7b32.html?add-to-cart=5146"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5146" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Noni Extract cap (60 capsules)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3737 status-publish first instock product_cat-kits product_cat-wellness-care has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;16&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3737"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/wellness-care-kit/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/wellness-care-kit/index.html"
                                                                          title="Wellness Care Kit">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Wellness-Care-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Mannight-Tab.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/wellness-care-kit/index.html"
                                                                          title="Wellness Care Kit">
                                                                          Wellness Care Kit </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>2,547.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;2,547.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>2,129.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;2,129.00.</span></span>
                                                                      <a href="indexa2d6.html?add-to-cart=3737"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3737" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Wellness Care Kit&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5706 status-publish instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5706"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/debisulin-cap-spirulina-cap/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/debisulin-cap-spirulina-cap/index.html"
                                                                          title="Debisulin cap + Spirulina cap">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Debisulin-cap-Spirulina-cap-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Nav-Debisulin.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/debisulin-cap-spirulina-cap/index.html"
                                                                          title="Debisulin cap + Spirulina cap">
                                                                          Debisulin cap + Spirulina cap </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,498.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,498.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,249.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;1,249.00.</span></span>
                                                                      <a href="index93f0.html?add-to-cart=5706"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5706" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Debisulin cap + Spirulina cap&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-3716 status-publish instock product_cat-diabetes-care product_cat-multi-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;10&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="3716"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/ayush-kwath-kada-50gm/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/ayush-kwath-kada-50gm/index.html"
                                                                          title="Ayush Kwath Kada (50Gm)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-Kweth-Kada-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Ayush-kweth-kada.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/ayush-kwath-kada-50gm/index.html"
                                                                          title="Ayush Kwath Kada (50Gm)">
                                                                          Ayush Kwath Kada (50Gm) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>199.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;199.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>179.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;179.00.</span></span>
                                                                      <a href="index6334.html?add-to-cart=3716"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="3716" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Ayush Kwath Kada (50Gm)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5105 status-publish instock product_cat-single-herbs-products has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5105"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/giloy-extract-tab-60-tablets/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/giloy-extract-tab-60-tablets/index.html"
                                                                          title="Giloy Extract Tab (60 Tablets)">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-2.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Giloy.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/giloy-extract-tab-60-tablets/index.html"
                                                                          title="Giloy Extract Tab (60 Tablets)">
                                                                          Giloy Extract Tab (60 Tablets) </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>419.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;419.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>349.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;349.00.</span></span>
                                                                      <a href="index097a.html?add-to-cart=5105"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5105" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Giloy Extract Tab (60 Tablets)&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                          <div
                                                              class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                                                              <div
                                                                  class="product type-product post-5738 status-publish last instock product_cat-combo has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-item grid hover-left-to-right">


                                                                  <div class="product-img-wrap">
                                                                      <div class="nasa-badges-wrap"><span
                                                                              class="badge sale-label">&#045;17&#037;</span><span
                                                                              class="badge deal-label">Limited</span>
                                                                      </div>
                                                                      <div class="nasa-sc-pdeal-countdown hidden-tag">
                                                                      </div>
                                                                      <div
                                                                          class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                                                          <a href="javascript:void(0);"
                                                                              class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                                                              data-prod="5738"
                                                                              data-icon-text="Quick View"
                                                                              title="Quick View"
                                                                              data-product_type="simple"
                                                                              data-href="https://aayuheal.com/product/ranula-51-tab-ranula-51-syr-punarnava-tab/"
                                                                              rel="nofollow"><i
                                                                                  class="nasa-icon pe-7s-look"></i></a>
                                                                      </div>

                                                                      <a class="product-img"
                                                                          href="product/ranula-51-tab-ranula-51-syr-punarnava-tab/index.html"
                                                                          title="Ranula-51 tab+ Ranula-51 syr + Punarnava tab">
                                                                          <div class="main-img">
                                                                              <img decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/Ranula-51-tab-Ranula-51-syr-Punarnava-tab-1.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>

                                                                          <div class="back-img back"><img
                                                                                  decoding="async" width="450"
                                                                                  height="450"
                                                                                  src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20450%20450'%3E%3C/svg%3E"
                                                                                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                  alt=""
                                                                                  data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51.webp 1500w"
                                                                                  data-lazy-sizes="(max-width: 450px) 100vw, 450px"
                                                                                  data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp" /><noscript><img
                                                                                      loading="lazy" decoding="async"
                                                                                      width="450" height="450"
                                                                                      src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp"
                                                                                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                      alt=""
                                                                                      srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-450x450.webp 450w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-300x300.webp 300w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-595x595.webp 595w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-768x768.webp 768w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-700x700.webp 700w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-380x380.webp 380w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51-100x100.webp 100w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/Renula-51.webp 1500w"
                                                                                      sizes="(max-width: 450px) 100vw, 450px" /></noscript>
                                                                          </div>
                                                                      </a>
                                                                  </div>

                                                                  <div class="product-info-wrap info">

                                                                      <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                                                          href="product/ranula-51-tab-ranula-51-syr-punarnava-tab/index.html"
                                                                          title="Ranula-51 tab+ Ranula-51 syr + Punarnava tab">
                                                                          Ranula-51 tab+ Ranula-51 syr + Punarnava tab
                                                                      </a>

                                                                      <span class="price"><del
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,323.00</bdi></span></del>
                                                                          <span class="screen-reader-text">Original
                                                                              price was: &#8377;1,323.00.</span><ins
                                                                              aria-hidden="true"><span
                                                                                  class="woocommerce-Price-amount amount"><bdi><span
                                                                                          class="woocommerce-Price-currencySymbol">&#8377;</span>1,099.00</bdi></span></ins><span
                                                                              class="screen-reader-text">Current price
                                                                              is: &#8377;1,099.00.</span></span>
                                                                      <a href="index35fb.html?add-to-cart=5738"
                                                                          data-quantity="1"
                                                                          class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip"
                                                                          data-product_id="5738" data-product_sku=""
                                                                          aria-label="Add to cart: &ldquo;Ranula-51 tab+ Ranula-51 syr + Punarnava tab&rdquo;"
                                                                          rel="nofollow" title="Add to cart"><span
                                                                              class="add_to_cart_text">Add to
                                                                              cart</span><i
                                                                              class="cart-icon nasa-df-plus"></i></a>
                                                                  </div>


                                                              </div>

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-f6064da elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="f6064da" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cd354fc"
                          data-id="cd354fc" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-6b0548a elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="6b0548a" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  Why Choose Us </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-745d09a elementor-widget elementor-widget-image"
                                  data-id="745d09a" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-63e1dbc elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="63e1dbc" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3dbe10f"
                          data-id="3dbe10f" data-element_type="column">
                          <div class="elementor-widget-wrap">
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a3b040"
                          data-id="1a3b040" data-element_type="column">
                          <div class="elementor-widget-wrap">
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-cda2e06 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="cda2e06" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f568ba"
                          data-id="9f568ba" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-7131bd1 elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                                  data-id="7131bd1" data-element_type="widget"
                                  data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;dots&quot;,&quot;slides_to_show_tablet&quot;:&quot;2&quot;,&quot;autoplay_speed&quot;:3000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                                  data-widget_type="image-carousel.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                          <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="doctor2 (1)"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor2-1.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor2-1.webp"
                                                              alt="doctor2 (1)" /></noscript></figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="doctor3 (1)"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor3-1.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor3-1.webp"
                                                              alt="doctor3 (1)" /></noscript></figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="doctor1"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor1.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor1.webp"
                                                              alt="doctor1" /></noscript></figure>
                                              </div>
                                          </div>
                                          <div class="swiper-pagination"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-8f3ac1e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="8f3ac1e" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6caa8ec"
                          data-id="6caa8ec" data-element_type="column"
                          data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-b6645ca elementor-widget elementor-widget-text-editor"
                                  data-id="b6645ca" data-element_type="widget" data-widget_type="text-editor.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-element elementor-element-15c01ec elementor-widget elementor-widget-ideapark-heading"
                                          data-id="15c01ec" data-element_type="widget"
                                          data-widget_type="ideapark-heading.default">
                                          <div class="elementor-widget-container">
                                              <div
                                                  class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--bullet-hide">
                                                  <span class="c-ip-heading__inner">Here are a few things you can
                                                      cross off your assurance list with AayuHeal:</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-a5178cf elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                  data-id="a5178cf" data-element_type="widget" data-widget_type="icon-list.default">
                                  <div class="elementor-widget-container">
                                      <link rel="stylesheet"
                                          href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                      <ul class="elementor-icon-list-items">
                                          <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                  <svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
                                                      viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                                      </path>
                                                  </svg> </span>
                                              <span class="elementor-icon-list-text">Modern-day health care
                                                  solutions</span>
                                          </li>
                                          <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                  <svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
                                                      viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                                      </path>
                                                  </svg> </span>
                                              <span class="elementor-icon-list-text">100% Ayurvedic formulation</span>
                                          </li>
                                          <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                  <svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
                                                      viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                                      </path>
                                                  </svg> </span>
                                              <span class="elementor-icon-list-text">Locally sourced, finest natural
                                                  ingredients</span>
                                          </li>
                                          <li class="elementor-icon-list-item">
                                              <span class="elementor-icon-list-icon">
                                                  <svg aria-hidden="true" class="e-font-icon-svg e-fas-check"
                                                      viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                          d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                                      </path>
                                                  </svg> </span>
                                              <span class="elementor-icon-list-text">Exclusive kits and product
                                                  combos</span>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-60a7c8e elementor-align-left elementor-widget elementor-widget-button"
                                  data-id="60a7c8e" data-element_type="widget" data-widget_type="button.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-button-wrapper">
                                          <a class="elementor-button elementor-button-link elementor-size-sm"
                                              href="our-story/index.html">
                                              <span class="elementor-button-content-wrapper">
                                                  <span class="elementor-button-text">Read More </span>
                                              </span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5b488b3"
                          data-id="5b488b3" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-926fbd5 elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                                  data-id="926fbd5" data-element_type="widget"
                                  data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;dots&quot;,&quot;slides_to_show_tablet&quot;:&quot;2&quot;,&quot;autoplay_speed&quot;:3000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                                  data-widget_type="image-carousel.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                          <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="doctor2 (1)"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor2-1.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor2-1.webp"
                                                              alt="doctor2 (1)" /></noscript></figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="doctor3 (1)"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor3-1.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor3-1.webp"
                                                              alt="doctor3 (1)" /></noscript></figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="doctor1"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor1.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/doctor1.webp"
                                                              alt="doctor1" /></noscript></figure>
                                              </div>
                                          </div>
                                          <div class="swiper-pagination"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-0e1004c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="0e1004c" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-171ea3c"
                          data-id="171ea3c" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-7d66d4c elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="7d66d4c" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  Video Gallery </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-99e541e elementor-widget elementor-widget-image"
                                  data-id="99e541e" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                              <section
                                  class="elementor-section elementor-inner-section elementor-element elementor-element-c1ecd9d elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                  data-id="c1ecd9d" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-719b645"
                                          data-id="719b645" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-936ebe9 elementor-widget elementor-widget-video"
                                                  data-id="936ebe9" data-element_type="widget"
                                                  data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/tAWJC2abaQI&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                                  data-widget_type="video.default">
                                                  <div class="elementor-widget-container">
                                                      <style>
                                                                           .elementor-widget-video .elementor-widget-container {
                                                              overflow: hidden;
                                                              transform: translateZ(0)
                                                          }

                                                          .elementor-widget-video .elementor-wrapper {
                                                              aspect-ratio: var(--video-aspect-ratio)
                                                          }

                                                          .elementor-widget-video .elementor-wrapper iframe,
                                                          .elementor-widget-video .elementor-wrapper video {
                                                              height: 100%;
                                                              width: 100%;
                                                              display: flex;
                                                              border: none;
                                                              background-color: #000
                                                          }

                                                          @supports not (aspect-ratio:1/1) {
                                                              .elementor-widget-video .elementor-wrapper {
                                                                  position: relative;
                                                                  overflow: hidden;
                                                                  height: 0;
                                                                  padding-bottom: calc(100% / var(--video-aspect-ratio))
                                                              }

                                                              .elementor-widget-video .elementor-wrapper iframe,
                                                              .elementor-widget-video .elementor-wrapper video {
                                                                  position: absolute;
                                                                  top: 0;
                                                                  right: 0;
                                                                  bottom: 0;
                                                                  left: 0
                                                              }
                                                          }

                                                          .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
                                                              position: absolute;
                                                              top: 0;
                                                              right: 0;
                                                              bottom: 0;
                                                              left: 0;
                                                              background-size: cover;
                                                              background-position: 50%
                                                          }

                                                          .elementor-widget-video .elementor-custom-embed-image-overlay {
                                                              cursor: pointer;
                                                              text-align: center
                                                          }

                                                          .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
                                                              opacity: 1
                                                          }

                                                          .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                                              display: block;
                                                              width: 100%;
                                                              aspect-ratio: var(--video-aspect-ratio);
                                                              -o-object-fit: cover;
                                                              object-fit: cover;
                                                              -o-object-position: center center;
                                                              object-position: center center
                                                          }

                                                          @supports not (aspect-ratio:1/1) {
                                                              .elementor-widget-video .elementor-custom-embed-image-overlay {
                                                                  position: relative;
                                                                  overflow: hidden;
                                                                  height: 0;
                                                                  padding-bottom: calc(100% / var(--video-aspect-ratio))
                                                              }

                                                              .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                                                  position: absolute;
                                                                  top: 0;
                                                                  right: 0;
                                                                  bottom: 0;
                                                                  left: 0
                                                              }
                                                          }

                                                          .elementor-widget-video .e-hosted-video .elementor-video {
                                                              -o-object-fit: cover;
                                                              object-fit: cover
                                                          }

                                                          .e-con-inner>.elementor-widget-video,
                                                          .e-con>.elementor-widget-video {
                                                              width: var(--container-widget-width);
                                                              --flex-grow: var(--container-widget-flex-grow)
                                                          }
                                                      </style>
                                                      <div class="elementor-wrapper elementor-open-inline">
                                                          <div class="elementor-video"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-88e6b6e"
                                          data-id="88e6b6e" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-d8956af elementor-widget elementor-widget-video"
                                                  data-id="d8956af" data-element_type="widget"
                                                  data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/Yvy09I0Oca8&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                                  data-widget_type="video.default">
                                                  <div class="elementor-widget-container">
                                                      <div class="elementor-wrapper elementor-open-inline">
                                                          <div class="elementor-video"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6e0e79b"
                                          data-id="6e0e79b" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-3ed3bbc elementor-widget elementor-widget-video"
                                                  data-id="3ed3bbc" data-element_type="widget"
                                                  data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/_2WmkHvPJMc&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                                  data-widget_type="video.default">
                                                  <div class="elementor-widget-container">
                                                      <div class="elementor-wrapper elementor-open-inline">
                                                          <div class="elementor-video"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-511ce02 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="511ce02" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-032a425"
                          data-id="032a425" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-2d0e5af elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="2d0e5af" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  Read Our Daily Blog </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-5fdae4e elementor-widget elementor-widget-image"
                                  data-id="5fdae4e" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-7359578 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="7359578" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee5096e"
                          data-id="ee5096e" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-ba9c331 elementor-widget elementor-widget-image-carousel"
                                  data-id="ba9c331" data-element_type="widget"
                                  data-settings="{&quot;slides_to_show&quot;:&quot;4&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;speed&quot;:500,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image-carousel.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                          <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="4 copy"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/4-copy-2.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/4-copy-2.webp"
                                                              alt="4 copy" /></noscript></figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="3 copy"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/3-copy.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/3-copy.webp"
                                                              alt="3 copy" /></noscript></figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="3copy copy"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/3copy-copy-1.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/3copy-copy-1.webp"
                                                              alt="3copy copy" /></noscript></figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="Untitled-1 copy"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Untitled-1-copy-2.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Untitled-1-copy-2.webp"
                                                              alt="Untitled-1 copy" /></noscript></figure>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-d33ef1b elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="d33ef1b" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-2e297eb"
                          data-id="2e297eb" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-7f97b90 e-transform elementor-widget elementor-widget-image"
                                  data-id="7f97b90" data-element_type="widget"
                                  data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.05,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="200" height="200"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20200'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6668" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol-100x100.webp 100w"
                                          data-lazy-sizes="(max-width: 200px) 100vw, 200px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="200" height="200"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol.webp"
                                              class="attachment-large size-large wp-image-6668" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/iso-symbol-100x100.webp 100w"
                                              sizes="(max-width: 200px) 100vw, 200px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-6aff647 elementor-widget elementor-widget-heading"
                                  data-id="6aff647" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <style>
                                           .elementor-heading-title {
                                              padding: 0;
                                              margin: 0;
                                              line-height: 1
                                          }

                                          .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                              color: inherit;
                                              font-size: inherit;
                                              line-height: inherit
                                          }

                                          .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                              font-size: 15px
                                          }

                                          .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                              font-size: 19px
                                          }

                                          .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                              font-size: 29px
                                          }

                                          .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                              font-size: 39px
                                          }

                                          .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                              font-size: 59px
                                          }
                                      </style>
                                      <h2 class="elementor-heading-title elementor-size-default">ISO Certified</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-188ff53"
                          data-id="188ff53" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-c237dbe e-transform elementor-widget elementor-widget-image"
                                  data-id="c237dbe" data-element_type="widget"
                                  data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.05,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="200" height="200"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20200'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6667" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP-100x100.webp 100w"
                                          data-lazy-sizes="(max-width: 200px) 100vw, 200px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="200" height="200"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP.webp"
                                              class="attachment-large size-large wp-image-6667" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/GMP-100x100.webp 100w"
                                              sizes="(max-width: 200px) 100vw, 200px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-566a557 elementor-widget elementor-widget-heading"
                                  data-id="566a557" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">GMP Certified</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-e55096e"
                          data-id="e55096e" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-155f914 e-transform elementor-widget elementor-widget-image"
                                  data-id="155f914" data-element_type="widget"
                                  data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.05,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="200" height="200"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20200'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6665" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used-100x100.webp 100w"
                                          data-lazy-sizes="(max-width: 200px) 100vw, 200px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="200" height="200"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used.webp"
                                              class="attachment-large size-large wp-image-6665" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/Exact-used-100x100.webp 100w"
                                              sizes="(max-width: 200px) 100vw, 200px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-2fb93fb elementor-widget elementor-widget-heading"
                                  data-id="2fb93fb" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">Extract Used</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-d668bdd"
                          data-id="d668bdd" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-3bdb898 e-transform elementor-widget elementor-widget-image"
                                  data-id="3bdb898" data-element_type="widget"
                                  data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.05,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="200" height="200"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20200'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6666" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free-100x100.webp 100w"
                                          data-lazy-sizes="(max-width: 200px) 100vw, 200px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="200" height="200"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free.webp"
                                              class="attachment-large size-large wp-image-6666" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/gluten-free-100x100.webp 100w"
                                              sizes="(max-width: 200px) 100vw, 200px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-cdb1284 elementor-widget elementor-widget-heading"
                                  data-id="cdb1284" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">Gluten Free</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-abed52b"
                          data-id="abed52b" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-1129bee e-transform elementor-widget elementor-widget-image"
                                  data-id="1129bee" data-element_type="widget"
                                  data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.05,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="200" height="200"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20200'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6669" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors-100x100.webp 100w"
                                          data-lazy-sizes="(max-width: 200px) 100vw, 200px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="200" height="200"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors.webp"
                                              class="attachment-large size-large wp-image-6669" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/no-syntethic-colors-100x100.webp 100w"
                                              sizes="(max-width: 200px) 100vw, 200px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-0700f57 elementor-widget elementor-widget-heading"
                                  data-id="0700f57" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">No Artificial Color
                                      </h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ad538d7"
                          data-id="ad538d7" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-d24916f e-transform elementor-widget elementor-widget-image"
                                  data-id="d24916f" data-element_type="widget"
                                  data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.05,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="200" height="200"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20200'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6664" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free-100x100.webp 100w"
                                          data-lazy-sizes="(max-width: 200px) 100vw, 200px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="200" height="200"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free.webp"
                                              class="attachment-large size-large wp-image-6664" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/bpa-free-100x100.webp 100w"
                                              sizes="(max-width: 200px) 100vw, 200px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-eb113f2 elementor-widget elementor-widget-heading"
                                  data-id="eb113f2" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">BPA Free</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-c75c61f"
                          data-id="c75c61f" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-ed56bb8 e-transform elementor-widget elementor-widget-image"
                                  data-id="ed56bb8" data-element_type="widget"
                                  data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.05,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="200" height="200"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20200%20200'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-6663" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement-100x100.webp 100w"
                                          data-lazy-sizes="(max-width: 200px) 100vw, 200px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="200" height="200"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement.webp"
                                              class="attachment-large size-large wp-image-6663" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement.webp 200w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement-150x150.webp 150w, https://aayuheal.b-cdn.net/wp-content/uploads/2024/05/achievement-100x100.webp 100w"
                                              sizes="(max-width: 200px) 100vw, 200px" /></noscript>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-ca502fc elementor-widget elementor-widget-heading"
                                  data-id="ca502fc" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">Best Quality</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-2555957 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="2555957" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aaa68b9"
                          data-id="aaa68b9" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-5111726 elementor-widget elementor-widget-image-carousel"
                                  data-id="5111726" data-element_type="widget"
                                  data-settings="{&quot;slides_to_show&quot;:&quot;7&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;slides_to_show_mobile&quot;:&quot;4&quot;,&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;autoplay_speed&quot;:3000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                  data-widget_type="image-carousel.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                          <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="ISO Certified"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/iso-symbol.png" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/iso-symbol.png"
                                                              alt="ISO Certified" /></noscript>
                                                      <figcaption class="elementor-image-carousel-caption">ISO
                                                          Certified</figcaption>
                                                  </figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="GMP Certified"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/gmp-1.png" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/gmp-1.png"
                                                              alt="GMP Certified" /></noscript>
                                                      <figcaption class="elementor-image-carousel-caption">GMP
                                                          Certified</figcaption>
                                                  </figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="Extract Used"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/medicine.png.webp" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/04/medicine.png.webp"
                                                              alt="Extract Used" /></noscript>
                                                      <figcaption class="elementor-image-carousel-caption">Extract
                                                          Used</figcaption>
                                                  </figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="Gluten Free"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/gluten-free.png" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/gluten-free.png"
                                                              alt="Gluten Free" /></noscript>
                                                      <figcaption class="elementor-image-carousel-caption">Gluten Free
                                                      </figcaption>
                                                  </figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="No Artificial Color"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/no-syntethic-colors.png" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/no-syntethic-colors.png"
                                                              alt="No Artificial Color" /></noscript>
                                                      <figcaption class="elementor-image-carousel-caption">No
                                                          Artificial Color</figcaption>
                                                  </figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="BPA Free"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/bpa-free.png" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/bpa-free.png"
                                                              alt="BPA Free" /></noscript>
                                                      <figcaption class="elementor-image-carousel-caption">BPA Free
                                                      </figcaption>
                                                  </figure>
                                              </div>
                                              <div class="swiper-slide">
                                                  <figure class="swiper-slide-inner"><img decoding="async"
                                                          class="swiper-slide-image"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                          alt="Best Quality"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/06/achievement.png" /><noscript><img
                                                              decoding="async" class="swiper-slide-image"
                                                              src="<?php echo osc_current_web_theme_url(); ?>wp-content/uploads/2024/06/achievement.png"
                                                              alt="Best Quality" /></noscript>
                                                      <figcaption class="elementor-image-carousel-caption">Best
                                                          Quality</figcaption>
                                                  </figure>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-25b9b49 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="25b9b49" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-98f6208"
                          data-id="98f6208" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-28fd972 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                  data-id="28fd972" data-element_type="widget" data-widget_type="divider.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-divider">
                                          <span class="elementor-divider-separator">
                                              <span class="elementor-divider__text elementor-divider__element">
                                                  Our Customers Trust </span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="elementor-element elementor-element-d3db44c elementor-widget elementor-widget-image"
                                  data-id="d3db44c" data-element_type="widget" data-widget_type="image.default">
                                  <div class="elementor-widget-container">
                                      <img decoding="async" width="595" height="48"
                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20595%2048'%3E%3C/svg%3E"
                                          class="attachment-large size-large wp-image-4094" alt=""
                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                          data-lazy-sizes="(max-width: 595px) 100vw, 595px"
                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp" /><noscript><img
                                              loading="lazy" decoding="async" width="595" height="48"
                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp"
                                              class="attachment-large size-large wp-image-4094" alt=""
                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-595x48.png.webp 595w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-450x36.png.webp 450w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-150x12.png.webp 150w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n-768x61.png.webp 768w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/divider-n.png.webp 1000w"
                                              sizes="(max-width: 595px) 100vw, 595px" /></noscript>
                                  </div>
                              </div>
                              <section
                                  class="elementor-section elementor-inner-section elementor-element elementor-element-9122e2d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                  data-id="9122e2d" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                      <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-50302e2"
                                          data-id="50302e2" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-75fb176 elementor-widget elementor-widget-nasa-client"
                                                  data-id="75fb176" data-element_type="widget"
                                                  data-widget_type="nasa-client.default">
                                                  <div class="elementor-widget-container">
                                                      <div class="client text-center">
                                                          <div class="client-inner">
                                                              <div class="client-info wow fadeInUp"
                                                                  data-wow-delay="100ms" data-wow-duration="1s">
                                                                  <div class="client-content">
                                                                      <p>AayuHeal's commitment to spreading Ayurvedic
                                                                          goodness shines through in their Ministry of
                                                                          Ayush-approved products. Trustworthy quality
                                                                          from GMP-certified facilities. Highly
                                                                          recommend for holistic wellness!</p>
                                                                  </div>
                                                                  <div class="client-img-info">
                                                                      <div class="client-img"></div>
                                                                      <div class="client-name-post">
                                                                          <h4 class="client-name">Anurag Dwivedi</h4>
                                                                          <span class="client-pos"></span>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-29b5761 elementor-hidden-tablet elementor-hidden-mobile"
                                          data-id="29b5761" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-4bf6502 elementor-widget elementor-widget-image"
                                                  data-id="4bf6502" data-element_type="widget"
                                                  data-widget_type="image.default">
                                                  <div class="elementor-widget-container">
                                                      <img decoding="async" width="69" height="400"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%20400'%3E%3C/svg%3E"
                                                          class="attachment-large size-large wp-image-4247" alt=""
                                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp 69w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-52x300.png.webp 52w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-26x150.png.webp 26w"
                                                          data-lazy-sizes="(max-width: 69px) 100vw, 69px"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp" /><noscript><img
                                                              loading="lazy" decoding="async" width="69" height="400"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp"
                                                              class="attachment-large size-large wp-image-4247" alt=""
                                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp 69w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-52x300.png.webp 52w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-26x150.png.webp 26w"
                                                              sizes="(max-width: 69px) 100vw, 69px" /></noscript>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-123a5ee"
                                          data-id="123a5ee" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-4966b42 elementor-widget elementor-widget-nasa-client"
                                                  data-id="4966b42" data-element_type="widget"
                                                  data-widget_type="nasa-client.default">
                                                  <div class="elementor-widget-container">
                                                      <div class="client text-center">
                                                          <div class="client-inner">
                                                              <div class="client-info wow fadeInUp"
                                                                  data-wow-delay="100ms" data-wow-duration="1s">
                                                                  <div class="client-content">
                                                                      <p>मेरा creatitine 3.8 था। AayuHeal के aurvedic
                                                                          उपचार के बाद 3 हो गया। लेकिन जब आपने
                                                                          kidney-relive मुझे दी। एक महीने मै ही
                                                                          creatitine 0.94 आगया। जो normal है।</p>
                                                                  </div>
                                                                  <div class="client-img-info">
                                                                      <div class="client-img"></div>
                                                                      <div class="client-name-post">
                                                                          <h4 class="client-name">Lakshman Das</h4>
                                                                          <span class="client-pos"></span>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-e012d17 elementor-hidden-tablet elementor-hidden-mobile"
                                          data-id="e012d17" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-edf85e8 elementor-widget elementor-widget-image"
                                                  data-id="edf85e8" data-element_type="widget"
                                                  data-widget_type="image.default">
                                                  <div class="elementor-widget-container">
                                                      <img decoding="async" width="69" height="400"
                                                          src="<?php echo osc_current_web_theme_url(); ?>data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2069%20400'%3E%3C/svg%3E"
                                                          class="attachment-large size-large wp-image-4247" alt=""
                                                          data-lazy-srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp 69w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-52x300.png.webp 52w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-26x150.png.webp 26w"
                                                          data-lazy-sizes="(max-width: 69px) 100vw, 69px"
                                                          data-lazy-src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp" /><noscript><img
                                                              loading="lazy" decoding="async" width="69" height="400"
                                                              src="<?php echo osc_current_web_theme_url(); ?>https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp"
                                                              class="attachment-large size-large wp-image-4247" alt=""
                                                              srcset="https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves.png.webp 69w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-52x300.png.webp 52w,https://aayuheal.b-cdn.net/wp-content/uploads/2024/03/leaves-26x150.png.webp 26w"
                                                              sizes="(max-width: 69px) 100vw, 69px" /></noscript>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-e18db7d"
                                          data-id="e18db7d" data-element_type="column">
                                          <div class="elementor-widget-wrap elementor-element-populated">
                                              <div class="elementor-element elementor-element-6aca1cc elementor-widget elementor-widget-nasa-client"
                                                  data-id="6aca1cc" data-element_type="widget"
                                                  data-widget_type="nasa-client.default">
                                                  <div class="elementor-widget-container">
                                                      <div class="client text-center">
                                                          <div class="client-inner">
                                                              <div class="client-info wow fadeInUp"
                                                                  data-wow-delay="100ms" data-wow-duration="1s">
                                                                  <div class="client-content">
                                                                      <p>Very pleased with the effects of Neem karela
                                                                          Jamun Juice. Pigmentation on my face is
                                                                          slowing reducing and face started glowing.
                                                                          Keep up the good work.</p>
                                                                  </div>
                                                                  <div class="client-img-info">
                                                                      <div class="client-img"></div>
                                                                      <div class="client-name-post">
                                                                          <h4 class="client-name">Apoorva Chauhan</h4>
                                                                          <span class="client-pos"></span>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-819031b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="819031b" data-element_type="section"
                  data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b423180"
                          data-id="b423180" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-9eb9b35 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                  data-id="9eb9b35" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">100% Ayurvedic And
                                          Herbal</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ea453f8"
                          data-id="ea453f8" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-7927f41 elementor-widget elementor-widget-heading"
                                  data-id="7927f41" data-element_type="widget" data-widget_type="heading.default">
                                  <div class="elementor-widget-container">
                                      <h2 class="elementor-heading-title elementor-size-default">Free COD Available
                                          (Order above ₹499)</h2>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f3c572c"
                          data-id="f3c572c" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                              <div class="elementor-element elementor-element-be30ba6 elementor-align-justify elementor-tablet-align-center elementor-widget elementor-widget-button"
                                  data-id="be30ba6" data-element_type="widget" data-widget_type="button.default">
                                  <div class="elementor-widget-container">
                                      <div class="elementor-button-wrapper">
                                          <a class="elementor-button elementor-button-link elementor-size-sm"
                                              href="shop.html">
                                              <span class="elementor-button-content-wrapper">
                                                  <span class="elementor-button-text">Shop Now</span>
                                              </span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section
                  class="elementor-section elementor-top-section elementor-element elementor-element-d688257 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="d688257" data-element_type="section">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default">
                      <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-39d2947"
                          data-id="39d2947" data-element_type="column">
                          <div class="elementor-widget-wrap">
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7195f09"
                          data-id="7195f09" data-element_type="column">
                          <div class="elementor-widget-wrap">
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-42b6097"
                          data-id="42b6097" data-element_type="column">
                          <div class="elementor-widget-wrap">
                          </div>
                      </div>
                      <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6ab0203"
                          data-id="6ab0203" data-element_type="column">
                          <div class="elementor-widget-wrap">
                          </div>
                      </div>
                  </div>
              </section>
          </div>
      </main>
      <!-- End Main Content Site -->

      
  */ ?>