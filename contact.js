

var phoneRegex = /^01[0125][0-9]{8}$/;
var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

function submission() {
var useremail = document.forms["contactform"]["email"];
var username = document.forms["contactform"]["name"];
var Usernum = document.forms["contactform"]["phonno"]; 

    var uservalid = false;
    var Emailvalid = false;
    var phonevalid = false;


    if (username.value !== "" && username.value.length <= 12) {
        uservalid = true;
        document.getElementById("V10").style.display = "none";
        
    } else {
        document.getElementById("V10").style.display = "block";
    } if (Useremail.value !== "" && Useremail.value.match(validRegex)) {
        Emailvalid = true;

        document.getElementById("V11").style.display = "none";
    }
    else {
        document.getElementById("V11").style.display = "block";
    } if (Usernum.value !== "" && Usernum.value.match(phoneRegex)) {
        phonevalid = true;
        document.getElementById("V12").style.display = "none";
    }
    else {
        document.getElementById("V12").style.display = "block";
    }
}