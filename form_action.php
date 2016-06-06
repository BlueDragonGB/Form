<?php
if($_POST['formSubmit'] == "formSubmit") 
{
   $varFirstname = $_POST['people[][firstname]"'];
   $varSurname = $_POST['people[][surname]'];
}
$to = "smilysteve@hotmail.co.uk";
$subject = "My subject";
$txt = $varFirstname .", ". $varSurname.;
$headers = "From: webmaster@example.com"
;
mail($to,$subject,$txt,$headers);
/*$fs = fopen("people.json","a");
fwrite($fs,$varFirstname .", ". $varSurname. "\n");
fclose($fs);
*/
?>