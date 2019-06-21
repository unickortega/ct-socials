<?php
/**
 * @package ctSocial
 */

/**
 * Plugin Name: CT Social
 * Plugin URI: http://url.com
 * Description: This plugin is a plugin for generating shortcodes
 * Version: 1.0.0
 * Author: Uelmar Ortega
 * Author URI: http://author.com
 * License: GPLv2 or later
 * Text Domain: ct social
 */

defined('ABSPATH') or die();

require 'includes/library/index.php';
require 'includes/library/CustomizerConfig.php';

class CTSocial
{
    function activate()
    {
       //  generated a CPT
       flush_rewrite_rules();
    }

    function diactivate()
    {
       //  flush rewrite rules
       flush_rewrite_rules();
    }

    function uninstall()
    {
       //  delete all the plugin data from DB
    }
}

$ct_social = new CTSocial();

//  activation
register_activation_hook(__FILE__, array($ct_social, 'activate'));

// diactivation
register_deactivation_hook(__FILE__, array($ct_social, 'diactivate'));

// uninstall
register_uninstall_hook(__FILE__, 'uninstall.php');
