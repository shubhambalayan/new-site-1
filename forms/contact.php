<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "shubham@bending.tech";
    $headers = "From: ".$mailfrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n"/$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}


?>