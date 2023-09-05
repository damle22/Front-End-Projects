
        <!DOCTYPE html>

     <html lang="en">
     <head><title>Finding Dog/Cat</title>
     <meta charset="utf-8">
     </head>

<body>

<link rel="stylesheet" href="question8.css">
        <?php include('./view/header.php')?>
        <?php include('./view/nav.php')?>
         


         <?php 
         
         $animal = $_POST["animal"];
         $breed = $_POST["breed"];
         $age = $_POST["age"];
         $gender = $_POST["gender"];
         $get_along = $_POST["get_along"];

         if($animal == "Dog" && $breed == "Aki-Poo" && $age == "0_to_5" && $gender == "Female" && $get_along == "No")
       echo('<div class="browse"><div id="pet"><img src="images/d1.jpeg" alt=""id="images">
        
       <div id="animal_content"><span id="animal_type">Dog</span><br><span id="text_i">Race:</span> Aki-Poo<br><span id="text_i">Age:</span> 3 years old<br><span id="text_i">Gender:</span> Female<br><span id="text_i">Any need to get along:</span> No<br><span id="text_i">Suitable for a familiy of 4:</span> Yes<br><span id="text_i">Name of the owner:</span> Ramzi Reki<br><span id="text_i">Contact adress:</span> ramzireki@gmail.com<br><button id="animal_btn">Interested</button>
       </div>
       </div></div>');

       else if($animal == "Cat" && $breed == "American curl" && $age == "5_to_10" && $gender == "Female" && $get_along == "Yes")
       echo('<div class="browse"><div id="pet"><img src="images/c1.jpeg" alt=""id="images"><div id="animal_content">
       <span id="animal_type">Cat</span><br><span id="text_i">Race:</span> American curl<br><span id="text_i">Age:</span> 7 years old<br><span id="text_i">Gender:</span> Female<br><span id="text_i">Any need to get along:</span>Yes<br><span id="text_i">Suitable for a familiy of 4:</span> Yes<br><span id="text_i">Name of the owner:</span> Kaled Ba<br><span id="text_i">Contact adress:</span> kaledba@gmail.com<br><button id="animal_btn">Interested</button>
       
       </div>
       </div></div>');

       else if($animal == "Dog" && $breed == "Alusky" && $age == "5_to_10" && $gender == "Male" && $get_along == "No")       
         echo('<div class="browse"><div id="pet" left = "100px"><img src="images/d3.jpeg" alt=""id="images"><div id="animal_content">
        
         <span id="animal_type">Dog</span><br><span id="text_i">Race:</span> Alusky<br><span id="text_i">Age:</span> 8 years old<br><span id="text_i">Gender:</span> Male<br><span id="text_i">Any need to get along:</span> No<br><span id="text_i">Suitable for a familiy of 4:</span> No<br><span id="text_i">Name of the owner:</span> Anna Miko<br><span id="text_i">Contact adress:</span> annamiko@gmail.com<br><button id="animal_btn">Interested</button>
         
         </div>
         </div></div>');
         
         else if($animal == "Dog" && $breed == "American foxhound" && $age == "0_to_5" && $gender == "Male" && $get_along == "No")
         echo('<div class="browse"><div id="pet"><img src="images/d4.jpeg" alt=""id="images"><div id="animal_content">
        
         <span id="animal_type">Dog</span><br><span id="text_i">Race:</span> American Foxhound<br><span id="text_i">Age:</span> 4 years old<br><span id="text_i">Gender:</span> Male<br><span id="text_i">Any need to get along:</span> No<br><span id="text_i">Suitable for a familiy of 4:</span> No<br><span id="text_i">Name of the owner:</span> Lyme Rayil<br><span id="text_i">Contact adress:</span> lymerayil@gmail.com<br><button id="animal_btn">Interested</button>
         
         </div>
         </div></div>');
         else
         echo('<div class="browse">No findings, you may try another combination of criteria!</div>');
         ?>




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