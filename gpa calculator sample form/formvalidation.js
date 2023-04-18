function validateForm() {
    var name = document.forms["submission"]["name"].value;
    var regno = document.forms["submission"]["Regno:"].value;
    var email = document.forms["submission"]["email"].value;
    var branch = document.forms["submission"]["branch"].value;
    var webtechmarks = document.forms["submission"]["Webtechmarks"].value;
    var webtechlab = document.forms["submission"]["Webtechlab"].value;
    var os = document.forms["submission"]["os"].value;
    var oslab = document.forms["submission"]["oslab"].value;
    var rdbms = document.forms["submission"]["RDBMS"].value;
    var rdbmslab = document.forms["submission"]["RDBMSlab"].value;
    var em4 = document.forms["submission"]["EM4"].value;
    var valethics = document.forms["submission"]["valethics"].value;
  
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    if (regno == "") {
        alert("Registration number must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (branch == "") {
        alert("Branch must be selected");
        return false;
    }
    if (webtechmarks == "") {
        alert("Webtech marks must be filled out");
        return false;
    }
    if (webtechlab == "") {
        alert("Webtech lab marks must be filled out");
        return false;
    }
    if (os == "") {
        alert("OS marks must be filled out");
        return false;
    }
    if (oslab == "") {
        alert("OS lab marks must be filled out");
        return false;
    }
    if (rdbms == "") {
        alert("RDBMS marks must be filled out");
        return false;
    }
    if (rdbmslab == "") {
        alert("RDBMS lab marks must be filled out");
        return false;
    }
    if (em4 == "") {
        alert("Engineering maths 4 marks must be filled out");
        return false;
    }
    if (valethics == "") {
        alert("Value ethics and governance marks must be filled out");
        return false;
    }
  
    return true;
}