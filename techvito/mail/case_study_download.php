<?php
require_once('/home4/techvito/public_html/dev.techvito.in/wp-load.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming you have a form that collects the user's name and email
    $name = $_POST['cs_name'];
    $email = $_POST['cs_email'];
    $companyName = $_POST['cs_companyname'];
    $pdf_file_url = isset($_POST['pdf_file_url']) ? base64_decode($_POST['pdf_file_url']) : '';
    // Get the PDF URL from ACF
    
    // $pdf_file_url = get_field('case_study_pdf');
 // Replace with your ACF field name

    // Proceed with sending the email using PHPMailer
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer(true);
    $emailBody .= '';
 
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'enquirytechvito@gmail.com'; // Your SMTP username
        $mail->Password = 'cppkcvkepxztjrok'; // Your SMTP password (App Password if using Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        // Recipients
        $mail->setFrom('enquirytechvito@gmail.com', 'Techvito'); // Your sender email and name
        $mail->addAddress($email); // Add recipient's email

      // Attach the PDF file if it exists
      error_log('PDF URL: ' . $pdf_file_url);

        // Attach the PDF file if it exists
        if (!empty($pdf_file_url)) {
            $pdf_file_path = get_attached_file(attachment_url_to_postid($pdf_file_url)); // Convert URL to file path
            error_log('PDF File Path: ' . $pdf_file_path); // Log the PDF file path
            
            // Check if the file exists
            if (file_exists($pdf_file_path)) {
                $mail->addAttachment($pdf_file_path); // Add PDF as attachment
                error_log('Attachment added: ' . $pdf_file_path); // Log attachment success
            } else {
                // If the file isn't found, output an error message
                error_log('File not found: ' . $pdf_file_path); // Log the file not found error
                echo 'File not found: ' . $pdf_file_path; // Debugging output
                exit();
            }
        }
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Techvito - Download Case Studies';
        $mail->Body = "Hi $name,<br>
        Thank you for showing your interest in our Case Studies.<br>
         Please find the attached case study.<br>
        Regards,<br>
        Techvito<br>" 
        . $emailBody;

        // Send the email
        if ($mail->send()) {
            echo 'Message has been sent.<br>'; // Indicate success


            $adminMail = new PHPMailer(true);
            $adminMail->isSMTP();
            $adminMail->Host = 'smtp.gmail.com'; // Set your SMTP server
            $adminMail->SMTPAuth = true;
            $adminMail->Username = 'enquirytechvito@gmail.com'; // Your SMTP username
            $adminMail->Password = 'cppkcvkepxztjrok'; // Your SMTP password (App Password if using Gmail)
            $adminMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $adminMail->Port = 587;

            // Recipients (Admin email)
            $adminMail->setFrom('enquirytechvito@gmail.com', 'Techvito'); // Your sender email and name
            $adminMail->addAddress('santosh.manjunath@techvito.in'); 
            $adminMail->addCC('akshatha.janakaraju@techvito.in'); 
            $pdfFileName = basename($pdf_file_url);
            // Content for admin email
            $adminMail->isHTML(true); // Set email format to HTML
            $adminMail->Subject = 'Techvito- New Case Study Download';
            $adminMail->Body = "Dear Admin,<br>
            A Person has shown interest in our Case Studies<br>
            The Details are Below<br>
                                Name: <strong>$name</strong><br>
                                Email: <strong>$email</strong><br>
                                Company Name: <strong>$companyName</strong><br>
                                PDF URL: <strong>$pdfFileName</strong><br><br>
                                Best regards,<br>Techvito";
                                if ($adminMail->send()) {
                                    echo 'Admin notification has been sent.<br>'; // Indicate success
                                } else {
                                    echo 'Admin notification could not be sent. Mailer Error: ' . $adminMail->ErrorInfo . '<br>'; // Indicate failure
                                }
                            } else {
                                echo 'Message could not be sent to the user. Mailer Error: ' . $mail->ErrorInfo . '<br>'; // Indicate failure
                            }
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}<br>"; // Display error
                        }
                    }
?>
