<?php

require_once 'ShortCoder.php';

 class CTSocialFeeder extends ShortCoder
 {
    function __construct()
    {
        $this->createShortCodes();
    }

    /**
     * This is for registering shorcodes
    */
    function createShortCodes()
    {
        add_shortcode('ct_facebook', array( $this, 'register_facebook_feed_shortcode' ));
        add_shortcode('ct_twitter', array( $this, 'register_twitter_feed_shortcode' ));
    }


    /**
     * Generate html
    */
    function register_facebook_feed_shortcode($atts)
    {
        $options = shortcode_atts( array(
            'style' => 'light',
            'parse_links' => 'short',
            'embed_images' => '0',
            'limit' => '15',
            'length_limit' => '100',
            'cache' => '300',
        ), $atts );
        
        $response = json_decode(wp_remote_get( 'https://graph.facebook.com/v3.3/me/posts?access_token=EAADl61Qggn8BAM8KkO2gAwhaWkRSryMel4rl0IKur25QRiktwKxVY7H8YuicdUcqgZAZBNSTqCxsaUe49uzRooeeZAqeUJvP0zrZBSZCHhtx0aFfYJLENZBNSysCNZAkAYGtcnqz9IAhAuBqPqA74OBGUk5inVorKdqcIQOmvqZBgbuFpZBneEmdyhEhtcZAynvvhqapZAdnRAdAQZDZD&fields=full_picture,picture,message,created_time,permalink_url,name,from' )['body']);

        $posts = $response->data;

        return $this->renderPhpFile('/views/feeds/facebook.php', [ 'posts'=> $posts ]);
    }

    /**
     * Generate html
    */
    function register_twitter_feed_shortcode($atts)
    {
        $options = shortcode_atts( array(
            'style' => 'light',
            'parse_links' => 'short',
            'embed_images' => '0',
            'limit' => '15',
            'length_limit' => '100',
            'cache' => '300',
        ), $atts );
        
        $response = json_decode(wp_remote_get( 'https://graph.facebook.com/v3.3/me/posts?access_token=EAADl61Qggn8BAM8KkO2gAwhaWkRSryMel4rl0IKur25QRiktwKxVY7H8YuicdUcqgZAZBNSTqCxsaUe49uzRooeeZAqeUJvP0zrZBSZCHhtx0aFfYJLENZBNSysCNZAkAYGtcnqz9IAhAuBqPqA74OBGUk5inVorKdqcIQOmvqZBgbuFpZBneEmdyhEhtcZAynvvhqapZAdnRAdAQZDZD&fields=full_picture,picture,message,created_time,permalink_url,name,from' )['body']);

        $posts = $response->data;

        return $this->renderPhpFile('/views/feeds/facebook.php', [ 'posts'=> $posts ]);
    }
 }