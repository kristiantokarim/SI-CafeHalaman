<?php
    require_once '../vendor/autoload.php';
    $to = 'kristiantokarim@gmail.com';
    $from = 'info@anpsthemes.com';
    $subject = 'Mail from Kataleya';

    $message = '';
    $message .= '<table cellpadding="0" cellspacing="0">';

    foreach ($_POST['form_data'] as $postname => $post) {

        if ($postname != "recaptcha_challenge_field" && $postname != "recaptcha_response_field") {

            $message .= "<tr><td style='padding: 5px 20px 5px 5px'><strong>" . urldecode($postname) . ":</strong>" . "</td><td style='padding: 5px; color: #444'>" . $post . "</td></tr>";
        }
    }

    $message .= '</table>';

    $headers = 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    //mail($to, $subject, $message, $headers);
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
      ->setUsername('kristiantokarim@gmail.com')
      ->setPassword('xx');

    $messagex = Swift_Message::newInstance();
 
    //Give the message a subject
    $messagex->setSubject($subject)
      ->setFrom($to)
      ->setTo($to)
      ->setBody($message)
      ->addPart($message, 'text/html');
 
    //Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);
 
    //Send the message
    $result = $mailer->send($messagex);
?>