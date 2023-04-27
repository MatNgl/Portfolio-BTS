<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'mattheo.naegellen@gmail.com';
    $subject = 'Nouveau message de ' . $nom;
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $message = wordwrap($message, 70, "\r\n");

    mail($to, $subject, $message, $headers);

    echo 'Votre message a été envoyé avec succès.';
}

?>
