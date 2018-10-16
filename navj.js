function tform() {
    var x = document.forms["l"]["from"].value;
     var y = document.forms["l"]["to"].value;
      var z = document.forms["l"]["Ddate"].value;
       var p = document.forms["l"]["Rdate"].value;
        var q = document.forms["l"]["qty"].value;
    
    if (x == "") {
        alert("Fill the field 'From'");
        return false;
    }
    else if (y == "") {
        alert("Fill the field 'To'");
        return false;
    }
    else if (z == "") {
        alert("Select Departure Date");
        return false;
    }
    else if (p == "") {
        alert("Select Return Date");
        return false;
    }
    else if (q == "") {
        alert("Enter Number of passengers");
        return false;
    }
    
}