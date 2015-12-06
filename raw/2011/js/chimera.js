function writeRandomImage()
{
	var i = Math.floor(Math.random()*14+1);
	document.write('<img src="_assets/_img/photo' + i + '.png" border="0" width="272" height="281" alt="Photo ' + i + ' from previous Chimera"/>');
}

function validateForm(theForm)
{
	if (theForm.name != 'frmFeedback' && ((theForm.txtName.value == '') || (theForm.txtEmail.value == ''))) {
		ValidationWarning.innerHTML = "Please enter your name and email address.";
		ValidationWarning.style.visibility = "visible";
		return false;
	} else if (theForm.txtSpambot.value.toLowerCase() != "chimera") {
		ValidationWarning.innerHTML = "Are you sure you're not a spambot?";
		ValidationWarning.style.visibility="visible";
		return false;
	} else {
		ValidationWarning.innerHTML = "";
		ValidationWarning.style.visibility="hidden";
		return true;
	}
}
