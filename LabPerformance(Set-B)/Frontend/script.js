//"use strict";

function f1()
{
	var name = document.getElementById('box').value;
	var label = document.getElementById('demo');

	label.innerHTML=name;
	//alert('1');
}

function loadDoc() {
	  var xhttp = new XMLHttpRequest();
	  var name = document.getElementById('box').value; 
	  
	  xhttp.open("POST", "../Backend/search.php", true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send("key="+name);
	  xhttp.onreadystatechange = function() {
	   if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("demo").innerHTML = this.responseText;
	     document.getElementById("gif").innerHTML = "";
	    }
	  };
}