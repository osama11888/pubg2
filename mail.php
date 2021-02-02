<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $playerID=$_POST['playerID'];
    $solo=$_POST['solo'];
    $duo=$_POST['duo'];
    $squad=$_POST['squad'];
    $ifDuoSquad=$_POST['ifDuoSquad'];
    $city=$_POST['city'];

    $to='osamafazal11@gmail.com';
    $subject='Registrations';
    $message="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Sent Succesfully! Thank you"." ".$name.", We wil contact you shortly!</h1>";
    }
    else{
        echo "Something went wrong!";
    }
 }
?>