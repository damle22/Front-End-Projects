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

    if (isset($_SESSION["users"][$username])) {
     echo('<div id="account_creation">Username already used. Choose another one!</div>');
     } 
    else {
     $_SESSION["users"][$username] = $password;
     echo('<div id="account_creation">Account Successfully Created</div>');
     }
    }
     function file_creation($username, $password){
        $file = fopen("/Applications/XAMPP/xamppfiles/htdocs/VsCode/Assignment3/WebSite/user_info.txt", "w");
        if ($file) {
            foreach ($_SESSION["users"] as $user => $pass) {
                fwrite($file, "$user:$pass\n");
            }
            fwrite($file, "$username:$password\n");
            fclose($file);
        } else {
            echo "Failed to open file for writing.";
        }

}


       ?>
    
    <style>
        #account_creation{

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