<?php
	//	receiving the form values
   $to = 'pavanoltraining@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    
	$to  = "pavanoltraining@gmail.com," . "pavanonlinetrainings@mail.com" ; // note the comma
	
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$subject.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

	@mail($to, $email, $message, $headers))
    echo 'Your message has been sent.';
    header('Location: contact.html');

?>
