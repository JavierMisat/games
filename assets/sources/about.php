<?php
	$themeData['new_game_page'] = "";

	$themeData['new_games_list'] = $ngm_r;
	$themeData['new_games'] = \GameMonetize\UI::view('game/about');

	$themeData['page_content'] = \GameMonetize\UI::view('home/content');