function checkEmptyForm() {

    var first = document.forms["subs"]["first"].value;
    var last = document.forms["subs"]["last"].value;
    var email = document.forms["subs"]["email"].value;

    if (first == "") {
        alert("Please fill up your first name");
    }
    else if (last == "") {
        alert("Please fill up your last name");
    }
    else if (email == "") {
        alert("Please fill up your e-mail");
    }
    else {
        alert("Thank you for submitting your inscription, we will contact you soon.");
    }
}