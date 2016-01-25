<?php

/**
 *
 * @package phpBB Extension - Mark Post Unread
 * @copyright (c) 2015 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	// Viewtopic
	'MARKPOSTUNREAD_MARK_UNREAD'			=> 'Marcar mensaje como no leído',
	'MARKPOSTUNREAD_MARKED_UNREAD'			=> 'Mensaje marcado como no leído correctamente.',
	'MARKPOSTUNREAD_REDIRECT_FORMAT'		=> '%s<br /><br />%s<br /><br />%s',

	// Navbar
	'MARKPOSTUNREAD_UNREAD_NUM_MAX'			=> 'Mensajes no leídos en mas de %1$d temas',
	'MARKPOSTUNREAD_UNREAD_NUM'				=> array(
		0 => 'No ha mensajes no leídos',
		1 => 'Mensaje no leído en %1$d tema',
		2 => 'Mensajes no leídos en %1$d temas',
	),
));
