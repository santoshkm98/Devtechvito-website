<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_POST){
$name = $_POST['namecnt'];
$email = $_POST['emailcnt'];
$phone = $_POST['phonecnt'];
$subject = $_POST['subjectcnt'];
$message = $_POST['msgcnt'];

//to client,third party
$to=$email;
$mailer = new PHPMailer();

//$mailer->SMTPDebug = '2';

$mailer->IsSMTP();

$mailer->SMTPSecure ='ssl';

$mailer->Host ='smtp.gmail.com';
$mailer->Port       = 465;
$mailer->SMTPAuth =TRUE;

$mailer->Username ='enquirytechvito@gmail.com';  

$mailer->Password ='cppkcvkepxztjrok';

$mailer->From ='enquirytechvito@gmail.com';

$mailer->FromName ="Techvito"; 
$mailer->IsHTML(true);  
$email_subject= "Thank you for Contacting Techvito";
$email_body="<p>Dear $name,<br><br>
Thank you for contacting us, our team will call you back soon on your request </p>

Thanks,<br>
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

$mailer1->Username ='enquirytechvito@gmail.com';  

$mailer1->Password ='cppkcvkepxztjrok';

$mailer1->From ='enquirytechvito@gmail.com';

$mailer1->FromName =$name;
$mailer1->IsHTML(true);
$email_subject="'$name' has contacted from website";  
$email_body ="
A Visitor has made an enquiry from  contact us form 
The details of the customer are below.
Name : <strong>$name</strong>
Phone : <strong>$phone</strong>
Email : <strong>$email</strong>
Subject : <strong>$subject</strong>
Message: <strong>$message</strong>


Thanks,
Techvito
";
$mailer1->Body = nl2br($email_body);
$mailer1->Subject =$email_subject;

//To

$to_admin="kmsantosh644@gmail.com";
$recipients_to1=explode(",",$to_admin);
foreach($recipients_to1 as $email1);
{
$mailer1->AddAddress($email1);
}

//CC

// $cc_address="bhargav.n@radical.co.in";
// $mailer1->AddCC($cc_address);
// $cc_address1="santosh.km@radical.co.in";
// $mailer1->AddCC($cc_address1);
// $cc_address2="mariyammal.v@radical.co.in";
// $mailer1->AddCC($cc_address2);

//BCC
// $bc_address1="bhargav.n@radical.co.in";
// $mailer1->AddBCC($bc_address1);

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
