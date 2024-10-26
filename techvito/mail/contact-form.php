<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_POST){
$name = $_POST['cnt_name'];
$email = $_POST['cnt_email'];
$phone = $_POST['cnt_phone'];
$subject = $_POST['information'];
$message = $_POST['message'];

//to client,third party
$to=$email;
$mailer = new PHPMailer();

//$mailer->SMTPDebug = '2';

$mailer->IsSMTP();

$mailer->SMTPSecure ='ssl';

$mailer->Host ='smtp.gmail.com';
$mailer->Port       = 465;
$mailer->SMTPAuth =TRUE;

$mailer->Username ='';  

$mailer->Password ='';

$mailer->From ='';

$mailer->FromName ="Techvito"; 
$mailer->IsHTML(true);  
$email_subject= "Thank you for Contacting Techvito";
$email_body="<p>Dear $name,<br><br>
Thank you for contacting us, our team will call you back soon on your request.</p>

Regards,<br>
Techvito";

$mailer->Body =$email_body;
$mailer->Subject =$email_subject;
$mailer->AddAddress($email);
$mailer->Send();

//to admin
$mailer1 = new PHPMailer();


$mailer1->IsSMTP();

$mailer1->SMTPSecure ='ssl';

$mailer1->Host ='smtp.gmail.com';
$mailer1->Port       = 465;
$mailer1->SMTPAuth =TRUE;

$mailer1->Username ='';  

$mailer1->Password ='';

$mailer1->From ='';

$mailer1->FromName ='Techvito';
$mailer1->IsHTML(true);
$email_subject="Techvito- Enquiry from Contact us";  
$email_body ="
A Visitor has made an enquiry from contact us form 
The details of the customer are below.<br>
Name : <strong>$name</strong>
Phone : <strong>$phone</strong>
Email : <strong>$email</strong>
Subject : <strong>$subject</strong>
Message: <strong>$message</strong>

Regards,
Techvito
";
$mailer1->Body = nl2br($email_body);
$mailer1->Subject =$email_subject;

//To

$to_admin="";
$recipients_to1=explode(",",$to_admin);
foreach($recipients_to1 as $email1);
{
$mailer1->AddAddress($email1);
}

//CC

$cc_address="";
$mailer1->AddCC($cc_address);


if(!$mailer1->Send())
{
echo "Message was not sent<br/ >";
echo "Mailer Error: " .$mailer1->ErrorInfo;
}
else
{ 
?>
<html>
<body>
 <script type="text/javascript">
             
            
 </script>
</body>
</html>

<?php
}

 }

?>
