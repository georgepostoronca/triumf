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


    // Calc
    $selectBoard = "";
    if($_POST['select-board']) {
        $selectBoard = "<tr><td><b>Вид доски:</b></td></td><td>" .$_POST['select-board'] . "<td><tr>";
    }
    
    $color = "";
    if($_POST['color']) {
        $color = "<tr><td><b>Вид доски:</b></td></td><td>" .$_POST['color'] . "<td><tr>";
    }
    
    $size = "";
    if($_POST['cal-size']) {
        $size = "<tr><td><b>Размер:</b></td></td><td>" .$_POST['cal-size'] . "<td><tr>";
    }
    
    $width = "";
    if($_POST['width']) {
        $width = "<tr><td><b>Длина:</b></td></td><td>" .$_POST['width'] . "<td><tr>";
    }
  
    $mount = "";
    if($_POST['mount']) {
        $mount = "<tr><td><b>Крепление:</b></td></td><td>" .$_POST['mount'] . "<td><tr>";
    }
   
    $surface = "";
    if($_POST['set-perim']) {
        $surface = "<tr><td><b>Поверхность строения, м2: </b></td></td><td>" .$_POST['set-perim'] . "<td><tr>";
    }
    
    $file = "";
    if($_POST['file']) {
        $surface = "<tr><td><b>Файл: </b></td></td><td>" .$_POST['file'] . "<td><tr>";
    }
    
    
    // Dop
    $dopklaimer = "";
    if($_POST['input-check-klaimer']) {
        $dopklaimer = "<tr><td><b>Кляймер (крепление) — 15 ₽/шт</b></td></td><td>" .$_POST['input-check-klaimer'] . "<td><tr>";
    }
    
    $dopmontaj = "";
    if($_POST['input-check-montaj']) {
        $dopmontaj = "<tr><td><b>Монтажная лага — 185 ₽/пог.м</b></td></td><td>" .$_POST['input-check-montaj'] . "<td><tr>";
    }
    
    $doptorpank = "";
    if($_POST['input-check-montaj']) {
        $doptorpank = "<tr><td><b>Торцевая планка — 170 ₽/пог.м</b></td></td><td>" .$_POST['input-check-montaj'] . "<td><tr>";
    }
    
    $dopdecor = "";
    if($_POST['input-check-dekor']) {
        $dopdecor = "<tr><td><b>Декоративный уголок — 170 ₽/пог.м</b></td></td><td>" .$_POST['input-check-dekor'] . "<td><tr>";
    }
    
    $head = "";
    // foreach($_POST as $key => $value) {
    //     if($key == "personal-data") contunue;
    //     $result .= "<tr><td>" . $value . "<td><tr>";
    // }

    $tmp = $name . $email . $phone . $message . $typeUser . $selectBoard . $color . $size . $width . $mount . $surface . $file . $dopklaimer . $dopmontaj . $doptorpank . $dopdecor; 
    // $message = "<table border='1' style='border-collapse: collapse;'>" . $head . "<tbody>" . $result . "</tbody>" . "</table>";
    $message = "<table border='1' style='border-collapse: collapse;'>" . $head . "<tbody>" . $tmp . "</tbody>" . "</table>";
    $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: От кого письмо <from@example.com>\r\n";
    $headers .= "Reply-To: reply-to@example.com\r\n";

    mail($to, $subject, $message, $headers);
    echo $_POST['form-title'];
}

?>