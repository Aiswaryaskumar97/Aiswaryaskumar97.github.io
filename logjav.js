function vform() {
    
    var z = document.forms["a"]["login_user"].value;
    var x = document.forms["a"]["username"].value;
    var y = document.forms["a"]["password"].value;

    if (x == "") {
        alert("Username is required");
        return false;
    }
    else if (y == "") {
        alert("Password is required");
        return false;
        	}
        	}        
