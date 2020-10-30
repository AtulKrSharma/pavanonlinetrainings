<?php
$to = "pavanontrainings@gmail.com," . "pavanoltraining@gmail.com" ; // replace this mail with yours
$firstname = $_POST["name"];
$email= $_POST["email"];
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message ='<table style="width:100%">
        <tbody><tr>
                <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
</tbody></table>';


if (@mail($to, $email, $message, $headers))
{
	header('Location: contact.html');
    echo 'The message has been sent.';
}
				
?>