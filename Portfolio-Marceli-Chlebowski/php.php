<?php
if (isset($_POST['submit'])) {
    // pobieranie danych z formularza
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
    
    // adres email, na który ma zostać wysłana wiadomość
    $to = "marceli.chlebowski@gmail.com";
    
    // temat wiadomości email
    $email_subject = "Wiadomość ze strony internetowej";
    
    // treść wiadomości email
    $email_body = "Imię i nazwisko: $name\n".
                  "Adres email: $email\n".
                  "Nazwa firmy: $company\n".
                  "Lokalizacja: $country\n".
                  "Treść wiadomości:\n$subject\n";
    
    // nagłówki emaila
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    // wysyłanie wiadomości email
    mail($to, $email_subject, $email_body, $headers);
    
    // przekierowanie na stronę "thank you"
    header('Location: thank_you.html');
}
?>
