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
*/

$talk = "";
$talk .= "Hulp nodig ".$user_name."? \n";

//$talk .= "You have to decide for yourself if you take the blue or the red pill ... \n";
$talk .= "To code or not to code, that is the question ... \n\n";

$talk .= " - Als je 'todo' typt krijg je informatie over het volgende event. \n";
//$talk .= " - Als je je naam toevoegt krijg je te zien wat jij gaat doen ... 'todo voornaam'. \n";
$talk .= " - Als je 'schema' typt krijg je een overzicht van alle geplande Weekly Nerd presentaties. \n";
//$talk .= " - After a talk, enter your 5 digit code for your next assignment. (test with 12345) \n";

echo $talk;
?>