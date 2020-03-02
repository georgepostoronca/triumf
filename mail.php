<?php
if($_POST['form-title']) {
    $to  = "info@triumfdpk.ru";
    $subject = $_POST['form-title'];
    $result = "";

    // $head = "<thead><tr><td><b>". $_POST['form-title'] ."</b></td></tr></thead>";
    $name = "";
    if($_POST['name']) {
        $name = "<tr><td><b>Имя: </b></td></td><td>" .$_POST['name'] . "<td><tr>";
    }
    
    $email = "";
    if($_POST['email']) {
        $email = "<tr><td><b>Email: </b></td></td><td>" .$_POST['email'] . "<td><tr>";
    }
    
    $phone = "";
    if($_POST['phone']) {
        $phone = "<tr><td><b>Телефон: </b></td></td><td>" .$_POST['phone'] . "<td><tr>";
    }
    
    $message = "";
    if($_POST['message']) {
        $message = "<tr><td><b>Сообщение: </b></td></td><td>" .$_POST['message'] . "<td><tr>";
    }
    
    $typeUser = "";
    if($_POST['type-user']) {
        $typeUser = "<tr><td><b></b></td></td><td>" .$_POST['type-user'] . "<td><tr>";
    }
    
    $head = "";
    // foreach($_POST as $key => $value) {
    //     if($key == "personal-data") contunue;
    //     $result .= "<tr><td>" . $value . "<td><tr>";
    // }

    $tmp = $name . $email . $phone . $message . $typeUser; 
    // $message = "<table border='1' style='border-collapse: collapse;'>" . $head . "<tbody>" . $result . "</tbody>" . "</table>";
    $message = "<table border='1' style='border-collapse: collapse;'>" . $head . "<tbody>" . $tmp . "</tbody>" . "</table>";
    $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: От кого письмо <from@example.com>\r\n";
    $headers .= "Reply-To: reply-to@example.com\r\n";

    mail($to, $subject, $message, $headers);
    echo $_POST['form-title'];
}

?>