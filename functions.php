<?php
/**
* SimpleSlides
* @author Jenn Schiffer
*/

// enqueue them styles and javascripts
function simpleslides_scripts() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), '3.0.1', true );
  wp_enqueue_style( 'simpleslides', get_stylesheet_uri() );
  wp_enqueue_script( 'highlightjs', get_template_directory_uri() . '/js/highlight.pack.js', array(), '8.0.0', true );
  wp_enqueue_script( 'simpleslides', get_template_directory_uri() . '/js/simpleslides.js', array('jquery','highlightjs'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'simpleslides_scripts' );


// navigation menu
function simpleslides_menu() {
  register_nav_menu('simpleslides-menu',__( 'Main Menu' ));
}
add_action( 'init', 'simpleslides_menu' );


// custom meta box for simpleslides custom settings
function simpleslides_metaBoxCustomSettings() {
  add_meta_box(null, __('SimpleSlides Custom Settings', 'simpleslides'), 'simpleslides_printCustomSettings', 'post');
}
add_action( 'add_meta_boxes', 'simpleslides_metaBoxCustomSettings' );

// print custom settings metabox on edit post view
function simpleslides_printCustomSettings($post) {
  $valueCustomCSS = get_post_meta( $post->ID, '_simpleslides_customCSS', true );
  $valueHighlightJSTheme = get_post_meta( $post->ID, '_simpleslides_highlightJSTheme', true);

  $highlightJSThemes = array(
    'default' => 'Default',
    'arta' => 'Arta',
    'atelier-dune.dark' => 'Atelier Dune Dark',
    'atelier-dune.light' => 'Atelier Dune Light',
    'atelier-forest.dark' => 'Atelier Forest Dark',
    'atelier-forest.light' => 'Atelier Forest Light',
    'atelier-heath.dark' => 'Atelier Heath Dark',
    'atelier-heath.light' => 'Atelier Heath Light',
    'atelier-lakeside.dark' => 'Atelier Lakeside Dark',
    'atelier-lakeside.light' => 'Atelier Lakeside Light',
    'atelier-seaside.dark' => 'Atelier Seaside Dark',
    'atelier-seaside.light' => 'Atelier Seaside Light',
    'brown_paper' => 'Brown Paper',
    'dark' => 'Dark',
    'docco' => 'Docco',
    'far' => 'Far',
    'foundation' => 'Foundation',
    'github' => 'Github',
    'googlecode' => 'Google Code',
    'idea' => 'Idea',
    'ir_black' => 'IR_Black',
    'magula' => 'Magula',
    'mono-blue' => 'Mono Blue',
    'monokai' => 'Monokai',
    'monokai_sublime' => 'Monokai Sublime',
    'obsidian' => 'Obsidian',
    'paraiso.dark' => 'Paraíso Dark',
    'paraiso.light' => 'Paraíso Light',
    'pojoaque' => 'Pojaque',
    'railscasts' => 'Railscasts',
    'rainbow' => 'Rainbow',
    'solarized_dark' => 'Solarized Dark',
    'solarized_light' => 'Solarized Light',
    'sunburst' => 'Sunburst',
    'tomorrow-night-blue' => 'Tomorrow Night Blue',
    'tomorrow-night-bright' => 'Tomorrow Night Bright',
    'tomorrow-night-eighties' => 'Tomorrow Night Eighties',
    'tomorrow-night' => 'Tomorrow Night',
    'vs' => 'Visual Studio',
    'xcode' => 'XCode',
    'zenburn' => 'Zenburn'
  );

  // custom css form
  echo '<label for="simpleslides_customCSS">';
  _e( 'Enter custom CSS for this slide deck:', 'simpleslides' );
  echo '</label>';
  echo '<textarea id="simpleslides_customCSS" name="simpleslides_customCSS" style="width:100%;display:block;height:150px;">' .  esc_attr( $valueCustomCSS )  . '</textarea>';
  _e( '<p><em>Example: to hide arrows, use <code>#navigation { display none; }</code>. To hide the slide counter, add <code>#counter { display: none; }</code>.</em></p>', 'simpleslides');

  // highlightjs theme form
  echo '<hr style="margin:10px 0;" />';
  echo '<label for="simpleslides_highlightJSTheme">';
  _e( 'Select HighlightJS syntax highlighting theme:', 'simpleslides' );
  echo '</label> ';
  echo '<select id="simpleslides_highlightJSTheme" name="simpleslides_highlightJSTheme">';
  foreach ( $highlightJSThemes as $name => $displayName ) {
    $selected = ($name == $valueHighlightJSTheme) ? ' selected="true"' : '';
    echo '<option value="' . $name . '"' .$selected . '>' . $displayName . '</option>';
  }
  echo '</select>';
}

// save custom setting meta box data on post save
function simpleslides_saveMetaBoxData($post_id) {
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return;
  }
  if ( ! current_user_can( 'edit_post', $post_id ) ) {
    return;
  }

  // save custom css
  if ( ! isset( $_POST['simpleslides_customCSS'] ) ) {
    return;
  }
  else {
    $customCSSValue = sanitize_text_field( $_POST['simpleslides_customCSS'] );
    update_post_meta( $post_id, '_simpleslides_customCSS', $customCSSValue );
  }

  // save highlightjs theme
  if ( ! isset( $_POST['simpleslides_highlightJSTheme'] ) ) {
    return;
  }
  else {
    $highlightJSThemeValue = sanitize_text_field( $_POST['simpleslides_highlightJSTheme'] );
    update_post_meta( $post_id, '_simpleslides_highlightJSTheme', $highlightJSThemeValue );
  }
}
add_action( 'save_post', 'simpleslides_saveMetaBoxData' );

?>