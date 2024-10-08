<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2014 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('common/head.php') ; ?>
    </head>
<body <?php benny_body_class(); ?>>
<div id="header">    
    <div class="wrapper">
        <div id="logo">
            <?php echo benny_logo_header(); ?>
            <span id="description"><?php echo osc_page_description(); ?></span>
        </div>
        <ul class="nav">
            <?php if( osc_is_static_page() || osc_is_contact_page() ){ ?>
                <li class="search"><a class="ico-search icons" data-bclass-toggle="display-search"></a></li>
                <li class="cat"><a class="ico-menu icons" data-bclass-toggle="display-cat"></a></li>
            <?php } ?>
            <?php if( osc_users_enabled() ) { ?>
            <?php if( osc_is_web_user_logged_in() ) { ?>
                <li class="first logged">
                    <span><?php echo sprintf(__('Hi %s', 'benny'), osc_logged_user_name() . '!'); ?></span>
                    <strong><a href="<?php echo osc_user_dashboard_url(); ?>"><?php _e('My account', 'benny'); ?></a></strong>
                    <a href="<?php echo osc_user_logout_url(); ?>"><?php _e('Logout', 'benny'); ?></a>
                </li>
            <?php } else { ?>
                <li><a id="login_open" href="<?php echo osc_user_login_url(); ?>">&nbsp;<?php _e(' Login', 'benny') ; ?></a></li> 
                <?php if(osc_user_registration_enabled()) { ?>
                    <li><a href="<?php echo osc_register_account_url() ; ?>">&nbsp;<?php _e(' Sign Up', 'benny'); ?></a></li>
                <?php }; ?>
            <?php } ?>
            <?php } ?>
            <?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>
            <li class="publish"><a href="<?php echo osc_item_post_url_in_category() ; ?>"><i class="fa fa-plus-circle"></i>&nbsp;<?php _e(" Publish ads", 'benny');?></a></li>
            <?php } ?>
        </ul>

    </div>
    <?php if( osc_is_home_page() || osc_is_static_page() || osc_is_contact_page() ) { ?>
    <form action="<?php echo osc_base_url(true); ?>" method="get" class="search nocsrf" <?php /* onsubmit="javascript:return doSearch();"*/ ?>>
        <input type="hidden" name="page" value="search"/>
        <div class="main-search">
            <div class="cell">
                <input type="text" name="sPattern" id="query" class="input-text" value="" placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'benny_theme'), 'benny')); ?>" />
            </div>
            <?php  if ( osc_count_categories() ) { ?>
                <div class="cell selector">
                    <?php osc_categories_select('sCategory', null, __('Select a category', 'benny')) ; ?>
                </div>
				<div class="cell selector" style="padding-left: 0px;">
                    <?php $aRegions = Region::newInstance()->listAll(); ?>
					<?php if(count($aRegions) > 0 ) { ?>
						<select name="sRegion" id="sRegion">
							<option value=""><?php _e('Select a region')?></option>
							<?php foreach($aRegions as $region) { ?>
								<option value="<?php echo $region['s_name'] ; ?>"><?php echo $region['s_name'] ; ?></option>
							<?php } ?>
						</select>
					<?php } ?>
                </div>
                <div class="cell reset-padding">
            <?php  } else { ?>
                <div class="cell">
            <?php  } ?>
                <button class="ui-button ui-button-big js-submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div id="message-seach"></div>
    </form>
    <?php } ?>
</div>
<?php osc_show_widgets('header'); ?>
<div class="wrapper wrapper-flash">
    <?php
        $breadcrumb = osc_breadcrumb('&raquo;', false, benny_get_breadcrumb_lang());
        if( $breadcrumb !== '') { ?>
        <div class="breadcrumb">
            <?php echo $breadcrumb; ?>
            <div class="clear"></div>
        </div>
    <?php
        }
    ?>
    <?php osc_show_flash_message(); ?>
</div>
<div class="wrapper">
<!-- header ad 728x60-->
    <div class="ads_header ads_searchpage" style="text-align: center;">
    <?php echo osc_get_preference('header-728x90', 'benny'); ?>
    <!-- /header ad 728x60-->
    </div>
    <div class="clear"></div>
</div>
<?php osc_run_hook('before-content'); ?>
<div class="wrapper" id="content">
    <?php osc_run_hook('before-main'); ?>
    <div id="main">
        <?php osc_run_hook('inside-main'); ?>