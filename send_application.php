<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $position = htmlspecialchars($_POST["position"]);
    $message_content = htmlspecialchars($_POST["message"]);

    // Construire le message
    $to = "pr.elhail1@gmail.com";  // ton e-mail
    $subject = "New application from " . $name;
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Position: $position\n";
    $message .= "Message:\n$message_content";

    // En-têtes
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your application to the GREMAL Institute has been sent.";
    } else {
        echo "Sorry, there was a problem sending your application.";
    }
}
?>
