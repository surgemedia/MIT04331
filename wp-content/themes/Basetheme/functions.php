<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
  'lib/nav-walker.php',            // Navigation compatible with bootstrap & Sage
  'lib/function-svg-upload-able.php', // SVG able to upload
  'post_types/action-raname-posts.php',    // Newsletters
  'post_types/post-type-useful-links.php',    // Useful Links
  'post_types/post-type-team.php',    // Forms
  'post_types/post-type-forms.php',    // Teams
  'post_types/post-type-services.php',    // Services

];

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page();
  
}

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
