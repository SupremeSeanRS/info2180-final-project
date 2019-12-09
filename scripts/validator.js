function validateForm() {

    var pass = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    if (checkPassword(pass) && checkEmail(email) && lname != "" && fname != "") {
        alert("Successful");
	console.log("Hello");
        return true;
    }
    else {
        alert("Creating user was not successful. Please try again");
        return false;
    }
}


function checkEmail(inpEmail) {
    var mailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    if (inpEmail.match(mailRegex)) {
        return true;
    }
    else {
        alert("Email does not conform to the standard email format");
        return false;
    }
}

function checkPassword(inpPass) {
    var passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,16}$/;
    if(inpPass.match(passRegex)) {
        return true;
    }
    else {
        alert("Password should be at 8-16 characters long.");
        return false;
    }
}