<?php
/**
 *
 * User details. An extension for the phpBB Forum Software package.
 * French translation by Pyanepsion (https://corrigeur.fr) & Galixte (https://www.galixte.com)
 *
 * @copyright (c) 2017 david63
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
	'USER_DETAILS_SELECT'			=> '&bull;&nbsp;Depuis cette page il est possible de sélectionner les attributs des utilisateurs que l’on souhaite afficher.<br>&bull;&nbsp;Un grand nombre d’attributs sélectionnés pourrait ne pas s’afficher correctement sur la page (cela dépend de la largeur de la page affichée dans le navigateur).',

	'ATTRIBUTE'						=> 'Attribut',
	'ATTRIBUTE_EXPLAIN'				=> 'Description de l’attribut',
	'SIZE'							=> 'Largeur de la colonne de l’attribut',
	'CAN_FILTER'					=> 'Filtrer',
	'CLEAR_ATTRIB'					=> 'Tout désélectionner',
	'CSV'							=> 'Exporter au format CSV',

	'USER_ALLOW_PM_EXPLAIN'			=> 'Permet aux autres membres de lui envoyer des messages privés.',
	'USER_ALLOW_VIEWONLINE_EXPLAIN'	=> 'Affiche son statut en ligne.',
	'USER_ALLOW_VIEWEMAIL_EXPLAIN'	=> 'Permet aux autres membres de lui envoyer des e-mails.',
	'USER_ALLOW_MASSEMAIL_EXPLAIN'	=> 'Permet aux administrateurs de lui envoyer des e-mails de masse.',
	'USER_AOL_EXPLAIN'				=> 'Adresse AOL de l’utilisateur.',
	'USER_AVATAR_EXPLAIN'			=> 'Image de son avatar.',
	'USER_AVATAR_TYPE_EXPLAIN'		=> 'Le type d’avatar de l’utilisateur.',
	'USER_BIRTHDAY_EXPLAIN'			=> 'La date de naissance de l’utilisateur, lorsqu’elle est indiquée et son âge.',
	'USER_DATE_FORMAT_EXPLAIN'		=> 'Le format de la date configuré par l’utilisateur.',
	'USER_EMAIL_EXPLAIN'			=> 'L’adresse e-mail de l’utilisateur.',
	'USER_EMAILTIME_EXPLAIN'		=> 'La date et l’heure du dernier e-mail envoyé par l’utilisateur.',
	'USER_GROUP_EXPLAIN'			=> 'Le groupe par défaut de l’utilisateur.',
	'USER_ID_EXPLAIN'				=> 'L’ID de l’utilisateur sur le forum.',
	'USER_INACTIVE_REASON_EXPLAIN'	=> 'La raison pour laquelle le compte de l’utilisateur inactif.',
	'USER_INACTIVE_TIME_EXPLAIN'	=> 'La date et l’heure de la désactivation du compte de l’utilisateur.',
	'USER_IP_EXPLAIN'				=> 'L’adresse IP de l’utilisateur utilisée lors de son enregistrement sur le forum.',
	'USER_JABBER_EXPLAIN'			=> 'L’adresse Jabber de l’utilisateur.',
	'USER_LANG_EXPLAIN'				=> 'La langue utilisée par l’utilisateur.',
	'USER_LASTMARK_EXPLAIN'			=> 'La dernière fois que l’utilisateur a marqué tous les forums comme lus.',
	'USER_LAST_PAGE_EXPLAIN'		=> 'La dernière page que l’utilisateur a visitée.',
	'USER_LAST_PRIVMSG_EXPLAIN'		=> 'La date et l’heure du dernier message privé reçu par l’utilisateur.',
	'USER_LAST_SEARCH_EXPLAIN'		=> 'La date et l’heure de la dernière recherche effectuée par l’utilisateur.',
	'USER_LAST_WARNING_EXPLAIN'		=> 'La date du dernier avertissement reçu par l’utilisateur.',
	'USER_LASTPOST_TIME_EXPLAIN'	=> 'La date et l’heure du dernier message publié par l’utilisateur.',
	'USER_LASTVISIT_EXPLAIN'		=> 'La date et l’heure de la dernière visite de l’utilisateur sur le forum.',
	'USER_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Le nombre de tentatives de connexion échouées que l’utilisateur a effectuées.',
	'USER_NEW_PRIVMSG_EXPLAIN'		=> 'Le nombre de nouveaux messages privés non vus par l’utilisateur sur la page « Boite de réception » de sa messagerie privée.',
	'USER_NOTIFY_EXPLAIN'			=> 'Reçoit des notifications lors de la publication de nouveaux messages dans les forums surveillés.',
	'USER_NOTIFY_PM_EXPLAIN'		=> 'Reçoit des notifications pour les messages privés reçus.',
	'USER_NOTIFY_TYPE_EXPLAIN'		=> 'Le type de notifications reçues.',
	'USER_PASS_CHANGE_EXPLAIN'		=> 'La date à laquelle le mot de passe de l’utilisateur doit être modifié.',
	'USER_POSTS_EXPLAIN'			=> 'Le nombre de messages publiés par l’utilisateur sur le forum.',
	'USER_RANK_EXPLAIN'				=> 'Le rang de l’utilisateur.',
	'USER_REGDATE_EXPLAIN'			=> 'La date d’enregistrement de l’utilisateur sur le forum.',
	'USER_SIG_EXPLAIN'				=> 'Contenu de sa signature.',
	'USER_STYLE_EXPLAIN'			=> 'Style utilisé par l’utilisateur.<br>Information : Ce dernier peut ne pas être le style vu par l’utilisateur, cela dépend si l’option « Annuler le style de l’utilisateur » a été activée sur le forum.',
	'USER_TIMEZONE_EXPLAIN'			=> 'Le fuseau horaire de l’utilisateur.',
	'USER_TYPE_EXPLAIN'				=> 'Le type d’utilisateur.',
	'USER_UNREAD_PRIVMSG_EXPLAIN'	=> 'Le nombre de messages privés non lus par l’utilisateur.',
	'USER_WARNINGS_EXPLAIN'			=> 'Le nombre d’avertissements reçus par l’utilisateur.',
));
