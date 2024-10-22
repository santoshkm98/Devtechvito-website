<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_POST) {
    $name = $_POST['cs_name'];
    $email = $_POST['cs_email'];
    $companyname = $_POST['cs_companyname'];
    $pdffile = get_field('case_study_pdf'); 

    if (!$pdffile || !file_exists($pdffile)) {
        echo "<p>The requested PDF file is not available.</p>";
        exit;
    }


    // to client
    $to = $email;
    $mailer = new PHPMailer();

    // SMTP settings
    $mailer->IsSMTP();
    $mailer->SMTPSecure = 'ssl';
    $mailer->Host = 'smtp.gmail.com';
    $mailer->Port = 465;
    $mailer->SMTPAuth = true;


    $mailer->Username ='enquirytechvito@gmail.com';  

    $mailer->Password ='cppkcvkepxztjrok';
    
    $mailer->From ='Techvito';
    
    $mailer->FromName = "Plan Madi";
    $mailer->IsHTML(true);

    $email_subject = "Thank you for Contacting Plan Madi";
    $email_body = "<p>Dear $name,<br><br>
    Thank you for contacting us, our team will call you back soon on your request. </p>
    Thanks,<br>
    Plan Madi";

    // Add PDF attachment if it exists


    $mailer->Body = $email_body;
    $mailer->Subject = $email_subject;
    $mailer->AddAddress($email);
    $mailer->Send();

    // to admin
    $mailer1 = new PHPMailer();

    // SMTP settings for admin email
    $mailer1->IsSMTP();
    $mailer1->SMTPSecure = 'ssl';
    $mailer1->Host = 'smtp.gmail.com';
    $mailer1->Port = 465;
    $mailer1->SMTPAuth = true;

    $mailer1->Username ='enquirytechvito@gmail.com';  

    $mailer1->Password ='cppkcvkepxztjrok';
    
    $mailer1->From ='Techvito';
    $mailer1->FromName = $name;
    $mailer1->IsHTML(true);

    // Prepare admin email content
    $email_subject = "Enquiry for $subject from Plan Madi from $name";  
    $email_body = "
    The details requested are below.
    Name : <strong>$name</strong>
    Email : <strong>$email</strong>
    
    
    Thanks,
    Plan Madi
    ";

    $mailer1->Body = nl2br($email_body);
    $mailer1->Subject = $email_subject;

    // Admin recipient
    $to_admin = "santosh.manjunath@techvito.in"; // Add your admin email here
    $recipients_to1 = explode(",", $to_admin);
    foreach ($recipients_to1 as $email1) {
        $mailer1->AddAddress($email1);
    }
    $mailer1->AddAddress($email); // Also add the user's email
    $mailer1->AddAttachment($pdffile); 

    // Add PDF attachment to admin email
    // if ($pdf_file) {
    //     $mailer1->addAttachment($pdf_file); // Attach the PDF file
    // }

    // Send admin email
    if (!$mailer1->Send()) {
        echo "Message was not sent<br/>";
        echo "Mailer Error: " . $mailer1->ErrorInfo;
    } else {
        // Optional success response
        echo "<p>Your message has been sent successfully.</p>";
    }
}
?>
