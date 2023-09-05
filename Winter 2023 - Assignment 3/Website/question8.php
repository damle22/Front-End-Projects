<!DOCTYPE html>


     <html lang="en">
     <head><title>Adopt Dog/Cat</title>
     <meta charset="utf-8">
     </head>


<body>
    
    
    <link rel="stylesheet" href="question8.css">
        
    <?php include('./view/header.php')?>
    
     <?php include('./view/nav.php') ?>
    
    
    <div id = home_page_text> Help Animals have a Family!</div>
    <img src="images/home_img.jpeg" id="home_image" alt=""> 
    
    
    
    
 
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
