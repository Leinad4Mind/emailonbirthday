<?php
/**
 *
 * E-mail on birthday. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2019 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'E_MAIL_ON_BIRTHDAY'			=> 'E-mail d’anniversaire',
	'E_MAIL_ON_BIRTHDAY_EXPLAIN'	=> 'Envoie un e-mail à chaque utilisateur pour son anniversaire.',
	'HTML_EMAIL_ON_BIRTHDAY'		=> 'E-mail d’anniversaire en HTML',
	'HTML_EMAIL_ON_BIRTHDAY_EXPLAIN'=> 'Envoie l’email d’anniversaire en HTML en lieu et place du format texte.',
	'NOTIFICATION_TYPE_BIRTHDAY'	=> 'Souhaits d’anniversaire',
	'HTML_EMAIL_ENABLED'			=> '(Disponible uniquement si l’extension forumhulp\htmlemail est activée)',
	'BIRTHDAYSEND'					=> '<strong>E-mail d’anniversaire envoyé à</strong><br />» %s',
	'FH_HELPER_NOTICE'				=> 'L’extension : « Forumhulp Helper » n’est pas installée !<br />Il est nécessaire de télécharger son archive disponible sur cette page : <a href="https://github.com/ForumHulp/helper" target="_blank">Forumhulp Helper</a>, puis de l’envoyer sur son espace FTP et de l’activer.',
	'E_MAIL_ON_BIRTHDAY_NOTICE'		=> '<div class="attach-image"><p>Les paramètres de cette extension se trouvent dans : %1$s » %2$s » %3$s. Pour utiliser le language HTML dans les e-mails d’anniversaires il est nécessaire d’activer l’extension : <a href="https://github.com/ForumHulp/htmlemail" target="_blank">HTML email</a>, puis de modifier le contenu des fichiers du répertoire : ./ext/forumhulp/emailonbirthday/language/fr/email/.</p></div>',
));
