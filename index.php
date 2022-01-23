<?php
/**
* @package GameMonetize.com CMS - Modern Arcade Script
*
*
* @author GameMonetize.com
*
*/
if ( !isset($_GET['p']) ) $_GET['p'] = 'home';

require_once dirname( __FILE__ ) . '/gm-load.php';

require_once ABSPATH . 'assets/index/header_tags.php';
require_once ABSPATH . 'assets/index/header.php';
require_once ABSPATH . 'assets/index/footer.php';
require_once ABSPATH . 'assets/index/page.php';

echo \GameMonetize\UI::view('index');

$GameMonetizeConnect->close();