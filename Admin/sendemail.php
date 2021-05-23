<?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'email@email.com';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;
<?php header('Content-type: application/json'); $status = array( 'type'=>'success', 'message'=>'Email sent!' ); $name = @trim(stripslashes($_POST['name'])); $email = @trim(stripslashes($_POST['email'])); $subject = @trim(stripslashes($_POST['subject'])); $message = @trim(stripslashes($_POST['message'])); $email_from = $email; $email_to = 'info@siteaddress.com'; $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message; $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>'); echo json_encode($status); die; ?> 