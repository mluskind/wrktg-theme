<?php

add_action('wp_enqueue_scripts', 'bootstrap_scripts');
function bootstrap_scripts() {
    wp_enqueue_script( 'twitter-bootstrap', 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js' );
    wp_enqueue_style( 'twitter-bootstrap', 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css' );
    wp_enqueue_style( 'font-awesome', 'http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css', array('twitter-bootstrap') );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array('twitter-bootstrap', 'font-awesome') );

}

add_action('wp_footer', 'add_javascript');
function add_javascript() { ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        contact = $('.contact');
        contact.find('.gform_button').addClass('btn').addClass('span12');
        contact.find('#field_1_1, #field_1_2').addClass('span6');
        contact.find('#input_1_1, #input_1_2').addClass('span12');
        contact.find('h3').prepend($('<i class="icon icon-envelope-alt"></i>'));
    });
</script>
<?php } ?>

