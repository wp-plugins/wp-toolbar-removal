<?php
/*
Plugin Name: ToolBar Removal - DEV
Plugin URI: http://slangji.wordpress.com/wp-toolbar-removal/
Description: Completely <code>Disable</code> new WordPress 3.5+ / 3.4+ / 3.3+ (only) Admin <code>ToolBar</code> Frontend, Backend, Node, Pointer, Shadow, User Profile, without loosing Logout and Network functionality! Completely <code>Remove Code</code> for Minimal Memory Load, and Dasboard Speedup, with new approach. (DEVELOPMENTAL VERSION) Work under GPLv2 License. Thanks to olyma! | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestions">Contact</a> | <a href="http://slangji.wordpress.com/themes/" title="sLaNGjI's Custom Themes">My Themes</a> | <a href="http://profiles.wordpress.org/slangji" title="sLaNGjI's Profile @ WordPress.org">My Profile</a> | <a href="http://slangji.wordpress.com/" title="sLaNGjI's WebSite @ WordPress.com">My WordPress</a> | <a href="https://github.com/slangji" title="sLaNGjI's Repositories @ GitHub.com">My GitHub</a> | <a href="http://webscripts.softpedia.com/author/sLa-1869786722.html" title="sLa Developer Page @ SoftPedia.com">My SoftPedia</a> | <a href="http://wordpress.org/extend/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/extend/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/extend/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/extend/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a> | <a href="http://wordpress.org/extend/plugins/wp-wp-memory-db-indicator/" title="Memory Load Consumption db size Usage Indicator">Memory and db Indicator?</a>
Version: 2012.1130.0733
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 3.3
Tested up to: 3.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Stable Release: Version 2012 Build 1121 Revision 0343
 *
 * [ToolBar Removal](http://wordpress.org/extend/plugins/wp-toolbar-removal/) WordPress PlugIn
 *
 * [Contact](http://slangji.wordpress.com/contact/) - [Donate](http://slangji.wordpress.com/donate/)
 *
 * [My Plugins](http://slangji.wordpress.com/plugins/) - [My Themes](http://slangji.wordpress.com/themes/)
 * 
 * [My GitHub.com](https://github.com/slangji) - [My SoftPedia.com](http://webscripts.softpedia.com/author/sLa-1869786722.html
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
 * wp-admin-bar-node-removal.php by sLa <slangji[at]gmail[dot]com>
 * wp-toolbar-node-removal.php by sLa <slangji[at]gmail[dot]com>
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * Copyright © 2011 olyma (rackofpower.com)
 * Copyright © 2009-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (slangji[at]gmail[dot]com)
 *
 * Disclaimer: Part of Copyright belongs to [sLa](http://profiles.wordpress.org/sla) and a portion to their respective owners.
 *
 * Thanks to [olyma](http://wordpress.org/extend/plugins/one-click-logout-barless/)
 *
 * Todo List:
 * <style type="text/css" media="print">#wpadminbar{display:none}</style> hack trick ...
 * Merge styles to minimize HTTP requests size and optimize code
 * Use efficient CSS selectors
 * Remove unused CSS
 * Remove unused filters
 * Cleaning and compress final code
 */
/**
 * @package ToolBar Removal
 * @subpackage WordPress PlugIn
 * @since 3.3.0
 * @version 2012.1130.0733
 * @author sLa
 * @license GPLv2 or later
 *
 * Completely Disable Admin ToolBar, Frontend, Backend, Node Group, Bar Pointer, Menu Shadow, User Profile, without loosing Logout and Network functionality. Remove Code for Minimal Memory Load, and Dasboard Speedup, with new approach.
 */
if(!function_exists('add_action')){header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();}function wptbr_rsb(){echo'<style type="text/css">html.wp-toolbar,html.wp-toolbar #wpcontent,html.wp-toolbar #adminmenu,html.wp-toolbar #wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';}add_action('admin_print_styles','wptbr_rsb',21);function wptbr_rbcb(){if(has_filter('wp_head','_admin_bar_bump_cb')){remove_filter('wp_head','_admin_bar_bump_cb');}}add_filter('wp_head','wptbr_rbcb',1);function wptbr_ngr($wp_toolbar){$wp_toolbar->remove_node('root-default');$wp_toolbar->remove_node('wp-logo');$wp_toolbar->remove_node('wp-logo-default');$wp_toolbar->remove_node('about');$wp_toolbar->remove_node('wp-logo-external');$wp_toolbar->remove_node('wporg');$wp_toolbar->remove_node('documentation');$wp_toolbar->remove_node('support-forums');$wp_toolbar->remove_node('feedback');$wp_toolbar->remove_node('site-name');$wp_toolbar->remove_node('site-name-default');$wp_toolbar->remove_node('view-site');$wp_toolbar->remove_node('comments');$wp_toolbar->remove_node('updates');$wp_toolbar->remove_node('view');$wp_toolbar->remove_node('new-content');$wp_toolbar->remove_node('new-content-default');$wp_toolbar->remove_node('new-post');$wp_toolbar->remove_node('new-media');$wp_toolbar->remove_node('new-link');$wp_toolbar->remove_node('new-page');$wp_toolbar->remove_node('new-user');$wp_toolbar->remove_node('top-secondary');$wp_toolbar->remove_node('my-account');$wp_toolbar->remove_node('user-actions');$wp_toolbar->remove_node('user-info');$wp_toolbar->remove_node('edit-profile');$wp_toolbar->remove_node('logout');$wp_toolbar->remove_node('search');$wp_toolbar->remove_node('my-sites');$wp_toolbar->remove_node('my-sites-list');$wp_toolbar->remove_node('blog-1');$wp_toolbar->remove_node('blog-1-default');$wp_toolbar->remove_node('blog-1-d');$wp_toolbar->remove_node('blog-1-n');$wp_toolbar->remove_node('blog-1-c');$wp_toolbar->remove_node('blog-1-v');$wp_toolbar->remove_node('blog-2');$wp_toolbar->remove_node('blog-2-default');$wp_toolbar->remove_node('blog-2-d');$wp_toolbar->remove_node('blog-2-n');$wp_toolbar->remove_node('blog-2-c');$wp_toolbar->remove_node('blog-2-v');$wp_toolbar->remove_node('blog-3');$wp_toolbar->remove_node('blog-3-default');$wp_toolbar->remove_node('blog-3-d');$wp_toolbar->remove_node('blog-3-n');$wp_toolbar->remove_node('blog-3-c');$wp_toolbar->remove_node('blog-3-v');$wp_toolbar->remove_node('blog-4');$wp_toolbar->remove_node('blog-4-default');$wp_toolbar->remove_node('blog-4-d');$wp_toolbar->remove_node('blog-4-n');$wp_toolbar->remove_node('blog-4-c');$wp_toolbar->remove_node('blog-4-v');$wp_toolbar->remove_node('blog-5');$wp_toolbar->remove_node('blog-5-default');$wp_toolbar->remove_node('blog-5-d');$wp_toolbar->remove_node('blog-5-n');$wp_toolbar->remove_node('blog-5-c');$wp_toolbar->remove_node('blog-5-v');$wp_toolbar->remove_node('blog-6');$wp_toolbar->remove_node('blog-6-default');$wp_toolbar->remove_node('blog-6-d');$wp_toolbar->remove_node('blog-6-n');$wp_toolbar->remove_node('blog-6-c');$wp_toolbar->remove_node('blog-6-v');$wp_toolbar->remove_node('blog-7');$wp_toolbar->remove_node('blog-7-default');$wp_toolbar->remove_node('blog-7-d');$wp_toolbar->remove_node('blog-7-n');$wp_toolbar->remove_node('blog-7-c');$wp_toolbar->remove_node('blog-7-v');$wp_toolbar->remove_node('blog-8');$wp_toolbar->remove_node('blog-8-default');$wp_toolbar->remove_node('blog-8-d');$wp_toolbar->remove_node('blog-8-n');$wp_toolbar->remove_node('blog-8-c');$wp_toolbar->remove_node('blog-8-v');$wp_toolbar->remove_node('blog-9');$wp_toolbar->remove_node('blog-9-default');$wp_toolbar->remove_node('blog-9-d');$wp_toolbar->remove_node('blog-9-n');$wp_toolbar->remove_node('blog-9-c');$wp_toolbar->remove_node('blog-9-v');$wp_toolbar->remove_node('wpseo-menu');$wp_toolbar->remove_node('wpseo-menu-default');$wp_toolbar->remove_node('wpseo-kwresearch');$wp_toolbar->remove_node('wpseo-kwresearch-default');$wp_toolbar->remove_node('wpseo-adwordsexternal');$wp_toolbar->remove_node('wpseo-googleinsights');$wp_toolbar->remove_node('wpseo-wordtracker');$wp_toolbar->remove_node('wpseo-settings');$wp_toolbar->remove_node('wpseo-settings-default');$wp_toolbar->remove_node('wpseo-titles');$wp_toolbar->remove_node('wpseo-social');$wp_toolbar->remove_node('wpseo-xml');$wp_toolbar->remove_node('wpseo-permalinks');$wp_toolbar->remove_node('wpseo-internal-links');$wp_toolbar->remove_node('wpseo-rss');$wp_toolbar->remove_node('ngg-menu');$wp_toolbar->remove_node('ngg-menu-default');$wp_toolbar->remove_node('ngg-menu-overview');$wp_toolbar->remove_node('ngg-menu-add-gallery');$wp_toolbar->remove_node('ngg-menu-manage-gallery');$wp_toolbar->remove_node('ngg-menu-manage-album');$wp_toolbar->remove_node('ngg-menu-tags');$wp_toolbar->remove_node('ngg-menu-options');$wp_toolbar->remove_node('ngg-menu-style');$wp_toolbar->remove_node('ngg-menu-about');$wp_toolbar->remove_node('cloudflare');$wp_toolbar->remove_node('cloudflare-default');$wp_toolbar->remove_node('cloudflare-my-websites');$wp_toolbar->remove_node('cloudflare-analytics');$wp_toolbar->remove_node('cloudflare-account');$wp_toolbar->remove_node('w3tc');$wp_toolbar->remove_node('w3tc-default');$wp_toolbar->remove_node('w3tc-empty-caches');$wp_toolbar->remove_node('w3tc-faq');$wp_toolbar->remove_node('w3tc-support');}add_action('admin_bar_menu','wptbr_ngr',999);function wptbr_ab_ngr(){global$wp_admin_bar;$wp_admin_bar->remove_menu('root-default');$wp_admin_bar->remove_menu('delete-cache');$wp_admin_bar->remove_menu('network-admin');$wp_admin_bar->remove_menu('wp_memory_db_indicator');}add_action('wp_before_admin_bar_render','wptbr_ab_ngr',999);function wptbr_ras(){echo'<style type="text/css">#adminmenushadow,#adminmenuback{background-image:none}</style>';}add_action('admin_head','wptbr_ras');function wptbr_hdr(){?><style type="text/css">table#wptbr td#wptbr_ttl a:link,table#wptbr td#wptbr_ttl a:visited{text-decoration:none}table#wptbr td#wptbr_lgt,table#wptbr td#wptbr_lgt a{text-decoration:none}</style><table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="wptbr" border=0 cols=4 width="97%" height="33"><tr><td align=left valign=center id="wptbr_ttl"><?php echo'<a href="'.home_url().'">'.__(get_bloginfo()).'</a>'?></td><td align=right valign=center id="wptbr_lgt"><div style="padding-top:2px"><?php wp_get_current_user();$current_user=wp_get_current_user();if(!($current_user instanceof WP_User))return;echo''.$current_user->display_name.''?><?php if(is_multisite()&&is_super_admin()){if(!is_network_admin()){echo' | <a href="'.network_admin_url(). '">'. __('Network Admin'). '</a>';}else{echo' | <a href="' .get_dashboard_url(get_current_user_id()). '">'.__('Site Admin') . '</a>';}}?> | <?php echo'<a href="' .wp_logout_url(home_url()). '">'.__('Log Out'). '</a>'?></div></td><td width="8"></td></tr></table><?php }add_action('in_admin_header','wptbr_hdr');remove_action('init','wp_admin_bar_init');remove_filter('init','wp_admin_bar_init');$wp_scripts=new WP_Scripts();wp_deregister_script('admin-bar');$wp_styles=new WP_Styles();wp_deregister_style('admin-bar');remove_action('wp_footer','wp_admin_bar_render',1000);remove_filter('wp_footer','wp_admin_bar_render',1000);remove_action('admin_footer','wp_admin_bar_render',1000);remove_filter('admin_footer','wp_admin_bar_render',1000);remove_action('wp_head','wp_admin_bar_css');remove_action('admin_head','wp_admin_bar_css');remove_action('wp_footer','wp_admin_bar_js');remove_filter('wp_footer','wp_admin_bar_js');remove_action('admin_footer','wp_admin_bar_js');remove_filter('admin_footer','wp_admin_bar_js');remove_action('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');remove_filter('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');remove_filter('locale','wp_admin_bar_lang');remove_filter('wp_head','wp_admin_bar');remove_filter('wp_footer','wp_admin_bar');remove_filter('admin_head','wp_admin_bar');remove_filter('admin_footer','wp_admin_bar');remove_filter('wp_head','wp_admin_bar_class');remove_filter('wp_footer','wp_admin_bar_class');remove_filter('admin_head','wp_admin_bar_class');remove_filter('admin_footer','wp_admin_bar_class');remove_action('wp_head','wp_admin_bar_dev_css');remove_action('wp_head','wp_admin_bar_rtl_css');remove_action('wp_head','wp_admin_bar_rtl_dev_css');remove_action('admin_head','wp_admin_bar_dev_css');remove_action('admin_head','wp_admin_bar_rtl_css');remove_action('admin_head','wp_admin_bar_rtl_dev_css');remove_action('wp_footer','wp_admin_bar_dev_js');remove_filter('wp_footer','wp_admin_bar_dev_js');remove_action('admin_footer','wp_admin_bar_dev_js');remove_filter('admin_footer','wp_admin_bar_dev_js');remove_action('personal_options','_admin_bar_pref');remove_filter('personal_options','_admin_bar_pref');remove_action('personal_options','_get_admin_bar_pref');remove_filter('personal_options','_get_admin_bar_pref');function wptbr_init(){add_filter('show_admin_bar','__return_false');}add_filter('init','wptbr_init',9);show_admin_bar(false);function wptbr_spab_init(){add_filter('show_wp_pointer_admin_bar','__return_false');}add_filter('init','wptbr_spab_init');function wptbr_rsf(){echo'<style type="text/css">*{margin-top:0px !important}html{margin-top:0px !important}body{margin-top:0px !important}</style>';}add_filter('admin_head','wptbr_rsf',99);function wptbr_nfo(){echo"\n<!--Plugin ToolBar Removal 2012.1130.0733 Active-->\n";}add_action('wp_head','wptbr_nfo');add_action('wp_footer','wptbr_nfo');add_action('admin_head','wptbr_nfo');add_action('admin_footer','wptbr_nfo')?>