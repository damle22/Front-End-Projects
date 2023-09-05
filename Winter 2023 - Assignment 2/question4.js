const b1 = {name: "Basic Web Programming", price: "$19.99"};
const b2 = {name: "Intro to PHP", price: "$86.00"};
const b3 = {name:"Advanced JQuery", price: "$55.00"}





function displayContent(){
    
    var q1 = document.getElementById("q1").value;
    var q2 = document.getElementById("q2").value;
    var q3 = document.getElementById("q3").value;
    
    if (isNaN(q1) || q1 == "")
        alert("The quantity on row 1 must be an integer");
    if (isNaN(q2) || q2 == "")
        alert("The quantity on row 2 must be an integer");
    if (isNaN(q3) || q3 == "")
        alert("The quantity on row 3 must be an integer");
    
    if (!isNaN(q1) && !isNaN(q2) && !isNaN(q3))  
        if (q1 != "" && q2!= "" && q3 != "")
    {
    
    b1.quantity = q1;
    b2.quantity = q2;
    b3.quantity = q3;
    
    let content = "<b>" + b1.name + " (Quantity = " + b1.quantity + "):</b> $" + (b1.quantity * 19.99);
    
    content = content + "<br>" + "<b>" +b2.name + " (Quantity = " + b2.quantity + "):</b> $" + (b2.quantity * 86.00);
    
    content = content + "<br>" + "<b>" + b3.name + " (Quantity = " + b3.quantity + "):</b> $" + (b3.quantity * 55.00);
    
    content = content + "<br><br><br>" + "<b>Final Total:</b> $" + ( 19.99 * b1.quantity + 86.00 * b2.quantity +  55.00 * b3.quantity);
        
    
    
    document.getElementById("content").innerHTML = content;
    
    }
    
}
