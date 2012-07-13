<?php 

// Enables additional visual-editor buttons (when enabled)
function additional_editor_buttons($buttons) {
  $buttons[] = 'hr';
  $buttons[] = 'sub';
  $buttons[] = 'sup';
  $buttons[] = 'fontselect';
  $buttons[] = 'fontsizeselect';
  $buttons[] = 'cleanup';
  $buttons[] = 'styleselect';
  return $buttons;
}
add_filter("mce_buttons_3", "additional_editor_buttons");

// Remove Width and Height Attributes From Inserted Images
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

?>