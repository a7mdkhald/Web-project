
let Username = document.querySelector("[name= 'username']") ; 
let Useremail = document.querySelector("[name= 'email']") ; 
let Usernum = document.querySelector("[name= 'number']") ; 
let Useradd = document.querySelector("[name= 'address']") ; 
let Userpass = document.querySelector("[name= 'password']") ; 
let Userpass2 = document.querySelector("[name= 'password2']") ; 


let d2 = document.getElementById("d2");
let d3 = document.getElementById("d3");
let d4 = document.getElementById("d4");
let d5 = document.getElementById("d5");
let d6 = document.getElementById("d6");
let d7 = document.getElementById("d7");


var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
let phoneRegex = /^01[0125][0-9]{8}$/; //Egyptian format
let passwordRegEx = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; //Minimum eight characters, at least one letter and one number.\



document.forms[0].onsubmit = function(e){
    
   let uservalid = false;
   let Emailvalid = false; 
   let phonevalid = false; 
   let addressvalid = false; 
   let passwordvalid = false; 
   let password2valid = false; 

   
    if (Username.value !== "" && Username.value.length <=10 ){
        uservalid = true;
        document.getElementById("V10").style.display = "none";
        d2.style.borderColor = "#00FF00";
        
    }
    else
    {
        document.getElementById("V10").style.display = "block";
        d2.style.borderColor = "#FF0000";
    }

    if (Useremail.value !== "" &&  Useremail.value.match(validRegex)){
        Emailvalid = true;

        document.getElementById("V11").style.display = "none";
        d3.style.borderColor = "#00FF00";
    }
    else
    {
        document.getElementById("V11").style.display = "block";
        d3.style.borderColor = "#FF0000";
    }
    if (Usernum.value !== "" && Usernum.value.match(phoneRegex) ){
        phonevalid = true;
        document.getElementById("V12").style.display = "none";
        d4.style.borderColor = "#00FF00";
    }
    else
    {
        document.getElementById("V12").style.display = "block";
        d4.style.borderColor = "#FF0000";
    }
    if (Useradd.value !== ""  ){
        addressvalid = true;
        document.getElementById("V13").style.display = "none";
        d5.style.borderColor = "#00FF00";
    }
    else
    {
        document.getElementById("V13").style.display = "block";
        d5.style.borderColor = "#FF0000";
    }
    if (Userpass.value !== "" && Userpass.value.match(passwordRegEx) ){
        passwordvalid = true;
        document.getElementById("V14").style.display = "none";
        d6.style.borderColor = "#00FF00";
    }
    else
    {
        document.getElementById("V14").style.display = "block";
        d6.style.borderColor = "#FF0000";
    }
    if (Userpass2.value !== "" && Userpass2.value.length <10 && Userpass2.value === Userpass.value ){
        password2valid = true;
        document.getElementById("V15").style.display = "none";
        d7.style.borderColor = "#00FF00";
    }
    else
    {
        document.getElementById("V15").style.display = "block";
        d7.style.borderColor = "#FF0000";
    }
    

   if (uservalid === false || passwordvalid === false || Emailvalid === false || phonevalid=== false || addressvalid=== false || password2valid===false )
   {
        e.preventDefault();  
   }    
};

