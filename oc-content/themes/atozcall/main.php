<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">

<head>
    <?php osc_current_web_theme_path('head.php'); ?>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
</head>

<body
    class="home page-template-default page page-id-3714 theme-elessi-theme nasa-woo-actived nasa-core-actived woocommerce-no-js ehf-template-elessi-theme ehf-stylesheet-elessi-theme-child antialiased nasa-quickview-on nasa-focus-main-image   nasa-label-attr-single nasa-image-square elementor-default elementor-kit-7 elementor-page elementor-page-3714">
    <?php osc_current_web_theme_path('header.php'); ?>
    <?php osc_current_web_theme_path('inc.search.php'); ?>
    <div class="container margin-top-10">
        <?php twitter_show_flash_message(); ?>
    </div>
    <!-- content -->
    <div class="container container-fluid latest_ads row">
        <div class="sidebar col-md-4">
            <div class="row">
                <div class="span4 columns">
                    <h3><?php _e('Pages', 'twitter'); ?></h3>
                    <ul class="unstyled">
                        <?php while (osc_has_static_pages()) { ?>
                            <li><a href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a>
                            </li>
                        <?php } ?>
                        <li><a href="<?php echo osc_contact_url(); ?>"><?php _e('Contact', 'twitter'); ?></a></li>
                    </ul>
                </div>
            </div>
            <?php if (!View::newInstance()->_exists('list_contries')) {
                View::newInstance()->_exportVariableToView('list_regions', Search::newInstance()->listRegions('%%%%', '>=', 'region_name ASC'));
            }

            if (osc_count_list_regions()) { ?>
                <div class="row">
                    <div class="span4 columns">
                        <h3><?php _e('Regions', 'twitter'); ?></h3>
                        <ul class="unstyled">
                            <?php while (osc_has_list_regions()) { ?>
                                <li>
                                    <a
                                        href="<?php echo osc_search_url(array('sRegion' => osc_list_region_id())); ?>"><?php echo osc_list_region_name(); ?></a>
                                    (<?php echo osc_list_region_items(); ?>)
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="content col-md-8">
            <h1><?php _e('Latest Items', 'twitter'); ?></h1>
            <?php if (osc_count_latest_items() == 0) { ?>
                <p>
                    <?php _e('No Latest Items', 'twitter'); ?>
                </p>
            <?php } else { ?>
                <?php while (osc_has_latest_items()) { ?>
                    <div class="product-warp-item columns nasa-large-5-col-1 medium-4 small-6 nasa-modern-6">
                        <div
                            class="product type-product post-<?php echo osc_item_id(); ?> status-publish instock product-item grid hover-left-to-right has-add">
                            <div class="product-img-wrap">
                                <div class="nasa-badges-wrap">
                                    <?php if (osc_item_is_premium()) { ?>
                                        <span class="badge sale-label">Premium</span>
                                    <?php } ?>
                                </div>

                                <div class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
                                    <a href="javascript:void(0);"
                                        class="quick-view btn-link quick-view-icon nasa-tip nasa-tip-left"
                                        data-prod="<?php echo osc_item_id(); ?>" title="Quick View">
                                        <i class="nasa-icon pe-7s-look"></i>
                                    </a>
                                </div>

                                <a class="product-img" href="<?php echo osc_item_url(); ?>">
                                    <div class="main-img">
                                        <?php if (osc_count_item_resources()) { ?>
                                            <img width="450" height="450" src="<?php echo osc_resource_thumbnail_url(); ?>"
                                                alt="<?php echo osc_item_title(); ?>" />
                                        <?php } else { ?>
                                            <img width="450" height="450"
                                                src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>"
                                                alt="No image available" />
                                        <?php } ?>
                                    </div>
                                </a>
                            </div>

                            <div class="product-info-wrap info">
                                <a class="name woocommerce-loop-product__title nasa-show-one-line"
                                    href="<?php echo osc_item_url(); ?>">
                                    <?php echo osc_item_title(); ?>
                                </a>

                                <?php if (osc_price_enabled_at_items()) { ?>
                                    <span class="price">
                                        <ins aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol"><?php echo osc_currency_symbol(); ?></span><?php echo osc_item_price(); ?></bdi></span></ins>
                                    </span>
                                <?php } ?>

                                <p><?php printf(__('Publish date: %s', 'twitter'), osc_format_date(osc_item_pub_date())); ?></p>

                                <?php
                                $location = array();
                                if (osc_item_country() != '') {
                                    $location[] = sprintf(__('Country: %s', 'twitter'), osc_item_country());
                                }
                                if (osc_item_region() != '') {
                                    $location[] = sprintf(__('Region: %s', 'twitter'), osc_item_region());
                                }
                                if (osc_item_city() != '') {
                                    $location[] = sprintf(__('City: %s', 'twitter'), osc_item_city());
                                }
                                if (count($location) > 0) {
                                    echo '<p>' . implode(' &middot; ', $location) . '</p>';
                                }
                                ?>

                                <p><?php echo osc_highlight(strip_tags(osc_item_description())); ?></p>

                                <a href="?add-to-cart=<?php echo osc_item_id(); ?>" data-quantity="1"
                                    class="button add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if (osc_count_latest_items() == osc_max_latest_items()) { ?>
                    <div class="row show-all-ads">
                        <div class="span12 columns">
                            <a class="btn primary"
                                href="<?php echo osc_search_show_all_url(); ?>"><strong><?php _e("See all offers", 'twitter'); ?>
                                    &raquo;</strong></a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <?php osc_current_web_theme_path('footer.php'); ?>
</body>

</html>