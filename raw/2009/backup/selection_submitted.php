<?
	if (strtolower($HTTP_POST_VARS['txtSpambot']) == 'chimera') {

	//Send email to Chimera
	$to = "chimera@nzlarps.org";
	$subject = "Chimera game selection for " . $HTTP_POST_VARS['txtName'];
	$contents = "The following game selection for Chimera has been submitted.\r\n\r\n" .
				".\r\n\r\n" .
				"Name: " . $HTTP_POST_VARS['txtName'] . "\r\n\r\n" .
				"Email: " . $HTTP_POST_VARS['txtEmail'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 1 Choice 1: " . $HTTP_POST_VARS['txtRound1Choice1'] . "\r\n\r\n" .
				"Round 1 Choice 2: " . $HTTP_POST_VARS['txtRound1Choice2'] . "\r\n\r\n" .
				"Round 1 Character: " . $HTTP_POST_VARS['txtRound1Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 2 Choice 1: " . $HTTP_POST_VARS['txtRound2Choice1'] . "\r\n\r\n" .
				"Round 2 Choice 2: " . $HTTP_POST_VARS['txtRound2Choice2'] . "\r\n\r\n" .
				"Round 2 Character: " . $HTTP_POST_VARS['txtRound2Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 3 Choice 1: " . $HTTP_POST_VARS['txtRound3Choice1'] . "\r\n\r\n" .
				"Round 3 Choice 2: " . $HTTP_POST_VARS['txtRound3Choice2'] . "\r\n\r\n" .
				"Round 3 Character: " . $HTTP_POST_VARS['txtRound3Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 4 Choice: " . $HTTP_POST_VARS['txtRound4Choice'] . "\r\n\r\n" .
				"Round 4 Character: " . $HTTP_POST_VARS['txtRound4Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 5 Choice 1: " . $HTTP_POST_VARS['txtRound5Choice1'] . "\r\n\r\n" .
				"Round 5 Choice 2: " . $HTTP_POST_VARS['txtRound5Choice2'] . "\r\n\r\n" .
				"Round 5 Character: " . $HTTP_POST_VARS['txtRound5Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 6 Choice 1: " . $HTTP_POST_VARS['txtRound6Choice1'] . "\r\n\r\n" .
				"Round 6 Choice 2: " . $HTTP_POST_VARS['txtRound6Choice2'] . "\r\n\r\n" .
				"Round 6 Character: " . $HTTP_POST_VARS['txtRound6Character'];
	$from_header = "From: chimera@nzlarps.org";
	mail($to, $subject, $contents, $from_header);

	//Send email to registrant
	$to = $HTTP_POST_VARS['txtEmail'];
	$subject = "Your Chimera 2009 game selection";
	$contents = "Hi!\r\n\r\nYou have submitted the following game selection for Chimera 2009:\r\n\r\n" .
				".\r\n\r\n" .
				"Name: " . $HTTP_POST_VARS['txtName'] . "\r\n\r\n" .
				"Email: " . $HTTP_POST_VARS['txtEmail'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 1 Choice 1: " . $HTTP_POST_VARS['txtRound1Choice1'] . "\r\n\r\n" .
				"Round 1 Choice 2: " . $HTTP_POST_VARS['txtRound1Choice2'] . "\r\n\r\n" .
				"Round 1 Character: " . $HTTP_POST_VARS['txtRound1Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 2 Choice 1: " . $HTTP_POST_VARS['txtRound2Choice1'] . "\r\n\r\n" .
				"Round 2 Choice 2: " . $HTTP_POST_VARS['txtRound2Choice2'] . "\r\n\r\n" .
				"Round 2 Character: " . $HTTP_POST_VARS['txtRound2Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 3 Choice 1: " . $HTTP_POST_VARS['txtRound3Choice1'] . "\r\n\r\n" .
				"Round 3 Choice 2: " . $HTTP_POST_VARS['txtRound3Choice2'] . "\r\n\r\n" .
				"Round 3 Character: " . $HTTP_POST_VARS['txtRound3Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 4 Choice: " . $HTTP_POST_VARS['txtRound4Choice'] . "\r\n\r\n" .
				"Round 4 Character: " . $HTTP_POST_VARS['txtRound4Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 5 Choice 1: " . $HTTP_POST_VARS['txtRound5Choice1'] . "\r\n\r\n" .
				"Round 5 Choice 2: " . $HTTP_POST_VARS['txtRound5Choice2'] . "\r\n\r\n" .
				"Round 5 Character: " . $HTTP_POST_VARS['txtRound5Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"Round 6 Choice 1: " . $HTTP_POST_VARS['txtRound6Choice1'] . "\r\n\r\n" .
				"Round 6 Choice 2: " . $HTTP_POST_VARS['txtRound6Choice2'] . "\r\n\r\n" .
				"Round 6 Character: " . $HTTP_POST_VARS['txtRound6Character'] . "\r\n\r\n" .
				".\r\n\r\n" .
				"We look forward to seeing you there.\r\n\r\nCheers,\r\n\r\nThe Chimera 2009 team\r\nchimera@nzlarps.org";
	$from_header = "From: chimera@nzlarps.org";
	mail($to, $subject, $contents, $from_header);
}
?>

<html> 
<head> 
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" /> 
	<meta name="keywords" content="chimera, nzlarps, larp, convention, zealand, auckland" /> 
	<meta name="description" content="NZLARPS is pleased to present Chimera, the New Zealand LARP convention, on 21-23 August 2009" /> 
	<meta name="robots" content="all" /> 
	<title>Chimera, the New Zealand Live Action Role Playing convention.</title> 
	<style type="text/css" title="currentStyle" media="screen">@import "chimera.css";</style> 
	<script type="text/javascript" src="chimera.js"></script>
</head> 

<body bgcolor="#070605" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"> 
<table width="100%" height="100%" cellpadding="0" cellspacing="0">
	<tr height="1" bgcolor="">
		<td width="50%"></td>	
		<td width="612"></td>	
		<td width="388"</td>	
		<td width="50%"></td>	
	</tr>
	<tr height="135">
		<td background="images/header_background.jpg"></td>	
		<td colspan="2"><img src="images/header.jpg" width="1000" height="136"></td>	
		<td background="images/header_background.jpg"></td>	
	</tr>
	<tr height="59">
		<td background="images/menu_background.gif"></td>	
		<td colspan="2">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td><img src="images/menu_left.gif"></td>	
					<td><a href="index.htm"><img src="images/menu_home.gif" border="0"></a></td>	
					<td><a href="register.htm"><img src="images/menu_register_selected.gif" border="0"></a></td>	
					<td><a href="run.htm"><img src="images/menu_run.gif" border="0"></a></td>	
					<td><a href="larps.htm"><img src="images/menu_larps.gif" border="0"></a></td>	
					<td><a href="timetable.htm"><img src="images/menu_timetable.gif" border="0"></a></td>	
					<td><a href="more.htm"><img src="images/menu_more.gif" border="0"></a></td>	
					<td><img src="images/menu_right.gif"></td>	
				</tr>
			</table>
		</td>	
		<td background="images/menu_background.gif"></td>	
	</tr>
	<tr height="670" style="background-color: #EBE4CC;background-image:url('images/background_content_top.jpg');background-repeat:repeat-x;background-position:0 -113">
		<td></td>	
		<td width="612" valign="top">
			<div class="bodyContainer">
				<div class="pageTitle">
					Game Selection
				</div>
				<div class="bodyText">
					Thanks, your game selection has been submitted. An email has also been sent to the address you supplied as a record of your selection.
				</div>
				<div class="bodyText">
					We look forward to seeing you at Chimera 2009.
				</div>
				<div class="divider"><img src="images/divider_horizontal_long.gif"></div>
				<br><br>
			</div>
		</td>	
		<td width="388" class="sideCell" valign="top">
			<div class="sideContainer">
				<div class="sideTitle">
					Your selection
				</div>
				<div class="sideText"> 							
					We will do our best to place you in each of your preferred events. If an event is over-booked, we will be in contact to discuss options. 
				</div>

				<div style="margin-top:150px"><img src="images/divider_horizontal_short.jpg"></div>
				<div style="margin-top:20px"><script>writeRandomImage();</script></div>
			</div>			
		</td>
		<td></td>	
	</tr>
	<tr height="127">
		<td background="images/footer_background.gif"></td>	
		<td colspan="2"><a href="larp_the_great_exhibition.htm"><img src="images/footer.gif" width="1000" height="127" border="0"></a></td>	
		<td background="images/footer_background.gif"></td>	
	</tr>
	<tr height="100%">
		<td colspan="4"></td>
	</tr>
</table>
</body>
</html>