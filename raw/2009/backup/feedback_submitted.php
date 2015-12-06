<? 	

if (strtolower($HTTP_POST_VARS['txtSpambot']) == 'chimera') {
	$to = "chimera@nzlarps.org"; 	
	$subject = "Chimera feedback";
	$contents = "The following feedback for Chimera has been submitted.\n\n" . 				
		"VENUE: " . "\n" . $HTTP_POST_VARS['txtVenue'] . "\n\n" . 				
		"CATERING: " . "\n" . $HTTP_POST_VARS['txtCatering'] . "\n\n" . 				
		"EVENT LENGTH: " . "\n" . $HTTP_POST_VARS['txtEventLength'] . "\n\n" . 				
		"GAMES: " . "\n" . $HTTP_POST_VARS['txtGames'] . "\n\n" . 				
		"PRICE: " . "\n" . $HTTP_POST_VARS['txtPrice'] . "\n\n" . 				
		"REGISTRATION AND GAME SELECTION: " . "\n" . $HTTP_POST_VARS['txtRegistration'] . "\n\n" . 				
		"ORGANISERS: " . "\n" . $HTTP_POST_VARS['txtOrganisers'] . "\n\n" . 				
		"OVERALL: " . "\n" . $HTTP_POST_VARS['txtOverall'] . "\n\n" . 				
		"NEXT YEAR: " . "\n" . $HTTP_POST_VARS['txtNextYear'] . "\n\n" . 				
		"OTHER: " . "\n" . $HTTP_POST_VARS['txtOther'];	
	$from_header = "From: chimera@nzlarps.org"; 	
	mail($to, $subject, $contents, $from_header); 
}

?>  


<html>  <head>  	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />  	<meta name="keywords" content="chimera, nzlarps, larp, convention, zealand, auckland" />  	<meta name="description" content="NZLARPS is pleased to present Chimera, the New Zealand LARP convention, on 21-23 August 2009" />  	<meta name="robots" content="all" />  	<title>Chimera, the New Zealand Live Action Role Playing convention.</title>  	<style type="text/css" title="currentStyle" media="screen">@import "chimera.css";</style>  	<script type="text/javascript" src="chimera.js"></script> </head>   <body bgcolor="#070605" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">  <table width="100%" height="100%" cellpadding="0" cellspacing="0"> 	<tr height="1" bgcolor=""> 		<td width="50%"></td>	 		<td width="612"></td>	 		<td width="388"</td>	 		<td width="50%"></td>	 	</tr> 	<tr height="135"> 		<td background="images/header_background.jpg"></td>	 		<td colspan="2"><img src="images/header.jpg" width="1000" height="136"></td>	 		<td background="images/header_background.jpg"></td>	 	</tr> 	<tr height="59"> 		<td background="images/menu_background.gif"></td>	 		<td colspan="2"> 			<table cellpadding="0" cellspacing="0"> 				<tr> 					<td><img src="images/menu_left.gif"></td>	 					<td><a href="index.htm"><img src="images/menu_home.gif" border="0"></a></td>	 					<td><a href="register.htm"><img src="images/menu_register.gif" border="0"></a></td>	 					<td><a href="run.htm"><img src="images/menu_run.gif" border="0"></a></td>	 					<td><a href="larps.htm"><img src="images/menu_larps.gif" border="0"></a></td>	 					<td><a href="timetable.htm"><img src="images/menu_timetable.gif" border="0"></a></td>	 					<td><a href="more.htm"><img src="images/menu_more.gif" border="0"></a></td>	 					<td><img src="images/menu_right.gif"></td>	 				</tr> 			</table> 		</td>	 		<td background="images/menu_background.gif"></td>	 	</tr> 	<tr height="670" style="background-color: #EBE4CC;background-image:url('images/background_content_top.jpg');background-repeat:repeat-x;background-position:0 -113">
 		<td></td>
	 		<td width="612" valign="top">
 			<div style="margin-top:20px;margin-left:30px;margin-right:10px;font-family:Palatino Linotype,Times New Roman,Times,serif"> 						<div style="font-size:38px;color:white">
 					FEEDBACK
 				</div>
  				<div style="margin-top:60px;font-weight:bold;font-size:14px;color:#7F654C">
 					Thanks, your feedback has been submitted.
 					<br><br>
 					<img src="images/divider_horizontal_long.gif">
				</div>
  				<br><br>
 			</div>
 		</td>
	 		<td width="388" class="sideCell" valign="top">
 			<div class="sideContainer">
 				<div class="sideTitle">
 					CHIMERA 2010
 				</div>
 				<div class="sideText">
 					Chimera 2010 will be run at Motu Moana on August 27th-29th 2010.
				</div> 
 				<div class="sideText">
					We look forward to seeing you there. 
				</div> 

 				<div style="margin-top:140px"><img src="images/divider_horizontal_short.jpg"></div>
  				<div style="margin-top:50px"><script>writeRandomImage();</script></div>
 			</div>
 		</td>
 		<td></td>	 	</tr> 	<tr height="127"> 		<td background="images/footer_background.gif"></td>	 		<td colspan="2"><a href="larp_the_great_exhibition.htm"><img src="images/footer.gif" width="1000" height="127" border="0"></a></td>	 		<td background="images/footer_background.gif"></td>	 	</tr> 	<tr height="100%"> 		<td colspan="4"></td> 	</tr> </table> </body> </html>