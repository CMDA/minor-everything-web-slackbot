<?php
//header('Content-Type: application/json');
//$talk = "Minor EW: Nerd alert \n";
//$talk .= "Kopo is gek !!! ";

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

$user_name = $_POST["user_name"];
$command = $_POST["text"];

switch($command){
    case "todo":
		$talk = "Next up is: Kickoff! \n";
		$talk .= "Monday 1 Feb. Be there at 10.";
		break;
    case "help":
		$talk = "You need help? \n";
		$talk .= "To code or not to code, that is the question.";
		//$talk .= "You have to decide yourself if you take the blue or the red pill.";
		break;
    default:
       $talk = "Hi ".$user_name.", wazabi?";
}
echo $talk;
//echo json_encode($talk);
?>