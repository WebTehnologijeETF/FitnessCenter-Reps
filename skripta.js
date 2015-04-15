
function validirajFormu() {
    var i = document.forms["forma"]["ime"].value;
    if (i == null || i == "") {
        alert("Ime prazno!");
        return false;
    }
}

function samoSlova() { 
var regex=/[^a-z|^A-Z|^\s]/;
if(document.getElementById("ime").value.match(regex))
{
return false;
}
if(document.getElementById("prezime").value.match(regex))
{
return false;
}  
}
  
function validirajIme(){
var greskaTekst = document.getElementById('greskaIme');
greskaTekst.innerHTML="";
	if(samoSlova()== false){
		greskaTekst.style.display="inline-block";
		greskaTekst.style.marginRight="50px";
		greskaTekst.innerHTML+="<img src='emir logo1.png' id='error'>";
		greskaTekst.innerHTML+="Slova i razmaci dozvoljeni!";
	}
}

function validirajPrezime(){
var greskaTekst = document.getElementById('greskaPrezime');
greskaTekst.innerHTML="";
	if(samoSlova()== false){
		greskaTekst.style.display="inline-block";
		greskaTekst.style.marginRight="50px";
		greskaTekst.innerHTML+="<img src='emir logo1.png' id='error'>";
		greskaTekst.innerHTML+="Slova i razmaci dozvoljeni!";
	}
}

function otvori(id){
	odabrani = document.getElementById(id);
	odabrani.style.visibility="visible";
}

function zatvori(id){
	odabrani = document.getElementById(id);
	odabrani.style.visibility="hidden";

}