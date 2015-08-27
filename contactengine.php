<?php
//define the receiver of the email
$to = 'ananthj87@gmail.com';
//define the subject of the email
$subject = "Local Mysore Query"; 
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$message_body = 'Name :'.$name.'<br />Email :'.$email.'<br />Message :'.$message.'<br />';
//define the message to be sent. Each line should be separated with \n
// $message = "Hello World!\n\nThis is my first mail."; 
//define the headers we want passed. Note that they are separated with \r\n
$headers = 'From: '.$email.'\r\nReply-To: '.$email;
//send the email
$mail_sent = @mail( $to, $subject, $message_body, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
if($mail_sent) {
	echo "<script type='text/javascript'>alert('Mail Sent!');</script>";
	header( 'Location: contact.html' ) ;
} else {
	echo "<script type='text/javascript'>alert('Failure, Mail couldn't be delivered!');</script>";
	header('Location: index.html');
}
?>