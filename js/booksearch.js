function searchBooks(str) {
	
	var tsearch;
	tsearch = "You searched for a title containing: " + str;
	document.getElementById("searchtxt").innerHTML = tsearch;		
	
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "http://ceto.murdoch.edu.au/~31873958/submission2/Assignment2/php/textbookSearch.php?q=" + str);
  
  xhr.onreadystatechange = function () {
	if (xhr.readyState == 4 && xhr.status == 200) {
		
        document.getElementById("bookholder").innerHTML = xhr.responseText;
    }
  };

	xhr.send();

}

function searchCatagoryBooks(str) {
	
	var ysearch;
	ysearch = "You searched by Publisher: " + str;
	document.getElementById("searchtxt").innerHTML = ysearch;	
	
	
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "http://ceto.murdoch.edu.au/~31873958/submission2/Assignment2/php/catagoryBookSearch.php?q=" + str);
  xhr.onreadystatechange = function () {
	if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("bookholder").innerHTML = xhr.responseText;
    }
  };

	xhr.send();

}