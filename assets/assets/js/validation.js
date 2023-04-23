// JavaScript Document
function validation()
{
	if(document.getElementById('fn').value=="")
	{
		document.getElementById('fn1').innerHTML="Required Field";
		document.getElementById('fn').focus();	
		return false;
	}
	else
	{
		document.getElementById('fn').innerHTML="";
	}
		if(document.getElementById('ln').value=="")
	{
		document.getElementById('ln1').innerHTML="Required Field";
		document.getElementById('ln').focus();	
		return false;
	}
	else
	{
		document.getElementById('ln').innerHTML="";
	}
	var em = document.getElementById('em');
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if(!filter.test(em.value))
	{
	document.getElementById('em1').innerHTML="Provide a valid email address";
	document.getElementById('em').focus();
	return false;	
	}
	else
	{
		document.getElementById('em').innerHTML="";	
	}
	var pn = document.getElementById('pn');
	var filter = /^\d{10}$/;
	
	if(!filter.test(pn.value))
	{
	document.getElementById('pn1').innerHTML="Provide a valid 10 digit phone number";
	document.getElementById('pn').focus();
	return false;	
	}
	else
	{
		document.getElementById('pn').innerHTML="";	
	}
			if(document.getElementById('un').value=="")
	{
		document.getElementById('un1').innerHTML="Required Field";
		document.getElementById('un').focus();	
		return false;
	}
	else
	{
		document.getElementById('un').innerHTML="";
	}
		var pass = document.getElementById('pass');
	var filter = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
	
	if(!filter.test(pass.value))
	{
	document.getElementById('pass1').innerHTML="Provide a valid email address";
	document.getElementById('pass').focus();
	return false;	
	}
	else
	{
		document.getElementById('pass').innerHTML="";	
	}
}