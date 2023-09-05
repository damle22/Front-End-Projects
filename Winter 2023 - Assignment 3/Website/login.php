<!DOCTYPE html>


     <html lang="en">
     <head><title>Login</title>
     <meta charset="utf-8">
     </head>


<body>
    
    
    <link rel="stylesheet" href="question8.css">
        
    <?php include('./view/header.php')?>
    
     <?php include('./view/nav.php') ?>
    
<div class = "account_div">
     <form method="post" action="login_form.php">

     <label for="username">Username:</label>
     <input type="text" id="username" name="username" required>
     <br><br>
     <label for="password">Password:</label>
     <input type="password" id="password" name="password" required>
     <br><br>

     <button type="submit">Login</button>
     </form>
</div>
    
    <style>
        .account_div{

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
