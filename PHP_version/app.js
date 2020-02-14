function checkoption(ck) {
  var n = document.getElementById('number').value;
  if (n+0 >= 0) {
    if (ck=="enc") {
      // console.log('this go to enc func');
      enc();
    }
    else {
      // console.log('this go to dec func');
      dec();
    }
  }
  else{
      alert('invalid number');
  }
}

function enc() {
      var str = document.getElementById('str').value;
      var n = document.getElementById('number').value;
      var textandoption = str+"-"+n;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var ajaxval = document.getElementById("tbShow").value = this.responseText;
                console.log(this.responseText);
                // var hash = this.responseText;
            }
        };
        // xmlhttp.open("GET","server.php?id="+val,true);
        xmlhttp.open("GET","http://127.0.0.1/webser_mini/encryption.php?id="+textandoption,true);
        xmlhttp.send()
}

function dec() {
      var str = document.getElementById('str').value;
      var n = document.getElementById('number').value;
      var textandoption = str+"-"+n;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var ajaxval = document.getElementById("tbShow").value = this.responseText;
                console.log(this.responseText);
                // var hash = this.responseText;
            }
        };
        // xmlhttp.open("GET","server.php?id="+val,true);
        xmlhttp.open("GET","http://127.0.0.1/webser_mini/decrypttion.php?id="+textandoption,true);
        xmlhttp.send();
}
