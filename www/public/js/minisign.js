window.onload = function()
{
	var minisign_shut = document.getElementById('minisign_shut');
	var minisign = document.getElementById('minisign');
    var minisign_signup = document.getElementById('minisign_signup');
    var minisign_signin = document.getElementById('minisign_signin');
	var minisign_cover = document.getElementById('minisign_cover');
	var minisign_subject = document.getElementById('minisign_subject');
	var subject = minisign_subject.getElementsByTagName('a');
	var pin = document.getElementsByClassName('pin')[0];
	var img_pin = document.getElementById('img_pin');
	minisign_signup.style.display = 'none';
	subject[0].style.color = 'gray';
	
	pin.onclick = function()
	{
	     img_pin.src = 'http://localhost/auth/pin.php';
	}
	
	subject[0].onclick = function()
	{
	   subject[0].style.color = 'gray';
	   subject[1].style.color = 'blue';
	   minisign_signup.style.display = 'none';	
	   minisign_signin.style.display = 'block';	
	}
	
    subject[1].onclick = function()
	{
	   subject[1].style.color = 'gray';
	   subject[0].style.color = 'blue';
	   minisign_signup.style.display = 'block';	
	   minisign_signin.style.display = 'none';	
	}
	
    
    minisign_shut.onclick = function()
    {
		minisign.style.display = 'none';
	    minisign_cover.style.display = 'none';
	}
	
}
