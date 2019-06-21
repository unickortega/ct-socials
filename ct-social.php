<?php
/**
 * @package ctSocial
 */

/**
 * Plugin Name: CT Social
 * Plugin URI: http://url.com
 * Description: This plugin is a plugin experimentation
 * Version: 1.0.0
 * Author: Uelmar Ortega
 * Author URI: http://author.com
 * License: GPLv2 or later
 * Text Domain: ct social
 */

defined('ABSPATH') or die();

require 'includes/library/CTSocial.php';

$ct_social = new CTSocial();

//  activation
register_activation_hook(__FILE__, array($ct_social, 'activate'));

// diactivation
register_deactivation_hook(__FILE__, array($ct_social, 'diactivate'));

// uninstall
register_uninstall_hook(__FILE__, 'uninstall.php');
