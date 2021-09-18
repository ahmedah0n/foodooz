<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $number = $_POST['number'];
    $Quantity = $_POST['Quantity'];
    $food_name = $_POST['food_name'];
    $address =$_POST['adress'];

    $email_from = 'ahinahon88561@gmail.com';

    $email_subject ="new customer"

    $email_body ="User Name: $name.\n".
                        "User Email: $visitor_email.\n"
                                "User Number: $number.\n".
                                "User Quantity: $Quantity.\n".
                                "User Food_name: $food_name.\n".
                                "User adress: $adress.\n";
$to ="ahonahon30@gmail.com";

$headers ="email_from \r\n";
mail($to,$email_subject,$email_body,$headers);

header("location: index.html");



?>