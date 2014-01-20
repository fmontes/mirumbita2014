<?php
# if request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER["HTTP_X_REQUESTED_WITH"] ) ){
    if (isset($_POST["name"]) AND isset($_POST["kidname"]) AND isset($_POST["mobile"]) AND isset($_POST["email"]) AND isset($_POST["date"]) AND isset($_POST["time"]) AND isset($_POST["city"]) AND isset($_POST["room"])) {
        echo "<h1>Hello</h1>";
        $to = "freddymontes@gmail.com";

        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $kidname = filter_var($_POST["kidname"], FILTER_SANITIZE_STRING);
        $mobile = filter_var($_POST["mobile"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $date = filter_var($_POST["date"], FILTER_SANITIZE_STRING);
        $time = filter_var($_POST["time"], FILTER_SANITIZE_STRING);
        $city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
        $room = filter_var($_POST["room"], FILTER_SANITIZE_STRING);

        $subject = "Evento de: " . $kidname;

        $message  = "Tienes un evento el día: " . $date . " a las " . $time . ' en ' . $city . " y en el salón de fiesta: " . $room . "\n\r";
        $message .= "Para más información comunicarse con: " . $name . " al numero de telefono " . $mobile;
        $sent = email($to, $email, $name, $subject, $message);

        if ($sent) {
            echo "Message sent!";
        } else {
            echo "Message couldn\"t sent!";
        }
    }
    else {
        echo "All Fields are required";
    }
    return;
}

/**
 * Email send with headers
 *
 * @return bool | void
 **/
function email($to, $from_mail, $from_name, $subject, $message){
    $header = array();
    $header[] = "MIME-Version: 1.0";
    $header[] = "From: {$from_name}<{$from_mail}>";
    /* Set message content type HTML*/
    $header[] = "Content-type:text/html; charset=iso-8859-1";
    $header[] = "Content-Transfer-Encoding: 7bit";
    if( mail($to, $subject, $message, implode("\r\n\r", $header)) ) return true; 
}

?>