<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

//send email
    mail("3developer3i@gmail.com", "This is an email from:",$name ,$email, $message);
}
?>