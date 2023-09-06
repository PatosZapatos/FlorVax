function validate_password() {
    var usname = document.getElementsByName('username').value;
    var pass = document.getElementById('password1').value;
    var confirm_pass = document.getElementById('password2').value;

    if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML
            = '☒ Las contraseñas deben coincidir.';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
    } else {
            document.getElementById('wrong_pass_alert').style.color = 'green';
            document.getElementById('wrong_pass_alert').innerHTML =
                '';
            document.getElementById('create').disabled = false;
            document.getElementById('create').style.opacity = (1);
    }
}

function wrong_pass_alert() {
    if (document.getElementById('password1').value != "" &&
        document.getElementById('confirm_pass').value != "") {
        alert("Your response is submitted");
    } else {
        alert("Please fill all the fields");
    }
}