<?php
if($_POST['form-title']) {
    $to  = "info@triumfdpk.ru";
    $subject = $_POST['form-title'];
    $result = "";

    // $head = "<thead><tr><td><b>". $_POST['form-title'] ."</b></td></tr></thead>";
    $head = "";
    foreach($_POST as $key => $value) {
        if($key == "personal-data") contunue;
        $result .= "<tr><td>" . $value . "<td><tr>";
    }
    $message = "<table border='1' style='border-collapse: collapse;'>" . $head . "<tbody>" . $result . "</tbody>" . "</table>";
    $headers  = "Content-type: text/html; charset=windows-1251 \r\n";
    $headers .= "From: От кого письмо <from@example.com>\r\n";
    $headers .= "Reply-To: reply-to@example.com\r\n";

    mail($to, $subject, $message, $headers);
    echo $_POST['form-title'];
}

?>