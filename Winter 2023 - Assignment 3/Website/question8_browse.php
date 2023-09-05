

     <html lang="en">
     <head><title>Adopt Dog/Cat</title>
     <meta charset="utf-8">
     </head>





<body>
    
    
    <link rel="stylesheet" href="question8.css">
    
    
    <?php include('./view/header.php')?>
    
    <?php include('./view/nav.php') ?>
    
    <div class="browse_title">Browse Available Pets</div>
    
    
    <div class="browse">
    
    
    <div id="pet"><img src="images/d1.jpeg" alt=""id="images">
        
        <div id="animal_content"><span id="animal_type">Dog</span><br><span id="text_i">Race:</span> Aki-Poo<br><span id="text_i">Age:</span> 3 years old<br><span id="text_i">Gender:</span> Female<br><span id="text_i">Any need to get along:</span> No<br><span id="text_i">Suitable for a familiy of 4:</span> Yes<br><span id="text_i">Name of the owner:</span> Ramzi Reki<br><span id="text_i">Contact adress:</span> ramzireki@gmail.com<br><button id="animal_btn">Interested</button>
        </div>
        </div>
        
    <div id="pet"><img src="images/c1.jpeg" alt=""id="images"><div id="animal_content">
        <span id="animal_type">Cat</span><br><span id="text_i">Race:</span> American curl<br><span id="text_i">Age:</span> 7 years old<br><span id="text_i">Gender:</span> Female<br><span id="text_i">Any need to get along:</span>Yes<br><span id="text_i">Suitable for a familiy of 4:</span> Yes<br><span id="text_i">Name of the owner:</span> Kaled Ba<br><span id="text_i">Contact adress:</span> kaledba@gmail.com<br><button id="animal_btn">Interested</button>
        
        </div>
        </div>
        
        
        
    <div id="pet"><img src="images/d3.jpeg" alt=""id="images"><div id="animal_content">
        
        <span id="animal_type">Dog</span><br><span id="text_i">Race:</span> Alusky<br><span id="text_i">Age:</span> 8 years old<br><span id="text_i">Gender:</span> Male<br><span id="text_i">Any need to get along:</span> No<br><span id="text_i">Suitable for a familiy of 4:</span> No<br><span id="text_i">Name of the owner:</span> Anna Miko<br><span id="text_i">Contact adress:</span> annamiko@gmail.com<br><button id="animal_btn">Interested</button>
        
        </div>
        </div>
        
        
    <div id="pet"><img src="images/d4.jpeg" alt=""id="images"><div id="animal_content">
        
        <span id="animal_type">Dog</span><br><span id="text_i">Race:</span> American Foxhound<br><span id="text_i">Age:</span> 4 years old<br><span id="text_i">Gender:</span> Male<br><span id="text_i">Any need to get along:</span> No<br><span id="text_i">Suitable for a familiy of 4:</span> No<br><span id="text_i">Name of the owner:</span> Lyme Rayil<br><span id="text_i">Contact adress:</span> lymerayil@gmail.com<br><button id="animal_btn">Interested</button>
        
        </div>
        </div>
    
    
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
