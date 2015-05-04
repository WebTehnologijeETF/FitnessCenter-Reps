function validirajFormu(){
var cek=document.getElementById("cekboks");
if(!validirajIme() || !validirajPrezime() || !validirajMail() || !validirajKomentar() || !istiMail() || regijaValidirana==false)
return false;

return true;

}

function samoSlova(pom) { 
var regex=/^[a-zšđčćž]+$/i;
if(pom.match(regex))
return true;

return false;
}

function ispravanMail(ref) { 
var regex=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
if(ref.match(regex))
{
return true;
}
return false;
}
  
function validirajIme(){
	var greskaTekst=document.getElementById("greskaIme");
	var pom=document.getElementById("ime").value;
	if(!samoSlova(pom) || pom=="" || pom==null){

		greskaTekst.innerHTML="Neispravno ime!";
		return false;
	}
	greskaTekst.innerHTML="";
	return true;
}

function validirajPrezime(){
var greskaTekst = document.getElementById("greskaPrezime");
var pom1=document.getElementById("prezime").value;
	if(!samoSlova(pom1) || pom1=="" || pom1==null){
		greskaTekst.innerHTML="Neispravno prezime!";
		
		return false;
	}
	greskaTekst.innerHTML="";
	return true;
}

function validirajMail(){
var greska = document.getElementById("greskaMail1");
var pom=document.getElementById("mail1").value;
	if(!ispravanMail(pom)){
		greska.innerHTML="Neispravan e-mail!";
		return false;
	}
	greska.innerHTML="";
	return true;
}

function istiMail(){
var greska = document.getElementById("greskaMail2");
var pom1=document.getElementById("mail1").value;
var pom2=document.getElementById("mail2").value;
if(pom1!=pom2){
	greska.innerHTML="Potvrdite e-mail!";
	return false;
}
greska.innerHTML="";
return true;

}

function validirajKomentar(ref){
var greska = document.getElementById("greskaKom");
var pom=document.getElementById("komentar").value;
	if(ref.value.length<5 || ref.value=="" || ref.value==null){
		greska.innerHTML="Minimalno 5 karaktera!";
		return false;
	}
	greska.innerHTML="";
	return true;
}

function otvori(id){
	odabrani = document.getElementById(id);
	odabrani.style.visibility="visible";
}

function zatvori(id){
	odabrani = document.getElementById(id);
	odabrani.style.visibility="hidden";

}

function valjalValuta(){
return(validirajRegiju());
}

var regijaValidirana = false;

function validirajRegiju(){
	var regija=document.getElementById("regija").value

	var req=new XMLHttpRequest();

	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			var response=JSON.parse(req.responseText);
			document.getElementById("greskaRegija").innerHTML="";
			document.getElementById("regija").value=response[0].region;					
			regijaValidirana=true;
			return true;	
		}
		else if(req.status==404){
			document.getElementById("greskaRegija").innerHTML="Neispravna regija!";
			regijaValidirana=false;
			return false;
		}	
	}
	
	var url="https://restcountries.eu/rest/v1/region/"+regija;
	req.open("GET",url,true);
	req.send();
}