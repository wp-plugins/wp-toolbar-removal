<?php

/*
Plugin Name: WP ToolBar Removal
Plugin URI: http://slangji.wordpress.com/wp-toolbar-removal/
Description: Disable and Remove ToolBar and Admin Bar Code on WordPress 3.3+ to 3.4+ Frontend and Backend, Completely, for Minimal Memory Load, and DashBoard Speedup, with New Unified Coding Approach! Also Hide: Frontend 28px and Bump CB; Backend 28px and Node/Group/Links on Top of DashBoard, Admin Menu Shadow Effect, Admin Bar and ToolBar Pointer ToolTips, Admin Bar and ToolBar related User Personal Options Settings, without loosing Logout and Network MultiSite functionality! The configuration of this Plugin is Automattic! Work under GPLv2 or later License. GNU style indentation coding standard compatible. Meet detailed guidelines quality requirements.
Version: 2012.1121.0343
Author: sLaNGjI
Author URI: http://slangji.wordpress.com/
Requires at least: 3.3
Tested up to: 3.4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style coding standard
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * DEVELOPMENT release: Version 2013 Build 0624-BUGFIX Revision 0956-DEVELOPMENTAL
 *
 * [WP ToolBar Removal](http://wordpress.org/plugins/wp-toolbar-removal/) Disable and Remove WordPress ToolBar and Admin Bar Code Completely
 *
 * Copyright (C) 2012-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](http://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * wp-admin-bar-removal.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2010-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * wp-admin-bar-removal-node-addon.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2010-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * one-click-logout-barless.php by olyma <rackofpower.com>
 * Copyright (C) 2011-2012 [olyma](http://rackofpower.com/) (email: <olyma[at]rackofpower[dot]com>)
 *
 * toolbar-removal-completely-disable.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2011-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * wp-toolbar-removal-node-addon.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2012-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2008-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * sLa2sLaNGjIs.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 [sLa NGjI's](http://slangji.wordpress.com/) (email: <slangji[at]gmail[dot]com>)
 * Copyright (C) 2011-2012 [olyma](http://rackofpower.com/) (email: <olyma[at]rackofpower[dot]com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THANKS
 * To [olyma](http://wordpress.org/plugins/one-click-logout-barless/)
 *
 * TODO LIST
 * <style type="text/css" media="print">#wpadminbar{display:none}</style>
 */

/**
 * @package WP ToolBar Removal
 * @subpackage WordPress PlugIn
 * @description Disable and Remove WordPress ToolBar and Admin Bar Code Completely
 * @since 3.3.0
 * @tested 3.4.3
 * @version 2012.1121.0343
 * @status STABLE release
 * @author sLaNGjI
 * @license GPLv2 or later
 * @indentation GNU style coding standard
 * @keytag 74be16979710d4c4e7c6647856088456
 */

	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit();
		}

	function wptbr_rsb()
		{
			echo '<style type="text/css">html.wp-toolbar,html.wp-toolbar #wpcontent,html.wp-toolbar #adminmenu,html.wp-toolbar #wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';
		}
	add_action('admin_print_styles', 'wptbr_rsb', 21);

	function wptbr_ngr($wp_toolbar)
		{
			$wp_toolbar->remove_node('root-default');
			$wp_toolbar->remove_node('wp-logo');
			$wp_toolbar->remove_node('wp-logo-default');
			$wp_toolbar->remove_node('about');
			$wp_toolbar->remove_node('wp-logo-external');
			$wp_toolbar->remove_node('wporg');
			$wp_toolbar->remove_node('documentation');
			$wp_toolbar->remove_node('support-forums');
			$wp_toolbar->remove_node('feedback');
			$wp_toolbar->remove_node('site-name');
			$wp_toolbar->remove_node('site-name-default');
			$wp_toolbar->remove_node('view-site');
			$wp_toolbar->remove_node('comments');
			$wp_toolbar->remove_node('updates');
			$wp_toolbar->remove_node('view');
			$wp_toolbar->remove_node('new-content');
			$wp_toolbar->remove_node('new-content-default');
			$wp_toolbar->remove_node('new-post');
			$wp_toolbar->remove_node('new-media');
			$wp_toolbar->remove_node('new-link');
			$wp_toolbar->remove_node('new-page');
			$wp_toolbar->remove_node('new-user');
			$wp_toolbar->remove_node('top-secondary');
			$wp_toolbar->remove_node('my-account');
			$wp_toolbar->remove_node('user-actions');
			$wp_toolbar->remove_node('user-info');
			$wp_toolbar->remove_node('edit-profile');
			$wp_toolbar->remove_node('logout');
			$wp_toolbar->remove_node('search');
			$wp_toolbar->remove_node('my-sites');
			$wp_toolbar->remove_node('my-sites-list');
			$wp_toolbar->remove_node('blog-1');
			$wp_toolbar->remove_node('blog-1-default');
			$wp_toolbar->remove_node('blog-1-d');
			$wp_toolbar->remove_node('blog-1-n');
			$wp_toolbar->remove_node('blog-1-c');
			$wp_toolbar->remove_node('blog-1-v');
			$wp_toolbar->remove_node('blog-2');
			$wp_toolbar->remove_node('blog-2-default');
			$wp_toolbar->remove_node('blog-2-d');
			$wp_toolbar->remove_node('blog-2-n');
			$wp_toolbar->remove_node('blog-2-c');
			$wp_toolbar->remove_node('blog-2-v');
			$wp_toolbar->remove_node('blog-3');
			$wp_toolbar->remove_node('blog-3-default');
			$wp_toolbar->remove_node('blog-3-d');
			$wp_toolbar->remove_node('blog-3-n');
			$wp_toolbar->remove_node('blog-3-c');
			$wp_toolbar->remove_node('blog-3-v');
			$wp_toolbar->remove_node('blog-4');
			$wp_toolbar->remove_node('blog-4-default');
			$wp_toolbar->remove_node('blog-4-d');
			$wp_toolbar->remove_node('blog-4-n');
			$wp_toolbar->remove_node('blog-4-c');
			$wp_toolbar->remove_node('blog-4-v');
			$wp_toolbar->remove_node('blog-5');
			$wp_toolbar->remove_node('blog-5-default');
			$wp_toolbar->remove_node('blog-5-d');
			$wp_toolbar->remove_node('blog-5-n');
			$wp_toolbar->remove_node('blog-5-c');
			$wp_toolbar->remove_node('blog-5-v');
			$wp_toolbar->remove_node('blog-6');
			$wp_toolbar->remove_node('blog-6-default');
			$wp_toolbar->remove_node('blog-6-d');
			$wp_toolbar->remove_node('blog-6-n');
			$wp_toolbar->remove_node('blog-6-c');
			$wp_toolbar->remove_node('blog-6-v');
			$wp_toolbar->remove_node('blog-7');
			$wp_toolbar->remove_node('blog-7-default');
			$wp_toolbar->remove_node('blog-7-d');
			$wp_toolbar->remove_node('blog-7-n');
			$wp_toolbar->remove_node('blog-7-c');
			$wp_toolbar->remove_node('blog-7-v');
			$wp_toolbar->remove_node('blog-8');
			$wp_toolbar->remove_node('blog-8-default');
			$wp_toolbar->remove_node('blog-8-d');
			$wp_toolbar->remove_node('blog-8-n');
			$wp_toolbar->remove_node('blog-8-c');
			$wp_toolbar->remove_node('blog-8-v');
			$wp_toolbar->remove_node('blog-9');
			$wp_toolbar->remove_node('blog-9-default');
			$wp_toolbar->remove_node('blog-9-d');
			$wp_toolbar->remove_node('blog-9-n');
			$wp_toolbar->remove_node('blog-9-c');
			$wp_toolbar->remove_node('blog-9-v');
			$wp_toolbar->remove_node('wpseo-menu');
			$wp_toolbar->remove_node('wpseo-menu-default');
			$wp_toolbar->remove_node('wpseo-kwresearch');
			$wp_toolbar->remove_node('wpseo-kwresearch-default');
			$wp_toolbar->remove_node('wpseo-adwordsexternal');
			$wp_toolbar->remove_node('wpseo-googleinsights');
			$wp_toolbar->remove_node('wpseo-wordtracker');
			$wp_toolbar->remove_node('wpseo-settings');
			$wp_toolbar->remove_node('wpseo-settings-default');
			$wp_toolbar->remove_node('wpseo-titles');
			$wp_toolbar->remove_node('wpseo-social');
			$wp_toolbar->remove_node('wpseo-xml');
			$wp_toolbar->remove_node('wpseo-permalinks');
			$wp_toolbar->remove_node('wpseo-internal-links');
			$wp_toolbar->remove_node('wpseo-rss');
			$wp_toolbar->remove_node('ngg-menu');
			$wp_toolbar->remove_node('ngg-menu-default');
			$wp_toolbar->remove_node('ngg-menu-overview');
			$wp_toolbar->remove_node('ngg-menu-add-gallery');
			$wp_toolbar->remove_node('ngg-menu-manage-gallery');
			$wp_toolbar->remove_node('ngg-menu-manage-album');
			$wp_toolbar->remove_node('ngg-menu-tags');
			$wp_toolbar->remove_node('ngg-menu-options');
			$wp_toolbar->remove_node('ngg-menu-style');
			$wp_toolbar->remove_node('ngg-menu-about');
			$wp_toolbar->remove_node('cloudflare');
			$wp_toolbar->remove_node('cloudflare-default');
			$wp_toolbar->remove_node('cloudflare-my-websites');
			$wp_toolbar->remove_node('cloudflare-analytics');
			$wp_toolbar->remove_node('cloudflare-account');
			$wp_toolbar->remove_node('w3tc');
			$wp_toolbar->remove_node('w3tc-default');
			$wp_toolbar->remove_node('w3tc-empty-caches');
			$wp_toolbar->remove_node('w3tc-faq');
			$wp_toolbar->remove_node('w3tc-support');
			$wp_toolbar->remove_node('languages​​');
		}
	add_action('admin_bar_menu', 'wptbr_ngr', 999);

	function wptbr_ngr_ab()
		{
			global $wp_admin_bar;
			$wp_admin_bar->remove_menu('root-default');
			$wp_admin_bar->remove_menu('delete-cache');
			$wp_admin_bar->remove_menu('network-admin');
		}
	add_action('wp_before_admin_bar_render', 'wptbr_ngr_ab', 999);

	function wptbr_ras()
		{
			echo '<style type="text/css">#adminmenushadow,#adminmenuback{background-image:none}</style>';
		}
	add_action('admin_head', 'wptbr_ras');

	function wptbr_hdr()
		{
?>
<style type="text/css">table#wptbr td#wptbr_ttl a:link,table#wptbr td#wptbr_ttl a:visited{text-decoration:none}table#wptbr td#wptbr_lgt,table#wptbr td#wptbr_lgt a{text-decoration:none}</style><table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="wptbr" border=0 cols=4 width="97%" height="33"><tr><td align=left valign=center id="wptbr_ttl">
<?php
			echo '<a href="' . home_url() . '">' . __(get_bloginfo()) . '</a>';
?>
</td><td align=right valign=center id="wptbr_lgt"><div style="padding-top:2px">
<?php
			wp_get_current_user();
			$current_user = wp_get_current_user();
			if (!($current_user instanceof WP_User))
					return;
			echo '' . $current_user->display_name . '';
?>
<?php
			if (is_multisite() && is_super_admin())
				{
					if (!is_network_admin())
						{
							echo ' | <a href="' . network_admin_url() . '">' . __('Network Admin') . '</a>';
						}
					else
						{
							echo ' | <a href="' . get_dashboard_url(get_current_user_id()) . '">' . __('Site Admin') . '</a>';
						}
				}
?>
 | 
<?php
			echo '<a href="' . wp_logout_url(home_url()) . '">' . __('Log Out') . '</a>';
?>
</div></td><td width="8"></td></tr></table>
<?php
		}
	add_action('in_admin_header', 'wptbr_hdr');

	$wp_scripts = new WP_Scripts();
	wp_deregister_script( 'admin-bar' );

	$wp_styles = new WP_Styles();
	wp_deregister_style( 'admin-bar' );

	remove_action( 'init', 'wp_admin_bar_init' );
	remove_filter( 'init', 'wp_admin_bar_init' );

	remove_action( 'wp_head', 'wp_admin_bar' );
	remove_filter( 'wp_head', 'wp_admin_bar' );
	remove_action( 'wp_footer', 'wp_admin_bar' );
	remove_filter( 'wp_footer', 'wp_admin_bar' );
	remove_action( 'admin_head', 'wp_admin_bar' );
	remove_filter( 'admin_head', 'wp_admin_bar' );
	remove_action( 'admin_footer', 'wp_admin_bar' );
	remove_filter( 'admin_footer', 'wp_admin_bar' );

	remove_action( 'wp_head', 'wp_admin_bar_class' );
	remove_filter( 'wp_head', 'wp_admin_bar_class' );
	remove_action( 'wp_footer', 'wp_admin_bar_class' );
	remove_filter( 'wp_footer', 'wp_admin_bar_class' );
	remove_action( 'admin_head', 'wp_admin_bar_class' );
	remove_filter( 'admin_head', 'wp_admin_bar_class' );
	remove_action( 'admin_footer', 'wp_admin_bar_class' );
	remove_filter( 'admin_footer', 'wp_admin_bar_class' );

	remove_action( 'wp_head', 'wp_admin_bar_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_css' );
	remove_action( 'wp_head', 'wp_admin_bar_dev_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_dev_css' );
	remove_action( 'wp_head', 'wp_admin_bar_rtl_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_rtl_css' );
	remove_action( 'wp_head', 'wp_admin_bar_rtl_dev_css' );
	remove_filter( 'wp_head', 'wp_admin_bar_rtl_dev_css' );
	remove_action( 'admin_head', 'wp_admin_bar_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_css' );
	remove_action( 'admin_head', 'wp_admin_bar_dev_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_dev_css' );
	remove_action( 'admin_head', 'wp_admin_bar_rtl_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_rtl_css' );
	remove_action( 'admin_head', 'wp_admin_bar_rtl_dev_css' );
	remove_filter( 'admin_head', 'wp_admin_bar_rtl_dev_css' );

	remove_action( 'wp_footer', 'wp_admin_bar_js' );
	remove_filter( 'wp_footer', 'wp_admin_bar_js' );
	remove_action( 'wp_footer', 'wp_admin_bar_dev_js' );
	remove_filter( 'wp_footer', 'wp_admin_bar_dev_js' );
	remove_action( 'admin_footer', 'wp_admin_bar_js' );
	remove_filter( 'admin_footer', 'wp_admin_bar_js' );
	remove_action( 'admin_footer', 'wp_admin_bar_dev_js' );
	remove_filter( 'admin_footer', 'wp_admin_bar_dev_js' );

	remove_action( 'locale', 'wp_admin_bar_lang' );
	remove_filter( 'locale', 'wp_admin_bar_lang' );

	remove_action( 'wp_head', 'wp_admin_bar_render', 1000 );
	remove_filter( 'wp_head', 'wp_admin_bar_render', 1000 );
	remove_action( 'wp_footer', 'wp_admin_bar_render', 1000 );
	remove_filter( 'wp_footer', 'wp_admin_bar_render', 1000 );
	remove_action( 'admin_head', 'wp_admin_bar_render', 1000 );
	remove_filter( 'admin_head', 'wp_admin_bar_render', 1000 );
	remove_action( 'admin_footer', 'wp_admin_bar_render', 1000 );
	remove_filter( 'admin_footer', 'wp_admin_bar_render', 1000 );

	remove_action( 'admin_footer', 'wp_admin_bar_render' );
	remove_filter( 'admin_footer', 'wp_admin_bar_render' );

	remove_action( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render', 1000 );
	remove_filter( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render', 1000 );

	remove_action( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render' );
	remove_filter( 'wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render' );

	function wptbr_init()
		{
			add_filter('show_admin_bar', '__return_false');
		}
	add_filter('init', 'wptbr_init', 9);

	function wptbr_spab_init()
		{
			add_filter('show_wp_pointer_admin_bar', '__return_false');
		}
	add_filter('init', 'wptbr_spab_init', 9);

	function wptbr_nfo()
		{
			echo "\n<!--Plugin ToolBar Removal 2012.1121.0343 Active - Tag: ".md5(md5("".""))."-->\n";
		}
	add_action('wp_head', 'wptbr_nfo');
	add_action('wp_footer', 'wptbr_nfo');

?>
