<?php
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userMessage = $_POST['userMessage'];
$userProfile = $_POST['userProfile'];
$emailMe = $_POST['emailMe'];

//stripslashes for security purposes
$userName = stripslashes('userName');
$userEmail = stripslashes('userEmail');
$userMessage = stripslashes('userMessage');

if($emailMe)
{
	$emailReceieve = "He also wants to receive email from you";
}
else
{ 
	$emailReceieve = "He doesnot want to receive email from you";
}

$to = 'savanvachhani080192@gmail.com';
$subject = $username.'has sent you message through your website!';
$message = 
$userName ."has contacted you.".
"His email address is ".$userEmail.
". He is $userProfile".
"He sent this message to you '".$userMessage."'".$emailReceive;

mail($to, $subject, $message, $userEmail);

$myMessage = 'Savan Appreciates that you contacted, He will soon get back to you.';

print('return_msg = $myMessage');

exit();

?>
