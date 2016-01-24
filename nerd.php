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
$command = strtoupper($_POST["text"]);

$talk = "[".$command."] \n";
switch($command){
    case "TODO":
		$talk .= "Next up is: Kickoff! \n";
		$talk .= "Monday 1 Feb. Be there at 10.";
		break;
    case "SCHEDULE":
    case "SCHEMA":
		$talk .= "0. 	Monday 1 Feb	Kickoff @ N-gebouw \n";
		$talk .= "1. 	Tuesday 2 Feb 	Nerd alert @ Crea \n";
		$talk .= "2. 	Tuesday 9 Feb 	Marije Eend - Components @ Crea \n";
		$talk .= "3. 	Tuesday 16 Feb 	Justus Sturkenboom - Functional JS @ Crea \n";
		$talk .= "4. 	Tuesday 23 Feb 	Krijn Hoetmer - Progressive Enhancement JS @ Crea \n";
		$talk .= "5. 	Tuesday 8 Mrt 	Donny Wals - Task manager & git @ Looklive \n";
		$talk .= "6. 	Tuesday 15 Mrt 	PPK - the Viewport @ Crea \n";
		$talk .= "7. 	Tuesday 22 Mrt 	Mattijs Bliek - Functionele animaties @ GRRR \n";
		$talk .= "8. 	Tuesday 29 Mrt 	Byron van Koll - Debugging  @ Jungleminds \n";
		$talk .= "9. 	Tuesday 5 Apr 	Jan Kadijk - Smartsensor.me @ Crea \n";
		$talk .= "10. 	Tuesday 12 Apr 	 \n";
		$talk .= "11. 	Tuesday 19 Apr 	 \n";
		$talk .= "12. 	Tuesday 26 Apr 	 \n";
		$talk .= "13. 	Tuesday 10 Mei 	Github  @ Github \n";
		$talk .= "14. 	Tuesday 17 Mei 	Anne JS Modules  / Declan JS Async @ Crea \n";
		$talk .= "15. 	Tuesday 24 Mei 	 \n";
		$talk .= "16. 	Tuesday 31 Mei 	 \n";
		$talk .= "17. 	Tuesday 7 Jun 	 \n";
		$talk .= "18. 	Tuesday 14 Jun 	 \n";
		break;
	case "12345":
		$talk .= "Hey, you've finished the first Weekly Nerd. Good for you! \n";
		$talk .= "To complete the first assignment, write a (short) summery about the talk ";
		$talk .= "and follow up on 2 or 3 links the speaker discussed. \n";
		$talk .= "- This was the first Weekly Nerd (1/18) \n";
		break;
    case "HELP":
    case "?":
		$talk .= "You need help? \n";
		$talk .= "To code or not to code, that is the question. \n\n";
		//$talk .= "You have to decide yourself if you take the blue or the red pill.";
        $talk .= " - Try the command 'todo' for the next scheduled event. \n";
        $talk .= " - Ask for the 'schedule' if you want to know all the Weekly Nerd talks. \n";
        $talk .= " - After a talk, enter your 5 digit code for your next assignment. (test with 12345) \n";
		break;
    default:
       $talk = "Hi ".$user_name.", wazabi?";
}
echo $talk;
//echo json_encode($talk);
?>