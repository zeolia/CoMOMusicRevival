<?php

    if (isset($_POST['submit'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $bandName = $_POST['band_name'];
        $email = $_POST['email'];
        $details = $_POST['textarea'];



        $mailTo = 'griffinstiens@gmail.com';
        $headers = "From: ".$email;

        $text = 'You have received an email from '.$firstName.'.\n\n'.$details;

        mail($mailTo, $bandName, $text, $headers);

        header("Location: contact.component.php?messageSuccess");
    }




?>