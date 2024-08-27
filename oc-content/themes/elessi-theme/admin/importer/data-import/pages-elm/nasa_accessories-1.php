<?php
function nasa_elm_accessories_1() {
    $imgs_url = elessi_import_upload('/wp-content/uploads/2019/10/retail-banner-top.jpg', '3198', array(
        'post_title' => 'retail-banner-top',
        'post_name' => 'retail-banner-top',
    ));
    $imgs_url_src = $imgs_url ? wp_get_attachment_image_url($imgs_url, 'full') : 'https://via.placeholder.com/1920x500?text=1920x500';
    
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2019/10/home-digi-2-banner-1-2.jpg', '3136', array(
        'post_title' => 'home-digi-2-banner-1-2',
        'post_name' => 'home-digi-2-banner-1-2',
    ));
    
    $imgs_2 = elessi_import_upload('/wp-content/uploads/2019/10/home-digi-2-banner-1-3.jpg', '3136', array(
        'post_title' => 'home-digi-2-banner-1-3',
        'post_name' => 'home-digi-2-banner-1-3',
    ));
    
    $imgs_3 = elessi_import_upload('/wp-content/uploads/2019/10/home-digi-2-banner-1-1.jpg', '3136', array(
        'post_title' => 'home-digi-2-banner-1-1',
        'post_name' => 'home-digi-2-banner-1-1',
    ));
    
    $imgs_4 = elessi_import_upload('/wp-content/uploads/2019/12/banner-deal-tech-acc-1.jpg', '3197', array(
        'post_title' => 'banner-deal-tech-acc-1',
        'post_name' => 'banner-deal-tech-acc-1',
    ));
    
    $imgs_5 = elessi_import_upload('/wp-content/uploads/2019/12/banner-deal-tech-acc-2.jpg', '3197', array(
        'post_title' => 'banner-deal-tech-acc-2',
        'post_name' => 'banner-deal-tech-acc-2',
    ));
    
    $brand_1 = elessi_import_upload('/wp-content/uploads/2017/09/brand-1.jpg', '3074', array(
        'post_title' => 'Brand IMG 1',
        'post_name' => 'brand-1',
    ));
    $brand_2 = elessi_import_upload('/wp-content/uploads/2017/09/brand-2.jpg', '3074', array(
        'post_title' => 'Brand IMG 2',
        'post_name' => 'brand-2',
    ));
    $brand_3 = elessi_import_upload('/wp-content/uploads/2017/09/brand-3.jpg', '3074', array(
        'post_title' => 'Brand IMG 3',
        'post_name' => 'brand-3',
    ));
    $brand_4 = elessi_import_upload('/wp-content/uploads/2017/09/brand-4.jpg', '3074', array(
        'post_title' => 'Brand IMG 4',
        'post_name' => 'brand-4',
    ));
    $brand_5 = elessi_import_upload('/wp-content/uploads/2017/09/brand-5.jpg', '3074', array(
        'post_title' => 'Brand IMG 5',
        'post_name' => 'brand-5',
    ));
    $brand_6 = elessi_import_upload('/wp-content/uploads/2017/09/brand-6.jpg', '3074', array(
        'post_title' => 'Brand IMG 6',
        'post_name' => 'brand-6',
    ));
    
    return array(
        'post' => array(
            'post_title' => 'ELM Accessories V1',
            'post_name' => 'elm-accessories-v1'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"40e19d50","elType":"section","settings":{"background_background":"classic","background_image":{"id":3531,"url":' . json_encode($imgs_url_src) . '},"css_classes":"margin-bottom-10"},"elements":[{"id":"a417c9b","elType":"column","settings":{"_column_size":100,"_inline_size":null,"css_classes":"desktop-padding-top-100 desktop-padding-bottom-150 mobile-padding-top-50 mobile-padding-bottom-50 desktop-padding-left-100 desktop-padding-right-100"},"elements":[{"id":"d297434","elType":"widget","settings":{"wp":{"title":"","text":"<h3 class=\"text-center nasa-ignore-margin nasa-leading\" style=\"font-weight: 300;\">Select Your <span class=\"primary-color\" style=\"font-weight: bold;\">Accessories<\/span><\/h3>\r\n<h6 class=\"text-center margin-bottom-40 margin-top-0\">OVER 10.000 ACCESSORIES<\/h6>","filter":"on","visual":"on"}},"elements":[],"widgetType":"wp-widget-text"},{"id":"27d711af","elType":"widget","settings":{"wp":{"style":"hoz","hide_empty":"0","count_items":"0","deep_level":"3","button_text":"Select","redirect_to":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_product_groups_sc"}],"isInner":false}],"isInner":false},{"id":"400d680e","elType":"section","settings":{"structure":"30","css_classes":"margin-bottom-30"},"elements":[{"id":"76a754c4","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"10","isLinked":false}},"elements":[{"id":"22c69723","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_1 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"fadeIn","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false},{"id":"5afd2ab5","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"10","isLinked":false}},"elements":[{"id":"6019b647","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_2 . '","height":"","width":"","link":"#","content-width":"","align":"left","move_x":"","valign":"middle","text-align":"text-left","banner_responsive":"yes","content":"<h5 style=\"font-weight: bold\">Mobile<span style=\"font-weight: 300\">\r\nAccessories<\/span><\/h5>\r\n<h6 style=\"font-size: 120%\">Just <span style=\"font-size: 130%;color: #67981a;font-weight: bold\">$120<\/span><\/h6>\r\n<a class=\"button small margin-top-15\" href=\"#\">Shop Now<\/a>","effect_text":"fadeInLeft","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false},{"id":"4e2db70a","elType":"column","settings":{"_column_size":33,"_inline_size":null,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"10","isLinked":false}},"elements":[{"id":"319dc86c","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_3 . '","height":"","width":"","link":"#","content-width":"","align":"left","move_x":"","valign":"middle","text-align":"text-left","banner_responsive":"yes","content":"<h5 style=\"font-weight: bold\">Iphone <span style=\"font-weight: 300\">Case<\/span><\/h5>\r\n<h6 style=\"font-size: 120%\">Sale <span style=\"color: #ff0000;font-weight: bold\">25%<\/span> Off<\/h6>\r\n<a class=\"button small margin-top-15\" title=\"Shop now\" href=\"#\">Shop Now<\/a>","effect_text":"fadeInLeft","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false}],"isInner":false},{"id":"38a97b3a","elType":"section","settings":[],"elements":[{"id":"6046db5f","elType":"column","settings":{"_column_size":100,"_inline_size":null,"padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":true},"padding_mobile":{"unit":"px","top":"10","right":"10","bottom":"10","left":"10","isLinked":true}},"elements":[{"id":"4c958a67","elType":"widget","settings":{"title":"Featured Categories","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_css_classes":"margin-bottom-20","size":"large","header_size":"h3"},"elements":[],"widgetType":"heading"},{"id":"79a15844","elType":"widget","settings":{"wp":{"title":"","list_cats":"grooming-men, shoes-men, clothing-woman, jewelry-woman, beauty, kid","number":"0","disp_type":"grid","parent":"true","root_cat":"","hide_empty":"0","columns_number":"3","columns_number_small":"1","columns_number_tablet":"2","number_vertical":"4","auto_slide":"true","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_product_categories_sc"}],"isInner":false}],"isInner":false},{"id":"6c1260c1","elType":"section","settings":[],"elements":[{"id":"8b7ec46","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"2c4a770a","elType":"widget","settings":{"wp":{"title":"What we offer","desc":"","alignment":"right","style":"2d-has-bg","tabs":{"1603390813386":{"tab_title":"NEW ARRIVALS","type":"recent_product","style":"infinite","style_viewmore":"2","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603390922363":{"tab_title":"FEATURED","type":"recent_product","style":"infinite","style_viewmore":"2","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1603390973265":{"tab_title":"ON SALE","type":"recent_product","style":"infinite","style_viewmore":"2","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"3c7252d3","elType":"section","settings":{"layout":"full_width","gap":"no","css_classes":"margin-bottom-60 mobile-margin-bottom-50"},"elements":[{"id":"5795f73","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"194c3057","elType":"widget","settings":{"wp":{"title":"","align":"left","sliders":{"1605613429171":{"img_src":"' . $imgs_4 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"10%","valign":"middle","text-align":"text-left","banner_responsive":"no","content":"<h6 class=\"margin-top-0 desktop-margin-bottom-10 mobile-margin-bottom-5\">MOBILE ACCESSORIES<\/h6>\r\n<h3 class=\"mobile-margin-top-5 mobile-margin-bottom-5\">Apple watch Sport Band<\/h3>\r\n<div class=\"price font-200 nasa-bold desktop-margin-bottom-30 mobile-margin-bottom-5 mobile-margin-top-5\"><del><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">$<\/span>299.00<\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">$<\/span>199.00<\/span><\/ins><\/div>\r\n[nasa_countdown date=\"2024-12-30\" size=\"small\" align=\"left\" el_class=\"rtl-text-right\"]\r\n<div class=\"margin-top-20\"><a class=\"button\" title=\"Shop now\" href=\"#\">Shop Now<\/a><\/div>","effect_text":"fadeIn","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605613583358":{"img_src":"' . $imgs_5 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"10%","valign":"middle","text-align":"text-left","banner_responsive":"no","content":"<h6 class=\"margin-top-0 desktop-margin-bottom-10 mobile-margin-bottom-5\">MOBILE ACCESSORIES<\/h6>\r\n<h3 class=\"mobile-margin-top-5 mobile-margin-bottom-5\">Apple watch Sport Band<\/h3>\r\n<div class=\"price font-200 nasa-bold desktop-margin-bottom-30 mobile-margin-bottom-5 mobile-margin-top-5\"><del><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">$<\/span>299.00<\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><span class=\"woocommerce-Price-currencySymbol\">$<\/span>199.00<\/span><\/ins><\/div>\r\n[nasa_countdown date=\"2024-12-30\" size=\"small\" align=\"left\" el_class=\"rtl-text-right\"]\r\n<div class=\"margin-top-20\"><a class=\"button\" title=\"Shop now\" href=\"#\">Shop Now<\/a><\/div>","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""}},"bullets":"true","bullets_pos":"inside","bullets_align":"center","navigation":"false","column_number":"1","column_number_small":"1","column_number_tablet":"1","padding_item":"","padding_item_small":"","padding_item_medium":"","autoplay":"false","paginationspeed":"800","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_sliders_sc"}],"isInner":false}],"isInner":false},{"id":"30b86d57","elType":"section","settings":{"structure":"30","css_classes":"margin-bottom-30"},"elements":[{"id":"74044afd","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"2a268027","elType":"widget","settings":{"title":"Top Rated","header_size":"h3","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800"},"elements":[],"widgetType":"heading"},{"id":"70ce7b3e","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"recent_product","style":"list","style_viewmore":"1","style_row":"3","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"3","auto_delay_time":"6","columns_number":"1","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"1","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false},{"id":"5436f021","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"47621062","elType":"widget","settings":{"title":"Best Selling","header_size":"h3","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800"},"elements":[],"widgetType":"heading"},{"id":"282dc565","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"recent_product","style":"list","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"3","auto_delay_time":"6","columns_number":"1","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"1","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false},{"id":"1ca8567f","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"7dbfb304","elType":"widget","settings":{"title":"On Sale","header_size":"h3","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800"},"elements":[],"widgetType":"heading"},{"id":"420e334","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"recent_product","style":"list","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"3","auto_delay_time":"6","columns_number":"1","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"1","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false}],"isInner":false},{"id":"628beb4e","elType":"section","settings":{"css_classes":"margin-top-80"},"elements":[{"id":"292e21c3","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"57059830","elType":"widget","settings":{"title":"Latest blog","size":"large","header_size":"h3","align":"center","title_color":"#000000","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_css_classes":"margin-bottom-20"},"elements":[],"widgetType":"heading"},{"id":"3dd865ee","elType":"widget","settings":{"wp":{"title":"","show_type":"slide","auto_slide":"false","arrows":"1","dots":"false","posts":"4","columns_number":"3","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"3","category":"","cats_enable":"yes","date_enable":"yes","author_enable":"no","readmore":"yes","date_author":"bot","des_enable":"no","page_blogs":"no","info_align":"left","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_post_sc"}],"isInner":false}],"isInner":false},{"id":"a642e91","elType":"section","settings":{"css_classes":"margin-top-30 margin-bottom-50"},"elements":[{"id":"1199864","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"5f06abd","elType":"widget","settings":{"wp":{"title":"","align":"center","sliders":{"1605886645649":{"img_src":"' . $brand_1 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886663901":{"img_src":"' . $brand_2 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886673562":{"img_src":"' . $brand_3 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886691185":{"img_src":"' . $brand_4 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886702478":{"img_src":"' . $brand_5 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886713208":{"img_src":"' . $brand_6 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""}},"bullets":"false","bullets_pos":"","bullets_align":"center","navigation":"true","column_number":"6","column_number_small":"3","column_number_tablet":"4","padding_item":"","padding_item_small":"","padding_item_medium":"","autoplay":"false","paginationspeed":"300","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_sliders_sc"}],"isInner":false}],"isInner":false}]',
            '_elementor_controls_usage' => 'a:11:{s:14:"wp-widget-text";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:32:"wp-widget-nasa_product_groups_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:6:"column";a:3:{s:5:"count";i:12;s:15:"control_percent";i:0;s:8:"controls";a:2:{s:6:"layout";a:1:{s:6:"layout";a:1:{s:12:"_inline_size";i:12;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:3:{s:11:"css_classes";i:1;s:14:"padding_mobile";i:4;s:7:"padding";i:1;}}}}s:7:"section";a:3:{s:5:"count";i:8;s:15:"control_percent";i:0;s:8:"controls";a:3:{s:5:"style";a:1:{s:18:"section_background";a:2:{s:21:"background_background";i:1;s:16:"background_image";i:1;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:1:{s:11:"css_classes";i:6;}}s:6:"layout";a:2:{s:17:"section_structure";a:1:{s:9:"structure";i:2;}s:14:"section_layout";a:2:{s:6:"layout";i:1;s:3:"gap";i:1;}}}}s:24:"wp-widget-nasa_banner_sc";a:3:{s:5:"count";i:3;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:7:"heading";a:3:{s:5:"count";i:5;s:15:"control_percent";i:4;s:8:"controls";a:3:{s:7:"content";a:1:{s:13:"section_title";a:4:{s:5:"title";i:5;s:5:"align";i:2;s:4:"size";i:2;s:11:"header_size";i:5;}}s:5:"style";a:1:{s:19:"section_title_style";a:4:{s:11:"title_color";i:5;s:21:"typography_typography";i:5;s:22:"typography_font_family";i:5;s:22:"typography_font_weight";i:5;}}s:8:"advanced";a:1:{s:14:"_section_style";a:1:{s:12:"_css_classes";i:2;}}}}s:36:"wp-widget-nasa_product_categories_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:31:"wp-widget-nasa_products_tabs_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:25:"wp-widget-nasa_sliders_sc";a:3:{s:5:"count";i:2;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:26:"wp-widget-nasa_products_sc";a:3:{s:5:"count";i:3;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:22:"wp-widget-nasa_post_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}}',
            '_elementor_css' => 'a:6:{s:4:"time";i:1606209443;s:5:"fonts";a:1:{i:0;s:4:"Jost";}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
            // '_nasa_custom_header' => '4',
            // '_nasa_pri_color_flag' => 'on',
            // '_nasa_pri_color' => '#d89701',
        ),
        
        'globals' => array(
            'header-type' => '4',
            
            'fixed_nav' => '0',
            
            'color_primary' => '#d89701',
            
            'footer_mode' => 'builder-e',
            'footer_elm' => elessi_elm_fid_by_slug('hfe-footer-light-2'),
            'footer_elm_mobile' => elessi_elm_fid_by_slug('hfe-footer-mobile'),
            
            'product_detail_layout' => 'modern-1',
            'tab_style_info' => 'scroll-down',
            'loop_layout_buttons' => 'hoz-buttons',
            
            'animated_products' => 'hover-left-to-right',
            
            'nasa_attr_image_style' => 'square'
        ),

        'css' => '.elementor-[inserted_id] .elementor-element.elementor-element-40e19d50:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-40e19d50 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("https://via.placeholder.com/1920x500?text=1920x500");}.elementor-[inserted_id] .elementor-element.elementor-element-40e19d50{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-40e19d50 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-6046db5f > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-4c958a67{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-4c958a67 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-2a268027 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-47621062 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-7dbfb304 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-57059830{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-57059830 .elementor-heading-title{color:#000000;font-family:"Jost", Sans-serif;font-weight:800;}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-76a754c4 > .elementor-element-populated{padding:0px 10px 10px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-5afd2ab5 > .elementor-element-populated{padding:0px 10px 10px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-4e2db70a > .elementor-element-populated{padding:0px 10px 10px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-6046db5f > .elementor-element-populated{padding:10px 10px 10px 10px;}}'
    );
}
