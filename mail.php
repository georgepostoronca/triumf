<?php 

if($_POST['form-title']) {
    $to  = "mcduckmaker@gmail.com";

    $subject = $_POST['form-title']; 

    $result = "";   

    // $head = "<thead><tr><td><b>". $_POST['form-title'] ."</b></td></tr></thead>";
    $head = "";
    $index = 0;
    foreach($_POST as $value) {
        $index++;
        if($indexx == 1) {
            continue;
        } else {
            $result .= "<tr><td>" . $value . "<td><tr>";
        }
    }
    $message = "<table border='1' style='border-collapse: collapse;'>" . $head . "<tbody>" . $result . "</tbody>" . "</table>";

    $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
    $headers .= "From: От кого письмо <from@example.com>\r\n"; 
    $headers .= "Reply-To: reply-to@example.com\r\n"; 

    mail($to, $subject, $message, $headers); 
    echo $_POST['form-title'];
}

?>