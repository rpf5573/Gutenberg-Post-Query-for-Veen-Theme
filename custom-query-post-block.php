<?php
/**
 * Plugin Name: Gutenberg Custom Query Post Block
 * Description: This is a simple gutenberg post block with custom query
 * Version:     0.0.1
 * Author:      rpf5573
 * Author URI:  https://develoger.kr/
 * Text Domain: custom-query-post-block
 * License:     GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( 'ABSPATH' ) || exit;

// Define
define('CQPB_VER', '0.0.1');
define('CQPB_URL', plugin_dir_url(__FILE__));
define('CQPB_BASE', plugin_basename(__FILE__));
define('CQPB_PATH', plugin_dir_path(__FILE__));

// Common Function
if(!function_exists('custom_query_post_block')) {
  function custom_query_post_block() {
    require_once CQPB_PATH . 'classes/Functions.php';
    return new \CQPB\Functions();
  }
}