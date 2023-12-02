<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'simon.girschweiler@live.com'; 
    $subject = 'Neue Bewerbung fuer one80';
    $body = "Name: $name\nEmail: $email\nTelefonnummer: $phone\nDie Geschichte: $message";

    $headers = "From: form@proculus5.sui-inter.net"; 

    if(mail($to, $subject, $body, $headers)) {
        echo "Vielen Dank für deine Nachricht!";
    } else {
        echo "Senden der Nachricht fehlgeschlagen.";
    }
}
?>