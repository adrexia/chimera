function writeRandomImage()
{
	var i = Math.floor(Math.random()*11+1);
	document.write('<img src="images/photo' + i + '.jpg" border="0" width="274" height="279">');
}


function goLite(FRM,BTN)
{
	window.document.forms[FRM].elements[BTN].style.color = "#000000";
	window.document.forms[FRM].elements[BTN].style.borderColor = "#070605";
}

function goDim(FRM,BTN)
{
   window.document.forms[FRM].elements[BTN].style.color = "#382F28";
   window.document.forms[FRM].elements[BTN].style.borderColor = "#382F28";
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
