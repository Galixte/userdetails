<?php
/**
 *
 * User details. An extension for the phpBB Forum Software package.
 * French translation by Galixte (https://www.galixte.com)
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
	'DONATE'					=> 'Donation',
	'DONATE_EXTENSIONS'			=> 'Soutenir le développement de mes extensions',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Cette extension, comme toutes mes extensions, est totalement libre d’utilisation et ce sans frais. Si vous estimez qu’elle vous est bénéfique merci de soutenir son développement en effectuant un don via le bouton « Faire un don via PayPal » - J’apprécierai grandement votre geste. Aussi, je m’engage à ne pas divulguer à quiconque votre contact ni à vous envoyer des demandes de soutiens tels que les dons.',

	'NEW_VERSION'				=> 'Nouvelle Version - %s',
	'NEW_VERSION_EXPLAIN'		=> 'Une nouvelle version %1$s pour cette extension est disponible au téléchargement.<br>%2$s',
	'NEW_VERSION_LINK'			=> 'Lien de téléchargement',
	'NO_VERSION_EXPLAIN'		=> 'Aucune information n’est disponible concernant cette mise à jour.',

	'PAYPAL_BUTTON'				=> 'Faire un don via PayPal',
	'PAYPAL_TITLE'				=> 'PayPal - Le paiement en ligne, simple et sécurisé !',

	'VERSION'					=> 'Version',
));
