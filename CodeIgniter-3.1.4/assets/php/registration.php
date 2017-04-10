<?php
    require_once '../vendor/autoload.php';
    $to = 'kristiantokarim@gmail.com';
    $from = 'support@anpsthemes.com';
    $subject = 'Reservation on Cafe Halaman';

    $message = '';
    $message .= '<table cellpadding="0" cellspacing="0">';
    
    foreach ($_POST as $postname => $post) {
        if ($postname != "recaptcha_challenge_field" && $postname != "recaptcha_response_field" && $postname != 'day' && $postname != 'hour' && $postname != 'minute' && $postname != 'month' && $postname != 'year') {
            $message .= "<tr><td style='padding: 5px 20px 5px 5px'><strong>" . urldecode($postname) . ":</strong>" . "</td><td style='padding: 5px; color: #444'>" . $post . "</td></tr>";
        }
    }

    $message .= '</table>';

    $headers = 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
      ->setUsername('kristiantokarim@gmail.com')
      ->setPassword('dd');

    $messagex = Swift_Message::newInstance();
 
    //Give the message a subject
    $messagex->setSubject($subject)
      ->setFrom($to)
      ->setTo($to)
      ->setBody($message)
      ->addPart($message, 'text/html')
      ->attach(Swift_Attachment::fromPath($_FILES['ktp']['tmp_name'])->setFilename($_FILES['ktp']['name']))
      ->attach(Swift_Attachment::fromPath($_FILES['struk']['tmp_name'])->setFilename($_FILES['struk']['name']))
      ->attach(Swift_Attachment::fromPath($_FILES['bayar']['tmp_name'])->setFilename($_FILES['bayar']['name']));
		
    //Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);
 
    //Send the message
    $result = $mailer->send($messagex);
    //mail($to, $subject, $message, $headers);
	
?>