<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$email = $_POST["email"];
$ph_number = $_POST["ph_number"];
/*$receive_email = $_POST["receive_email"];*/
$team_name = $_POST["team_name"];
$players = $_POST["players"];
$player_name = $_POST["player_name"];
$player_number = $_POST["player_number"];
$player_email = $_POST["player_email"];
/*$pay_for = $_POST["pay_for"];*/

$EmailTo = "3developer3i@gmail.com";
$Subject = "New Registration";
 
// prepare email body text
$Body .= "First Name: ";
$Body .= $fname;
$Body .= "\n";

$Body .= "Last Name: ";
$Body .= $lname;
$Body .= "\n";

$Body .= "Address: ";
$Body .= $address;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Phone Number: ";
$Body .= $ph_number;
$Body .= "\n";
 
$Body .= "Team Name: ";
$Body .= $team_name;
$Body .= "\n";

$Body .= "Number of Players: ";
$Body .= $players;
$Body .= "\n";
 
$Body .= "Player Name: ";
$Body .= $player_name;
$Body .= "\n";

$Body .= "Player Number: ";
$Body .= $player_number;
$Body .= "\n";

$Body .= "Player E-mail: ";
$Body .= $player_email;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>