<?php
/**
* Add custom variation data to the variation object.
* This data will be returnable when then 'show_variation' event is called in a jQuery file.
*
* Read the supporting blog post here: https://puntondev.com/adding-custom-variation-data-when-the-woocommerce-variation-form-is-updated/
*/

add_filter( 'woocommerce_available_variation', 'add_variation_data', 10, 3 );
function add_variation_data( $array, $instance, $variation ){
    $array['custom_data_key'] = get_post_meta( $array['variation_id'], '_meta_key', true );
    return $array;
}
