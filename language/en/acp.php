<?php
/**
 *
 * phpBB Media Embed PlugIn extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Settings
	'ACP_MEDIA_SETTINGS'				=> 'Media Embed Settings',
	'ACP_MEDIA_SETTINGS_EXPLAIN'		=> 'Here you can configure the settings for the Media Embed PlugIn.',
	'ACP_MEDIA_DISPLAY_BBCODE'			=> 'Display <samp>[MEDIA]</samp> BBCode on posting page',
	'ACP_MEDIA_DISPLAY_BBCODE_EXPLAIN'	=> 'If disallowed, the BBCode button will not be displayed, however users can still use the <samp>[media]</samp> tag in their posts',

	// Manage sites
	'ACP_MEDIA_MANAGE'					=> 'Manage Media Embed Sites',
	'ACP_MEDIA_MANAGE_EXPLAIN'			=> 'Here you can manage the sites you want to allow the Media Embed PlugIn to display content from.',
	'ACP_MEDIA_SITES_ERROR'				=> 'There are no media sites to display.',
));
