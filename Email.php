<?php
//get data from form

$Fname = $_POST['fname'];
$filiale = $_POST["filiale"]
$Lname = $_POST['lname'];
$email= $_POST['email'];
$message= $_POST['message'];
if ($filiale="Viernheim") {
    $to = "rek-ma@medipax.de";
} elseif ($filiale="Raunheim") {
    $to = "omiidnikbakht@gmail.com";
} elseif ($filiale="Essen") {
    $to = "Essen@medipax.de";
}
else {
    $to = "koln@medipax.de";
}

$subject = "Mail From website";
$txt ="Vorname = ". $Fname ."Nachname = ". $Lname . "\r\n  Email = " . $email . "Filiale = ". $filiale . "\r\n Message =" . $message;
$headers = "From: noreply@medipax.de" . "\r\n" .
"CC: shop@medipax.de";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>