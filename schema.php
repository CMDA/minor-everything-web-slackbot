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
//$talk = "[".$command."] \n";

*/

$talk = "";
$talk .= "0. 	Maandag 1 Feb	Kickoff & bedrijven bezoeken @ N-gebouw \n";
$talk .= "1. 	Dinsdag 2 Feb 	Arjan Westerdiep (Drububu) - Nerd Alert @ N-gebouw \n";
$talk .= "2. 	Dinsdag 9 Feb 	Marije Schaake (Eend) - Components @ N-gebouw \n";
$talk .= "3. 	Dinsdag 16 Feb 	Donny Wals (Looklive) - Task manager & git @ LookLive \n";
$talk .= "4. 	Dinsdag 23 Feb 	Ron Kersic (ING) - API design & ING Hoofkantoor \n";
$talk .= "5. 	Dinsdag 8 Mrt 	Niels Leenheer (HTML5test.nl) - Weird browsers @ N-gebouw \n";
$talk .= "6. 	Dinsdag 15 Mrt 	Peter Paul Koch - the Viewport @ N-gebouw \n";
$talk .= "7. 	Dinsdag 22 Mrt 	Mattijs Bliek (GRRR) - Functionele animatie @ GRRR \n";
$talk .= "8. 	Dinsdag 29 Mrt 	 \n";
$talk .= "9. 	Dinsdag 5 Apr 	 \n";
$talk .= "10. 	Dinsdag 12 Apr 	 \n";
$talk .= "11. 	Dinsdag 19 Apr 	 \n";
$talk .= "12. 	Dinsdag 26 Apr 	 \n";
$talk .= "13. 	Dinsdag 10 Mei 	 Rahul Choudhury (Q42) -  Interaction engineering @Q42 \n";
$talk .= "14. 	Dinsdag 17 Mei 	 Github  @ Github \n";
$talk .= "15. 	Dinsdag 24 Mei 	 Thijs van der Vossen (Fingertips) - Pay me Money \n";
$talk .= "16. 	Dinsdag 31 Mei 	 Anne Marleen Olthof (CMD) - Envisioining @ N-gebouw \n";
$talk .= "17. 	Dinsdag 7 Jun 	 \n";
$talk .= "18. 	Dinsdag 14 Jun 	 \n";

echo $talk;
?>