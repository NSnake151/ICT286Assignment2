function orderSearch(str) {
		
	
	window.alert("1");
	if (str == "") {
        alert("ISBN MUST NOT BE EMPTY");
        return;
    }
	else
	{
		var xhr = new XMLHttpRequest();
		xhr.open("GET", "textbookOrder.php?q=" + str);
  
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
		
			document.getElementById("curentOrder").innerHTML += xhr.responseText;
			

		
		}
		};
		
		
		xhr.send();
		orderPrice(str);

	}

}

function orderPrice(str) {
	
		var xhr = new XMLHttpRequest();
		xhr.open("GET", "textbookPrice.php?q=" + str);
  
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
			var aprice = xhr.responseText;
			var totalprice;
			totalprice = document.getElementById("curentTotal").innerHTML;
			document.getElementById("curentTotal").innerHTML = parseFloat(totalprice)+parseFloat(aprice);
		}
		};
	

		xhr.send();

}