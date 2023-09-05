<!DOCTYPE html>


     <html lang="en">
     <head><title>Account Creation</title>
     <meta charset="utf-8">
     </head>


<body>
    
    
    <link rel="stylesheet" href="question8.css">
        
    <?php include('./view/header.php')?>
    
     <?php include('./view/nav.php') ?>
    
    
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_SESSION["users"][$username]) && $_SESSION["users"][$username] == $password){
        $_SESSION["username"] = $username;
        header("Location: question8_give_away_postLogin.php");
     } 
    else {
        echo('<div id="account_login">Invalid username or password, try again.</div>');
     }
}
    ?>
    
    <style>
        #account_login{

            border: solid 1px;
            height: 180px;
            width: 600px;
            margin-left: 430px;
            margin-top: 150px;
            padding: 45px;
            font-size: 19px;
            font-family: Calibri;
            background-color: pink;
            margin-bottom: 150px;
        }
    </style>
    




    
 
    <?php include('./view/footer.php') ?>
    
    <script>

         function redirect_to_give_away_page(){
            window.location.href = "question8_give_away.php";
         }


          function myFunction() {
              var popup = document.getElementById("my_popup");
                 popup.classList.toggle("show");
            
           }
            
           function date_updated(){
               
                var d = new Date();
             
                  var content = document.getElementById('date').innerHTML = d;   
           }
                  
           setInterval(date_updated,1000);
           
        </script>  
    
    
    
</body>    
</html>