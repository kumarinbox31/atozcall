<?php
add_action('init', 'elessi_header_footer_heading');
if (!function_exists('elessi_header_footer_heading')) {
    function elessi_header_footer_heading() {
        // Set the Options Array
        global $of_options;
        if (empty($of_options)) {
            $of_options = array();
        }
        
        $static_blocks = elessi_admin_get_static_blocks();
        
        $of_options[] = array(
            "name" => __("Header and Footer", 'elessi-theme'),
            "target" => 'header-footer',
            "type" => "heading"
        );

        $of_options[] = array(
            "name" => __("Header Options", 'elessi-theme'),
            "std" => "<h4>" . __("Header Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            'class' => 'first'
        );
        
        $header_type_list = array(
            '1' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-1.jpg',
            '2' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-2.jpg',
            '3' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-3.jpg',
            '4' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-4.jpg',
            '5' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-5.jpg',
            '6' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-6.jpg',
            '7' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-7.jpg',
        );
        
        if (NASA_WPB_ACTIVE || !apply_filters('nasa_rules_upgrade', true)) {
            $header_type_list['nasa-custom'] = ELESSI_ADMIN_DIR_URI . 'assets/images/header-builder-wpbakery.jpg';
        }
        
        if (NASA_HF_BUILDER) {
            $header_type_list['nasa-elm'] = ELESSI_ADMIN_DIR_URI . 'assets/images/header-builder-elementor.jpg';
        }
        
        $of_options[] = array(
            "name" => __("Header Layout", 'elessi-theme'),
            "id" => "header-type",
            "std" => "1",
            "type" => "images",
            "options" => $header_type_list,
            'class' => 'nasa-header-type-select'
        );
        
        /**
         * Header Builder - With WPBakery
         */
        if (NASA_WPB_ACTIVE || !apply_filters('nasa_rules_upgrade', true)) {
            $header_builder = elessi_admin_get_header_builder();
            $header_options = array_merge(
                array('default' => __('Select the Header Builder', 'elessi-theme')),
                $header_builder
            );

            $of_options[] = array(
                "name" => __("Header Theme Builder", 'elessi-theme'),
                "id" => "header-custom",
                "type" => "select",
                'override_numberic' => true,
                "options" => $header_options,
                'std' => '',
                'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-nasa-custom nasa-header-custom'
            );
        }
        
        /**
         * Headers Elementor Builder
         */
        if (NASA_HF_BUILDER) {
            $header_builder = elessi_admin_get_header_elementor();
            $header_builder['0'] = __('Select the Header Elementor', 'elessi-theme');
            $of_options[] = array(
                "name" => __("Header Elementor Builder", 'elessi-theme'),
                "id" => "header-elm",
                "type" => "select",
                'override_numberic' => true,
                "options" => $header_builder,
                'std' => '',
                'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-nasa-elm nasa-header-elm'
            );
        }
        
        $of_options[] = array(
            "name" => __("Menu Options", 'elessi-theme'),
            "std" => "<h4>" . __("Menu Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        $of_options[] = array(
            "name" => __("Flexible - Menu Resizing (Desktop and Tablet)", 'elessi-theme'),
            "id" => "flexible_menu",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-flexible_menu'
        );
        
        $of_options[] = array(
            "name" => __("Menu Font Size (Desktop and Tablet)", 'elessi-theme'),
            "id" => "font_size_menu",
            "std" => "100",
            "step" => "1",
            "min" => '80',
            "max" => '150',
            "type" => "sliderui"
        );
        
        $option_menu = elessi_admin_get_menu_options();
        
        $of_options[] = array(
            "name" => __("Vertical Menu", 'elessi-theme'),
            "id" => "vertical_menu_selected",
            "std" => "",
            "type" => "select",
            'override_numberic' => true,
            "options" => $option_menu,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => __("Vertical Root Level - Parent - 0", 'elessi-theme'),
            "id" => "v_root",
            "std" => 0,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => __("Vertical Root Level - Limit", 'elessi-theme'),
            "id" => "v_root_limit",
            "std" => '',
            "type" => "text",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => __("Ordering Mobile Menu", 'elessi-theme'),
            "id" => "order_mobile_menus",
            "std" => "",
            "type" => "select",
            'override_numberic' => true,
            "options" => array(
                '' => __("Main Menu > Vertical Menu", 'elessi-theme'),
                'v-focus' => __("Vertical Menu > Main Menu", 'elessi-theme'),
            ),
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => __("Fullwidth Main Menu", 'elessi-theme'),
            "id" => "fullwidth_main_menu",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-2 nasa-header-type-select-3 nasa-fullwidth_main_menu'
        );
        
        $of_options[] = array(
            "name" => __("Addon Options", 'elessi-theme'),
            "std" => "<h4>" . __("Addon Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        /* $of_options[] = array(
            "name" => __("Transparent Header", 'elessi-theme'),
            "id" => "header_transparent",
            "std" => 0,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-5 nasa-header-type-select-7 nasa-header_transparent'
        ); */
        
        $of_options[] = array(
            "name" => __("The Block Under Header", 'elessi-theme'),
            "desc" => __("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "header-block",
            "type" => "select",
            "options" => $static_blocks,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-5 nasa-header-type-select-6 nasa-header-type-select-7 nasa-header-block'
        );
        
        $of_options[] = array(
            "name" => __("The Block beside Logo in Header Type 2", 'elessi-theme'),
            "desc" => __("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "header-block-type_2",
            "type" => "select",
            "options" => $static_blocks,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-2 nasa-header-block-type_2'
        );
        
        $of_options[] = array(
            "name" => __("The Block beside Main menu in Header Type 4, 6", 'elessi-theme'),
            "desc" => __("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "header-block-type_4",
            "type" => "select",
            "options" => $static_blocks
        );

        $of_options[] = array(
            "name" => __("Sticky", 'elessi-theme'),
            "id" => "fixed_nav",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-fixed_nav'
        );
        
        $of_options[] = array(
            "name" => __("Background Color Header", 'elessi-theme'),
            "id" => "bg_color_header",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-bg_color_header'
        );
        
        $of_options[] = array(
            "name" => __("Header Icons", 'elessi-theme'),
            "id" => "text_color_header",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_header'
        );
        
        $of_options[] = array(
            "name" => __("Header Icons Hover", 'elessi-theme'),
            "id" => "text_color_hover_header",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_hover_header'
        );
        
        $of_options[] = array(
            "name" => __("Main Menu Background Color", 'elessi-theme'),
            "id" => "bg_color_main_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-bg_color_main_menu'
        );
        
        $of_options[] = array(
            "name" => __("Main Menu Text Color", 'elessi-theme'),
            "id" => "text_color_main_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_main_menu'
        );
        
        $of_options[] = array(
            "name" => __("Vertical Menu Background - Focus", 'elessi-theme'),
            "id" => "bg_color_v_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6 nasa-bg_color_v_menu'
        );
        
        $of_options[] = array(
            "name" => __("Vertical Menu Text Color - Focus", 'elessi-theme'),
            "id" => "text_color_v_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_v_menu'
        );
        
        $of_options[] = array(
            "name" => __("Search Options", 'elessi-theme'),
            "std" => "<h4>" . __("Search Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        $of_options[] = array(
            "name" => __("Search Bar Effect", 'elessi-theme'),
            "id" => "search_effect",
            "std" => "right-to-left",
            "type" => "select",
            "options" => array(
                "rightToLeft" => __("Right To Left", 'elessi-theme'),
                "fadeInDown" => __("Fade In Down", 'elessi-theme'),
                "fadeInUp" => __("Fade In Up", 'elessi-theme'),
                "leftToRight" => __("Left To Right", 'elessi-theme'),
                "fadeIn" => __("Fade In", 'elessi-theme'),
                "noEffect" => __("No Effect", 'elessi-theme')
            ),
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-search_effect'
        );
        
        if (NASA_WOO_ACTIVED) {
            // Options live search products
            $of_options[] = array(
                "name" => __("Search Anything After Submit", 'elessi-theme'),
                "id" => "anything_search",
                "std" => 0,
                "type" => "switch",
                "desc" => '<span class="nasa-warning red-color">' . __("If Turn on, the live search Ajax feature will be lost", 'elessi-theme') . '</span>',
            );

            // Options live search products
            $of_options[] = array(
                "name" => __("Live Search Ajax Products", 'elessi-theme'),
                "id" => "enable_live_search",
                "std" => 1,
                "type" => "switch"
            );

            // Options Support search products by SKU
            $of_options[] = array(
                "name" => __("Support Search By SKU", 'elessi-theme'),
                "id" => "sp_search_sku",
                "std" => 0,
                "type" => "switch"
            );

            // limit_results_search
            $of_options[] = array(
                "name" => __("Results Ajax Search (Limit Products)", 'elessi-theme'),
                "id" => "limit_results_search",
                "std" => "5",
                "type" => "text"
            );

            $of_options[] = array(
                "name" => __("Suggested Keywords", 'elessi-theme'),
                "desc" => 'Please input the Suggested keywords (ex: Sweater, Jacket, T-shirt ...).',
                "id" => "hotkeys_search",
                "std" => '',
                "type" => "textarea"
            );

            $of_options[] = array(
                "name" => __("Popular Keywords", 'elessi-theme'),
                "desc" => 'Please input the Popular Searches keywords (ex: Sweater, Jacket, T-shirt).',
                "id" => "popkeys_search",
                "std" => '',
                "type" => "textarea"
            );

            $of_options[] = array(
                "name" => __("Live Search Layout - (Header type 1, 2, 5, 7)", 'elessi-theme'),
                "id" => "search_layout",
                "std" => "classic",
                "type" => "select",
                "options" => array(
                    "classic" => __("Classic", 'elessi-theme'),
                    "modern" => __("Modern", 'elessi-theme')
                )
            );
            // End Options live search products
        }
        
        $of_options[] = array(
            "name" => __("Top Bar Options", 'elessi-theme'),
            "std" => "<h4>" . __("Top Bar Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        $of_options[] = array(
            "name" => __("Top Bar", 'elessi-theme'),
            "id" => "topbar_on",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-fixed_nav'
        );

        $of_options[] = array(
            "name" => __("Toggle Top Bar", 'elessi-theme'),
            "id" => "topbar_toggle",
            "std" => 0,
            "type" => "switch",
            'class' => 'hidden-tag nasa-topbar_toggle nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-fixed_nav'
        );
        
        $of_options[] = array(
            "name" => __("Toggle Top Bar - Initialize", 'elessi-theme'),
            "id" => "topbar_default_show",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-topbar_df-show'
        );

        $of_options[] = array(
            "name" => __("Languages Switcher - Requires WPML", 'elessi-theme'),
            "id" => "switch_lang",
            "std" => 0,
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => __("Currencies Switcher - Requires WPML | FOX - Currency Switcher Professional for WooCommerce | CURCY - Multi Currency for WooCommerce", 'elessi-theme'),
            "id" => "switch_currency",
            "std" => 0,
            "type" => "switch"
        );
        
        //(%symbol%) %code%
        $of_options[] = array(
            "name" => __("Format Currency - Only for WPML", 'elessi-theme'),
            "desc" => __("Default (%symbol%) %code%. You can custom for this. Ex (%name% (%symbol%) - %code%)", 'elessi-theme'),
            "id" => "switch_currency_format",
            "std" => "",
            "type" => "text"
        );
        
        $of_options[] = array(
            "name" => __("Top Bar Content", 'elessi-theme'),
            "desc" => __("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "topbar_content",
            "type" => "select",
            "options" => $static_blocks,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-topbar_content'
        );
        
        $of_options[] = array(
            "name" => __("Topbar Background", 'elessi-theme'),
            "id" => "bg_color_topbar",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => __("Topbar Text color", 'elessi-theme'),
            "id" => "text_color_topbar",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => __("Topbar Text color hover", 'elessi-theme'),
            "id" => "text_color_hover_topbar",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => __("Footer Options", 'elessi-theme'),
            "std" => "<h4>" . __("Footer Options", 'elessi-theme') . "</h4>",
            "type" => "info"
        );
        
        /**
         * Disable Footer Build In
         */
        $of_options[] = array(
            "name" => __("Footer Built-In Support (Widgets Builder)", 'elessi-theme'),
            "id" => "f_buildin",
            "std" => 1,
            "type" => "switch",
            "desc" => '<span class="nasa-warning red-color">' . __("Recommend Turn Off to use Builder Mode", 'elessi-theme') . '</span>',
        );
        
        $modes = array(
            "build-in" => __("Built-in - Widgets Place", 'elessi-theme'),
        );
        
        if (NASA_WPB_ACTIVE || !apply_filters('nasa_rules_upgrade', true)) {
            $modes["builder"] = __("Builder - Suport WPBakery", 'elessi-theme');
        }
        
        if (NASA_HF_BUILDER) {
            $modes["builder-e"] = __("Builder - Support HFE-Elementor", 'elessi-theme');
        }
        
        $of_options[] = array(
            "name" => __("Mode", 'elessi-theme'),
            "id" => "footer_mode",
            "std" => 'builder',
            "type" => "select",
            "options" => $modes,
            'class' => 'nasa-theme-option-parent'
        );
        
        /**
         * Footer Build-in Desktop
         */
        $of_options[] = array(
            "name" => __("Footer Layout", 'elessi-theme'),
            "id" => "footer_build_in",
            "type" => "select",
            'override_numberic' => true,
            "options" => array(
                '1' => __("Built-in Light 1", 'elessi-theme'),
                '2' => __("Built-in Light 2", 'elessi-theme'),
                '3' => __("Built-in Light 3", 'elessi-theme'),
                '4' => __("Built-in Dark", 'elessi-theme')
            ),
            'std' => '2',
            'class' => 'nasa-footer_mode nasa-footer_mode-build-in nasa-theme-option-child'
        );
        
        /**
         * Footer Build-in Mobile
         */
        $of_options[] = array(
            "name" => __("Footer Mobile Layout", 'elessi-theme'),
            "id" => "footer_build_in_mobile",
            "type" => "select",
            'override_numberic' => true,
            "options" => array(
                '' => __("Extends from Desktop", 'elessi-theme'),
                'm-1' => __("Build-in Mobile", 'elessi-theme')
            ),
            'std' => '',
            'class' => 'nasa-footer_mode nasa-footer_mode-build-in nasa-theme-option-child'
        );
        
        /**
         * Footers Builder
         */
        $footers_options = elessi_admin_get_footer_builder();
        
        $footers_desk = array_merge(
            array('default' => __('Select the Footer Type', 'elessi-theme')),
            $footers_options
        );
        $footers_mobile = array_merge(
            array('default' => __('Extends from Desktop', 'elessi-theme')),
            $footers_options
        );
        
        /**
         * Footer Desktop
         */
        $of_options[] = array(
            "name" => __("Footer Layout", 'elessi-theme'),
            "id" => "footer-type",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_desk,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder nasa-theme-option-child'
        );
        
        /**
         * Footer Mobile
         */
        $of_options[] = array(
            "name" => __("Footer Mobile Layout", 'elessi-theme'),
            "id" => "footer-mobile",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_mobile,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder nasa-theme-option-child'
        );
        
        /**
         * Footers Elementor Builder
         */
        $footers_options = elessi_admin_get_footer_elementor();
        $footers_desk = $footers_options;
        $footers_desk['0'] = __('Select the Footer Elementor', 'elessi-theme');
        $footers_mobile = $footers_options;
        $footers_mobile['0'] = __('Extends from Desktop', 'elessi-theme');
        
        /**
         * Footer Desktop
         */
        $of_options[] = array(
            "name" => __("Footer Layout", 'elessi-theme'),
            "id" => "footer_elm",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_desk,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder-e nasa-theme-option-child'
        );
        
        /**
         * Footer Mobile
         */
        $of_options[] = array(
            "name" => __("Footer Mobile Layout", 'elessi-theme'),
            "id" => "footer_elm_mobile",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_mobile,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder-e nasa-theme-option-child'
        );
        
        $of_options[] = array(
            "name" => __("Mobile Bottom Bar Options", 'elessi-theme'),
            "std" => "<h4>" . __("Mobile Bottom Bar Options", 'elessi-theme') . "</h4>",
            "type" => "info"
        );
        
        /**
         * On | Off Mobile Bottom Bar
         */
        $of_options[] = array(
            "name" => __("Mobile Bottom Bar", 'elessi-theme'),
            "id" => "m_bot_bar",
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => __("Mobile Bottom Bar Content", 'elessi-theme'),
            "desc" => __("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "m_bot_bar_ct",
            "type" => "select",
            "options" => $static_blocks
        );
    }
}
