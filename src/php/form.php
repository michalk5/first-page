    <?php
        $to      = 'michal_k5@interia.pl';
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $subject = 'Nowa wiadomość od ' . $name . ' (' . $email . ')';
        $message = $_POST['message'];
        $headers = 'From: ' . $name . ' (' . $email . ')';
        $headers .= 'Content-Type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
        echo '<h2>Dziękujemy za wysłanie wiadomości</h2>';
    ?>
    