<!DOCTYPE html>


     <html lang="en">
     <head><title>Adopt Dog/Cat</title>
     <meta charset="utf-8">
     </head>





<body onload="redirect_to_loginPage()">
    
    
    <link rel="stylesheet" href="question8.css">
    
    
    <?php include('./view/header.php')?>
    
    <?php include('./view/nav.php') ?>
    
    <div class="give_away_title">Give Away a Pet</div>
    
    
    <form class="give_away" onsubmit="return check()">
    
        <img src="images/form_image.jpeg" height="80" alt="">
        
        <div style="font-size: 50px">Form</div>
        
        <br><br>
        
        
        <label for="animal">What is the animal you want to give away?</label>
    <select id="animal" name="animal">
         <option>-</option>
         <option>Dog</option>
         <option>Cat</option>
    </select>
        <br>
        <br><br>
        
        <label for="breed"> Breed:</label>
    <input type="text" placeholder="Type here" id="breed">
        <br>
        <br><br>
        
        <p>Age range:</p>
        
        <div class="radio_give_away">
        
        <input type="radio" id="0_to_5" name="age" value="0_to_5">
        <label for="0_to_5">0 - 5 years old</label>
        
         <input type="radio" id="5_to_10" name="age" value="5_to_10">
        <label for="5_to_10">5 - 10 years old</label>
    
         <input type="radio" id="10_to_15" name="age" value="10_to_15">
        <label for="10_to_15">10 - 15 years old</label>
        
            
        </div>
            

        <br>
        <br>
        
        <label for="gender"> Gender:</label>

        <select id="gender" name="gender">
        <option>-</option>
        <option>Male</option>
        <option>Female</option>
        </select>        
        <br>
        <br>
        
        <label for="get_along">Any need to get along with other dogs/cats?</label>
        <select id="get_along" name="get_along">
        <option>-</option>
        <option>Yes</option>
        <option>No</option>
        </select>
        <br>
        <br>
        
        <label for="suitable">Suitable for a Family with Small Children?</label>
        <select id="suitable" name="suitable">
        <option>-</option>
        <option>Yes</option>
        <option>No</option>
        </select>
        <br><br><br>
        
        
        <label for="brag_animal">Talk about your animal a bit...</label>
        <br><br>
        
        <input type="text" id="brag_animal" class="talk_animal">
        <br><br>
        
        <label for="fname">First Name of the Owner:</label>    
        <input type="text" id="fname" placeholder="Type here ">
        <br>
        <br>
        
        <label for="lname">Last Name of the Owner:</label>
        <input type="text" id="lname" placeholder="Type here">
        <br>
        <br>
        
        <label for="email">Email Adress:</label>
        <input type="email" id="email" placeholder="Type here">
        
        <br><br><br>
        
        <button type="submit">Submit Form</button>
        <button type="reset">Reset Form</button>
        
        
        
    </form>
    
    
    <?php include('./view/footer.php') ?>
    
    <script>


         function redirect_to_loginPage(){
            window.location.href = "login.php";
         }

          function check(){
               
               const animal = document.getElementById("animal").value;
               const breed = document.getElementById("breed").value;
               const age = document.querySelector('input[name="age"]:checked');
               const gender = document.getElementById("gender").value;
               const get_along = document.getElementById("get_along").value;
               const suitable = document.getElementById("suitable").value;
               const brag_animal = document.getElementById("brag_animal").value;
               const fname = document.getElementById("fname").value;
               const lname = document.getElementById("lname").value;
               const email = document.getElementById("email").value;
               
               
               if(animal == "-" || breed == "" || age == null || gender == "-" || get_along == "-" || suitable == "=" || fname == "" || lname == "" || email == ""){
                   
                   alert("There are still empty fields");
                   return false;
               }
               
               let pattern = /\S+@\S+\.\S+/;
               
               if(!pattern.test(email)){
                  alert("The email adress is invalid");
                   return false;
               }
               
               return true;

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
