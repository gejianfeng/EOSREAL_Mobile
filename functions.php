<?php

function get_nav_header()
{
	$home_url = home_url();

	$getupdates_url = $home_url . "/index.php/getupdates";
	$resources_url = $home_url . "/index.php/resources";
	$team_url = $home_url . "/index.php/team";
	$events_url = $home_url . "/index.php/events";

	$ret = '';
	$ret .= '<div class="banner-container">';
	$ret .= '<div id="banner">';
	$ret .= '<div class="logo" onclick="window.location.href=\'' . $home_url . '\';"></div>';
	$ret .= '<div class="menu-button" onclick="showMenu();"></div>';

	$ret .= '<div id="menu" class="menu-frame" style="display:none;">';
	$ret .= '<div class="menu-item menu-item1" onclick="window.location.href=\'' . $getupdates_url . '\';">GET UPDATES';
	$ret .= '<div class="menu-line" style="top: 0px;"></div>';
	$ret .= '<div class="menu-icon"></div>';
	$ret .= '</div>';
	$ret .= '<div class="menu-item menu-item2" onclick="window.location.href=\'' . $resources_url . '\';">RESOURCES';
	$ret .= '<div class="menu-line" style="top: 0px;"></div>';
	$ret .= '<div class="menu-icon"></div>';
	$ret .= '</div>';
	$ret .= '<div class="menu-item menu-item3" onclick="window.location.href=\'' . $team_url . '\';">OUR TEAM';
	$ret .= '<div class="menu-line" style="top: 0px;"></div>';
	$ret .= '<div class="menu-icon"></div>';
	$ret .= '</div>';
	$ret .= '<div class="menu-item menu-item4" onclick="window.location.href=\'' . $events_url . '\';">EVENTS';
	$ret .= '<div class="menu-line" style="top: 0px;"></div>';
	$ret .= '<div class="menu-icon"></div>';
	$ret .= '</div>';
	$ret .= '<div class="menu-line" style="bottom: 0px;"></div>';
	$ret .= '</div>';

	$ret .= '</div>';
	$ret .= '</div>';

	echo $ret;
}

function get_back_header()
{
	$home_url = home_url();

	$getupdates_url = $home_url . "/index.php/getupdates";
	$resources_url = $home_url . "/index.php/resources";
	$team_url = $home_url . "/index.php/team";
	$events_url = $home_url . "/index.php/events";

	$ret_url = $home_url;

	if (is_page('newsletter'))
	{
		$ret_url = $getupdates_url;
	}

	$ret = '';
	$ret .= '<div class="banner-container">';
	$ret .= '<div id="banner">';
	
	$ret .= '<div class="icon-back" onclick="window.location.href=\'' . $ret_url . '\';"></div>';

	$ret .= '</div>';
	$ret .= '</div>';

	echo $ret;
}

?>