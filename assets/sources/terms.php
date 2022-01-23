<?php
	$themeData['ads_header'] = getADS('header');
	$themeData['ads_footer'] = getADS('footer');
	$themeData['ads_sidebar'] = getADS('column_one');
	# >>

	$themeData['new_game_page'] = "";

	$themeData['new_games'] = \GameMonetize\UI::view('game/terms');

	$themeData['page_content'] = \GameMonetize\UI::view('home/content');