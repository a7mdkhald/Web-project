let Useremail = document.querySelector("[name= 'username']") ; 
let Userpass = document.querySelector("[name= 'email']") ; 


let d2 = document.getElementById("i1");
let d3 = document.getElementById("i2");

document.forms[0].onsubmit = function(e){
    let Emailvalid = false; 
   let  passvalid = false;

   if (Useremail.value !== "" && Useremail.value.length <=10 ){
    Emailvalid = true;
    document.getElementById("V10").style.display = "none";
    d2.style.borderColor = "#00FF00";
    
}
else
{
    document.getElementById("V10").style.display = "block";
    d2.style.borderColor = "#FF0000";
}

if (Userpass.value !== "" &&  Userpass.value.length<10 ){
    passvalid = true;

    document.getElementById("V11").style.display = "none";
    d3.style.borderColor = "#00FF00";
}
else
{
    document.getElementById("V11").style.display = "block";
    d3.style.borderColor = "#FF0000";
}

   if (Emailvalid === false || passvalid=== false){
    e.preventDefault(); 
    
   }
}