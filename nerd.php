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
 		include "todo.php";
		break;

    case "SCHEMA":
    case "SCHEDULE":
		include "schema.php";
		break;

	case "12345":
		$talk .= "Hey, ".$user_name." you've finished the first Weekly Nerd. Good for you! \n";
		$talk .= "To complete the first assignment, write a (short) blog post about the talk ";
		$talk .= "and follow up on 2 or 3 links the speaker discussed. \n";
		$talk .= "- This was the first Weekly Nerd (1/18) \n";

		echo $talk;
		break;

    case "HELP":
	case "HULP":
    case "?":
		include "help.php";
		break;

    default:
       if($user_text == "what" || $user_text == "what?" || $user_text == "wat?" || $user_text == "wat" || $user_text == "wha" || $user_text == "wa"){
           $talk = "Hé ".$user_name.", wazabi? Typ 'help' of '?' voor tips over hoe met de Bot te praten.";
       }else if($user_text == "hallo"){
           $talk = $user_name." halloooo ho ho ho.";
       }else{
           $talk = "Hi ".$user_name.", rattling?";
       }
		echo $talk;
}

//echo json_encode($talk);
?>