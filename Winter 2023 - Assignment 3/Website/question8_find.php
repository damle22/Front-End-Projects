<!DOCTYPE html>


     <html lang="en">
     <head><title>Adopt Dog/Cat</title>
     <meta charset="utf-8">
     </head>





<body>
    
    
    <link rel="stylesheet" href="question8.css">
    
    <?php include('./view/header.php')?>
    
    <?php include('./view/nav.php') ?>
    
    <div class="find_title">Find Dog and Cat</div>
    
    
    <form class="find_dog_cat" id="myForm" onsubmit="return check()" action="find.php" method="post">
    
        <img src="images/form_image.jpeg" height="80" alt="">
        
        <div style="font-size: 50px">Form</div>
        
        <br><br>
        
        
        <label for="animal">What is the animal you want?</label>
    <select id="animal" name="animal">
         <option>-</option>
         <option value ="Dog">Dog</option>
         <option value = "Cat">Cat</option>
    </select>
        <br>
        <br><br>
        
        <label for="breed"> Breed desired:</label>
    <input type="text" placeholder="Type here" name="breed" id="breed">
        <br>
        <br><br>
        
        <p>What is your preferred age?</p>
        
        
        
        <div class = "radio">
        
    <input type="radio" id="0_to_5" name="age" value="0_to_5">
        <label for="0_to_5">0 - 5 years old</label>
        
         <input type="radio" id="5_to_10" name="age" value="5_to_10">
        <label for="5_to_10">5 - 10 years old</label>
    
         <input type="radio" id="10_to_15" name="age" value="10_to_15">
        <label for="10_to_15">10 - 15 years old</label>
        <br><br>

         <input type="radio" id="dont_know" name="age" value="dont_know">
        <label for="dont_know">Don't know</label>
        
        </div>
        
        
        
        <br>
        <br>
        
        <label for="gender"> Preferred gender:</label>

        <select id="gender" name="gender">
        <option>-</option>
        <option value="Male" >Male</option>
        <option value="Female">Female</option>
        </select>        
        <br>
        <br>
        
        <label for="get_along">Any need to get along with other dogs/cats?</label>
        <select id="get_along" name="get_along">
        <option>-</option>
        <option value = "Yes">Yes</option>
        <option value="No">No</option>
        </select>
        <br>
        <br>
        
        <button type="submit" >Submit Form</button>
        <button type="reset">Reset Form</button>
        
    </form>
    

    
    
    
    <?php include('./view/footer.php') ?>
    
    <script>
    function check(){
             
                   
             const animal = document.getElementById("animal").value;   
             const breed = document.getElementById("breed").value;
             const age = document.querySelector("input[name='age']:checked");
             const gender = document.getElementById("gender").value;
             const get_along = document.getElementById("get_along").value;
             
                 
                 
         
             if(animal == "-" || breed == "" || age == null || gender == "-" || get_along == "")
           {
                alert("There are still empty fields")
                     return false;

           }
                 else 
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
