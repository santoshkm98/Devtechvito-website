<?php
header('Content-Type: text/html; charset=UTF-8');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
if($_POST){
$name = $_POST['s_name'];
$email = $_POST['s_email'];
$title = $_POST['blog_title'];
$sanitized_title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$sanitized_title = html_entity_decode($sanitized_title, ENT_QUOTES, 'UTF-8');
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
$email_subject= "Techvito - Blogs Subscription";
$email_body="<p>Dear $name,<br><br>
Thank you for our liking our content. You will now receive amazing content from our end.
<br/>
You may unsubscribe from these communications at any time.
</p>

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
$mailer1->CharSet='UTF-8';
$mailer1->Encoding = 'base64';
$mailer1->Username ='';  

$mailer1->Password ='';

$mailer1->From ='';

$mailer1->FromName ='Techvito';
$mailer1->IsHTML(true);
$email_subject="Techvito - New Blog Subscription";  
$email_body ="
A User has shown interest in our amazing Blog contents
Here are the details below.
<br/>
Name : <strong>$name</strong>
Email : <strong>$email</strong>
Blog Title: <strong>$sanitized_title</strong>


Thanks,
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
