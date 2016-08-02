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
	'MARKPOSTUNREAD_TITLE'						=> 'Marcar Mensajes no Leídos',
	'MARKPOSTUNREAD_CONFIG'						=> 'Configuración',
	'MARKPOSTUNREAD_CONFIG_UPDATED'				=> '<strong>Marcar Mensajes no Leídos </strong>Extensión<br />» Configuración actualizada',

	'MARKPOSTUNREAD_GROUP_MARKPOSTUNREAD'		=> 'Botón «Marcar Mensajes no Leídos» viendo un tema',
	'MARKPOSTUNREAD_ENABLED'					=> 'Botón «Marcar Mensajes no Leídos»',
	'MARKPOSTUNREAD_ENABLED_EXP'				=> 'Importante: <strong>Habilitar marcado de temas en el servidor</strong> es requerido que este establecido en <strong>Si</strong> en la Configuración de Carga.',
	'MARKPOSTUNREAD_ENABLE_FAILED'				=> 'Habilitación del botón de «Marcar Mensajes no Leídos» button ha fallado porque la opción <strong>Habilitar marcado de temas en el servidor</strong> está deshabilitada.',
	'MARKPOSTUNREAD_MAX_DAYS'					=> 'Edad máxima de los mensajes, en días',
	'MARKPOSTUNREAD_MAX_DAYS_EXP'				=> 'Cuando un usuario marca un mensaje sin leer, se inserta un nuevo campo en la tabla topics_track para cada tema, y al leer en el foro pertinente con last_post_time después de la post_time del mensaje que se marcó sin leer. En un foro grande con un gran número de mensajes, es posible que se use mucho espacio de almacenamiento de base de datos para esta función (por ejemplo, si una gran cantidad de sus usuarios marcan muchos mensajes antiguos sin leer), así como lentitud en grandes foros con muchos temas. Con esta opción, puede limitar la función para mensajes que no tienen más que un número determinado de días de edad. Introduzca 0 para permitir a sus usuarios el marcar <strong>todos</strong> los mensajes como no leídos.',

	'MARKPOSTUNREAD_GROUP_UNREADSEARCHLINK'		=> 'Enlace de búsqueda «Mensajes no Leídos» en la barra de navegación',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK'			=> 'Comportamiento del enlace de búsqueda «Mensajes no Leídos» en la barra de navegación',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_EXP'		=> 'Las opciones 2 y 3 sólo afectan a los usuarios registrados. Los usuarios que no han iniciado sesión verán siempre «Mensajes no Leídos».',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT1'		=> '1) Mostrar siempre «Mensajes no Leídos» (por defecto en phpBB)',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT2'		=> '2) Mostrar «Mensajes no Leídos» / «No hay mensajes no leídos»',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT2_EXP'	=> 'Puede afectar un poco el rendimiento.',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT3'		=> '3) Mostrar «Mensajes no Leídos en X temas» / «No hay mensajes no leídos»',
	'MARKPOSTUNREAD_UNREAD_POSTS_LINK_OPT3_EXP'	=> 'Puede afectar aún más al rendimiento.',
));
