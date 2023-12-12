
function seterror(id, error) {
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateForm() {
    var returnval = true;
    var name = document.form['myForm']["name"].value;
    if (name.length < 5) {
        seterror("name", "*invalid name");
        returnval = false;
    }

    var age = document.form['myForm']["age"].value;
    if (age.length <= 30) {
        seterror("age", "*invalid age");
        returnval = false;
    }

    var gender = document.form['myForm']["gender"].value;
    if (gender.length > 6) {
        seterror("gender", "*invalid gender");
        returnval = false;
    }

    var email = document.form['myForm']["email"].value;
    if (email.length > 30) {
        seterror("email", "*email too small or big");
        returnval = false;
    }
    var phone = document.form['myForm']["phone"].value;
    if (name.length != 10) {
        seterror("phone", "*phone number should be of 10 digits");
        returnval = false;
    }

}
