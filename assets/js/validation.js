
//Set the colors we will be using ...
var goodColor = "#66cc66";
var badColor = "#ff6666";

function checkFirstPass() {
    var pass1 = document.getElementById('password');
    if(pass1.value == '') {
        pass1.style.backgroundColor = badColor;
    } else {
        pass1.style.backgroundColor = goodColor;
    }
}

function checkSecondPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('password2');
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
    } else {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
    }
}  

function checkName() {
    var name = document.getElementById('name');
    if(name.value == '') {
        name.style.backgroundColor = badColor;
    } else {
        name.style.backgroundColor = goodColor;
    }
}

function checkLastName() {
    var lname = document.getElementById('lname');
    if(lname.value == '') {
        lname.style.backgroundColor = badColor;
    } else {
        lname.style.backgroundColor = goodColor;
    }
}
function checkEmail() {
    var email = document.getElementById('email');
    var re =  /\S+@\S+\.\S+/;
    if(re.test(email.value)) {
        email.style.backgroundColor = goodColor;
    } else {
         email.style.backgroundColor = badColor;
    }

}