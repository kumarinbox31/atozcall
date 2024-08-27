<?php
add_action('init', 'elessi_promotion_news_heading');
if (!function_exists('elessi_promotion_news_heading')) {
    function elessi_promotion_news_heading() {
        // Set the Options Array
        global $of_options;
        if (empty($of_options)) {
            $of_options = array();
        }
        
        $of_options[] = array(
            "name" => __("Promotion News", 'elessi-theme'),
            "target" => "promotion-news",
            "type" => "heading"
        );

        $of_options[] = array(
            "name" => __("Top Bar Promotion News", 'elessi-theme'),
            "id" => "enable_post_top",
            "std" => 0,
            "type" => "switch"
        );

        $of_options[] = array(
            "name" => __("Type Show", 'elessi-theme'),
            "id" => "type_display",
            "std" => 'custom',
            "type" => "select",
            "options" => array(
                'custom' => __('Custom Content', 'elessi-theme'),
                'list-posts' => __('Posts', 'elessi-theme')
            ),
            'class' => 'type_promotion'
        );

        $of_options[] = array(
            "name" => __("Custom Content", 'elessi-theme'),
            "desc" => '<a href="javascript:void(0);" class="reset_content_custom"><b>Default value</b></a> for My content custom.<br /><a href="javascript:void(0);" class="restore_content_custom"><b>Restore text</b></a> for My content custom.<br />',
            "id" => "content_custom",
            "std" => '',
            'type' => 'textarea',
            'class' => 'hidden-tag nasa-custom_content'
        );

        $of_options[] = array(
            "name" => __("Category Post", 'elessi-theme'),
            "id" => "category_post",
            "std" => '',
            "type" => "select",
            "options" => elessi_get_cats_array(),
            'class' => 'hidden-tag nasa-list_post'
        );

        $of_options[] = array(
            "name" => __("Limit Posts", 'elessi-theme'),
            "id" => "number_post",
            "std" => 4,
            "type" => "text",
            'class' => 'hidden-tag nasa-list_post'
        );

        $of_options[] = array(
            "name" => __("Slide Show", 'elessi-theme'),
            "id" => "number_post_slide",
            "std" => 1,
            "type" => "text",
            'class' => 'hidden-tag nasa-list_post'
        );

        $of_options[] = array(
            "name" => __("Full Width", 'elessi-theme'),
            "id" => "enable_fullwidth",
            "std" => 1,
            "type" => "switch"
        );

        $of_options[] = array(
            "name" => __("Text Promotion Color", 'elessi-theme'),
            "id" => "t_promotion_color",
            "std" => "#333",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => __("Background Color", 'elessi-theme'),
            "id" => "bg_promotion",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => __("Background Image", 'elessi-theme'),
            "id" => "background_area",
            "std" => ELESSI_THEME_URI . '/assets/images/promo_bg.jpg',
            "type" => "media"
        );
    }
}
