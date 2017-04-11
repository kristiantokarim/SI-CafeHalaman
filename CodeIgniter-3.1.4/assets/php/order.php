<?php
    session_start();
    require_once '../vendor/autoload.php';
    $to = 'kristiantokarim@gmail.com';
    $from = 'support@anpsthemes.com';
    $subject = 'Order on Cafe Halaman';

    $link = mysqli_connect("localhost", "root", "", "cafehlm");

    // Check connection
    if ($link === false) {
        die("ERROR: Could not connect.");
    }

    $message = '';

    /* Order */

    $message .= '<h3>Order</h3>';
    $message .= '<table cellpadding="0" cellspacing="0">';
    foreach ($_POST['order_items'] as $key => $value) {
        $message .= "<tr><td style='padding: 5px 20px 5px 5px'><strong>" . urldecode($key) . ":</strong>" . "</td><td style='padding: 5px; color: #444'>" . $value . "</td></tr>";
    }
    $message .= '</table>';

    /* Delivery information */

    $message .= '<h3>Delivery information</h3>';
    $message .= '<table cellpadding="0" cellspacing="0">';
    foreach ($_POST['form_data'] as $postname => $post) {
        if ($postname != "recaptcha_challenge_field" && $postname != "recaptcha_response_field" && $postname != 'day' && $postname != 'hour' && $postname != 'minute' && $postname != 'month' && $postname != 'year') {
            $message .= "<tr><td style='padding: 5px 20px 5px 5px'><strong>" . urldecode($postname) . ":</strong>" . "</td><td style='padding: 5px; color: #444'>" . $post . "</td></tr>";
        }
    }
    $message .= '</table>';

    $userip = $_POST['form_data']['userip'];
    $query = "SELECT id_pengguna FROM pengguna WHERE ip_address = '".$userip."';";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
      $firstrow = mysqli_fetch_assoc($result);
      $idpengguna = $firstrow["id_pengguna"];
    } else {
      die("NO USER ID :(");
    }

    $nama = $_POST['form_data']['name'];
    $email = $_POST['form_data']['email'];
    $phone = $_POST['form_data']['phone'];
    $alamat = $_POST['form_data']['address'];

    $query = "INSERT INTO pesanan (id_pengguna, nama, alamat, email, telepon) VALUES ('".$idpengguna."','".$nama."','".$alamat."','".$email."','".$phone."');";
    if(mysqli_query($link, $query)){
        echo "Record pesanan inserted successfully.";
        $idpesanan = mysqli_insert_id($link);
        foreach ($_POST['order_items'] as $key => $value) {
          if (urldecode($key) != "TOTAL") {
            $query = "INSERT INTO produk_pesanan (nama_produk, id_pesanan, jumlah) VALUES ('".$key."','".$idpesanan."','".substr($value, 2)."');";
            if(mysqli_query($link, $query)){
                echo "Records produk_pesanan inserted successfully.";
            } else{
                echo "ERROR.";
            }
          }
        }
    } else{
        echo "ERROR.";
        $idpesanan = 0;
    }

    mysqli_close($link);

    $headers = 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
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
    //mail($to, $subject, $message, $headers);
?>
