<?php

include_once 'connect_to_server.php';

$x = "SELECT TOP 1 ID FROM user login
ORDER BY ID DESC";

for( int i=0; i<x; i++)
{
$sql = "SELECT username, password, firstname, surname, address, phone, email, tidy, laid back, punctual, unpunctual, well off, tight budget, description
FROM user login WHERE ID ='x'";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($rID, $rUsername, $rPassword, $rFirstname, $rSurname, $rAddress, $rPhone, $rEmail, $rTidy, $rLaidback, $rPunctual, $rUnpunctual, $rWelloff, $rTightbudget, $rDescription);
$stmt->fetch();
$stmt->close();

if($rTidy == 1)
{
	$rTidy = "Tidy";
}
else{
	$rTidy = NULL;
}
if($rLaidback == 1)
{
	$rLaidback = "Laid Back";
}
else{
	$rLaidback = NULL;
}
if($rPunctual == 1)
{
	$rPunctual = "Punctual";
}
else{
	$rPunctual = NULL;
}
if($rUnpunctual == 1)
{
	$rUnpunctual = "Unpunctual";
}
else{
	$rUnpunctual = NULL;
}
if($rWelloff == 1)
{
	$rWelloff = "Well off";
}
else{
	$rWelloff = NULL;
}
if($rTightbudget == 1)
{
	$rTightbudget = "Tight budget";
}
else{
	$rTightbudget = NULL;
}
<div> 
<h1> $rFirstname + " " + $rSurname</h1>
  <h2>"Basic informations"</h2>
   <h3>"What kind of roommate are you?" + " " + $rTidy + " " + $rLaidback + " " + $rPunctual + " " + $rUnpunctual  + " " + $rWelloff  + " " + $rTightbudget </h3></br>
   "Address: " + $rAddress;
   </br>
   "Phone: " + $rPhone;
   </br>
   "Email: " + $rEmail;
   </br>
   "Description: " + $rDescription;
   <br>
</div>
}