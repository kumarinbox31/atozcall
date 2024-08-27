<?php
function nasa_elm_jewelry() {
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2016/06/je-banner1.jpg', '3094', array(
        'post_title' => 'je-banner1',
        'post_name' => 'je-banner1',
    ));
    
    $imgs_2 = elessi_import_upload('/wp-content/uploads/2016/06/je-banner2.jpg', '3117', array(
        'post_title' => 'je-banner2',
        'post_name' => 'je-banner2',
    ));
    
    $imgs_3 = elessi_import_upload('/wp-content/uploads/2016/06/je-banner3.jpg', '3115', array(
        'post_title' => 'je-banner3',
        'post_name' => 'je-banner3',
    ));
    
    $imgs_4 = elessi_import_upload('/wp-content/uploads/2019/09/je-banner45.jpg', '3115', array(
        'post_title' => 'je-banner45',
        'post_name' => 'je-banner45',
    ));
    
    $imgs_5 = elessi_import_upload('/wp-content/uploads/2016/06/je-banner5.jpg', '3100', array(
        'post_title' => 'je-banner5',
        'post_name' => 'je-banner5',
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
            'post_title' => 'ELM Jewelry',
            'post_name' => 'elm-jewelry'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"5e6f0ac6","elType":"section","settings":{"layout":"full_width","gap":"no","margin":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"1efb2b82","elType":"column","settings":{"_column_size":100,"_inline_size":null,"css_classes":"nasa-crazy-box"},"elements":[{"id":"dc6f604","elType":"widget","settings":{"revslidertitle":"Slider jewelry","shortcode":"[rev_slider alias=\"slider-jewelry\" slidertitle=\"Slider jewelry\"][\/rev_slider]"},"elements":[],"widgetType":"slider_revolution"}],"isInner":false}],"isInner":false},{"id":"7bca6964","elType":"section","settings":{"structure":"20","stretch_section":"section-stretched","margin":{"unit":"px","top":"20","right":0,"bottom":"60","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"22022c6e","elType":"column","settings":{"_column_size":50,"_inline_size":50,"padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"62139f7f","elType":"section","settings":{"margin_mobile":{"unit":"px","top":"10","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"b925d3c","elType":"column","settings":{"_column_size":100,"_inline_size":null,"padding":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"6f823e00","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_1 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"<h4 class=\"padding-bottom-10;\" style=\"font-weight: 300;line-height: 1.2\">Collections for\r\nLove That Rings True<\/h4>\r\n<p style=\"color: #a4a4a4;font-size: 15px\">From $199.00<\/p>\r\n<a class=\"button medium margin-top-20\" style=\"color: #000000;font-weight: 300\" href=\"#\">Discover now<\/a>","effect_text":"fadeInLeft","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":true}],"isInner":true}],"isInner":false},{"id":"2adcd821","elType":"column","settings":{"_column_size":50,"_inline_size":50,"html_tag":"section","padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"14400250","elType":"section","settings":{"margin_mobile":{"unit":"px","top":"10","right":0,"bottom":"0","left":0,"isLinked":false},"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"22adff8c","elType":"column","settings":{"_column_size":100,"_inline_size":null,"padding":{"unit":"px","top":"0","right":"0","bottom":"20","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"0","isLinked":false},"padding_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"592782e5","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_2 . '","height":"","width":"","link":"","content-width":"","align":"right","move_x":"","valign":"top","text-align":"text-right","banner_responsive":"yes","content":"<h4 class=\"margin-top-10 margin-bottom-10\" style=\"font-weight: 300\">Gift\r\nfor her<\/h4>\r\n<p style=\"color: #a4a4a4;font-size: 15px\">from $99.00<\/p>","effect_text":"fadeInRight","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":true}],"isInner":true},{"id":"25500b08","elType":"section","settings":{"structure":"20","padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"2d782054","elType":"column","settings":{"_column_size":50,"_inline_size":null,"padding":{"unit":"px","top":"0","right":"10","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"23a54cf9","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_3 . '","height":"","width":"","link":"","content-width":"","align":"center","move_x":"","valign":"top","text-align":"text-center","banner_responsive":"yes","content":"","effect_text":"fadeIn","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"yes","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":true},{"id":"359ea94f","elType":"column","settings":{"_column_size":50,"_inline_size":null,"padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"10","isLinked":false},"margin_mobile":{"unit":"px","top":"10","right":"0","bottom":"0","left":"0","isLinked":false},"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"7d37c25","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_4 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"fadeIn","data_delay":"","hover":"zoom","border_inner":"no","border_outner":"no","el_class":"margin-bottom-0"}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":true}],"isInner":true}],"isInner":false}],"isInner":false},{"id":"6d8f0c2f","elType":"section","settings":{"css_classes":"margin-top-50"},"elements":[{"id":"19b85bd0","elType":"column","settings":{"_column_size":100,"_inline_size":null,"padding":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"32653c7b","elType":"widget","settings":{"title":"Featured Products","size":"large","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","header_size":"h3"},"elements":[],"widgetType":"heading"},{"id":"7136b6bf","elType":"widget","settings":{"wp":{"title":"","desc":"","alignment":"center","style":"2d-no-border","tabs":{"1602751895938":{"tab_title":"ALL","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1602751981881":{"tab_title":"BEST SELLER","type":"recent_product","style":"carousel","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1602752233078":{"tab_title":"ON SALE","type":"recent_product","style":"carousel","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1602752236154":{"tab_title":"NEW ARRIVALS","type":"recent_product","style":"carousel","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""},"1602752238627":{"tab_title":"NEW","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"2","pos_nav":"top","title_align":"left","shop_url":"1","arrows":"0","dots":"false","auto_slide":"false","number":"8","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"4bb6a16a","elType":"section","settings":{"layout":"full_width","margin":{"unit":"px","top":"0","right":0,"bottom":"45","left":0,"isLinked":false},"gap":"no"},"elements":[{"id":"26ae007f","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"568d07fa","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_5 . '","height":"567","width":"","link":"#","content-width":"","align":"left","move_x":"","valign":"middle","text-align":"text-left","banner_responsive":"no","content":"<h1 style=\"font-weight: 300\">Necklaces Collection<\/h1>\r\n<p style=\"font-size: 15px;margin-top: 10px;font-weight: 500\">Give you neckline something to boast about, from delicate chains to striking<\/p>\r\npendants and dramatic link necklaces.\r\n<p style=\"font-weight: 500;font-size: 15px\">Discover Now+<\/p>","effect_text":"fadeInDown","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_sc"}],"isInner":false}],"isInner":false},{"id":"370abfb4","elType":"section","settings":{"background_background":"gradient","background_color":"#FFFFFF","background_color_b":"#FFFFFF","margin":{"unit":"px","top":"0","right":0,"bottom":"60","left":0,"isLinked":false}},"elements":[{"id":"22f174d9","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"7707b488","elType":"widget","settings":{"title":"Shop By Category","size":"large","header_size":"h3","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_css_classes":"margin-bottom-10"},"elements":[],"widgetType":"heading"},{"id":"abf080c","elType":"widget","settings":{"wp":{"title":"","content":"<p class=\"nasa-title-desc text-center\">Visit our shop to see amazing creations from our desiginers<\/p>"}},"elements":[],"widgetType":"wp-widget-custom_html"},{"id":"10ffdc2d","elType":"widget","settings":{"wp":{"title":"","list_cats":"necklaces-pendants, bracelets, earrings, rings, charms, brooches","number":"5","disp_type":"Horizontal6","parent":"true","root_cat":"","hide_empty":"0","columns_number":"5","columns_number_small":"2","columns_number_tablet":"3","number_vertical":"4","auto_slide":"false","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_product_categories_sc"}],"isInner":false}],"isInner":false},{"id":"37a93fc0","elType":"section","settings":{"gap":"no","margin":{"unit":"px","top":"0","right":0,"bottom":"30","left":0,"isLinked":false}},"elements":[{"id":"456ef4bf","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"b9a741","elType":"widget","settings":{"title":"Our Instagram","size":"large","header_size":"h3","align":"center","title_color":"#333333","typography_typography":"custom","typography_font_family":"Jost","typography_font_weight":"800","_css_classes":"margin-bottom-5"},"elements":[],"widgetType":"heading"},{"id":"10eb496d","elType":"widget","settings":{"wp":{"title":"","content":"<p class=\"nasa-title-desc text-center\">The freshest and most exciting news<\/p>"}},"elements":[],"widgetType":"wp-widget-custom_html"},{"id":"3bef6285","elType":"widget","settings":{"wp":{"username_show":"","instagram_link":"","img_size":"full","disp_type":"zz","auto_slide":"false","limit_items":"5","columns_number":"5","columns_number_tablet":"5","columns_number_small":"3","el_class_img":"skip-lazy","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_instagram_feed_sc"}],"isInner":false}],"isInner":false},{"id":"ee21203","elType":"section","settings":{"css_classes":"margin-top-30 margin-bottom-50"},"elements":[{"id":"709a1b1","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"0553613","elType":"widget","settings":{"wp":{"title":"","align":"center","sliders":{"1605886645649":{"img_src":"' . $brand_1 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886663901":{"img_src":"' . $brand_2 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886673562":{"img_src":"' . $brand_3 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886691185":{"img_src":"' . $brand_4 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886702478":{"img_src":"' . $brand_5 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""},"1605886713208":{"img_src":"' . $brand_6 . '","height":"","width":"","link":"","content-width":"","align":"left","move_x":"","valign":"top","text-align":"text-left","banner_responsive":"yes","content":"","effect_text":"none","data_delay":"","hover":"","border_inner":"no","border_outner":"no","el_class":""}},"bullets":"false","bullets_pos":"","bullets_align":"center","navigation":"true","column_number":"6","column_number_small":"3","column_number_tablet":"4","padding_item":"","padding_item_small":"","padding_item_medium":"","autoplay":"false","paginationspeed":"300","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_sliders_sc"}],"isInner":false}],"isInner":false}]',
            '_elementor_controls_usage' => 'a:10:{s:27:"wp-widget-rev-slider-widget";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:6:"column";a:3:{s:5:"count";i:12;s:15:"control_percent";i:0;s:8:"controls";a:2:{s:6:"layout";a:1:{s:6:"layout";a:2:{s:12:"_inline_size";i:12;s:8:"html_tag";i:1;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:3:{s:7:"padding";i:7;s:13:"margin_mobile";i:3;s:14:"padding_mobile";i:2;}}}}s:7:"section";a:3:{s:5:"count";i:10;s:15:"control_percent";i:0;s:8:"controls";a:3:{s:6:"layout";a:2:{s:14:"section_layout";a:3:{s:6:"layout";i:2;s:3:"gap";i:3;s:15:"stretch_section";i:1;}s:17:"section_structure";a:1:{s:9:"structure";i:2;}}s:8:"advanced";a:1:{s:16:"section_advanced";a:5:{s:6:"margin";i:5;s:13:"margin_mobile";i:4;s:14:"padding_mobile";i:1;s:7:"padding";i:1;s:11:"css_classes";i:2;}}s:5:"style";a:1:{s:18:"section_background";a:3:{s:21:"background_background";i:1;s:16:"background_color";i:1;s:18:"background_color_b";i:1;}}}}s:24:"wp-widget-nasa_banner_sc";a:3:{s:5:"count";i:5;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:7:"heading";a:3:{s:5:"count";i:3;s:15:"control_percent";i:4;s:8:"controls";a:3:{s:7:"content";a:1:{s:13:"section_title";a:4:{s:5:"title";i:3;s:4:"size";i:3;s:5:"align";i:3;s:11:"header_size";i:3;}}s:5:"style";a:1:{s:19:"section_title_style";a:4:{s:11:"title_color";i:3;s:21:"typography_typography";i:3;s:22:"typography_font_family";i:3;s:22:"typography_font_weight";i:3;}}s:8:"advanced";a:1:{s:14:"_section_style";a:1:{s:12:"_css_classes";i:2;}}}}s:31:"wp-widget-nasa_products_tabs_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:21:"wp-widget-custom_html";a:3:{s:5:"count";i:2;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:36:"wp-widget-nasa_product_categories_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:32:"wp-widget-nasa_instagram_feed_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}s:25:"wp-widget-nasa_sliders_sc";a:3:{s:5:"count";i:1;s:15:"control_percent";i:0;s:8:"controls";a:0:{}}}',
            '_elementor_css' => 'a:6:{s:4:"time";i:1639649928;s:5:"fonts";a:1:{i:0;s:4:"Jost";}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
            
            // '_nasa_pri_color_flag' => 'on',
            // '_nasa_pri_color' => '#82d9d1',
            // '_nasa_type_font_select' => 'google',
            // '_nasa_type_headings' => 'Marcellus',
            // '_nasa_type_texts' => 'Marcellus',
            // '_nasa_type_nav' => 'Marcellus',
            // '_nasa_type_banner' => 'Marcellus',
            // '_nasa_type_price' => 'Marcellus',
            // '_nasa_font_weight' => '900',
        ),
        
        'globals' => array(
            'header-type' => '1',
            
            // 'fixed_nav' => '0',
            
            // 'plus_wide_width' => '200',
            'color_primary' => '#82d9d1',
            
            // 'fullwidth_main_menu' => '1',
            
            // 'bg_color_main_menu' => '#e4272c',
            // 'text_color_main_menu' => '#ffffff',
            
            // 'bg_color_v_menu' => '#000000',
            // 'text_color_v_menu' => '#ffffff',
            
            'footer_mode' => 'builder-e',
            'footer_elm' => elessi_elm_fid_by_slug('hfe-footer-light-2'),
            'footer_elm_mobile' => elessi_elm_fid_by_slug('hfe-footer-mobile'),
            
            // 'category_sidebar' => 'left',
            
            // 'product_detail_layout' => 'modern-3',
            'product_image_layout' => 'single',
            // 'product_image_style' => 'slide',
            // 'single_product_layout_bg' => '#f6f6f6',
            // 'tab_style_info' => '2d-no-border',
            
            'loop_layout_buttons' => 'modern-6',
            
            // 'animated_products' => 'hover-carousel',
            
            'nasa_attr_image_style' => 'square',
            // 'nasa_attr_image_single_style' => 'extends',
            // 'nasa_attr_color_style' => 'round',
            // 'nasa_attr_label_style' => 'round',
            
            // 'breadcrumb_row' => 'single',
            // 'breadcrumb_type' => 'default',
            // 'breadcrumb_bg_color' => '#f6f6f6',
        ),

        'css' => '.elementor-[inserted_id] .elementor-element.elementor-element-5e6f0ac6{margin-top:0px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-7bca6964{margin-top:20px;margin-bottom:60px;}.elementor-[inserted_id] .elementor-element.elementor-element-22022c6e > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-b925d3c > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-2adcd821 > .elementor-element-populated{padding:0px 0px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-22adff8c > .elementor-element-populated{padding:0px 0px 20px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-25500b08{padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-2d782054 > .elementor-element-populated{padding:0px 10px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-359ea94f > .elementor-element-populated{padding:0px 0px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-19b85bd0 > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-[inserted_id] .elementor-element.elementor-element-32653c7b{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-32653c7b .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-4bb6a16a{margin-top:0px;margin-bottom:45px;}.elementor-[inserted_id] .elementor-element.elementor-element-370abfb4:not(.elementor-motion-effects-element-type-background), .elementor-[inserted_id] .elementor-element.elementor-element-370abfb4 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:transparent;background-image:linear-gradient(180deg, #FFFFFF 0%, #FFFFFF 100%);}.elementor-[inserted_id] .elementor-element.elementor-element-370abfb4{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:60px;}.elementor-[inserted_id] .elementor-element.elementor-element-370abfb4 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-7707b488{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-7707b488 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}.elementor-[inserted_id] .elementor-element.elementor-element-37a93fc0{margin-top:0px;margin-bottom:30px;}.elementor-[inserted_id] .elementor-element.elementor-element-b9a741{text-align:center;}.elementor-[inserted_id] .elementor-element.elementor-element-b9a741 .elementor-heading-title{color:#333333;font-family:"Jost", Sans-serif;font-weight:800;}@media(min-width:768px){.elementor-[inserted_id] .elementor-element.elementor-element-22022c6e{width:50%;}.elementor-[inserted_id] .elementor-element.elementor-element-2adcd821{width:50%;}}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-7bca6964{margin-top:0px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-62139f7f{margin-top:10px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-14400250{margin-top:10px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-22adff8c > .elementor-element-populated{margin:0px 10px 10px 0px;--e-column-margin-right:10px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-[inserted_id] .elementor-element.elementor-element-25500b08{margin-top:0px;margin-bottom:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-2d782054 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-[inserted_id] .elementor-element.elementor-element-359ea94f > .elementor-element-populated{margin:10px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 10px 0px 0px;}}'
    );
}
