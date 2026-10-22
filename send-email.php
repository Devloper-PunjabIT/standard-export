<?php
require_once 'config.php';

// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . SITE_URL . '/contact');
    exit;
}

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Get form data
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$subject = htmlspecialchars($_POST['subject'] ?? 'Contact Form Submission');
$message = htmlspecialchars($_POST['message'] ?? '');

// Validation
if (empty($name) || empty($email) || empty($message)) {
    header('Location: ' . SITE_URL . '/contact?error=missing_fields');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ' . SITE_URL . '/contact?error=invalid_email');
    exit;
}

// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;
    
    // Enable verbose debug output (comment out in production)
    // $mail->SMTPDebug = 2;
    
    // Email settings
    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
    $mail->addAddress(CONTACT_EMAIL, COMPANY_NAME);
    $mail->addReplyTo($email, $name);
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = "Contact Form: " . $subject;
    
    // HTML email body
    $mail->Body = "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #06452a; color: white; padding: 20px; text-align: center; }
            .content { background: #f8f9fa; padding: 30px; }
            .field { margin-bottom: 20px; }
            .label { font-weight: bold; color: #06452a; }
            .value { color: #333; margin-top: 5px; }
            .footer { text-align: center; padding: 20px; color: #6c757d; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>" . COMPANY_NAME . "</h1>
                <p>New Contact Form Submission</p>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Name:</div>
                    <div class='value'>" . $name . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'><a href='mailto:" . $email . "'>" . $email . "</a></div>
                </div>
                <div class='field'>
                    <div class='label'>Phone:</div>
                    <div class='value'>" . ($phone ?: 'Not provided') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Subject:</div>
                    <div class='value'>" . $subject . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Message:</div>
                    <div class='value'>" . nl2br($message) . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>This email was sent from the contact form on " . SITE_URL . "</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Plain text alternative
    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: " . ($phone ?: 'Not provided') . "\nSubject: $subject\n\nMessage:\n$message";
    
    // Send email
    $mail->send();
    
    // Redirect to success page
    header('Location: ' . SITE_URL . '/contact?success=1');
    exit;
    
} catch (Exception $e) {
    // Log error (in production, log to file instead)
    error_log("Email sending failed: " . $mail->ErrorInfo);
    
    // Redirect with error
    header('Location: ' . SITE_URL . '/contact?error=sending_failed');
    exit;
}
