<?php
if (!defined('PCHTRAKT'))
	exit;



if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

'Empty_Login'					=>	'Le nom d\'utilisateur ne peut �tre vide.',
'Empty_Password'				=>	'Le mot de passe ne peut �tre vide.',
'Empty_LogFile'					=>	'Le nom du fichier log ne peut �tre vide.',
'Empty_TraktAPI'				=>	'Vous devez entrer une cl� API.',
'Empty_IP'						=>	'L\'ip ne peut �tre vide',
'Empty_SleepTime'				=>	'Le temps d\'attente ne peut �tre vide.',
'Empty_RefreshTime'				=>	'Le temps de rafraichissement ne peut �tre vide',

'NotNumeric_SleepTime'			=>	'Le temps d\'attente doit �tre un entier (en minutes).',
'NotNumeric_RefreshTime'		=>	'Le temps de rafraichissement doit �tre un entier (en secondes).',

'Save'							=>	'Configuration mise � jour...',
'Error'							=>	'Une erreur grave est survenue..',
'Yes'							=> 	'Oui',
'No'							=> 	'Non',
'Field_Config'					=>	'Configuration de PCHTrakt',
'Field_Trakt'					=>	'Configuration de Trakt.tv',

'Login'							=>	'Utilisateur',
'Pwd'							=>	'Mot de passe',
'API_Key'						=>	'Cl� API',
'IP'							=>	'IP',
'SleepTime'						=>	'Temps d\'attente',
'RefreshTime'					=>	'Temps de rafraichissement',
'LogFile'						=>	'Fichier log',
'TV_Scrobble'					=>	'Scrobbler les s�ries',
'Film_Scrobble'					=>	'Scrobbler les films',

'Submit'						=>	'Mettre � jour la configuration',
'Page_Title'					=>	'PchTrakt Configurator',
));
?>