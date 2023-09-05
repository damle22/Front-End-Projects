<?php

if(isset($_COOKIE["#ofvisits"])) {
    $visits = $_COOKIE["#ofvisits"] + 1;
    setcookie("#ofvisits", $visits, time() + 8640);
    
    $last_visit_date = date('D M j H:i:s T Y', $_COOKIE["last_visit"]);

    echo "Hello, this is the $visits time that you are visiting my webpage.<br>";
    echo "Last time you visited my webpage on: $last_visit_date<br>";
  }
  else {
    setcookie("#ofvisits", 1, time() + 8640);
    setcookie("last_visit", time(), time() + 8640);
    echo "Welcome to my webpage! It is your first time that you are here.<br>";
  }




?>