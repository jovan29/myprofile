<?php ob_start();
if(isset($_POST{'submit'})) {
    echo"it works";
$to = "jovannata2805@gmail.com";
$subject = $_POST{'subject'};
$email = $_POST{'email'};
$txt = $_POST{'message'};
$headers = "From: ".$email. "\r\n" .
"CC: johntmac29@gmail.com";

mail($to,$subject,$txt,$headers); 
header("Location:contact.html");


}
?>