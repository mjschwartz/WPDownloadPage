<?php
/*
Plugin Name: Wp DownloadPage
Plugin URI: http://www.wordpresspluginfu.com/wp-downloadpage/
Description: Create a shorttag that turns a post into an auto download page. The shortcode [wpdownloadpage your_url], where your_url is the page you would like to visit.
Version: 0.1
Author: Matthew Schwartz
Author URI: http://schwartzlink.net
*/


/*  Copyright 2010  Matthew Schwartz  (email : schwartz.matthew@schwartzlink.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


if ( ! defined( 'WPDLPG_PLUGIN_BASENAME' ) )
	define( 'WPDLPG_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

if ( ! defined( 'WPDLPG_PLUGIN_NAME' ) )
	define( 'WPDLPG_PLUGIN_NAME', trim( dirname( WPDLPG_PLUGIN_BASENAME ), '/' ) );

if ( ! defined( 'WPDLPG_PLUGIN_DIR' ) )
	define( 'WPDLPG_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . WPDLPG_PLUGIN_NAME );

add_shortcode('wpdownloadpage', 'wpdlpg_shortcode_handle');

function wpdlpg_download_script($url) {
  $content = <<<EOF
<script type="text/javascript">

function wpdlpg_download(url) {
  location.href = url;
}
setTimeout("wpdlpg_download('$url')",5000);
</script>
EOF;
  return $content;
}


function wpdlpg_shortcode_handle($attr) {
  return wpdlpg_download_script($attr[0]);
}

?>
