<?php

$name = $_POST["name"];
$phone = $_POST["phone_number"];

if(preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)) {
    echo "Perfect $name, your phone number is valid!";
} else {
    echo "Unfortunately $name, your phone number is not valid. Please enter a valid phone number.";
}

?>