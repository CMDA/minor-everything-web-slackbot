<?php
if(!$_POST["token"]){
    //form values?
    
?>
    <form>
        <input type="text" id="text">
        <input type="submit">
    </form>
<?php
}
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
*/

$user_name = ucfirst($_POST["user_name"]);
$user_text = $_POST["text"];
$command = strtoupper($_POST["text"]);
$talk = "";
//$talk = "[".$command."] \n";

$bezoek = "";
$bezoek .= "De bedoeling van dit bezoek is dat jullie alvast zicht krijgen op wat frontenders zoal doen, hoe dit soort bedrijven werken en wat voor opdrachten ze krijgen. ";
$bezoek .= "En om geïnspireerd te raken natuurlijk. Na de minor Web Development zou je stage bij zo'n type bedrijf kunnen gaan lopen. \n";
$bezoek .= "\n";
$bezoek .= "Veel plezier. Om 13:00 gaan we lunchen in de N-Lounge. ";

switch($command){
    case "TODO":
		$talk .= "Next up is: Kickoff! \n";
		$talk .= "Maandag 1 Februari in de N-Lounge. Zorg dat je er om 10 bent. \n";
        $talk .= "Zorg ook dat je een fiets of OV kaart meeneemt. We gaan in de ochtend op pad. ";
        $talk .= "Wat heb je nog meer nodig? 3G, je laptop en een fineliner. \n";
        $talk .= "Als je achter 'todo' ook nog je naam typt, krijg je te zien wat jij zometeen gaat doen, dus: 'todo voornaam'";
		break;

	case "TODO ROBERT":
        $talk .= "Aha ".$user_name." in da house! Maar welke is het? Spier of Steen? Maak je svp bekend met je achternaam ipv je voornaam. ";	
		break;

	case "TODO MICHELE":
		$talk .= "Ja ja ja, ".$user_name.", We gaan dus niet naar Occhio. \n";
		$talk .= "Ze zitten weliswaar vlakbij. En zijn met toffe mensen toffe dingen aan het doen. Maar Michele is te druk hé? Jammerrrr \n";
		$talk .= "\n";
		$talk .= $bezoek;
		$talk .= "\n Alleen lunchen is ook goed hoor.";
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
	case "TODO KOOP":
	case "TODO DAVID":
	case "TODO HARM":
		$talk .= "Wauzers, ".$user_name.", zometeen ga jij een kijkje nemen bij de alleraardigste coole nerds (en designers) van GRRR. \n";
		$talk .= "Jij gaat straks met een groepje van 8 collega's GRRR bezoeken. ";
		$talk .= "Je krijgt daar om 11:30 een (korte) rondleiding van David Spreekmeester. De opper geek. \n";
		$talk .= "Het adres van GRRR is: \n";
		$talk .= "Sint Antoniesbreestraat 16 \n";
		$talk .= "Tel 020 320 77 08 \n";
		$talk .= "Niet zo ver hier vandaan, vlak bij de Nieuwmarkt. \n";
		$talk .= "\n";
		$talk .= "GRRR is een ontwerpstudio, ooit begonnen met een drietal Interaction Designers. En nu doorgegroeid naar een full-stack ontwerpbureau met een sterke technische basis. ";
		$talk .= "De ontwerpers begrijpen techniek en de techneuten kunnen ontwerpen. Een goede match met onze opleiding en minor. Op dit moment lopen er 2 CMD'ers stage bij GRRR. En een aantal ex-CMD'ers zijn in dienst. ";
		$talk .= "Één van talentvolle designers/developers is Mattijs Bliek. Hij komt later in de minor langs voor een Weekly Nerd. Als hij niet te druk is, check dan even op zijn scherm wat hij aan het doen is ... \n";
		$talk .= $bezoek;
		break;

	case "TODO DYLAN":
	case "TODO JAIMIE":
	case "TODO JOSHUA":
	case "TODO RAYMOND":
	case "TODO SPIER":
	case "TODO BART":
	case "TODO ROVER":
	case "TODO DONNY":
		$talk .= "Hup hup hup, ".$user_name.", we gaan naar LookLive. \n";
		$talk .= "Geen vervelende lokatie daar aan de gracht, bovendien zul je ter plekke worden ontvangen door onze eigen Dony Wals! Hij heeft vroeger CMD gestudeerd en komt in blok 2 ook lesgeven in de minor in het vak Performance Matters. \n";
		$talk .= "Jij gaat straks met een groepje van 7 collega's LookLive bezoeken. ";
		$talk .= "Je krijgt daar om 11:30 een (korte) rondleiding. \n";
		$talk .= "Het adres van LookLive is: \n";
		$talk .= "Prinsengracht 697 BG-A \n";
		$talk .= "Stukje de bocht om en je bent er. \n";
		$talk .= "\n";
		$talk .= "LookLive is een e-commerce bedrijf met een eigen content & development afdeling. Donny werkt er als frontender. ";
		$talk .= $bezoek;
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
		$talk .= "Aloha, ".$user_name.", jij gaat vandaag naar Q42. \n";
		$talk .= "Jij gaat straks met een groepje van 8 collega's Q42 bezoeken. ";
		$talk .= "Je krijgt daar om 11:30 een (korte) rondleiding van Guido Bouman.";
		$talk .= "Het adres van Q42 is: \n";
		$talk .= "Oostelijke Handelskade 749 \n";
		$talk .= "Tel HQ 070 445 2342 \n";
		$talk .= "Hun Amsterdamse kantoor ligt een kwartiertje fietsen van het N-Gebouw, vlak bij het IJ. \n";
		$talk .= "\n";
		$talk .= "Q42 zijn Nerds. Dat zeggen ze zelf. Vanuit (web) technologie benaderen ze ontwerp-problemen. En dat doen ze met succes. Maar ook met plezier. ";
		$talk .= "Zoals ook te zien is aan hun gehackte koffiemachine, o.a. gemaakt door Guido. MIsschien kan hij daar tijdens een Weekly Nerd een keer meer over komen vertellen? Vraag even of hij daar zin in heeft ... ";
		$talk .= "We gaan in de minor een aantal keren horen van Q42. In het vak Browser Technologies en Real-Time web komen ze langs, en in projectweek 3 krijgen jullie een uitdagende case voorgelegd met IoT & Meteor. \n";
		$talk .= $bezoek;
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
		$talk .= "Zoooo, ".$user_name.", wat ga jij zometeen doen? \n";
		$talk .= "Jij gaat straks met een groepje van 8 collega's de Voorhoede bezoeken. ";
		$talk .= "Je krijgt daar om 11:30 een (korte) rondleiding van Femke Peterson. ";
		$talk .= "Het adres van de Voorhoede is: \n";
		$talk .= "Rijnsburgstraat 9 - 11 \n";
		$talk .= "Tel 06 4897 9447 \n";
		$talk .= "Hun kantoor ligt naast de Schinkel in de buurt van het Olympisch Stadion. \n";
		$talk .= "\n";
		$talk .= "De Voorhoede zijn Front-end developers die zich 100% op het web richten. Ze zijn gespecialiseerd in Web technologieën: Javascript, HTML & CSS. Een goede match voor onze minor! \n";
		$talk .= "In projectweek 2 komt de Voorhoede jullie een uitdagende case voorleggen. ";
		$talk .= "Vraag vooral ook nog even naar de opdracht die de Voorhoede heeft gedaan voor CommTrack. Over Web technologieën gesproken ...  \n";
		$talk .= $bezoek;
		break;

    case "SCHEMA":
    case "SCHEDULE":
		$talk .= "0. 	Maandag 1 Feb	Kickoff & bedrijven bezoeken (Voorhoede, GRRR, Looklive en Q42) @ N-gebouw \n";
		$talk .= "1. 	Dinsdag 2 Feb 	Arjan Westerdiep (Drububu) - Nerd Alert @ Crea \n";
		$talk .= "2. 	Dinsdag 9 Feb 	Marije Schaake (Eend) - Components @ Crea \n";
		$talk .= "3. 	Dinsdag 16 Feb 	Donny Wals (Looklive) - Task manager & git \n";
		$talk .= "4. 	Dinsdag 23 Feb 	Krijn Hoetmer (Qontent) - Progressive Enhancement JS \n";
		$talk .= "5. 	Dinsdag 8 Mrt 	 \n";
		$talk .= "6. 	Dinsdag 15 Mrt 	Peter Paul Koch - the Viewport @ Crea \n";
		$talk .= "7. 	Dinsdag 22 Mrt 	Mattijs Bliek (GRRR) - Functionele animatie @ GRRR \n";
		$talk .= "8. 	Dinsdag 29 Mrt 	 \n";
		$talk .= "9. 	Dinsdag 5 Apr 	 \n";
		$talk .= "10. 	Dinsdag 12 Apr 	 \n";
		$talk .= "11. 	Dinsdag 19 Apr 	 \n";
		$talk .= "12. 	Dinsdag 26 Apr 	 \n";
		$talk .= "13. 	Dinsdag 10 Mei 	Github  @ Github \n";
		$talk .= "14. 	Dinsdag 17 Mei 	 \n";
		$talk .= "15. 	Dinsdag 24 Mei 	 \n";
		$talk .= "16. 	Dinsdag 31 Mei 	 \n";
		$talk .= "17. 	Dinsdag 7 Jun 	 \n";
		$talk .= "18. 	Dinsdag 14 Jun 	 \n";
		break;

	case "12345":
		$talk .= "Hey, ".$user_name." you've finished the first Weekly Nerd. Good for you! \n";
		$talk .= "To complete the first assignment, write a (short) blog post about the talk ";
		$talk .= "and follow up on 2 or 3 links the speaker discussed. \n";
		$talk .= "- This was the first Weekly Nerd (1/18) \n";
		break;

    case "HELP":
	case "HULP":
    case "?":
		$talk .= "Hulp nodig ".$user_name."? \n";
		//$talk .= "To code or not to code, that is the question. \n\n";
		$talk .= "You have to decide for yourself if you take the blue or the red pill ... \n";
        $talk .= " - Als je 'todo' typt krijg je informatie over het volgende event. \n";
        $talk .= " - Als je je naam toevoegt krijg je te zien wat jij gaat doen ... 'todo voornaam'. \n";
        $talk .= " - Als je 'schema' typt krijg je een overzicht van alle geplande Weekly Nerd presentaties. \n";
        //$talk .= " - After a talk, enter your 5 digit code for your next assignment. (test with 12345) \n";
		break;

    default:
       if($user_text == "what" || $user_text == "what?" || $user_text == "wat?" || $user_text == "wat" || $user_text == "wha" || $user_text == "wa"){
           $talk = "Hé ".$user_name.", wazabi? Typ 'help' of '?' voor tips over hoe met de Bot te praten.";
       }else if($user_text == "hallo"){
           $talk = $user_name." halloooo ho ho ho.";
       }else{
           $talk = "Hi ".$user_name.", rattling?";
       }
}
echo $talk;
//echo json_encode($talk);
?>