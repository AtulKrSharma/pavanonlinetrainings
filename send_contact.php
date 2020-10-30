<?
//	receiving the form values
	$txtName = $_POST["txtName"];
	$txtEmail = $_POST["txtEmail"];   
	$txtPhone = $_POST["txtPhone"];  
	$txtCountry = $_POST["txtCountry"]; 	 
	$txtComments = $_POST["txtComments"];
	 
	
	//		change the email address here
	
				$to  = "pavanonlinetrainings@gmail.com," . "pavanoltraining@gmail.com" ; // note the comma 
									
				$headers  = "MIME-Version: 1.0\r\n"; 
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "To: Cross World <pavanonlinetrainings@gmail.com>\r\n"; 
				$headers .= "From: Contact us form <".$email.">\r\n"; 
				

	//		change email address over

	//      Change the subject here (mail subject)
	
				$mailSubject = "Contact Us Form";

	//      Change subject over
	
	
	$message = '<table width="600" border="0" cellpadding="4" cellspacing="2" bgcolor="#D3D8E4">
  <tr align="center" bgcolor="#D3D8E4">
    <td colspan="2" bgcolor="#6699FF"><strong><font color="#FFFFFF">Mail from Contact us Form</font></strong></td>
  </tr>
  <tr>
    <td width="139" align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Name: </strong></font></td>
    <td width="439">'.$txtName.'</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#B3BBC3"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Email:</strong></font></td>
    <td bgcolor="#B3BBC3">'.$txtEmail.'</td>
  </tr>
   
  <tr>
    <td align="right" bgcolor="#B3BBC3"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Phone:</strong></font></td>
    <td bgcolor="#B3BBC3">'.$txtPhone.'</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#D3D8E4"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Country:</strong></font></td>
    <td bgcolor="#D3D8E4">'.$txtCountry.'</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#B3BBC3"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Message:</strong></font></td>
    <td bgcolor="#B3BBC3">'.$txtComments.'</td>
  </tr>
 
</table>';
				
				@mail($to, $mailSubject, $message, $headers);
				header('Location: thanks.html');

?>
