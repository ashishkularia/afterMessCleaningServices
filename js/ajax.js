function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}

function login() {
    uname = document.getElementById("lUname").value;
    pass = document.getElementById("lPass").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert("worked");
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("POST", "../master.php?q=login&uname=" + uname + "&pass=" + pass, true);
    xmlhttp.send();
}