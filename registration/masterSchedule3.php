

















































<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en>
<HEAD>
<TITLE>myUTAR - The Universiti Tunku Abdul Rahman Web Portal</TITLE>

<script language="javascript">
function MM_openBrWindow(theURL,winName,features) { 
  window.open(theURL,winName,features);
}
function mypopup(url, sbar, resize, width, height, top, left){
	tit=''
	reWin=window.open(url, tit, 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=' + sbar + ',resizable=' + resize + ',width=' + width + ',height=' + height + ',top=' + top + ',left=' + left) 
}
function checkPhone(evt){
	evt = (evt) ? evt : window.event
	var charCode = (evt.which) ? evt.which : evt.keyCode
	
	if ((charCode > 46 && charCode < 58) || charCode==45 || charCode==13){				
		return true
	}
	else{
		alert("You can only key in numeric number")
		return false
	}
}
function checkNumeric(evt){
	evt = (evt) ? evt : window.event
	var charCode = (evt.which) ? evt.which : evt.keyCode
	
	if((charCode > 47 && charCode < 58) || charCode==13){				
		return true
	}
	else{
		alert("You can only key in numeric number")
		return false
	}
}
function IsNumeric(strString)
{
   var strValidChars = "0123456789.-/";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) return false;
   for (i = 0; i < strString.length && blnResult == true; i++)
   {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
      {
         blnResult = false;
      }
   }
   return blnResult;
}
function logout(myPath,logoutURL){	
	//alert(myPath+logoutURL)
	if(confirm("Are you sure to log out?")){
		window.location=myPath+logoutURL;
	}else
		return false;
}
function expireSession(){
	alert("Session Expired !!!");
	window.location="http://unitreg.utar.edu.my/portal/courseRegStu/logout.jsp";
}

setTimeout('expireSession()',360000);
</script>
<link href="http://unitreg.utar.edu.my/portal/courseRegStu/skin/main.css" rel="stylesheet" type="text/css">
<link href="http://unitreg.utar.edu.my/portal/courseRegStu/skin/print.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY> 
<table cellSpacing=0 cellPadding=0 width=100% border=0 id="notDisplay"> 
  <tbody> 
    <tr class="utarbgcolor"> 
      <td width="70"  class="utar_logo"> </td> 
      <td width="693" valign="bottom" ><div class="topmenu">&nbsp;</div> 
        <TABLE height=23 cellSpacing=0 cellPadding=0 border=0> 
          <tbody> 
            <tr class="utarbgcolor"> 
               
	  
              <td class="tab_back_on"> <A class="tab-on" onMouseOver="window.status='Done'; return true;"  href="#" > <SPAN class="tab-on">Home</SPAN></A> </td> 
              <td width=7 class="tab_right_on"></td> 
              <TD width=7><IMG height=23 hspace=0 src="http://unitreg.utar.edu.my/portal/courseRegStu/images/tab_left_off.gif"  width=7 border=0><BR></TD> 
			  <TD align=center noWrap align=middle background="http://unitreg.utar.edu.my/portal/courseRegStu/images/tab_back_off.gif" bgColor=#21455a>&nbsp;&nbsp; 
			  <A class=tab-off href="#" onClick="logout('http://unitreg.utar.edu.my/portal/courseRegStu/','logout.jsp');"> <SPAN class=tab-off>Log Out</SPAN></A>&nbsp;&nbsp;</TD> 
              <TD width=7><IMG height=23 hspace=0 src="http://unitreg.utar.edu.my/portal/courseRegStu/images/tab_right_off.gif" width=7 border=0><BR></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <TD colspan="2" noWrap class="menubgcolor">&nbsp; </TD> 
    </TR> 
  </TBODY> 
</TABLE> 
<table width="100%" height="530"  border="0" cellpadding="0" cellspacing="0"> 
<tr>
	<td>Welcome, WONG JIA HAU (15UEB00181)
	<img src="../images/help_icon.gif" border="0" style="margin-left:5em "> <a href="../GD-ICTC-001.pdf" target="_blank">User Guide</a>
	</td>
</tr>
<tr> 
 



<td width="100%" valign="top">
	<table width=100% height="520" border=0 cellPadding=0 cellSpacing=0>        			
		<tr>
			<td width="100%" valign="top">					
				<table width="100%" border=0 align=center cellpadding=0 cellspacing="0">            				
					<tr>
						<td>
<!--  Start Content -->
<script language="javascript">

function onEnterClick(sid){
	with(document.frmSummary){
		reqSid.value = sid;
		submit();
	}
} 

function viewStructure(cd){
	window.open('viewStructure.jsp?reqCode='+cd,'view_structure','top=0, left=0, toolbar=no,scrollbars=yes,menubar=no,width=830,height=600,resizable=yes')
}

</script>




<table width="100%" border=0 align=center cellpadding=0 cellspacing="0">  
	<tr>
		<td class="dotted"><img src = "http://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif" height="1px" width="1px"></td>
	</tr>								
	<tr>
		<td width="100%"><h2><img src="http://unitreg.utar.edu.my/portal/courseRegStu/images/link1.gif"> Master Session</h2></td>
	</tr>
	<tr>
		<td class="dotted"><img src = "http://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif" height="1px" width="1px"></td>
	</tr>								
</table>

	<font class="red">Please select a session to enter into course registration page </font>

<div id="debugSql"></div>
<div>
	<table id="tblGrid" width="99%" class="normal">
	<form name="frmSummary" action="targetRegSession.jsp" method="POST">
		<input type="hidden" name="reqSid" value="">
		<tr align="left">
			<td colspan="10" class="normalTbl-header">List Of Master Session</td>
		</tr>		
		<tr>
			<td align="center" class="normalTbl-subheader">No.</td>
			<td align="center" class="normalTbl-subheader">Session</td>
			<td align="center" class="normalTbl-subheader">Faculty</td>
			<td align="center"  class="normalTbl-subheader">Campus</td>
			<td width="25%" align="center"  class="normalTbl-subheader">Duration Of Study</td>
			<td align="center"  class="normalTbl-subheader">Total Week</td>
			<td align="center"  class="normalTbl-subheader"></td>
		</tr>
	<tr><td class="red" align="center" colspan="9"> No record found!!!</td></tr>
	
	</form>	
	</table>
</div>
<BR><BR>
<!--
<div align="center">
	<input type="button" name="ViewStructure" value="View Programme Structure" onClick="viewStructure('UESE160501')" class="button">
</div>
-->

<!-- End Content -->								
							</td>
  						</tr>  								 																
          			</table>            
				</td>
          		<td width="10" rowspan="2" ><img src="http://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif" width="10px"></td>
        	</tr>        	
		</table>
	</td>
  </tr>
 
<!--<script src="http://unitreg.utar.edu.my/portal/publicFunction.js"></script>-->
<tr id="notDisplay">
  <td valign="top" class="footerFont">
	<HR align="center" width="99%" SIZE=1 noShade>
	Copyright &copy; 2018, Universiti Tunku Abdul Rahman. All rights reserved. <br>
	Info Optimized for  Internet Explorer 5.0 and above. Best viewed with 1024 x 768 pixels.<br>
	Terms of Usage
	
	</td>

  </tr>
</table>

</BODY></HTML>
 