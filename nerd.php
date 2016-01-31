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

$talk = "[".$command."] \n";
switch($command){
    case "TODO":
		$talk .= "Next up is: Kickoff! \n";
		$talk .= "Maandag 1 Februari in de N-Lounge. Zorg dat je er om 10 bent. \n";
        $talk .= "Zorg dat je een fiets of OV kaart meeneemt. We gaan in de ochtend op pad. Wat heb je nog meer nodig? 3G, je laptop en een fineliner. \n";
		break;
    case "SCHEDULE":
    case "SCHEMA":
		$talk .= "0. 	Maandag 1 Feb	Kickoff & bedrijven bezoeken (Voorhoede www.voorhoede.nl, GRRR www.grrr.nl, Looklive www.looklive.nl, Q42 www.q42.nl) @ N-gebouw \n";
		$talk .= "1. 	Dinsdag 2 Feb 	Arjan Westerdiep (Drububu) - Nerd Alert @ Crea \n";
		$talk .= "2. 	Dinsdag 9 Feb 	Marije Schaake (Eend) - Components @ Crea \n";
		$talk .= "3. 	Dinsdag 16 Feb 	 \n";
		$talk .= "4. 	Dinsdag 23 Feb 	 \n";
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
    case "?":
		$talk .= "You need help ".$user_name."? \n";
		//$talk .= "To code or not to code, that is the question. \n\n";
		$talk .= "You have to decide for yourself if you take the blue or the red pill ... \n";
        $talk .= " - Try the command 'todo' for the next scheduled event. \n";
        $talk .= " - Try the command 'todo' and add your name  \n";
        $talk .= " - Ask for the 'schedule' if you want to know all the Weekly Nerd talks. \n";
        //$talk .= " - After a talk, enter your 5 digit code for your next assignment. (test with 12345) \n";
		break;
    default:
       if($user_text == "what" || $user_text == "what?" || $user_text == "wat?" || $user_text == "wat" || $user_text == "wha" || $user_text == "wa"){
           $talk = "Hé ".$user_name.", wazabi? Try typing the command 'help' or '?'.";
       }else if($user_text == "hallo"){
           $talk = $user_name." halloooo ho ho ho.";
       }else{
           $talk = "Hi ".$user_name.", rattling?";
       }
}
echo $talk;
//echo json_encode($talk);
?>