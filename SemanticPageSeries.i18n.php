<?php
/**
 * Language file for Semantic Page Series
 */

$messages = array();

/** English
 * @author F.trott
 */
$messages['en'] = array(
	'semanticpageseries-desc' => 'Creating a series of pages from one [https://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Form]',
	'spssuccesstitle' => 'Creating $1 pages',
	'spssuccess' => '{{PLURAL:$1|One page|$1 pages}} will be created.',
	'spssuccess-returntoorigin' => 'Return to $1',
	'spserror' => 'An error occurred',
	
	'spserror-diffnotsupported' => 'The diff action is not supported for page series.',
	'spserror-previewnotsupported' => 'The preview action is not supported for page series.',
	'spserror-noiteratorname' => 'No iterator specified. You have to set the parameter "iterator" in the #serieslink parser function call.',
	'spserror-iteratorunknown' => 'Iterator "$1" does not exist. You have to correct the parameter "iterator" in the #serieslink parser function call.',
	'spserror-noformname' => 'No form name given.  You have to set the parameter "form" in the #serieslink parser function.',
	'spserror-formunknown' => 'Form "$1" does not exist.',
	'spserror-notargetformname' => 'No target form name given. You have to set the parameter "target form" in the #serieslink parser function call.',
	'spserror-notargetfieldname' => 'No target field name given. You have to set the parameter "target field" in the #serieslink parser function call.',
	'spserror-iteratorparammissing' => "The following iterator parameters are missing in the #serieslink call:\n$1",
	'spserror-noiteratordata' => 'No iterator parameters found in the sent data.',
	'spserror-pagegenerationlimitexeeded' => 'You tried to generate {{PLURAL:$1|one page|$1 pages}}. This exeeds your allowed limit of {{PLURAL:$2|one page|$2 pages}}.',

	'spserror-date-startdatemissing' => 'The start date is missing.',
	'spserror-date-internalerror' => 'An error occurred while creating the dates. This could be due to a malformed start or end date.',
	
	'spserror-count-startvaluemalformed' => 'The start value is not a number.',
	'spserror-count-endvaluemalformed' => 'The end value is not a number.',
	'spserror-count-stepvaluemalformed' => 'The step value is not a number.',
	'spserror-count-digitsvaluemalformed' => 'The digits value is not a number.',
);

/** Message documentation (Message documentation)
 * @author F.trott
 * @author Raymond
 */
$messages['qqq'] = array(
	'semanticpageseries-desc' => '{{desc}}',
	'spssuccesstitle' => 'The title of a page containing a success message. The parameter will contain the category of pages to be created, e.g. Event',
	'spssuccess' => 'A success message. The parameter will contain a number.',
	'spssuccess-returntoorigin' => 'Provides navigation back to the origin page. The parameter is the link.',
	'spserror' => 'The title of en error page',
	'spserror-diffnotsupported' => 'An error message',
	'spserror-previewnotsupported' => 'An error message',
	'spserror-noiteratorname' => 'An error message. See the [[wikipedia:Iterator | wikipedia page]] for the meaning of iterator. The name of the parameter in quotes should not be translated!',
	'spserror-iteratorunknown' => 'An error message. See the [[wikipedia:Iterator | wikipedia page]] for the meaning of iterator. The name of the parameter in quotes should not be translated!',
	'spserror-noformname' => 'An error message. The name of the parameter in quotes should not be translated!',
	'spserror-formunknown' => 'An error message',
	'spserror-notargetformname' => 'An error message. The name of the parameter in quotes should not be translated!',
	'spserror-notargetfieldname' => 'An error message. The name of the parameter in quotes should not be translated!',
	'spserror-iteratorparammissing' => 'An error message. See the [[wikipedia:Iterator | wikipedia page]] for the meaning of iterator. Do not translate <code>#serieslink</code>.',
	'spserror-noiteratordata' => 'An error message. See the [[wikipedia:Iterator | wikipedia page]] for the meaning of iterator.',
	'spserror-pagegenerationlimitexeeded' => 'An error message',
	'spserror-date-startdatemissing' => 'An error message',
	'spserror-date-internalerror' => 'An error message',
	'spserror-count-startvaluemalformed' => 'An error message',
	'spserror-count-endvaluemalformed' => 'An error message',
	'spserror-count-stepvaluemalformed' => 'An error message',
	'spserror-count-digitsvaluemalformed' => 'An error message',
);

/** Banjar (Bahasa Banjar)
 * @author J Subhi
 */
$messages['bjn'] = array(
	'spssuccesstitle' => 'Ma-ulah $1 tutungkaran',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'spssuccess-returntoorigin' => 'Distreiñ da $1',
	'spserror' => 'Ur fazi zo bet',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'semanticpageseries-desc' => 'Ermöglicht das Erstellen einer Abfolge von Seiten mit einem von [https://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Forms] bereitgestellten Formular',
	'spssuccesstitle' => '$1 Seiten werden erstellt …',
	'spssuccess' => '{{PLURAL:$1|Eine Seite wird|$1 Seiten werden}} erstellt.',
	'spssuccess-returntoorigin' => 'Zurück zu $1',
	'spserror' => 'Ein Fehler ist aufgetreten',
	'spserror-diffnotsupported' => 'Die Aktion „diff“ wird nicht unterstützt.',
	'spserror-previewnotsupported' => 'Die Seitenvorschau wird nicht unterstützt.',
	'spserror-noiteratorname' => 'Der Seitenfolgebezeichner wurde nicht angegeben. Der Parameter „iterator“ muss zur Funktion #serieslink angegeben werden.',
	'spserror-iteratorunknown' => 'Der Seitenfolgebezeichner „$1“ ist nicht vorhanden. Der Parameter „iterator“ der Funktion #serieslink muss berichtigt werden.',
	'spserror-noformname' => 'Der Name des Formulars wurde nicht angegeben.',
	'spserror-formunknown' => 'Das Formular „$1“ ist nicht vorhanden.',
	'spserror-notargetformname' => 'Der Name des Zielformulars wurde nicht angegeben. Der Parameter „target form“ muss zur Funktion #serieslink angegeben werden.',
	'spserror-notargetfieldname' => 'Der Name des Zielfeldes wurde nicht angegeben. Der Parameter „target field“ muss zur Funktion #serieslink angegeben werden.',
	'spserror-iteratorparammissing' => 'Die folgenden Parameter zum Seitenfolgebezeichner fehlen beim Aufruf der Funktion #serieslink:
$1',
	'spserror-noiteratordata' => 'Die gesendeten Daten enthalten keine Parameter zum Seitenfolgebezeichner.',
	'spserror-pagegenerationlimitexeeded' => 'Es {{PLURAL:$1|sollte eine Seite|sollten $1 Seiten}} erstellt werden. Diese Anzahl übertrifft den zulässigen Grenzwert von {{PLURAL:$2|einer Seite|$2 Seiten}}.',
	'spserror-date-startdatemissing' => 'Es fehlt das Startdatum.',
	'spserror-date-internalerror' => 'Beim Erstellen der Daten ist ein Fehler aufgetreten. Der Grund könnte ein falsches Start- oder Enddatum sein.',
	'spserror-count-startvaluemalformed' => 'Der Startwert ist keine Zahl.',
	'spserror-count-endvaluemalformed' => 'Der Endwert ist keine Zahl.',
	'spserror-count-stepvaluemalformed' => 'Der Schrittwert ist keine Zahl.',
	'spserror-count-digitsvaluemalformed' => 'Der Ziffernwert ist keine Zahl.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'spssuccesstitle' => 'Pelay $1 vırazêna',
	'spssuccess' => '{{PLURAL:$1|Ju pela|$1 peley}} do dekero de.',
	'spssuccess-returntoorigin' => 'Peyser şo $1.',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'semanticpageseries-desc' => 'Crear una serie de páginas a partir de un [https://www.mediawiki.org/wiki/Extension:Semantic_Forms formulario semántico]',
	'spssuccesstitle' => 'Creando $1 páginas',
	'spssuccess' => '{{PLURAL:$1|Se va a crear una página.|Se van a crear $1 páginas.}}',
	'spssuccess-returntoorigin' => 'Volver a $1.',
	'spserror' => 'Ha ocurrido un error',
	'spserror-diffnotsupported' => 'La acción "diff" no está soportada para las series de páginas.',
	'spserror-previewnotsupported' => 'La acción de previsualización no está soportada para las series de páginas.',
	'spserror-noiteratorname' => 'No se ha especificado ningún iterador. Tiene que definir el parámetro "iterator" en la llamada a la función #serieslink del analizador (parser).',
	'spserror-iteratorunknown' => 'No existe el iterador "$1". Tiene que corregir el parámetro "iterator" en la llamada a la función #serieslink del analizador (parser).',
	'spserror-noformname' => 'No se ha dado ningún formulario. Tiene que definir el parámetro "form" en la llamada a la función #serieslink del analizador (parser).',
	'spserror-formunknown' => 'El formulario "$1" no existe.',
	'spserror-notargetformname' => 'No se ha dado ningún formulario de destino. Tiene que definir el parámetro "target form" en la llamada a la función #serieslink del analizador (parser).',
	'spserror-notargetfieldname' => 'No se ha dado ningún campo de destino. Tiene que definir el parámetro "target field" en la llamada a la función #serieslink del analizador (parser).',
	'spserror-iteratorparammissing' => 'Faltan los siguientes parámetros del iterador en la llamada a #serieslink:
$1',
	'spserror-noiteratordata' => 'No se encontraron los parámetros del iterador en los datos enviados.',
	'spserror-pagegenerationlimitexeeded' => 'Intentó generar {{PLURAL:$1|una página|$1 páginas}}. Esto supera el límite {{PLURAL:$2|de una página|de $2 páginas}}.',
	'spserror-date-startdatemissing' => 'Falta la fecha de inicio.',
	'spserror-date-internalerror' => 'Ocurrió un error al crear las fechas. Podría ser debido a un formato incorrecto en las fechas de inicio o fin.',
	'spserror-count-startvaluemalformed' => 'El valor de inicio no es un número.',
	'spserror-count-endvaluemalformed' => 'El valor de fin no es un número.',
	'spserror-count-stepvaluemalformed' => 'El valor de incremento no es un número.',
	'spserror-count-digitsvaluemalformed' => 'El valor de los dígitos no es un número.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'semanticpageseries-desc' => 'Créer une série de pages depuis un [https://www.mediawiki.org/wiki/Extension:Semantic_Forms formulaire sémantique]',
	'spssuccesstitle' => 'Créer $1 pages',
	'spssuccess' => '{{PLURAL:$1|Une page sera créée|$1 pages seront créées}}.',
	'spssuccess-returntoorigin' => 'Revenir à $1',
	'spserror' => 'Une erreur est survenue',
	'spserror-diffnotsupported' => "L'action diff n'est pas supportée pour les séries de page.",
	'spserror-previewnotsupported' => "L'action de prévisualisation n'est pas supportée pour les séries de page.",
	'spserror-noiteratorname' => "Aucun itérateur n'a été spécifié. Vous devez définir le paramètre \"iterator\" dans l'appel à la fonction #serieslink de l'analyseur.",
	'spserror-iteratorunknown' => 'L\'itérateur "$1" n\'existe pas. Vous devez corriger le paramètre "iterator" dans l\'appel à la fonction #serieslink de l\'analyseur.',
	'spserror-noformname' => 'Aucun nom de formulaire n\'a été fourni. Vous devez définir le paramètre "form" dans la fonction #serieslink de l\'analyseur.',
	'spserror-formunknown' => 'Le formulaire "$1" n\'existe pas.',
	'spserror-notargetformname' => "Aucun nom de formulaire cible n'a été fourni. Vous devez définir le paramètre \"target form\" dans l'appel à la fonction #serieslink de l'analyseur.",
	'spserror-notargetfieldname' => "Aucun nom de champ cible n'a été fourni. Vous devez définir le paramètre \"target field\" dans l'appel à la fonction #serieslink de l'analyseur.",
	'spserror-iteratorparammissing' => "Les paramètres suivants de l'itérateur sont absents dans l'appel à #serieslink:
$1",
	'spserror-noiteratordata' => "Aucun paramètre de l'itérateur n'a été trouvé dans les données envoyées.",
	'spserror-pagegenerationlimitexeeded' => 'Vous avez essayé de générer {{PLURAL:$1|une page|$1 pages}}. Cela dépasse votre limite autorisée de {{PLURAL:$2|une page|$2 pages}}.',
	'spserror-date-startdatemissing' => 'La date de début est manquante.',
	'spserror-date-internalerror' => "Une erreur s'est produite lors de la création des dates. Cela pourrait être dû à une date de début ou de fin mal formée.",
	'spserror-count-startvaluemalformed' => "La valeur de départ n'est pas un nombre.",
	'spserror-count-endvaluemalformed' => "La valeur de fin n'est pas un nombre.",
	'spserror-count-stepvaluemalformed' => "La valeur de l'incrément n'est pas un nombre.",
	'spserror-count-digitsvaluemalformed' => "La valeur des chiffres n'est pas un nombre.",
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'spssuccesstitle' => 'Crèacion de $1 pâges',
	'spssuccess' => '{{PLURAL:$1|Yona pâge serat fêta|$1 pâges seront fêtes}}.',
	'spssuccess-returntoorigin' => 'Tornar a $1',
	'spserror' => 'Na fôta est arrevâye',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'semanticpageseries-desc' => 'Crear unha serie de páxinas a partir dun [https://www.mediawiki.org/wiki/Extension:Semantic_Forms formulario semántico]',
	'spssuccesstitle' => 'Creando páxinas do tipo $1',
	'spssuccess' => '{{PLURAL:$1|Vaise crear unha páxina.|Vanse crear $1 páxinas.}}',
	'spssuccess-returntoorigin' => 'Volver a "$1"',
	'spserror' => 'Houbo un erro',
	'spserror-diffnotsupported' => 'As series de páxinas non soportan a acción de diferenzas.',
	'spserror-previewnotsupported' => 'As series de páxinas non soportan a acción de vista previa.',
	'spserror-noiteratorname' => 'Non se especificou iterador ningún. Cómpre definir o parámetro "iterator" na función analítica de chamada #serieslink.',
	'spserror-iteratorunknown' => 'Non existe o iterador "$1". Cómpre corrixir o parámetro "iterator" na función analítica de chamada #serieslink.',
	'spserror-noformname' => 'Non se deu formulario ningún. Cómpre definir o parámetro "form" na función analítica #serieslink.',
	'spserror-formunknown' => 'O formulario "$1" non existe.',
	'spserror-notargetformname' => 'Non se deu nome de formulario de destino ningún. Cómpre definir o parámetro "target form" na función analítica de chamada #serieslink.',
	'spserror-notargetfieldname' => 'Non se deu campo de destino ningún. Cómpre definir o parámetro "target field" na función analítica de chamada #serieslink.',
	'spserror-iteratorparammissing' => 'Faltan os seguintes parámetros do iterador na chamada a #serieslink:
$1',
	'spserror-noiteratordata' => 'Non se atopou parámetro do iterador ningún nos datos enviados.',
	'spserror-pagegenerationlimitexeeded' => 'Intentou xerar {{PLURAL:$1|unha páxina|$1 páxinas}}. Isto supera o límite {{PLURAL:$2|dunha páxina|de $2 páxinas}}.',
	'spserror-date-startdatemissing' => 'Falta a data de inicio.',
	'spserror-date-internalerror' => 'Houbo un erro ao crear as datas. Se cadra é porque algunha das datas ten un formato incorrecto.',
	'spserror-count-startvaluemalformed' => 'O valor de inicio non é un número.',
	'spserror-count-endvaluemalformed' => 'O valor de fin non é un número.',
	'spserror-count-stepvaluemalformed' => 'O valor do paso non é un número.',
	'spserror-count-digitsvaluemalformed' => 'O valor dos díxitos non é un número.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'semanticpageseries-desc' => 'Wutworjenje slěda stronow ze [https://www.mediawiki.org/wiki/Extension:Semantic_Forms semantiskim formularom]',
	'spssuccesstitle' => '$1 stronow so wutwarja',
	'spssuccess' => '{{PLURAL:$1|Jedna strona so wutwori|$1 stronje so wutworitej|$1 strony so wutworja|$1 stronow so wutwori}}.',
	'spssuccess-returntoorigin' => 'Wróćo k $1',
	'spserror' => 'Zmylk je wustupił',
	'spserror-diffnotsupported' => 'Akcija "diff" so za slědy stronow njepodpěruje.',
	'spserror-previewnotsupported' => 'Přehlad so za slědow stronow njepodpěruje.',
	'spserror-noiteratorname' => 'Žane iteratorowe mjeno njepodate. Parameter "iterator" dyrbi so we wołanju parseroweje funkcije #serieslink podać.',
	'spserror-iteratorunknown' => 'Iterator "$1" njeeksistuje. Parameter "iterator" dyrbi so we wołanju parseroweje funkcije #serieslink podać.',
	'spserror-noformname' => 'Žane formularne mjeno njepodate.',
	'spserror-formunknown' => 'Formular "$1" njeeksistuje.',
	'spserror-notargetformname' => 'Žadyn cilowy formular njepodaty. Parameter "target form" dyrbi so we wołanju parseroweje funkcije #serieslink podać.',
	'spserror-notargetfieldname' => 'Žane cilowe polo njepodate. Parameter "target field" dyrbi so we wołanju parseroweje funkcije #serieslink podać.',
	'spserror-iteratorparammissing' => 'Slědowace iteratorowe parametry při wołanju funkcije #serieslink faluja: $1',
	'spserror-noiteratordata' => 'Žane iteratorowe parametry w pósłanych datach namakane.',
	'spserror-pagegenerationlimitexeeded' => 'Sy spytał {{PLURAL:$1|jednu stronu|$1 stronje|$1 strony|$1 stronow}} płodźić. To překročuje dowoleny limit wot {{PLURAL:$2|jedneje strony|$2 stronow|$2 stronow|$1 stronow}}.',
	'spserror-date-startdatemissing' => 'Startowy datum faluje.',
	'spserror-date-internalerror' => 'Při wutworjenju datumow je zmylk wustupił. Přičina móhła njepłaćiwy startowy abo kónčny datum  być.',
	'spserror-count-startvaluemalformed' => 'Startowa hódnota ličba njeje.',
	'spserror-count-endvaluemalformed' => 'Kónčna hódnota ličba njeje.',
	'spserror-count-stepvaluemalformed' => 'Kročelowa hódnota ličba njeje.',
	'spserror-count-digitsvaluemalformed' => 'Cyfrowa hódnota ličba njeje.',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'semanticpageseries-desc' => 'Crea un serie de paginas ab un sol [https://www.mediawiki.org/wiki/Extension:Semantic_Forms formulario semantic]',
	'spssuccesstitle' => 'Crea $1 paginas',
	'spssuccess' => '{{PLURAL:$1|Un pagina|$1 paginas}} essera create.',
	'spssuccess-returntoorigin' => 'Retornar a $1',
	'spserror' => 'Un error ha occurrite',
	'spserror-diffnotsupported' => 'Le action "diff" non es supportate pro series de paginas.',
	'spserror-previewnotsupported' => 'Le action de previsualisation non es supportate pro series de paginas.',
	'spserror-noiteratorname' => 'Nulle iterator specificate. Es necessari specificar le parametro "iterator" in le appello al function analysator #serieslink.',
	'spserror-iteratorunknown' => 'Le iterator "$1" non existe. Es necessari corriger le parametro "iterator" in le appello al function analysator #serieslink.',
	'spserror-noformname' => 'Nulle nomine de formulario specificate.',
	'spserror-formunknown' => 'Le formulario "$1" non existe.',
	'spserror-notargetformname' => 'Nulle nomine de formulario de destination specificate. Es necessari specificar le parametro "target form" in le appello al function analysator #serieslink.',
	'spserror-notargetfieldname' => 'Nulle nomine de campo de destination specificate. Es necessari specificar le parametro "target field" in le appello al function analysator #serieslink.',
	'spserror-iteratorparammissing' => 'Le sequente parametros de iterator manca in le appello #serieslink:
$1',
	'spserror-noiteratordata' => 'Nulle parametro de iterator trovate in le datos inviate.',
	'spserror-pagegenerationlimitexeeded' => 'Tu tentava generar {{PLURAL:$1|un pagina|$1 paginas}}. Isto excede tu limite autorisate de {{PLURAL:$2|un pagina|$2 paginas}}.',
	'spserror-date-startdatemissing' => 'Le data de initio es mancante.',
	'spserror-date-internalerror' => 'Un error occurreva durante le creation del datas. Isto pote esser causate per un data de initio o de fin mal formate.',
	'spserror-count-startvaluemalformed' => 'Le valor de initio non es un numero.',
	'spserror-count-endvaluemalformed' => 'Le valor de fin non es un numero.',
	'spserror-count-stepvaluemalformed' => 'Le valor de incremento non es un numero.',
	'spserror-count-digitsvaluemalformed' => 'Le valor de cifras non es un numero.',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'semanticpageseries-desc' => 'Crea una serie di pagine da un [https://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Form]',
	'spssuccesstitle' => 'Creazione di pagine $1',
	'spssuccess' => '{{PLURAL:$1|Una pagina|$1 pagine}} saranno create.',
	'spssuccess-returntoorigin' => 'Torna a $1',
	'spserror' => 'Si è verificato un errore',
	'spserror-diffnotsupported' => 'La funzione di differenza non è supportata per le serie di pagine.',
	'spserror-previewnotsupported' => 'La funzione di anteprima non è supportata per le serie di pagine.',
	'spserror-noiteratorname' => 'Nessun iteratore specificato. È necessario impostare il parametro "iterator" nella chiamata alla funzione parser #serieslink.',
	'spserror-iteratorunknown' => 'Iteratore "$1" non esiste. È necessario correggere il parametro "iterator" nella chiamata alla funzione parser #serieslink.',
	'spserror-noformname' => 'Nessun nome del modulo specificato. È necessario impostare il parametro "form" nella chiamata alla funzione parser #serieslink.',
	'spserror-formunknown' => 'Modulo "$1" non esiste.',
	'spserror-notargetformname' => 'Nessun nome del modulo di destinazione specificato. È necessario impostare il parametro "target form" nella chiamata alla funzione parser #serieslink.',
	'spserror-notargetfieldname' => 'Nessun nome del campo di destinazione specificato. È necessario impostare il parametro "target field" nella chiamata alla funzione parser #serieslink.',
	'spserror-iteratorparammissing' => 'I seguenti parametri di iterazione sono mancanti nella chiamata alla funzione #serieslink:
$1',
	'spserror-noiteratordata' => 'Nessun parametro di iterazione trovato nei dati inviati.',
	'spserror-pagegenerationlimitexeeded' => 'Si è cercando di generare {{PLURAL:$1|una pagina|$1 pagine}}. Questo supera il limite consentito di {{PLURAL:$2|una pagina|$2 pagine}}.',
	'spserror-date-startdatemissing' => 'Manca la data di inizio.',
	'spserror-date-internalerror' => 'Si è verificato un errore durante la creazione delle date. Questo potrebbe essere causato da date di inizio o fine non valide.',
	'spserror-count-startvaluemalformed' => 'Il valore iniziale non è un numero.',
	'spserror-count-endvaluemalformed' => 'Il valore finale non è un numero.',
	'spserror-count-stepvaluemalformed' => 'Il valore di incremento non è un numero.',
	'spserror-count-digitsvaluemalformed' => 'Il valore di cifre non è un numero.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'semanticpageseries-desc' => '1つの[https://www.mediawiki.org/wiki/Extension:Semantic_Forms 意味的フォーム]から一連のページを作成する',
	'spssuccesstitle' => '$1 ページを作成中',
	'spssuccess' => '{{PLURAL:$1|$1 ページ}}が作成されます。',
	'spssuccess-returntoorigin' => '$1 に戻る',
	'spserror' => 'エラーが発生しました',
	'spserror-formunknown' => 'フォーム「$1」は存在しません。',
	'spserror-pagegenerationlimitexeeded' => '{{PLURAL:$1|$1 件のページ}}を作成しようとしました。許可された上限 {{PLURAL:$2|$2 ページ}}を超えています。',
	'spserror-date-startdatemissing' => '開始日がありません。',
	'spserror-count-startvaluemalformed' => '開始値が数値ではありません。',
	'spserror-count-endvaluemalformed' => '終了値が数値ではありません。',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'spssuccesstitle' => '$1 Säite ginn ugeluecht',
	'spssuccess' => '{{PLURAL:$1|Eng Säit gëtt|$1 Säite ginn}} ugeluecht.',
	'spssuccess-returntoorigin' => 'Zréck op $1',
	'spserror' => 'Et ass e Feeler geschitt',
	'spserror-diffnotsupported' => "D'Aktioun 'Diff' gëtt fir  Serie vu Säiten net ënnerstëtzt.",
	'spserror-previewnotsupported' => "'Kucken ouni ze späicheren' gëtt fir Serie vu Säiten net ënnerstëtzt.",
	'spserror-formunknown' => 'De Formulaire "$1" gëtt et net.',
	'spserror-pagegenerationlimitexeeded' => 'Dir hutt probéiert {{PLURAL:$1|eng Säit|$1 Säiten}} ze generéieren. Dat geet iwwert Är Limit vun  {{PLURAL:$2|eng Säit|$1 Säiten}}.',
	'spserror-date-startdatemissing' => 'Den Ufanksdatum feelt.',
	'spserror-count-startvaluemalformed' => 'Den Ufankswäert ass keng Zuel.',
	'spserror-count-endvaluemalformed' => 'De Schlusswäert ass keng Zuel.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'semanticpageseries-desc' => 'Создавање на низа страници од еден [https://www.mediawiki.org/wiki/Extension:Semantic_Forms?uselang=mk Семантички образец]',
	'spssuccesstitle' => 'Создате $1 страници',
	'spssuccess' => '{{PLURAL:$1|Ќе биде создадена една страница|Ќе бидат создадени $1 страници}}',
	'spssuccess-returntoorigin' => 'Назад на $1',
	'spserror' => 'Се појави грешка',
	'spserror-diffnotsupported' => 'Функцијата „разлика“ не е достапна за цели низи од страници.',
	'spserror-previewnotsupported' => 'Функцијата „преглед“ не е достапна за цели низи од страници.',
	'spserror-noiteratorname' => 'Нема укажано повторувач. Треба да зададете параметар „iterator“ во повикот #serieslink на парсерската функција.',
	'spserror-iteratorunknown' => 'Повторувачот „$1“ не постои. Ќе треба да го исправите параметарот „iterator“ во повикот #serieslink на парсерската функција.',
	'spserror-noformname' => 'Нема укажано име на образецот.',
	'spserror-formunknown' => 'Образецот „$1“ не постои.',
	'spserror-notargetformname' => 'Нема укажано име на целниот образец. Треба да зададете параметар „target form“ во повикот #serieslink на парсерската функција.',
	'spserror-notargetfieldname' => 'Нема укажано име на целното поле. Треба да зададете параметар „target field“ во повикот #serieslink на парсерската функција.',
	'spserror-iteratorparammissing' => 'Следниве параметри за повторувачот недостасуваат во повикот #serieslink call:
$1',
	'spserror-noiteratordata' => 'Не пронајдов параметри за повторувачот во испратените податоци.',
	'spserror-pagegenerationlimitexeeded' => 'Се обидовте да создадете {{PLURAL:$1|една страница|$1 страници}}. Со тоа ја надминувате дозволената граница од {{PLURAL:$2|една страница|$2 страници}}.',
	'spserror-date-startdatemissing' => 'Недостасува почетниот датум.',
	'spserror-date-internalerror' => 'Се појави грешка при создавањето на датумите. Ова може да се должи на погрешно внесен почетен или краен датум.',
	'spserror-count-startvaluemalformed' => 'Почетната вредност не е број.',
	'spserror-count-endvaluemalformed' => 'Крајната вредност не е број.',
	'spserror-count-stepvaluemalformed' => 'Вредноста на чекорот не е број.',
	'spserror-count-digitsvaluemalformed' => 'Вредноста на цифрите не е број.',
);

/** Norwegian Bokmål (‪norsk (bokmål)‬)
 * @author Event
 */
$messages['nb'] = array(
	'semanticpageseries-desc' => 'Oppretter en sideserie fra et  [https://www.mediawiki.org/wiki/Extension:Semantic_Forms Semantic Form-skjema]',
	'spssuccesstitle' => 'Oppretter $1 sider',
	'spssuccess' => '{{PLURAL:$1|En side|$1 sider}} vil opprettes.',
	'spssuccess-returntoorigin' => 'Gå tilbake til $1',
	'spserror' => 'Det oppstod en feil',
	'spserror-diffnotsupported' => 'Diff-funksjonen kan ikke brukes på sideserier.',
	'spserror-previewnotsupported' => 'Forhåndsvisningsfunksjonen kan ikke brukes på sideserier.',
	'spserror-noiteratorname' => 'Ingen iterator er angitt. Du må angi parameteren "iterator" i kallet av "#serieslink"-parserfunksjonen.',
	'spserror-iteratorunknown' => 'Iterator "$1" finnes ikke. Du må korrigere parameteren "iterator" i kallet på #serieslink-parserfunksjonen.',
	'spserror-noformname' => 'Skjemanavn er ikke angitt. Du må angi parameteren "form" i "#serieslink"-parserfunksjonen.',
	'spserror-formunknown' => 'Skjema "$1" finnes ikke.',
	'spserror-notargetformname' => 'Navn på resultatskjema ("target form") er ikke angitt. Du må sette parameter "target form" i kallet på #serieslink-parserfunksjonen.',
	'spserror-notargetfieldname' => 'Navn på resultatfelt ("target field") er ikke angitt. Du må sette parameter "target field" i kallet på #serieslink-parserfunksjonen.',
	'spserror-iteratorparammissing' => 'Følgende iterator-parametre mangler i #serieslink-kallet:
$1',
	'spserror-noiteratordata' => 'Ingen iterator-parametre ble funnet i de sendte data.',
	'spserror-pagegenerationlimitexeeded' => 'Du prøve å generere {{PLURAL:$1|en side|$1 sider}}. Dette overskrider din tillatte grense på {{PLURAL:$2|en side|$2 sider}}.',
	'spserror-date-startdatemissing' => 'Startdatoen mangler.',
	'spserror-date-internalerror' => 'Det oppstod en feil i forbindelse med opprettelse av datoene. Denne kan skyldes feilformatert start- eller sluttdato.',
	'spserror-count-startvaluemalformed' => 'Startverdien er ikke et tall.',
	'spserror-count-endvaluemalformed' => 'Sluttverdien er ikke et tall.',
	'spserror-count-stepvaluemalformed' => 'Verdi-inkrementet er ikke et tall.',
	'spserror-count-digitsvaluemalformed' => 'Sifferverdien er ikke et tall.',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Saruman
 * @author Siebrand
 */
$messages['nl'] = array(
	'semanticpageseries-desc' => "Een reeks pagina's aanmaken vanuit één [https://www.mediawiki.org/wiki/Extension:Semantic_Forms semantisch formulier]",
	'spssuccesstitle' => "Er worden $1 pagina's aangemaakt",
	'spssuccess' => "Er {{PLURAL:$1|wordt één pagina|worden $1 pagina's}} aangemaakt.",
	'spssuccess-returntoorigin' => 'Terugkeren naar $1',
	'spserror' => 'Er is een fout opgetreden',
	'spserror-diffnotsupported' => 'De handeling diff (verschillen weergeven) wordt niet ondersteund voor paginareeksen.',
	'spserror-previewnotsupported' => 'De handeling preview (voorvertoning) wordt niet ondersteund voor paginareeksen.',
	'spserror-noiteratorname' => 'Geen iterator opgegeven. U moet de parameter "iterator" instellen in de functieaanroep #serieslink.',
	'spserror-iteratorunknown' => 'Iterator "$1" bestaat niet. U moet de parameter "iterator" in de functieaanroep #serieslink corrigeren.',
	'spserror-noformname' => 'Geen formuliernaam opgegeven.  U moet de parameter "formulier" in de functieaanroep #serieslink opgeven.',
	'spserror-formunknown' => 'Formulier "$1" bestaat niet.',
	'spserror-notargetformname' => 'Geen doelformuliernaam opgegeven. U dient de parameter "target form" op te geven in de functieaanroep #serieslink.',
	'spserror-notargetfieldname' => 'Geen doelveldnaam gegeven. U dient de parameter "target field" op te geven in de #serieslink functieaanroep.',
	'spserror-iteratorparammissing' => 'De volgende iteratorparameters ontbreken in de aanroep #serieslink:
$1',
	'spserror-noiteratordata' => 'Geen iteratorparameters gevonden in de verzonden gegevens.',
	'spserror-pagegenerationlimitexeeded' => "U hebt geprobeerd {{PLURAL:$1|een pagina| $1 pagina's}} te genereren. Dit overschrijdt de toegestane limiet van {{PLURAL:$2|één pagina| $2  pagina's}}.",
	'spserror-date-startdatemissing' => 'De begindatum ontbreekt.',
	'spserror-date-internalerror' => 'Er is een fout opgetreden tijdens het aanmaken van de data. Dit kan zijn veroorzaakt door een ongeldige begin- of einddatum.',
	'spserror-count-startvaluemalformed' => 'De beginwaarde is geen getal.',
	'spserror-count-endvaluemalformed' => 'De eindwaarde is geen getal.',
	'spserror-count-stepvaluemalformed' => 'De stapwaarde is geen getal.',
	'spserror-count-digitsvaluemalformed' => 'De cijferwaarde is geen getal.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'semanticpageseries-desc' => 'Lumilikha ng isang serye ng mga pahina mula sa isang [https://www.mediawiki.org/wiki/Extension:Semantic_Forms Pormularyong Semantiko]',
	'spssuccesstitle' => 'Lumilikha ng $1 mga pahina',
	'spssuccess' => '{{PLURAL:$1|Isang pahina|$1 mga pahina}} ang lilikhain.',
	'spssuccess-returntoorigin' => 'Bumalik sa $1',
	'spserror' => 'Naganap ang isang kamalian',
	'spserror-diffnotsupported' => 'Ang galaw ng pagkakaiba ay hindi sinusuportahan para sa mga serye ng pahina.',
	'spserror-previewnotsupported' => 'Ang galaw na may paunang pagtingin ay hindi sinusuportahan para sa mga serye ng pahina.',
	'spserror-noiteratorname' => 'Walang tinukoy na pang-ulit. Dapat mong itakda ang parametrong "pang-ulit" sa loob ng pangtawag ng tungkulin na pambanghay ng #serieslink.',
	'spserror-iteratorunknown' => 'Hindi umiiral ang pang-ulit na "$1". Dapat mong itama ang parametrong "pang-ulit" sa loob ng pantawag na pangtungkulin ng pambahangya na #serieslink.',
	'spserror-noformname' => 'Walang ibinigay na pangalan ng pormularyo. Dapat mong itakda ang parametrong "pormularyo" sa tungkuling pambanghay na #serieslink.',
	'spserror-formunknown' => 'Hindi umiiral ang pormularyong "$1".',
	'spserror-notargetformname' => 'Walang tinukoy na pinupukol na pormularyo. Dapat mong itakda ang parametrong "pinupukol na pormularyo" sa loob ng pangtawag ng tungkulin na pambanghay ng #serieslink.',
	'spserror-notargetfieldname' => 'Walang ibinigay na pangalan ng pinupukol na kahanayan. Dapat mong itakda ang parametrong "pinupukol na kahanayan" sa loob ng pangtawag ng tungkulin na pambanghay ng #serieslink.',
	'spserror-iteratorparammissing' => 'Nawawala ang sumusunod na mga parametro ng pang-ulit sa loob ng pangtawag ng #serieslink: $1',
	'spserror-noiteratordata' => 'Walang natagpuang mga parametro ng pang-ulit sa loob ng datong ipinadala.',
	'spserror-pagegenerationlimitexeeded' => 'Sinubukan mong likhain ang {{PLURAL:$1|isang pahina|$1 mga pahina}}. Lumalabis na ito sa pinahihintulutan mong hangganan na {{PLURAL:$2|isang pahina|$2 mga pahina}}.',
	'spserror-date-startdatemissing' => 'Nawawala ang petsa ng simula.',
	'spserror-date-internalerror' => 'Isang kamalian ang naganap habang nililikha ang mga petsa. Maaaring dahil ito sa isang maling anyo ng petsa ng simula o pagtatapos.',
	'spserror-count-startvaluemalformed' => 'Ang halaga ng simula ay hindi isang bilang.',
	'spserror-count-endvaluemalformed' => 'Ang halaga ng pagtatapos ay hindi isang bilang.',
	'spserror-count-stepvaluemalformed' => 'Ang halaga ng hakbang ay hindi isang bilang.',
	'spserror-count-digitsvaluemalformed' => 'Ang halaga ng mga tambilang ay hindi isang bilang.',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'spserror' => 'ایک غلطی واقع ہوئی',
);

/** Simplified Chinese (‪中文（简体）‬)
 * @author Linforest
 */
$messages['zh-hans'] = array(
	'semanticpageseries-desc' => '利用一个[https://www.mediawiki.org/wiki/Extension:Semantic_Forms 语义表单]创建一系列的页面',
	'spssuccesstitle' => '创建$1页面',
	'spssuccess' => '将会创建{{PLURAL:$1|一个页面|$1个页面}}。',
	'spssuccess-returntoorigin' => '返回到$1',
	'spserror' => '出现了一个错误',
	'spserror-diffnotsupported' => '页面系列不支持diff差别比较操作。',
	'spserror-previewnotsupported' => '页面系列不支持预览操作。',
	'spserror-noiteratorname' => '没有指定迭代器。你必须在#serieslink解析器函数调用中设置迭代器参数"iterator"。',
	'spserror-iteratorunknown' => '迭代器" $1 "并不存在。你必须在#serieslink解析器函数调用中更正迭代器参数"iterator"。',
	'spserror-noformname' => '没有指定表单名称。你必须在#serieslink解析器函数中设置表单参数"form"。',
	'spserror-formunknown' => '表单"$1"并不存在。',
	'spserror-notargetformname' => '没有指定目标表单名称。你必须在#serieslink 解析器函数调用中设置目标表单参数"target form"。',
	'spserror-notargetfieldname' => '没有指定目标字段名称。您必须在#serieslink 解析器函数调用中设置目标字段参数"target field"。',
	'spserror-iteratorparammissing' => '#serieslink调用中缺少下列迭代器参数：
$1',
	'spserror-noiteratordata' => '在已发送的数据中找不到迭代器参数。',
	'spserror-pagegenerationlimitexeeded' => '您已尝试生成{{PLURAL:$1|一个页面|$1个页面}}。这超过了您的允许极限：{{PLURAL:$2|一个页面|$2个页面}}。',
	'spserror-date-startdatemissing' => '缺少开始日期。',
	'spserror-date-internalerror' => '创建日期时出现了一个错误。这可能是因为格式错误的开始或结束日期。',
	'spserror-count-startvaluemalformed' => '起始值不是数字。',
	'spserror-count-endvaluemalformed' => '结束值不是数字。',
	'spserror-count-stepvaluemalformed' => '步长值不是数字。',
	'spserror-count-digitsvaluemalformed' => '位数值不是数字。',
);

/** Traditional Chinese (中文（繁體）‎) */
$messages['zh-hant'] = array(
	'semanticpageseries-desc' => '利用一個[https://www.mediawiki.org/wiki/Extension:Semantic_Forms 語義表單]創建一系列的頁面',
	'spssuccesstitle' => '創建$1頁面',
	'spssuccess' => '將會創建{{PLURAL:$1|一個頁面|$1個頁面}}。',
	'spssuccess-returntoorigin' => '返回到$1',
	'spserror' => '出現了一個錯誤',
	'spserror-diffnotsupported' => '頁面系列不支持diff差別比較操作。',
	'spserror-previewnotsupported' => '頁面系列不支持預覽操作。',
	'spserror-noiteratorname' => '沒有指定迭代器。你必須在#serieslink解析器函數調用中設置迭代器參數"iterator"。',
	'spserror-iteratorunknown' => '迭代器" $1 "並不存在。你必須在#serieslink解析器函數調用中更正迭代器參數"iterator"。',
	'spserror-noformname' => '沒有指定表單名稱。你必須在#serieslink解析器函數中設置表單參數"form"。',
	'spserror-formunknown' => '表單"$1"並不存在。',
	'spserror-notargetformname' => '沒有指定目標表單名稱。你必須在#serieslink 解析器函數調用中設置目標表單參數"target form"。',
	'spserror-notargetfieldname' => '沒有指定目標字段名稱。您必須在#serieslink 解析器函數調用中設置目標字段參數"target field"。',
	'spserror-iteratorparammissing' => '#serieslink調用中缺少下列迭代器參數：
$1',
	'spserror-noiteratordata' => '在已發送的數據中找不到迭代器參數。',
	'spserror-pagegenerationlimitexeeded' => '您已嘗試生成{{PLURAL:$1|一個頁面|$1個頁面}}。這超過了您的允許極限：{{PLURAL:$2|一個頁面|$2個頁面}}。',
	'spserror-date-startdatemissing' => '缺少開始日期。',
	'spserror-date-internalerror' => '創建日期時出現了一個錯誤。這可能是因為格式錯誤的開始或結束日期。',
	'spserror-count-startvaluemalformed' => '起始值不是數字。',
	'spserror-count-endvaluemalformed' => '結束值不是數字。',
	'spserror-count-stepvaluemalformed' => '步長值不是數字。',
	'spserror-count-digitsvaluemalformed' => '位數值不是數字。',
);

