<?php
if(true) {
    $to  = "test@gmail.com";
    $subject = $_POST['form-title'];

    $name = "";
    $result = "";

    $head = "<thead><tr><td><b>". $_POST['form-title'] ."</b></td></tr></thead>";
    $head = "";
    /*foreach($_POST as $key => $value) {
        if($key == "personal-data") contunue;
        $result .= "<tr><td>" . $value . "<td><tr>";
    }*/

    if($_POST['name']) {
        $name .= "<tr><td>Имя" . $value . "<td><tr>";
    }

    $message = "<table border='1' style='border-collapse: collapse;'>" . $head . "<tbody>" . $result . "</tbody>" . "</table>";
    $headers  = "Content-type: text/html; charset=windows-1251 \r\n";
    $headers .= "From: От кого письмо <from@example.com>\r\n";
    $headers .= "Reply-To: reply-to@example.com\r\n";

    mail($to, $subject, $message, $headers);
    echo $_POST['form-title'];
}

?>