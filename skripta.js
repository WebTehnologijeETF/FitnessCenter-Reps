
function validirajFormu() {
    var i = document.forms["forma"]["ime"].value;
    if (i == null || i == "") {
        alert("Ime prazno!");
        return false;
    }
}

function validirajTekst(polje){
var greskaTekst = document.getElementById('greskaTekst');
greskaTekst.innerHTML="";
	if(document.forms["forma"]["ime"].value == '' || document.forms["forma"]["ime"].length<3){
		greskaTekst.style.display="inline-block";
		greskaTekst.style.marginRight="50px";
		greskaTekst.innerHTML+="<img src='emir logo1.png' id='error'>";
		greskaTekst.innerHTML+="Ime nije validno!";
		return false;
	}
}
