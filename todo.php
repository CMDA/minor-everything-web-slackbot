<?php
//header('Content-Type: application/json');
//$talk = "Minor EW: Nerd alert \n";

/* 
slackbot [10:49 PM] Only you can see this message
{
	"token":"N5OIdn2ge697wflW4bHWixWp",
	"team_id":"T0DNPFRUK",
	"team_domain":"minor-everything-web",
	"channel_id":"D0DNTT532",
	"channel_name":"directmessage",
	"user_id":"U0DNSN2DV",
	"user_name":"koop",
	"command":"\/nerd",
	"text":"haia",
	"response_url":"https:\/\/hooks.slack.com\/commands\/T0DNPFRUK\/19302712051\/d6LhwEanSELGk3HXXrLyyqQt"}

$user_name = ucfirst($_POST["user_name"]);
$user_text = $_POST["text"];
$command = strtoupper($_POST["text"]);
$talk = "";
//$talk = "[".$command."] \n";
*/



//vakantie
$nown = "";
$nown .= "Geen Weekly Nerd. Het is vakantie ... pfff oei he he, even uitrusten \n";
$talk = $nown;


//WEEKLY NERD #4 - Ron Kersic @ ING

//WEEKLY NERD #4 - Ron Kersic @ ING

//WEEKLY NERD #4 - Ron Kersic @ ING



//WEEKLY NERD #4 - Ron Kersic @ ING
$wn4 = "";
$wn4 .= "Dinsdag 23 februari gaan we naar ING. Je wordt om 16:00 verwacht op hun kantoor In Amsterdam Bijlmer Arena. Bijlmerplein 888. Tel: 020 5639 111 \n";
$wn4 .= "Ron Kersic vertelt over zijn werkzaamheden als API designer. Het ontwerpen van een API komt heel dicht bij het vertellen van een verhaal ... Is de nerd een storyteller? Awesome! \n";
$wn4 .= "*** Ron Kersic is Creative Technologist. Hij werkt als software architect, designer en consultant voor ING. ";
//$talk = $wn4;

//WEEKLY NERD #3 - Donny @ LOOKLIVE
$wn3 = "";
$wn3 .= "Dinsdag 16 februari gaan we naar Looklive. Je wordt om 16:00 verwacht op hun kantoor aan de Prinsengracht 697 BG-A. \n";
$wn3 .= "Geen vervelende lokatie daar aan de gracht, bovendien zul je ter plekke worden ontvangen door onze eigen Donny Wals! Dinsdag gaat hij wat vertellen over hun workflow, task manager en Git. En pizza en cola ?! \n";
$wn3 .= "*** Donny Wals werkt als frontender bij LookLive, een e-commerce bedrijf met een eigen content & development afdeling. Hij heeft vroeger CMD gestudeerd en komt in blok 2 ook lesgeven in het vak Performance Matters. ";
//$talk = $wn3;

//WEEKLY NERD #2 - EEND
$wn2 = "";
$wn2 .= "Dinsdag 9 februari om 16:00 komt Marrije Schaake van Eend langs voor een workshop Responsive Content Design. De tweede Weekly Nerd is (ergens) in het N-Gebouw. \n";
$wn2 .= "*** Marrije Schaake is Informatie Architect, knipt graag papier, speelt met Arduino's en is zakelijk leider van Eend.";
//$talk = $wn2;


//WEEKLY NERD #1 - DRUBUBU
$wn1 = "";
$wn1 .= "Dinsdag 2 februari om 16:00 is de eerste Weekly Nerd (ergens) in het N-Gebouw. \n";
$wn1 .= "*** Arjan Westerdiep is freelance frontend developer. Sinds 2003 maakt hij onder de naam Drububu technische en visuele online kunstwerken, pixel art, gekke dingen en commerciële opdrachten.";
//$talk = $wn1;



//WEEKLY NERD #0 - Kickoff 1 feb
$wn0 = "";
$wn0 .= "Next up is: Kickoff! \n";
$wn0 .= "Maandag 1 Februari in de N-Lounge. Zorg dat je er om 10 bent. \n";
$wn0 .= "Zorg ook dat je een fiets of OV kaart meeneemt. We gaan in de ochtend op pad. ";
$wn0 .= "Wat heb je nog meer nodig? 3G, je laptop en een fineliner. \n";
$wn0 .= "Als je achter 'todo' ook nog je naam typt, krijg je te zien wat jij zometeen gaat doen, dus: 'todo voornaam'";
//$talk = $wn_kickoff;

//WEEKLY NERD #0 - bedrijven bezoeken
$bezoek = "";
$bezoek .= "De bedoeling van dit bezoek is dat jullie alvast zicht krijgen op wat frontenders zoal doen, hoe dit soort bedrijven werken en wat voor opdrachten ze krijgen. ";
$bezoek .= "En om geïnspireerd te raken natuurlijk. Na de minor Web Development zou je stage bij zo'n type bedrijf kunnen gaan lopen. \n";
$bezoek .= "\n";
$bezoek .= "Veel plezier. Om 13:00 gaan we lunchen in de N-Lounge. ";

/*
case "TODO ROBERT":
	$wn0 = "";
	$wn0 .= "Aha ".$user_name." in da house! Maar welke is het? Spier of Steen? Maak je svp bekend met je achternaam ipv je voornaam. ";	
break;

case "TODO MICHELE":
	$wn0 = "";
	$wn0 .= "Ja ja ja, ".$user_name.", We gaan dus niet naar Occhio. \n";
	$wn0 .= "Ze zitten weliswaar vlakbij. En zijn met toffe mensen toffe dingen aan het doen. Maar Michele is te druk hé? Jammerrrr \n";
	$wn0 .= "\n";
	$wn0 .= $bezoek;
	$wn0 .= "\n Alleen lunchen is ook goed hoor.";
break;
	
case "TODO CASPER":
case "TODO FONS":
case "TODO JESPER":
case "TODO MATTHIAS":
case "TODO SEM":
case "TODO ROOS":
case "TODO LINDA":
case "TODO TIJS":
case "TODO KRIJN":
case "TODO DAVID":
case "TODO HARM":
	$wn0 = "";
	$wn0 .= "Wauzers, ".$user_name.", zometeen ga jij een kijkje nemen bij de alleraardigste coole nerds (en designers) van GRRR. \n";
	$wn0 .= "Jij gaat straks met een groepje van 8 collega's GRRR bezoeken. ";
	$wn0 .= "Je krijgt daar om 11:30 een (korte) rondleiding van David Spreekmeester. De opper geek. \n";
	$wn0 .= "Het adres van GRRR is: \n";
	$wn0 .= "Sint Antoniesbreestraat 16 \n";
	$wn0 .= "Tel 020 320 77 08 \n";
	$wn0 .= "Niet zo ver hier vandaan, vlak bij de Nieuwmarkt. \n";
	$wn0 .= "\n";
	$wn0 .= "GRRR is een ontwerpstudio, ooit begonnen met een drietal Interaction Designers. En doorgegroeid naar een full-stack ontwerpbureau met een sterke technische basis. ";
	$wn0 .= "De ontwerpers begrijpen techniek en de techneuten kunnen ontwerpen. Een goede match met onze opleiding en minor. Op dit moment lopen er 2 CMD'ers afstudeerstage. ";
	$wn0 .= "Een van de talentvolle designers/developers van GRRR is Mattijs Bliek. Hij komt later in de minor langs voor een Weekly Nerd. Als hij niet te druk is, check dan even op zijn scherm wat hij eigenlijk aan het doen is ... \n";
	$wn0 .= $bezoek;
break;

case "TODO DYLAN":
case "TODO JAIMIE":
case "TODO JOSHUA":
case "TODO RAYMOND":
case "TODO SPIER":
case "TODO BART":
case "TODO ROVER":
case "TODO DONNY":
	$wn0 = "";
	$wn0 .= "Hup hup hup, ".$user_name.", we gaan naar LookLive. \n";
	$wn0 .= "Geen vervelende lokatie daar aan de gracht, bovendien zul je ter plekke worden ontvangen door onze eigen Donny Wals! Hij heeft vroeger CMD gestudeerd en komt in blok 2 ook lesgeven in de minor in het vak Performance Matters. \n";
	$wn0 .= "Jij gaat straks met een groepje van 7 collega's LookLive bezoeken. ";
	$wn0 .= "Je krijgt daar om 11:30 een (korte) rondleiding. \n";
	$wn0 .= "Het adres van LookLive is: \n";
	$wn0 .= "Prinsengracht 697 BG-A \n";
	$wn0 .= "Stukje de bocht om en je bent er. \n";
	$wn0 .= "\n";
	$wn0 .= "LookLive is een e-commerce bedrijf met een eigen content & development afdeling. Donny werkt er als frontender. ";
	$wn0 .= $bezoek;
break;

case "TODO STEEN":
case "TODO DENNIS":
case "TODO JOB":
case "TODO MELVIN":
case "TODO SENNY":
case "TODO WESLEY":
case "TODO HELEEN":
case "TODO MAAIKE":
case "TODO RAHUL":
case "TODO VASILIS":
	$wn0 = "";
	$wn0 .= "Aloha, ".$user_name.", jij gaat vandaag naar Q42. \n";
	$wn0 .= "Jij gaat straks met een groepje van 8 collega's Q42 bezoeken. ";
	$wn0 .= "Je krijgt daar om 11:30 een (korte) rondleiding van Guido Bouman.";
	$wn0 .= "Het adres van Q42 is: \n";
	$wn0 .= "Oostelijke Handelskade 749 \n";
	$wn0 .= "Tel HQ 070 445 2342 \n";
	$wn0 .= "Hun Amsterdamse kantoor ligt een kwartiertje fietsen van het N-Gebouw, vlak bij het IJ. \n";
	$wn0 .= "\n";
	$wn0 .= "Q42 zijn Nerds. Dat zeggen ze zelf. Vanuit (web) technologie benaderen ze ontwerp-problemen. En dat doen ze met succes. Maar ook met plezier. ";
	$wn0 .= "Zoals ook te zien is aan hun gehackte koffiemachine, o.a. gemaakt door Guido. MIsschien kan hij daar tijdens een Weekly Nerd een keer meer over komen vertellen? Vraag even of hij daar zin in heeft ... ";
	$wn0 .= "We gaan in de minor een aantal keren horen van Q42. In het vak Browser Technologies en Real-Time web komen ze langs, en in projectweek 3 krijgen jullie een uitdagende case voorgelegd met IoT & Meteor. \n";
	$wn0 .= $bezoek;
break;

case "TODO EMIEL":
case "TODO JARNO":
case "TODO LEANDER":
case "TODO MARTIJN":
case "TODO TOM":
case "TODO RIANNE":
case "TODO LISA":
case "TODO JOOST":
case "TODO LAURENS":
	$wn0 = "";
	$wn0 .= "Zoooo, ".$user_name.", wat ga jij zometeen doen? \n";
	$wn0 .= "Jij gaat straks met een groepje van 8 collega's de Voorhoede bezoeken. ";
	$wn0 .= "Je krijgt daar om 11:30 een (korte) rondleiding van Femke Peterson. ";
	$wn0 .= "Het adres van de Voorhoede is: \n";
	$wn0 .= "Rijnsburgstraat 9 - 11 \n";
	$wn0 .= "Tel 06 4897 9447 \n";
	$wn0 .= "Hun kantoor ligt naast de Schinkel in de buurt van het Olympisch Stadion. \n";
	$wn0 .= "\n";
	$wn0 .= "De Voorhoede zijn Front-end developers die zich 100% op het web richten. Ze zijn gespecialiseerd in Web technologieën: Javascript, HTML & CSS. Een goede match voor onze minor! \n";
	$wn0 .= "In projectweek 2 komt de Voorhoede jullie een uitdagende case voorleggen. ";
	$wn0 .= "Vraag vooral ook nog even naar de opdracht die de Voorhoede heeft gedaan voor CommTrack. Over Web technologieën gesproken ...  \n";
	$wn0 .= $bezoek;
break;

case "TODO KOOP":
	$wn0 = "";
	$wn0 .= "Geen dak boven je hoofd? Niet getreurd ".$user_name.", we gaan naar Funda. \n";
	$wn0 .= "Je krijgt daar om 11:30 een (korte) rondleiding van Jeroen Mulder \n";
	$wn0 .= "Het adres van Funda is: \n";
	$wn0 .= "Piet Heinkade 167-173 \n";
	$wn0 .= "tel 020 561 8200 \n";
	$wn0 .= "Kwartiertje fitesen richting het IJ. \n";
	$wn0 .= "\n";
	$wn0 .= $bezoek;
break;
*/
//$talk = $wn0;


//ECHO RESPONSE
echo $talk;

?>