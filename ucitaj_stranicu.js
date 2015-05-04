function ucitajStranicu(ime_stranice) {
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function () {
		if(ajax.readyState == 4 && ajax.status == 200) {
			document.getElementById("glavni_dio").innerHTML = ajax.responseText;
		}
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("glavni_dio").innerHTML = "Four oh four! Nepoznat URL!";
	}
	
	ajax.open("GET", ime_stranice, true);
	ajax.send();
}