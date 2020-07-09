<?php
/**
 *
 * User details. An extension for the phpBB Forum Software package.
 * French translation by Pyanepsion (https://corrigeur.fr) & Galixte (http://www.galixte.com)
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
	'ACP_USER_DETAILS'			=> 'Informations des utilisateurs',
	'ALL'						=> 'Tous',

	'CLEAR_FILTER'				=> ' Réinitialiser les filtres ',

	'DEFAULT_STYLE'				=> '<strong>** %1$s **</strong>',

	'ERROR_EXPLAIN'				=> '<strong>Information :</strong> Certains attributs sont encadrés par les caractères : « <strong>**</strong> », signifiant que l’attribut pour l’utilisateur concerné est absent dans la base de données, ou qu’il est incorrect.',

	'FILTER_BY'					=> 'Trier par',

	'HASH'						=> 'N<sup>o</sup>',

	'NEW_VERSION'				=> 'Nouvelle Version',
	'NEW_VERSION_EXPLAIN'		=> 'Une nouvelle version est disponible pour cette extension.',
	'NO_ATTRIBUTES_SELECTED'	=> 'Aucun attribut sélectionné',
	'NO_DATA'					=> 'Il n’y a aucune données à afficher.',
	'NO_GROUP'					=> '<strong>** Aucun groupe **</strong>',
	'NO_VISIT'					=> 'Jamais visité',

	'OTHER'						=> 'Autre',

	'TOTAL_USERS'				=> 'Nombre d’utilisateurs',

	'UD_BACK'					=> ' « Retour ',
	'UD_GO'						=> ' Trier ',
	'USER_ALLOW_PM'				=> 'Autorise les MP',
	'USER_ALLOW_VIEWONLINE'		=> 'Statut visible',
	'USER_ALLOW_VIEWEMAIL'		=> 'E-mail autorisés',
	'USER_ALLOW_MASSEMAIL'		=> 'E-mail de masse autorisés',
	'USER_AOL'					=> 'Adresse AOL',
	'USER_AVATAR'				=> 'Avatar',
	'USER_AVATAR_TYPE'			=> 'Type d’avatar',
	'USER_BIRTHDAY'				=> 'Anniversaire',
	'USER_DATE_FORMAT'			=> 'Format de la date',
	'USER_DETAILS_DISPLAY'		=> 'Affichage des attributs sélectionnés des utilisateurs.',
	'USER_EMAIL'				=> 'Adresse E-mail',
	'USER_EMAILTIME'			=> 'Dernier e-mail envoyé',
	'USER_GROUP'				=> 'Groupe par défaut',
	'USER_ID'					=> 'ID',
	'USER_INACTIVE_REASON'		=> 'Raison de la désactivation',
	'USER_INACTIVE_TIME'		=> 'Date de la désactivation',
	'USER_IP'					=> 'Adresse IP',
	'USER_JABBER'				=> 'Adresse Jabber',
	'USER_LANG'					=> 'Langue',
	'USER_LASTMARK'				=> 'Dernière lecture complète',
	'USER_LAST_PAGE'			=> 'Dernière page consultée',
	'USER_LAST_PRIVMSG'			=> 'Dernier MP reçu',
	'USER_LAST_SEARCH'			=> 'Dernière recherche',
	'USER_LAST_WARNING'			=> 'Dernier avertissement reçu',
	'USER_LASTPOST_TIME'		=> 'Dernier message publié',
	'USER_LASTVISIT'			=> 'Dernière visite',
	'USER_LOGIN_ATTEMPTS'		=> 'Tentatives de connexions échouées',
	'USER_NEW_PRIVMSG'			=> 'Nouveaux MP',
	'USER_NOTIFY'				=> 'Notification de nouveaux messages',
	'USER_NOTIFY_PM'			=> 'Notification de nouveaux MP',
	'USER_NOTIFY_TYPE'			=> 'Type de notification',
	'USER_PASS_CHANGE'			=> 'Modification du mot de passe',
	'USER_POSTS'				=> 'Messages',
	'USER_RANK'					=> 'Rang',
	'USER_REGDATE'				=> 'Date d’enregistrement',
	'USER_SIG'					=> 'Signature',
	'USER_STYLE'				=> 'Style',
	'USER_TIMEZONE'				=> 'Fuseau horaire',
	'USER_TYPE'					=> 'Type d’utilisateur',
	'USER_UNREAD_PRIVMSG'		=> 'MP non lus',
	'USER_WARNINGS'				=> 'Avertissements',
	'VERSION'					=> 'Version',

	// Translators - set these to whatever is most appropriate in your language
	// These are used to populate the filter keys
	'START_CHARACTER'	=> 'A',
	'END_CHARACTER'		=> 'Z',

	'avatar_type' => array(
		AVATAR_UPLOAD				=> 'Avatar importé',
		AVATAR_REMOTE				=> 'Avatar distant',
		AVATAR_GALLERY				=> 'Avatar de la galerie',
		'avatar.driver.gravatar'	=> 'Avatar de Gravatar',
	),

	'inactive_type' => array(
		INACTIVE_REGISTER	=> 'Nouveau compte',
		INACTIVE_PROFILE	=> 'Informations du profil mises à jour',
		INACTIVE_MANUAL		=> 'Compte désactivé par un administrateur',
		INACTIVE_REMIND		=> 'Réactivation forcée du compte',
	),

	'month_types' => array(
		'1'  => 'Janvier',
		'2'  => 'Février',
		'3'  => 'Mars',
		'4'  => 'Avril',
		'5'  => 'Mai',
		'6'  => 'Juin',
		'7'  => 'Juillet',
		'8'  => 'Aout',
		'9'  => 'Septembre',
		'10' => 'Octobre',
		'11' => 'Novembre',
		'12' => 'Décembre',
	),

	'notify_type' => array(
		NOTIFY_EMAIL	=> 'E-mail',
		NOTIFY_IM		=> 'Jabber',
		NOTIFY_BOTH		=> 'E-mail & Jabber',
	),

	'user_type' => array(
		USER_NORMAL 	=> 'Normal',
		USER_INACTIVE	=> 'Inactif',
		USER_IGNORE 	=> 'Ignoré',
		USER_FOUNDER 	=> 'Fondateur',
	),
));

// Donate
$lang = array_merge($lang, array(
	'DONATE'					=> 'Donation',
	'DONATE_EXTENSIONS'			=> 'Soutenir le développement de mes extensions',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Cette extension, comme toutes mes extensions, est totalement libre d’utilisation et ce sans frais. Si vous estimez qu’elle vous est bénéfique merci de soutenir son développement en effectuant un don via le bouton « Faire un don via PayPal » - J’apprécierai grandement votre geste. Aussi, je m’engage à ne pas divulguer à quiconque votre contact ni à vous envoyer des demandes de soutiens tels que les dons.',

	'PAYPAL_BUTTON'				=> 'Faire un don via PayPal',
	'PAYPAL_TITLE'				=> 'PayPal - Le paiement en ligne, simple et sécurisé.',
));
