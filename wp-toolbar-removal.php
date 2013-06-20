<?php

/*
Plugin Name: √ WP ToolBar Removal - DEV
Plugin URI: http://slangji.wordpress.com/wp-toolbar-removal/
Description: Completely <code>Disable</code> new WordPress 3.5+ / 3.4+ / 3.3+ (only) Admin <code>ToolBar</code> Frontend, Backend, Node, Pointer, Shadow, User Profile, without loosing Logout and Network functionality! Completely <code>Remove Code</code> for Minimal Memory Load, and Dasboard Speedup, with new approach. Thanks to olyma! | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestions">Contact</a> | <a href="http://wordpress.org/plugins/wp-overview-lite/" title="Show Dashboard Overview and Footer Memory Load Usage">WP Overview?</a> | <a href="http://wordpress.org/plugins/wp-missed-schedule/" title="Fix Missed Scheduled Future Posts Cron Job">WP Missed Schedule?</a> | <a href="http://wordpress.org/plugins/wp-admin-bar-removal/" title="Remove Admin Bar Frontend Backend User Profile and Code">Admin Bar Removal?</a> | <a href="http://wordpress.org/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Frontend and Backend Node">Admin Bar Node Removal?</a> | <a href="http://wordpress.org/plugins/wp-toolbar-removal/" title="Remove ToolBar Frontend Backend User Profile and Code">ToolBar Removal?</a> | <a href="http://wordpress.org/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Frontend and Backend Node">ToolBar Node Removal?</a> | <a href="http://wordpress.org/plugins/wp-login-deindexing/" title="Total DeIndexing WordPress LogIn from all Search Engines">LogIn DeIndexing?</a> | <a href="http://wordpress.org/plugins/wp-total-deindexing/" title="Total DeIndexing WordPress from all Search Engines">WP DeIndexing?</a> | <a href="http://wordpress.org/plugins/wp-ie-enhancer-and-modernizer/" title="Enhancer and Modernizer IE Surfing Expirience">Enhancer IE Surfing?</a>
Version: 2013.0620-BUGFIX.0526-DEVELOPMENTAL
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 3.3
Tested up to: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * Development Release: Version 2012 Build 1205-BUGFIX Revision 0350-DEVELOPMENT - DEV
 *
 * [ToolBar Removal](http://wordpress.org/plugins/wp-toolbar-removal/) 
 *
 * Copyright (C) 2012-2013 [sLaNGjI's](http://slangji.wordpress.com/slangjis/) (email: <slangji[at]gmail[dot]com>)
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
 * √ THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (email: <slangji[at]gmail[dot]com>)
 *
 * wp-admin-bar-removal.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2010-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (email: <slangji[at]gmail[dot]com>)
 *
 * wp-admin-bar-removal-node-addon.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2010-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (email: <slangji[at]gmail[dot]com>)
 *
 * toolbar-removal-completely-disable.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2011-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (email: <slangji[at]gmail[dot]com>)
 *
 * one-click-logout-barless.php by olyma <rackofpower.com>
 * Copyright (C) 2011 [olyma](http://rackofpower.com/) (email: <olyma[at]rackofpower[dot]com>)
 *
 * wp-toolbar-removal-node-addon.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2012-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-log.php uses (or it parts) code derived from
 *
 * wp-footer-log.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2008-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (email: <slangji[at]gmail[dot]com>)
 *
 * sLa2sLaNGjIs.php by sLa <slangji[at]gmail[dot]com>
 * Copyright (C) 2009-2013 [sLaNGjI's](http://profiles.wordpress.org/slangji) (email: <slangji[at]gmail[dot]com>)
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2008-2013 [sLaNGjI's](http://slangji.wordpress.com/slangjis/) (email: <slangji[at]gmail[dot]com>)
 * Copyright (C) 2011 [olyma](http://rackofpower.com/) (email: <olyma[at]rackofpower[dot]com>)
 *
 * √ DISCLAIMER
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
 * √ VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ THANKS
 * To [olyma](http://wordpress.org/plugins/one-click-logout-barless/)
 *
 * Todo List:
 * echo '<style type="text/css" media="print">#wpadminbar{display:none}</style>';
 * Merge styles to minimize HTTP requests
 * Use efficient CSS selectors
 */

	/**
	 * @package ToolBar Removal
	 * @subpackage WordPress PlugIn
	 * @description 
	 * @since 3.3.0
	 * @tested 3.6.0
	 * @version 2013.0620-BUGFIX.0526-DEVELOPMENTAL
	 * @status STABLE release
	 * @author sLa
	 * @license GPLv2 or later
	 * @indentation GNU style
	 * @keybit 
	 * @keysum 
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

	global $wp_version;

	if ( $wp_version < 3.1 )
		{
			wp_die( __( 'This plugin requires WordPress 3.1+ or greater.' ) );
		}

	//global $wp_version;

	//if ( $wp_version < 3.3 )
	//	{
	//		wp_die( __( 'This plugin requires WP 3.3+ or greater: for 3.1+ use <a href="http://wordpress.org/plugins/wp-admin-bar-removal/">Admin Bar Removal</a> or <a href="http://wordpress.org/plugins/toolbar-removal-completely-disable/">Disable Admin Bar and ToolBar</a>' ) );
	//	}

	function wptbr_ras()
		{
			echo '<style type="text/css">#adminmenushadow,#adminmenuback{background-image:none}</style>';
		}
	add_action( 'admin_head', 'wptbr_ras' );

	function wptbr_rsb()
		{
			echo '<style type="text/css">html.wp-toolbar,html.wp-toolbar #wpcontent,html.wp-toolbar #adminmenu,html.wp-toolbar #wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';
		}
	add_action( 'admin_print_styles', 'wptbr_rsb', 21 );

	function wptbr_ablhdr()
		{

?>
<style type="text/css">table#wptbr td#wptbr_ttl a:link,table#wptbr td#wptbr_ttl a:visited{text-decoration:none}table#wptbr td#wptbr_lgt,table#wptbr td#wptbr_lgt a{text-decoration:none}</style>
<table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="wptbr" border="0" cols="4" width="97%" height="33">
<tr>
<td align="left" valign="center" id="wptbr_ttl">
<?php

	echo '<a href="' . home_url() . '">' . __( get_bloginfo() ) . '</a>';

?>
</td>
<td align="right" valign="center" id="wptbr_lgt">
<div style="padding-top:2px">
<?php

	if ( function_exists( 'sLa_pml' ) )
		{
			echo ( sLa_pml() . 'M - ' );
		}

	if ( function_exists( 'sLa_pcl' ) )
		{
			echo ( sLa_pcl() . ' - ' );
		}

	echo date( 'l j F Y @ H:i' );

	wp_get_current_user();

	$current_user = wp_get_current_user();

	if ( !( $current_user instanceof WP_User ) )
		return;

	echo ' | ' . $current_user->display_name . '';

	if ( is_multisite() && is_super_admin() )
		{
			if ( !is_network_admin() )
				{
					echo ' | <a href="' . network_admin_url() . '">' . __( 'Network Admin' ) . '</a>';
				}
			else
				{
					echo ' | <a href="' . get_Dashboard_url( get_current_user_id() ) . '">' . __( 'Site Admin' ) . '</a>';
				}
		}

	echo ' | <a href="' . wp_logout_url( home_url() ) . '">' . __( 'Log Out' ) . '</a>';

?>
</div>
</td>
<td width="8">
</td>
</tr>
</table>
<?php

		}

	add_action( 'in_admin_header', 'wptbr_ablhdr' );

	function wptbr_rbcb()
		{
			if ( has_filter( 'wp_head', '_admin_bar_bump_cb' ) )
				{
					remove_filter( 'wp_head', '_admin_bar_bump_cb' );
				}
		}
	add_filter( 'wp_head', 'wptbr_rbcb', 1 );

	show_admin_bar( false );

	function wp_toolbar_init()
		{
			add_filter( 'show_admin_bar', '__return_false' );
			add_filter( 'wp_admin_bar_class', '__return_false' );
			add_filter( 'wp_admin_bar_css', '__return_false' );
			add_filter( 'wp_admin_bar_js', '__return_false' );
			add_filter( 'wp_admin_bar_render', '__return_false' );
			add_filter( 'wp_admin_bar_ajax_render', '__return_false' );
			add_filter( 'show_wp_pointer_admin_bar', '__return_false' );
		}
	add_filter( 'init', 'wp_toolbar_init', 9 );

	function wptbr_ruppoabpc()
		{
			echo '<style type="text/css">.show-admin-bar{display:none}</style>';
		}
	add_action( 'admin_print_styles-profile.php', 'wptbr_ruppoabpc' );

	$wp_scripts = new WP_Scripts();
	wp_deregister_script( 'admin-bar' );

	$wp_styles = new WP_Styles();
	wp_deregister_style( 'admin-bar' );

	remove_action('init', 'wp_admin_bar_init');
	remove_filter('init', 'wp_admin_bar_init');

	remove_action('wp_head', 'wp_admin_bar');
	remove_filter('wp_head', 'wp_admin_bar');
	remove_action('wp_footer', 'wp_admin_bar');
	remove_filter('wp_footer', 'wp_admin_bar');
	remove_action('admin_head', 'wp_admin_bar');
	remove_filter('admin_head', 'wp_admin_bar');
	remove_action('admin_footer', 'wp_admin_bar');
	remove_filter('admin_footer', 'wp_admin_bar');

	remove_action('wp_head', 'wp_admin_bar_class');
	remove_filter('wp_head', 'wp_admin_bar_class');
	remove_action('wp_footer', 'wp_admin_bar_class');
	remove_filter('wp_footer', 'wp_admin_bar_class');
	remove_action('admin_head', 'wp_admin_bar_class');
	remove_filter('admin_head', 'wp_admin_bar_class');
	remove_action('admin_footer', 'wp_admin_bar_class');
	remove_filter('admin_footer', 'wp_admin_bar_class');

	remove_action('wp_head', 'wp_admin_bar_css');
	remove_filter('wp_head', 'wp_admin_bar_css');
	remove_action('wp_head', 'wp_admin_bar_dev_css');
	remove_filter('wp_head', 'wp_admin_bar_dev_css');
	remove_action('wp_head', 'wp_admin_bar_rtl_css');
	remove_filter('wp_head', 'wp_admin_bar_rtl_css');
	remove_action('wp_head', 'wp_admin_bar_rtl_dev_css');
	remove_filter('wp_head', 'wp_admin_bar_rtl_dev_css');
	remove_action('admin_head', 'wp_admin_bar_css');
	remove_filter('admin_head', 'wp_admin_bar_css');
	remove_action('admin_head', 'wp_admin_bar_dev_css');
	remove_filter('admin_head', 'wp_admin_bar_dev_css');
	remove_action('admin_head', 'wp_admin_bar_rtl_css');
	remove_filter('admin_head', 'wp_admin_bar_rtl_css');
	remove_action('admin_head', 'wp_admin_bar_rtl_dev_css');
	remove_filter('admin_head', 'wp_admin_bar_rtl_dev_css');

	remove_action('wp_footer', 'wp_admin_bar_js');
	remove_filter('wp_footer', 'wp_admin_bar_js');
	remove_action('wp_footer', 'wp_admin_bar_dev_js');
	remove_filter('wp_footer', 'wp_admin_bar_dev_js');
	remove_action('admin_footer', 'wp_admin_bar_js');
	remove_filter('admin_footer', 'wp_admin_bar_js');
	remove_action('admin_footer', 'wp_admin_bar_dev_js');
	remove_filter('admin_footer', 'wp_admin_bar_dev_js');

	remove_action('personal_options', '_admin_bar_pref');
	remove_filter('personal_options', '_admin_bar_pref');
	remove_action('personal_options', '_get_admin_bar_pref');
	remove_filter('personal_options', '_get_admin_bar_pref');

	remove_action('locale', 'wp_admin_bar_lang');
	remove_filter('locale', 'wp_admin_bar_lang');

	remove_action('wp_head', 'wp_admin_bar_render', 1000);
	remove_filter('wp_head', 'wp_admin_bar_render', 1000);
	remove_action('wp_footer', 'wp_admin_bar_render', 1000);
	remove_filter('wp_footer', 'wp_admin_bar_render', 1000);
	remove_action('admin_head', 'wp_admin_bar_render', 1000);
	remove_filter('admin_head', 'wp_admin_bar_render', 1000);
	remove_action('admin_footer', 'wp_admin_bar_render', 1000);
	remove_filter('admin_footer', 'wp_admin_bar_render', 1000);

	remove_action('wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render');
	remove_filter('wp_ajax_adminbar_render', 'wp_admin_bar_ajax_render');

	remove_action('admin_footer', 'wp_admin_bar_render');
	remove_filter('admin_footer', 'wp_admin_bar_render');

	function wptbr_nfo()
		{
			echo "\n<!--Plugin ToolBar Removal 2013.0620-BUGFIX.0526-DEVELOPMENTAL Active - Tag: ".md5(md5("".""))."-->\n";
			echo "\n<!--This Site is Optimized to Speedup Dashboard and Minimize Memory Load Consumption";

			global $wp_version;

			if ( $wp_version >= 3.3 )
				{
					echo " with ToolBar Disabled";
				}

			echo "-->\n\n";
		}
		add_action( 'wp_head', 'wptbr_nfo' );
		add_action( 'wp_footer', 'wptbr_nfo' );

?>