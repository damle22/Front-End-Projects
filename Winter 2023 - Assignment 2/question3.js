
const arr = [4, 0, 4, 2, 7, 5];

const mixed  = [4, 5, "3.0 birds", true, "birds2"];

let str = "3 individuals make it 5";

document.getElementById("p1").innerHTML = addNumbers(arr);

document.getElementById("p2").innerHTML = findMaxNumber(arr);

document.getElementById("p3").innerHTML = addOnlyNumbers(mixed);

document.getElementById("p4").innerHTML = getDigits(str);

document.getElementById("p5").innerHTML = reverseString(str);

document.getElementById("p6").innerHTML = getCurrentDate();



function addNumbers(arr) {
    
    let sum = 0;
    
    for (let i = 0; i < arr.length; i++)
        sum+= arr[i];
        
    return sum;
    
}

function findMaxNumber (){
    
    return Math.max(...arr);
    
}

function addOnlyNumbers(mixed){
    
    let sum = 0;
    
     for (let i = 0; i < mixed.length; i++) {
         const storing = parseFloat(mixed[i]);
         if (!isNaN(storing))   
             sum = sum + storing;
     }
    return sum;
    
}

function getDigits(str) {
    
    const pattern = /\d+/g;
    const storing = str.match(pattern);
      if (storing) 
         return storing.join("");
           else 
              return "";
                                   
}
   
function reverseString(str) {
    
    let reverse = "";
    
    for(let i = str.length -1; i >= 0; i--)
        reverse+= str[i];
    
    return reverse;
    
}

function getCurrentDate() {
    
    const d = new Date();
    
    return d;
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
