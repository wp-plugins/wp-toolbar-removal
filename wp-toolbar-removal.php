<?php
/*
Plugin Name: ToolBar Removal DEVELOPMENTAL
Plugin URI: http://slangji.wordpress.com/wp-toolbar-removal/
Description: Completely <code>Disable</code> new WordPress 3.3+ and 3.4+ (only) <code>ToolBar</code> Frontend, Backend, related User Profile Settings, without loosing logout functionality! Completely <code>Remove Code</code> for minimal memory load, with new approach. Work under GPLv2 License. Thanks to olyma! | <a href="http://lcsn.net/donate/" title="Free Donation">Donate</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a>
Version: 2012.0325-BUGFIX.0144-DEVELOPMENTAL
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 3.3
Tested up to: 3.4
License: GPLv2
 *
 * Stable Release: 2012.0319.2012
 *
 * [ToolBar Removal](http://wordpress.org/extend/plugins/wp-toolbar-removal/) WordPress PlugIn
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 *  The license for this software can be found @ http://www.gnu.org/licenses/gpl-2.0.html
 *
 * This uses code derived from
 * one-click-logout-barless.php by olyma <rackofpower.com>
 * wp-admin-bar-removal.php by sLa <slangji[at]gmail[dot]com>
 * wp-toolbar-node-removal.php by sLa <slangji[at]gmail[dot]com>
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * Copyright © 2011 olyma (rackofpower.com)
 * Copyright © 2010-2012 [sLa](http://wordpress.org/extend/plugins/profile/slangji) (slangji[at]gmail[dot]com)
 *
 * Thanks to [olyma](http://wordpress.org/extend/plugins/one-click-logout-barless/)
 */
/**
 * @package ToolBar Removal
 * @subpackage WordPress PlugIn
 * @since 3.3.0
 * @version 2012.0325-BUGFIX.0144-DEVELOPMENTAL
 * @author sLa
 * @license GPLv2
 *
 * Completely Disable ToolBar Frontend, Backend, related User Profile Settings, without loosing logout functionality, and Remove Code for minimal memory load with new approach.
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();}add_filter('init','wptbr_init');function wptbr_rsb(){echo'<style type="text/css">body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';}add_action('admin_print_styles','wptbr_rsb',21);function wptbr_ngr($wp_toolbar){$wp_toolbar->remove_node('view');$wp_toolbar->remove_node('wp-logo');$wp_toolbar->remove_node('wp-logo-default');$wp_toolbar->remove_node('wp-logo-external');$wp_toolbar->remove_node('comments');$wp_toolbar->remove_node('about');$wp_toolbar->remove_node('wporg');$wp_toolbar->remove_node('documentation');$wp_toolbar->remove_node('support-forums');$wp_toolbar->remove_node('feedback');$wp_toolbar->remove_node('site-name');$wp_toolbar->remove_node('site-name-default');$wp_toolbar->remove_node('view-site');$wp_toolbar->remove_node('comments');$wp_toolbar->remove_node('new-content');$wp_toolbar->remove_node('new-content-default');$wp_toolbar->remove_node('new-post');$wp_toolbar->remove_node('new-media');$wp_toolbar->remove_node('new-link');$wp_toolbar->remove_node('new-page');$wp_toolbar->remove_node('new-user');$wp_toolbar->remove_node('updates');$wp_toolbar->remove_node('top-secondary');$wp_toolbar->remove_node('my-account');$wp_toolbar->remove_node('user-actions');$wp_toolbar->remove_node('user-info');$wp_toolbar->remove_node('edit-profile');$wp_toolbar->remove_node('logout');$wp_toolbar->remove_node('search');$wp_toolbar->remove_node('network-admin');$wp_toolbar->remove_node('w3tc');$wp_toolbar->remove_node('w3tc-default');$wp_toolbar->remove_node('w3tc-empty-caches');$wp_toolbar->remove_node('w3tc-faq');$wp_toolbar->remove_node('w3tc-support');$wp_toolbar->remove_node('cloudflare');$wp_toolbar->remove_node('cloudflare-default');$wp_toolbar->remove_node('cloudflare-my-websites');$wp_toolbar->remove_node('cloudflare-analytics');$wp_toolbar->remove_node('cloudflare-account');}add_action('admin_bar_menu','wptbr_ngr',999);function wptbr_hdr(){?><style type="text/css">table#wptbr td#wptbr_ttl a:link,table#wptbr td#wptbr_ttl a:visited{text-decoration:none}table#wptbr td#wptbr_lgt,table#wptbr td#wptbr_lgt a{text-decoration:none}</style><table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="wptbr" border=0 cols=4 width="97%" height="33"><tr><td align=left valign=center id="wptbr_ttl"><?php echo'<a href="'.home_url().'">'.__(get_bloginfo()).'</a>'?></td><td align=right valign=center id="wptbr_lgt"><div style="padding-top:2px"><?php wp_get_current_user();$current_user=wp_get_current_user();if(!($current_user instanceof WP_User))return;echo''.$current_user->display_name.''?><?php if(is_multisite()&&is_super_admin()){if(!is_network_admin()){echo' | <a href="'.network_admin_url(). '">'. __('Network Admin'). '</a>';}else{echo' | <a href="' .get_dashboard_url(get_current_user_id()). '">'.__('Site Admin') . '</a>';}}?> | <?php echo'<a href="' .wp_logout_url(home_url()). '">'.__('Log Out'). '</a>'?></div></td><td width="8"></td></tr></table><?php }add_action('in_admin_header','wptbr_hdr');function wptbr_init(){add_filter('show_admin_bar','__return_false');}function wptbr_ruppoabpc(){echo'<style type="text/css">.show-admin-bar{display:none}</style>';}add_action('admin_print_styles-profile.php','wptbr_ruppoabpc');show_admin_bar(false);function wptbr_rsf(){echo'<style type="text/css">html{margin-top:0px !important}* html body{margin-top:0px !important}</style>';}add_filter('wp_head','wptbr_rsf',99);wp_deregister_script('admin-bar');wp_deregister_script('wp-admin-bar');wp_deregister_script('wp_admin_bar_wp_menu');wp_deregister_script('wp_admin_bar_add_secondary_groups');wp_deregister_style('admin-bar');wp_deregister_style('wp-admin-bar');wp_deregister_style('admin_bar_menu');wp_deregister_style('nacin_promote_network_admin_in_toolbar');wp_deregister_script('admin_bar_menu');wp_deregister_script('nacin_promote_network_admin_in_toolbar');remove_action('admin_head','nacin_promote_network_admin_in_toolbar',25);remove_action('admin_head','admin_bar_menu');remove_filter('wp_head','wp_admin_bar_wp_menu');remove_filter('wp_head','wp_admin_bar_add_secondary_groups');remove_filter('wp_head','wp_admin_bar');remove_filter('wp_footer','wp_admin_bar');remove_filter('admin_head','wp_admin_bar');remove_filter('admin_footer','wp_admin_bar');remove_filter('wp_head','wp_admin_bar_class');remove_filter('wp_footer','wp_admin_bar_class');remove_filter('admin_head','wp_admin_bar_class');remove_filter('admin_footer','wp_admin_bar_class');remove_action('wp_head','wp_admin_bar_render',1000);remove_filter('wp_head','wp_admin_bar_render',1000);remove_action('wp_footer','wp_admin_bar_render',1000);remove_filter('wp_footer','wp_admin_bar_render',1000);remove_action('admin_head','wp_admin_bar_render',1000);remove_filter('admin_head','wp_admin_bar_render',1000);remove_action('admin_footer','wp_admin_bar_render',1000);remove_filter('admin_footer','wp_admin_bar_render',1000);remove_action('init','wp_admin_bar_init');remove_filter('init','wp_admin_bar_init');remove_action('wp_head','wp_admin_bar_css');remove_action('wp_head','wp_admin_bar_dev_css');remove_action('wp_head','wp_admin_bar_rtl_css');remove_action('wp_head','wp_admin_bar_rtl_dev_css');remove_action('admin_head','wp_admin_bar_css');remove_action('admin_head','wp_admin_bar_dev_css');remove_action('admin_head','wp_admin_bar_rtl_css');remove_action('admin_head','wp_admin_bar_rtl_dev_css');remove_action('wp_footer','wp_admin_bar_js');remove_action('wp_footer','wp_admin_bar_dev_js');remove_action('admin_footer','wp_admin_bar_js');remove_action('admin_footer','wp_admin_bar_dev_js');remove_action('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');remove_filter('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');remove_action('admin_bar_menu','nacin_promote_network_admin_in_toolbar',25);remove_filter('admin_bar_menu','nacin_promote_network_admin_in_toolbar',25);remove_action('personal_options','_admin_bar_pref');remove_filter('personal_options','_admin_bar_pref');remove_action('personal_options','_get_admin_bar_pref');remove_filter('personal_options','_get_admin_bar_pref');remove_filter('locale','wp_admin_bar_lang');remove_filter('admin_footer','wp_admin_bar_render');function wptbr_footer_log(){echo"\n<!--Plugin ToolBar Removal 2012.0325-BUGFIX.0144-DEVELOPMENTAL Active-->";}add_action('wp_head','wptbr_footer_log');add_action('wp_footer','wptbr_footer_log')?>