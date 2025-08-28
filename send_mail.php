<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "lcksarl1@gmail.com"; 
    $subject = "Nouveau message du site LCK SARL";
    $headers = "From: ".$email."\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body  = "Nom: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Merci, votre message a été envoyé avec succès.');window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de l’envoi. Veuillez réessayer.');window.location.href='contact.php';</script>";
    }
}
?>
