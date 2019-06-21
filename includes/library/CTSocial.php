<?php

require 'CTSocialLinks.php';
require 'CTSocialFeeder.php';

 class CTSocial
 {
    
     function __construct()
     {
        new CTSocialLinks;
        new CTSocialFeeder;
     }

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