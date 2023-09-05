<!DOCTYPE html>


     <html lang="en">
     <head><title>Adopt Dog/Cat</title>
     <meta charset="utf-8">
     </head>





<body>
    
    
    <link rel="stylesheet" href="question8.css">
    
    
    <?php include('./view/header.php')?>
    
    <?php include('./view/nav.php') ?>
    
    <div class="contact_title">Contact Us</div>
    
    <div class="contact">
    
        <img src="images/contact_symbol.jpeg" id="contact_symbol" alt="">
        
        <div class="contact_me"><b>Name:</b> Ryan Mazari </div>
        <div class="contact_me"><b>Email:</b> ryanmz@petsfamily.com</div>
        <div class="contact_me"><b>Student ID:</b> 40241379 </div>
        <div class="contact_me"><b>Location:</b> 1455 Boul. de Maisonneuve Ouest, Montréal</div> 
        <div class="contact_me"><b>Phone Number:</b> 514-123-4567</div>
        
    
    </div>
    
    
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
