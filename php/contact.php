<?php
if(isset($_POST['name']) AND isset($_POST['surname']) AND isset($_POST['mail']) AND isset($_POST['message']))
{
  if(!empty($_POST['name']) AND !empty($_POST['surname']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
  {
    $nom = $_POST['name'];
    $prenom = $_POST['surname'];
    $mail = 'pottiez.martin@hotmail.fr';
    $message = $_POST['message'];
    $passage_ligne = "\n";
    $message_html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  		<html>
  			<head>
  				<title>Email</title>
  				<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  				<meta name="viewport" content="width=device-width, initial-scale=1.0">
  				<style type="text/css">
  					body { font-family:\'Helvetica Neue\', Arial, Helvetica;
  					background-color:#F2F0F0;}
  				</style>
  			</head>
  			<body style="margin:0px; padding:0px;">
  				<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#F2F0F0">
  					<tr>
  						<td align="center" bgcolor="#F2F0F0">
  							<table cellpadding="0" cellspacing="0" border="0">
  								<tr>
  									<td width="640">
  										<table width="640px" cellpadding="0" cellspacing="0" border="0" bgcolor="#130f40">
  											<tr>
  												<td width="70"></td>
  												<td width="500" valign="middle" align="left">
  													<div>
  													Martin POTTIEZ
  													</div>
  												</td>
  												<td width="70"></td>
  											</tr>
  										</table>
  									</td>
  								</tr>
  								<tr>
  									<td width="640px" height="1px" bgcolor="#d7d6d6"></td>
  								</tr>
  								<tr>
  									<td width="640">
  										<table width="640px" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
  											<tr>
  												<td width="30"></td>
  												<td width="580" valign="middle" align="left">';
      $message_html .=
                          '<div>
                            MESSAGE DE : <b>'.$nom.'</b> '.$prenom.' <br />
                            EMAIL : '.$_POST['mail'].'<br /><br />
                            '.$message.'
                          </div>';

        $message_html .= '</td>
      										<td width="30"></td>
      									</tr>
      								</table>
      							</td>
      						</tr>
      						<tr>
      							<td width="640px" height="1px" bgcolor="#d7d6d6"></td>
      						</tr>
      						<tr>
      							<td width="640">
      								<table width="640px" cellpadding="0" cellspacing="0" border="0" bgcolor="#130f40">
      									<tr>
      										<td height="10"></td>
      									</tr>
      									<tr>
      										<td width="30"></td>
      										<td width="580" valign="middle" align="top">
      											<div align="right">
                            Martin Pottiez
      											</div>
      										</td>
      										<td width="30"></td>
      									</tr>
      									<tr>
      										<td height="10"></td>
      									</tr>
      								</table>
      							</td>
      						</tr>
      					</table>
      				</td>
      			</tr>
      		</table>
      	</body>
      </html>';
    $message_txt = $message;
    $boundary = "-----=".md5(rand());
    $subject = "Nouveau message !";
    $sujet = mb_encode_mimeheader($subject, "UTF-8", "Q");
    $header = "From: \"Martin Pottiez\"<contact@martinpottiez.fr>".$passage_ligne;
    $header .= "Reply-to: \"".$nom." ".$prenom."\" <".$mail.">".$passage_ligne;
    $header .= "MIME-Version: 1.0".$passage_ligne;
    $header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"".$boundary."\"".$passage_ligne;
    $message = $passage_ligne."--".$boundary.$passage_ligne;
    $message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    $message.= $passage_ligne."--".$boundary.$passage_ligne;
    $message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    mail($mail,$sujet,$message,$header);
    echo"Thanks for your message <3";
  }
  else
  {
    echo"Please fill the form";
  }
}
else
{
  echo "Please reload the page";
}
?>
