function writeRandomImage()
{
	var i = Math.floor(Math.random()*35+1);
	document.write('<img src="_assets/_img/photo' + i + '.png" border="0" width="272" height="281" alt="Photo ' + i + ' from previous Chimera"/>');
}

function validateForm(theForm)
{
	divValidationWarning = document.getElementById('ValidationWarning');
	if (theForm.name != 'frmFeedback' && ((theForm.txtName.value == '') || (theForm.txtEmail.value == ''))) {
		divValidationWarning.innerHTML = "Please enter your name and email address.";
		divValidationWarning.style.visibility = "visible";
		return false;
	} else if (!theForm.chkCodeofConduct.checked) {
		divValidationWarning.innerHTML = "Please accept the Code of Conduct of Chimera to continue.";
		divValidationWarning.style.visibility = "visible";
		return false;
	} else if (theForm.txtSpambot.value.toLowerCase() != "chimera") {
		divValidationWarning.innerHTML = "Are you sure you're not a spambot?";
		divValidationWarning.style.visibility="visible";
		return false;
	} else {
		divValidationWarning.innerHTML = "";
		divValidationWarning.style.visibility="hidden";
		return true;
	}
}
