<?php
if (!defined('PCHTRAKT'))
	exit;



if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(


/* PCHTrakt Key */
'PCHTrakt_Config'					=>	'Configuration de PCHTrakt',
'PCHTrakt_Empty_LogFile'			=>	'Le nom du fichier log ne peut �tre vide.',
'PCHTrakt_Empty_API'				=>	'Vous devez entrer une cl� API.',
'PCHTrakt_Empty_IP'					=>	'L\'ip ne peut �tre vide',
'PCHTrakt_Empty_SleepTime'			=>	'Le temps d\'attente ne peut �tre vide.',
'PCHTrakt_NotNumeric_SleepTime'		=>	'Le temps d\'attente doit �tre un entier >= '. SEC_LOW .'.',

'PCHTrakt_API'						=>	'Cl� API',
'PCHTrakt_IP'						=>	'Adresse IP',
'PCHTrakt_SleepTime'				=>	'Temps d\'attente',
'PCHTrakt_LogFile'					=>	'Fichier de log',

/* Trakt Key */
'Trakt_Config'						=>	'Configuration de Trakt.tv',
'Trakt_Empty_Login'					=>	'Le nom d\'utilisateur Trakt ne peut �tre vide.',
'Trakt_Empty_Password'				=>	'Le mot de passe Trakt ne peut �tre vide.',
'Trakt_Empty_RefreshTime'			=>	'Le temps de rafraichissement ne peut �tre vide',
'Trakt_NotNumeric_RefreshTime'		=>	'Le temps de rafraichissement doit �tre un entier >= ' . MIN_LOW .'.',
'Trakt_Failed'  					=>  'La connexion au site Trakt.tv est impossible. V�riez votre nom d\'utilisateur et mot de passe.',
'Trakt_RefreshTime'					=>	'Temps de rafraichissement',

/* BetaSeries Key */
'BetaSeries_Config'					=>	'Configuration de BetaSeries.com',
'BetaSeries_Empty_Login'			=>	'Le nom d\'utilisateur BetaSeries ne peut �tre vide.',
'BetaSeries_Empty_Password'			=>	'Le mot de passe BetaSeries ne peut �tre vide.',
'BetaSeries_Failed'  				=>  'La connexion au site BetaSeries.com est impossible. V�rifiez votre nom d\'utilisateur et mot de passe.',


/*General Key */
'Page_Title'						=>	'PchTrakt Configurator',

'Save'								=>	'La configuration a �t� mise � jour avec succ�s...',
'Error'								=>	'Une erreur grave est survenue..',

'Yes'								=> 	'Oui',
'No'								=> 	'Non',

'Login'								=>	'Utilisateur',
'Pwd'								=>	'Mot de passe',




'TV_Scrobble'						=>	'Scrobbler les s�ries TV',
'Film_Scrobble'						=>	'Scrobbler les films',

'Submit'							=>	'Mettre � jour la configuration',

'sec'								=>	'secondes',
'min'								=>	'minutes',



));
?>