function searchBooks(str) {
	
	var tsearch;
	tsearch = "You searched for a title containing: " + str;
	window.alert(tsearch);
	document.getElementById("searchtxt").innerHTML = tsearch;		
	
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "textbookSearch.php?q=" + str);
  window.alert("xhr open get started");
  
  xhr.onreadystatechange = function () {
	if (xhr.readyState == 4 && xhr.status == 200) {
		
		window.alert("hello"+ str + " " + xhr.responseText);
        document.getElementById("bookholder").innerHTML = xhr.responseText;
    }
  };

	xhr.send();

}

function searchCatagoryBooks(str) {
	
	var ysearch;
	ysearch = "You searched by Publisher: " + str;
	  window.alert(ysearch);
	document.getElementById("searchtxt").innerHTML = ysearch;	
	
	
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "catagoryBookSearch.php?q=" + str);
  window.alert("xhr open get started cat");
  xhr.onreadystatechange = function () {
	window.alert("hello"+ str + " " + xhr.responseText);
	if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("bookholder").innerHTML = xhr.responseText;
    }
  };

	xhr.send();

}