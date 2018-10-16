function vform() {
    var x = document.forms["a"]["username"].value;
    var y = document.forms["a"]["password_1"].value;
    var z = document.forms["a"]["email"].value;
    
    var p = document.forms["a"]["password_2"].value;
   

    if (x == "") {
        alert("Username is required");
        return false;
    }
    else if (y == "") {
        alert("Password is required");
        return false;
            }
    else if (z == "") {
        alert("Email id is required");
        return false;
    }
    
    
    else (p == "") {
        alert("Retype Password");
        return false;
    }

    
}