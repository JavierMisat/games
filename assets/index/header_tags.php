<?php
$themeData['title_tag'] = title_tag();
if ( is_page('play') ) {
	$game_data = getGame2($_GET['id']);
	$game_info = gameData($game_data);
	$themeData['game_meta_title'] = $game_info['name'] . " - Play Online Games Free";
	$themeData['game_meta_name'] = $game_info['name'];
	$themeData['game_meta_game_url'] = $game_info['game_url'];
	$themeData['game_meta_image'] = $game_info['image_url'];
	$themeData['game_meta_description'] = $game_info['description'];
	$themeData['header_metatags'] .= \GameMonetize\UI::view('global/header/game_metatags');
	$themeData['header_metatags'] .= '<link rel="canonical" href="'.$game_info['game_url'].'">';
}
else {

	 if ($_GET['p'] == 'home') {
        $cat=$_GET["cat"];
            if($cat<>""){
            $cat = str_replace('-', '.', $cat); 
            $cat = ucfirst($cat);
			$themeData['game_meta_description2'] = "Play " . $cat . " Free Online at GameFree.Games! We have chosen top " . $cat . " games which you can play online for free. enjoy! ";
			$themeData['header_title'] = \GameMonetize\UI::view('global/header/title');
			$themeData['header_metatags'] = \GameMonetize\UI::view('global/header/metatags2');
		}
    else {
			$themeData['header_title'] = \GameMonetize\UI::view('global/header/title');
			$themeData['header_metatags'] = \GameMonetize\UI::view('global/header/metatags');
    	}
    }
    else {
			$themeData['header_title'] = \GameMonetize\UI::view('global/header/title');
			$themeData['header_metatags'] = \GameMonetize\UI::view('global/header/metatags');
    	}
}
$themeData['header_favicon'] = \GameMonetize\UI::view('global/header/favicon');


if($_GET['p'] != 'login') {
	if( $userData['admin'] == 0 || $_GET['p'] == 'play' || $_GET['p'] == 'new-games' || $_GET['p'] == 'search' || $_GET['p'] == 'terms' || $_GET['p'] == 'privacy' || $_GET['p'] == 'about' || $_GET['p'] == 'categories' || $_GET['p'] == 'best-games' || $_GET['p'] == 'featured-games' || $_GET['p'] == 'played-games' || is_page('home')) {
	$themeData['header_stylesheets'] = \GameMonetize\UI::view('global/header/stylesheets');
	}
	else {
	$themeData['header_stylesheets'] .= \GameMonetize\UI::view('global/header/admin-stylesheets');
	}
}
if($_GET['p'] == 'login') {
	$themeData['header_stylesheets'] .= \GameMonetize\UI::view('global/header/admin-stylesheets');
}

$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    $themeData['header_url'] = "//". $_SERVER['HTTP_HOST'];
}
else {
    $themeData['header_url'] = siteUrl();
}

$themeData['header_scripts'] = \GameMonetize\UI::view('global/header/scripts');

$themeData['header_tags'] = \GameMonetize\UI::view('global/header/all');