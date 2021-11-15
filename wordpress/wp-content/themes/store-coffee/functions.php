<?php

add_action( 'template_redirect', 'my_redirect', 1);
function my_redirect() {
    if ( is_404() ){
        wp_safe_redirect( home_url() );
        exit;
    }
};

?>