<?php
if(!empty($_GET)) {
	if($_GET["reqCPage"] == 2) {
		header("Location: masterSchedule2.php");
	}
}
?>
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
	window.location="https://unitreg.utar.edu.my/portal/courseRegStu/logout.jsp";
}

setTimeout('expireSession()',360000);
</script>
<link href="https://unitreg.utar.edu.my/portal/courseRegStu/skin/main.css" rel="stylesheet" type="text/css">
<link href="https://unitreg.utar.edu.my/portal/courseRegStu/skin/print.css" rel="stylesheet" type="text/css">
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
              <TD width=7><IMG height=23 hspace=0 src="https://unitreg.utar.edu.my/portal/courseRegStu/images/tab_left_off.gif"  width=7 border=0><BR></TD> 
			  <TD align=center noWrap align=middle background="https://unitreg.utar.edu.my/portal/courseRegStu/images/tab_back_off.gif" bgColor=#21455a>&nbsp;&nbsp; 
			  <A class=tab-off href="#" onClick="logout('https://unitreg.utar.edu.my/portal/courseRegStu/','logout.jsp');"> <SPAN class=tab-off>Log Out</SPAN></A>&nbsp;&nbsp;</TD> 
              <TD width=7><IMG height=23 hspace=0 src="https://unitreg.utar.edu.my/portal/courseRegStu/images/tab_right_off.gif" width=7 border=0><BR></TD> 
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
	<td>Welcome, HENG AIK KEE (15UEB01196)
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
	function changePage(pageNo){
		document.frmRefresh.reqCPage.value=pageNo;
		document.frmRefresh.submit();	
	}	
	
	function checkUnit(){
		
		try{
		
			if(!validateSpecialChar(document.frmParam.reqUnit, "Unit")){
				return false;
			}
			
			if("Any"==document.frmParam.reqFrom.value && "Any"!=document.frmParam.reqTo.value){
				alert("Please select from time");
				return false;
			}
			
			if("Any"!=document.frmParam.reqFrom.value && "Any"==document.frmParam.reqTo.value){
				alert("Please select to time");
				return false;
			}		
			
			if("Any"!=document.frmParam.reqFrom.value && "Any"!=document.frmParam.reqTo.value){
				if(!checkFTtime(document.frmParam.reqFrom,document.frmParam.reqTo))
					return false
			}
			
			document.frmParam.search.disabled = true;
			return true;
		}catch(e){alert(e);}		
	}	

	function validateSpecialChar(objectField, msg){
	
		var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
		
		for (var i = 0; i < objectField.value.length; i++) {
			if (iChars.indexOf(objectField.value.charAt(i)) != -1) {
				alert ("Your "+msg+" has special characters. \nThese are not allowed.\n Please remove them and try again.");
				return false;
			}
		}
		return true;
	}	
	

	function checkFTtime(objFrom,objTo)
	{
		if (objTo.value != "" && objFrom.value!=""){	
			if (objFrom.value == objTo.value){
				alert('Cant be the same time');
				return false;
			} else {
				var Fh=0, Fhh=0,Fmm=0;
				var Fmin=0;
				Fhh = objFrom.value.substr(0,objFrom.value.indexOf(":"));
				Fmm = objFrom.value.substr(objFrom.value.indexOf(":")+1,2);
				if ((objFrom.value.indexOf("PM") > 2) && Fhh < 12)
					{Fh=12;}
				Fmin=(((Fhh-0)+Fh)*60)+(Fmm-0);
				
				var Th=0, Thh=0,Tmm=0;
				var Tmin=0;
				Thh = objTo.value.substr(0,objTo.value.indexOf(":"));
				Tmm = objTo.value.substr(objTo.value.indexOf(":")+1,2);
				if ((objTo.value.indexOf("PM") > 2) && Thh < 12){
					Th=12;
				}
				Tmin=(((Thh-0)+Th)*60)+(Tmm-0);
				
				if (Fmin > Tmin){
					alert("(From time) can't bigger than the (To time)");
					return false;
				}
				return true;
			}
		}
	}	
	
	function viewUnit(){
		document.getElementById('unit').style.display='';	
	}
</script>



<table width="100%" border=0 align=center cellpadding=0 cellspacing="0"> 
	<tr>
		<td class="dotted"><img src = "https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif" height="1px" width="1px"></td>
	</tr>								
	<tr>
		<td width="100%">
			<h2><img src="https://unitreg.utar.edu.my/portal/courseRegStu/images/link1.gif"> Course Timetable Preview</h2> 
		</td>
	</tr>
	<tr>
		<td class="dotted"><img src = "https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif" height="1px" width="1px"></td>
	</tr>								
</table>
<TABLE id="notDisplay" cellSpacing="0" cellPadding="0" border="0">
 <TBODY>
  <TR>
   <TD class='tab-selected'><IMG height='19' alt='' src='https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif' width='9'></TD>
   <TD class='tab-selected'>
    <A class = 'tab-link-selected' href='https://unitreg.utar.edu.my/portal/courseRegStu/schedule/masterSchedule.jsp'>Course Timetable Preview
    </A></TD>
   <TD class = 'tab-mid2'>
    <IMG height='8' alt='' src='https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif' width='30'>
   </TD>
   <TD class='tab-unselected'>
    <A class = 'tab-link-unselected' href='https://unitreg.utar.edu.my/portal/courseRegStu/registration/studentRegistration.jsp'>My Course Registration
    </A></TD>
   <TD class = 'tab-mid-end'>
    <IMG height='8' alt='' src='https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif' width='30'>
   </TD>
  </TR>
 </TBODY>
</table>
<TABLE id="notDisplay" width='100%' height='6' border='0' cellPadding='0' cellSpacing='0'>
 <TBODY>
  <TR>
   <TD class='tab-dblue-table'><IMG src='https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif' height='4'  width='1'></TD>
  </TR>
  <TR>
   <TD class='tab-dwhite-table'><IMG src='https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif' height='4'  width='1'></TD>
  </TR>
  </TBODY>
</TABLE>


<div>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
		<tr>
			<td class="normalTbl-subheader">Session</td>
			<td>201801</td>
				
			<td class="normalTbl-subheader">Class Type</td>
			<td>Full-time</td>			
			<td class="normalTbl-subheader">Faculty</td>
			<td>LKC FES</td>		
					
			<td class="normalTbl-subheader">Campus</td>
			<td>Sungai Long Campus</td>		
			<td class="normalTbl-subheader">Duration (Weeks)</td>				
			<td>15/01/2018 - 22/04/2018 (14)</td>					
		</tr>
	</table>
</div>
<div id="debugSql"></div>

<BR>


<div align="center">	
	<table id="tblGrid" width="60%" class="normal">			
	<form name="frmParam" action="masterSchedule.jsp" method="POST" onSubmit="return checkUnit();">
		<input type="hidden" name="act" value="view">
		<tr>
			<td  align="left" class="normalTbl-subheader" width="35%">Course</td>
			<td align="left">
				<input type="text" id="reqUnit" name="reqUnit" value="" maxlength="15" size="17" class="iform">
				<input type="submit" name="search" value="Search" class="button">
			</td>
		</tr>		
		<tr>
			<td  align="left" class="normalTbl-subheader">Day</td>
			<td align="left">
				<select name="reqDay" class="iform" >
<option value="" selected>Any</option>
<option value="1">Mon</option>
<option value="2">Tue</option>
<option value="3">Wed</option>
<option value="4">Thu</option>
<option value="5">Fri</option>
<option value="6">Sat</option>
<option value="7">Sun</option>
</select>

			</td>					
		</tr>
		<tr>
			<td  align="left" class="normalTbl-subheader">Duration</td>
			<td align="left">
				From<select name="reqFrom" class="iform" >
<option value="Any" selected>Any</option>
<option value="7:00 AM">7:00 AM</option>
<option value="7:30 AM">7:30 AM</option>
<option value="8:00 AM">8:00 AM</option>
<option value="8:30 AM">8:30 AM</option>
<option value="9:00 AM">9:00 AM</option>
<option value="9:30 AM">9:30 AM</option>
<option value="10:00 AM">10:00 AM</option>
<option value="10:30 AM">10:30 AM</option>
<option value="11:00 AM">11:00 AM</option>
<option value="11:30 AM">11:30 AM</option>
<option value="12:00 PM">12:00 PM</option>
<option value="12:30 PM">12:30 PM</option>
<option value="1:00 PM">1:00 PM</option>
<option value="1:30 PM">1:30 PM</option>
<option value="2:00 PM">2:00 PM</option>
<option value="2:30 PM">2:30 PM</option>
<option value="3:00 PM">3:00 PM</option>
<option value="3:30 PM">3:30 PM</option>
<option value="4:00 PM">4:00 PM</option>
<option value="4:30 PM">4:30 PM</option>
<option value="5:00 PM">5:00 PM</option>
<option value="5:30 PM">5:30 PM</option>
<option value="6:00 PM">6:00 PM</option>
<option value="6:30 PM">6:30 PM</option>
<option value="7:00 PM">7:00 PM</option>
<option value="7:30 PM">7:30 PM</option>
<option value="8:00 PM">8:00 PM</option>
<option value="8:30 PM">8:30 PM</option>
<option value="9:00 PM">9:00 PM</option>
<option value="9:30 PM">9:30 PM</option>
<option value="10:00 PM">10:00 PM</option>
<option value="10:30 PM">10:30 PM</option>
<option value="11:00 PM">11:00 PM</option>
</select>

				To<select name="reqTo" class="iform" >
<option value="Any" selected>Any</option>
<option value="7:00 AM">7:00 AM</option>
<option value="7:30 AM">7:30 AM</option>
<option value="8:00 AM">8:00 AM</option>
<option value="8:30 AM">8:30 AM</option>
<option value="9:00 AM">9:00 AM</option>
<option value="9:30 AM">9:30 AM</option>
<option value="10:00 AM">10:00 AM</option>
<option value="10:30 AM">10:30 AM</option>
<option value="11:00 AM">11:00 AM</option>
<option value="11:30 AM">11:30 AM</option>
<option value="12:00 PM">12:00 PM</option>
<option value="12:30 PM">12:30 PM</option>
<option value="1:00 PM">1:00 PM</option>
<option value="1:30 PM">1:30 PM</option>
<option value="2:00 PM">2:00 PM</option>
<option value="2:30 PM">2:30 PM</option>
<option value="3:00 PM">3:00 PM</option>
<option value="3:30 PM">3:30 PM</option>
<option value="4:00 PM">4:00 PM</option>
<option value="4:30 PM">4:30 PM</option>
<option value="5:00 PM">5:00 PM</option>
<option value="5:30 PM">5:30 PM</option>
<option value="6:00 PM">6:00 PM</option>
<option value="6:30 PM">6:30 PM</option>
<option value="7:00 PM">7:00 PM</option>
<option value="7:30 PM">7:30 PM</option>
<option value="8:00 PM">8:00 PM</option>
<option value="8:30 PM">8:30 PM</option>
<option value="9:00 PM">9:00 PM</option>
<option value="9:30 PM">9:30 PM</option>
<option value="10:00 PM">10:00 PM</option>
<option value="10:30 PM">10:30 PM</option>
<option value="11:00 PM">11:00 PM</option>
</select>

			</td>					
		</tr>	
									
	</form>
	</table>		
</div>	

<div><blockquote>During the pre-registration period, it is highly recommended that you <u>plan
carefully by referring to the programme structure of your programme</u> and <u>seek
the advice and guidance of your <strong>Academic Advisor</strong></u> in registering units for
the following trimester. It is your responsibility to ensure that you fulfil
all requirements and conditions of your programme for graduation.<br></blockquote></div>


<table width="100%" border="0">
<tr><td width="100%" align="left"></td>

				<td align="left">|<font size="2"><strong>1</strong></font></td>	

				<td align="left">|<a href="javascript:changePage('2')">2</a></td>

</table>	

<BR>
<div id="overviewSector">

	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
		<form name="frmSummary" action="masterSchedulePro.jsp" method="post">
		<input type="hidden" name="act" value="">
		<tr align="center"> 
			<td width="3%" class="normalTbl-subheader">No</td>
			<td width="3%" class="normalTbl-subheader">Type</td>
			<td width="5%" class="normalTbl-subheader">Group</td>
			<td width="5%" class="normalTbl-subheader">Class Size</td>
			<td width="4%" class="normalTbl-subheader">Day</td>
			<td width="14%" class="normalTbl-subheader">Time</td>
			<td width="5%" class="normalTbl-subheader">Hour</td>
			<td width="10%" class="normalTbl-subheader">Week</td>
			<td width="15%" class="normalTbl-subheader">Room</td>		
			<td width="5%" class="normalTbl-subheader">Remark</td>		
		</tr>
<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU3113 - HUBUNGAN ETNIK (FOR LOCAL STUDENTS) [3.00]</td></tr>
				
					<tr align="center">
						<td >1</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >90</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 11:00 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >2</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >80</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 11:00 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >3</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >80</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 11:00 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >4</td>	
						<td >L</td>
						<td >4</td>
						<td align="right" >70</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB521</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >5</td>	
						<td >L</td>
						<td >5</td>
						<td align="right" >40</td>
					
							
							<td>Fri</td>
							<td>08:30 AM - 11:30 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU3123 - TAMADUN ISLAM DAN TAMADUN ASIA (TITAS) [3.00]</td></tr>
				
					<tr align="center">
						<td >6</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 11:00 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB522</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >7</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >90</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB214</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >8</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >90</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >9</td>	
						<td >L</td>
						<td >4</td>
						<td align="right" >50</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB521</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >10</td>	
						<td >L</td>
						<td >5</td>
						<td align="right" >90</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 11:00 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB214</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >11</td>	
						<td >L</td>
						<td >6</td>
						<td align="right" >90</td>
					
							
							<td>Fri</td>
							<td>08:30 AM - 11:30 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU3173 - MALAYSIAN STUDIES 3 (FOR INTERNATIONAL STUDENTS) [3.00]</td></tr>
				
					<tr align="center">
						<td >12</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >10</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 11:00 AM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB200</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU32013 - BAHASA KEBANGSAAN A [3.00]</td></tr>
				
					<tr align="center">
						<td >13</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >30</td>
					
							
							<td>Thu</td>
							<td>03:00 PM - 06:00 PM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU32043 - ENGLISH FOR ENGINEERING [3.00]</td></tr>
				
					<tr align="center">
						<td >14</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >30</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 03:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >15</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >40</td>
					
							
							<td>Tue</td>
							<td>05:00 PM - 07:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB521</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >16</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >40</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 12:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB106</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >17</td>	
						<td >L</td>
						<td >4</td>
						<td align="right" >40</td>
					
							
							<td>Tue</td>
							<td>12:00 PM - 02:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB521</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >18</td>	
						<td >L</td>
						<td >6</td>
						<td align="right" >40</td>
					
							
							<td>Fri</td>
							<td>02:30 PM - 04:30 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >19</td>	
						<td >L</td>
						<td >7</td>
						<td align="right" >45</td>
					
							
							<td>Mon</td>
							<td>05:00 PM - 07:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >20</td>	
						<td >L</td>
						<td >10</td>
						<td align="right" >40</td>
					
							
							<td>Wed</td>
							<td>12:00 PM - 02:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >21</td>	
						<td >L</td>
						<td >11</td>
						<td align="right" >40</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB323</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >22</td>	
						<td >L</td>
						<td >12</td>
						<td align="right" >30</td>
					
							
							<td>Fri</td>
							<td>02:30 PM - 04:30 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >23</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >24</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >10</td>
					
							
							<td>Mon</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >25</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >10</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >26</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >27</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >10</td>
					
							
							<td>Tue</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >28</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >29</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB311</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >30</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB311</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >31</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >32</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB314</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >33</td>	
						<td >T</td>
						<td >11</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >34</td>	
						<td >T</td>
						<td >13</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >35</td>	
						<td >T</td>
						<td >14</td>
						<td align="right" >10</td>
					
							
							<td>Thu</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >36</td>	
						<td >T</td>
						<td >15</td>
						<td align="right" >10</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >37</td>	
						<td >T</td>
						<td >16</td>
						<td align="right" >10</td>
					
							
							<td>Thu</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >38</td>	
						<td >T</td>
						<td >17</td>
						<td align="right" >10</td>
					
							
							<td>Thu</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >39</td>	
						<td >T</td>
						<td >18</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >40</td>	
						<td >T</td>
						<td >19</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>08:30 AM - 09:30 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >41</td>	
						<td >T</td>
						<td >20</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>09:30 AM - 10:30 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >42</td>	
						<td >T</td>
						<td >21</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >43</td>	
						<td >T</td>
						<td >22</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU33183 - ENGINEER IN SOCIETY [3.00]</td></tr>
<tr align="center"><td colspan="10" class="red">No record found!!!</td></tr>
<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU34012 - SOCIAL ENTREPRENEURSHIP PROJECT [2.00]</td></tr>
				
					<tr align="center">
						<td >44</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 04:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB521</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU34022 - ARTS AND CULTURAL PERFORMANCE [2.00]</td></tr>
				
					<tr align="center">
						<td >45</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 12:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU34032 - COMMUNITY PROJECT [2.00]</td></tr>
				
					<tr align="center">
						<td >46</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 04:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >47</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 04:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU34072 - ART, CRAFT, AND DESIGN [2.00]</td></tr>
				
					<tr align="center">
						<td >48</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Tue</td>
							<td>10:00 AM - 12:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB206</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>MPU34152 - LEADERSHIP AND TEAMBUILDING [2.00]</td></tr>
				
					<tr align="center">
						<td >49</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Tue</td>
							<td>10:00 AM - 12:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB522</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UALB1003 - INTRODUCTION TO GERMAN LANGUAGE [3.00]</td></tr>
				
					<tr align="center">
						<td >50</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>05:00 PM - 07:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >51</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >40</td>
					
							
							<td>Wed</td>
							<td>05:00 PM - 07:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB322</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >52</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>05:00 PM - 07:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >53</td>	
						<td >L</td>
						<td >4</td>
						<td align="right" >40</td>
					
							
							<td>Wed</td>
							<td>05:00 PM - 07:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB323</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >54</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB322</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >55</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>06:00 PM - 07:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB322</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >56</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >57</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>06:00 PM - 07:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >58</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB323</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >59</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>06:00 PM - 07:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB323</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >60</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >61</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>06:00 PM - 07:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UALF1003 - INTRODUCTION TO FRENCH [3.00]</td></tr>
				
					<tr align="center">
						<td >62</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >63</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >40</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >64</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >40</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >65</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >66</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >67</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >68</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >69</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >70</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UALJ2013 - INTRODUCTION TO JAPANESE [3.00]</td></tr>
				
					<tr align="center">
						<td >71</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >72</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >40</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 04:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >73</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >40</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB323</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >74</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >75</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >76</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >77</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >78</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB323</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >79</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB323</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UBTE2013 - ENTREPRENEURSHIP [3.00]</td></tr>
				
					<tr align="center">
						<td >80</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >110</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 05:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB213</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >81</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 11:30 AM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >82</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>12:00 PM - 01:30 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >83</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>01:30 PM - 03:00 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >84</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>04:30 PM - 06:00 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >85</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 09:30 AM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >86</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:30 AM - 11:00 AM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UECM1653 - MATHEMATICS FOR ENGINEERING I [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">87</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">40</td>
					
							
							<td>Mon</td>
							<td>12:00 PM - 02:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB213</td>

							<td rowspan="2">CI only</td>
						</tr>			
	
					<tr align="center" id="subRow_231488">
						<td>Wed</td>
						<td>11:00 AM - 12:00 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB316</td>
					</tr>
					
					<tr align="center">
						<td >88</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >89</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >15</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >90</td>	
						<td >T</td>
						<td >12</td>
						<td align="right" >15</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >91</td>	
						<td >T</td>
						<td >13</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >92</td>	
						<td >T</td>
						<td >14</td>
						<td align="right" >15</td>
					
							
							<td>Thu</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >93</td>	
						<td >T</td>
						<td >15</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >94</td>	
						<td >T</td>
						<td >16</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UECM1713 - MATHEMATICS FOR ENGINEERING II [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">95</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 12:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB213</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233086">
						<td>Wed</td>
						<td>01:00 PM - 02:00 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB213</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">96</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">2</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB209</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233087">
						<td>Wed</td>
						<td>08:00 AM - 10:00 AM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB213</td>
					</tr>
					
					<tr align="center">
						<td >97</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >98</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >99</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >100</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >101</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >102</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >103</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >104</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >105</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >106</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>10:30 AM - 11:30 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >107</td>	
						<td >T</td>
						<td >11</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>11:30 AM - 12:30 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >108</td>	
						<td >T</td>
						<td >12</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>03:30 PM - 04:30 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UECM2623 - NUMERICAL METHODS AND STATISTICS [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">109</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">160</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB213</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233680">
						<td>Thu</td>
						<td>12:00 PM - 01:00 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB105</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">110</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">2</td>
						<td align="right" rowspan="2">164</td>
					
							
							<td>Tue</td>
							<td>01:00 PM - 03:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB214</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233681">
						<td>Thu</td>
						<td>01:00 PM - 02:00 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB105</td>
					</tr>
					
					<tr align="center">
						<td >111</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >112</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >113</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >114</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >115</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >116</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >117</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >118</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >119</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB518</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >120</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >121</td>	
						<td >T</td>
						<td >11</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB326</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >122</td>	
						<td >T</td>
						<td >12</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >123</td>	
						<td >T</td>
						<td >13</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UECS1643 - FUNDAMENTALS OF PROGRAMMING [3.00]</td></tr>
				
					<tr align="center">
						<td >124</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >150</td>
					
							
							<td>Wed</td>
							<td>04:00 PM - 06:30 PM</td>
							<td>2.5</td>
							<td>1-14</td>
							<td>KB213</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >125</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >70</td>
					
							
							<td>Thu</td>
							<td>02:30 PM - 05:00 PM</td>
							<td>2.5</td>
							<td>1-14</td>
							<td>KB213</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >126</td>	
						<td >P</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 11:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB604</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >127</td>	
						<td >P</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 01:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB604</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >128</td>	
						<td >P</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>08:30 AM - 10:30 AM</td>
							<td>2.0</td>
							<td>1-4,6-14</td>
							<td>KB604</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >129</td>	
						<td >P</td>
						<td >6</td>
						<td align="right" >29</td>
					
							
							<td>Fri</td>
							<td>10:30 AM - 12:30 PM</td>
							<td>2.0</td>
							<td>1-4,6-14</td>
							<td>KB605</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >130</td>	
						<td >P</td>
						<td >8</td>
						<td align="right" >29</td>
					
							
							<td>Thu</td>
							<td>08:30 AM - 10:30 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB606</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >131</td>	
						<td >P</td>
						<td >9</td>
						<td align="right" >29</td>
					
							
							<td>Thu</td>
							<td>10:30 AM - 12:30 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB606</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >132</td>	
						<td >P</td>
						<td >10</td>
						<td align="right" >29</td>
					
							
							<td>Fri</td>
							<td>08:30 AM - 10:30 AM</td>
							<td>2.0</td>
							<td>1-4,6-14</td>
							<td>KB606</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >133</td>	
						<td >P</td>
						<td >11</td>
						<td align="right" >29</td>
					
							
							<td>Fri</td>
							<td>10:30 AM - 12:30 PM</td>
							<td>2.0</td>
							<td>1-4,6-14</td>
							<td>KB606</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEEG2113 - LAW FOR ENGINEERS [3.00]</td></tr>
				
					<tr align="center">
						<td >134</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >200</td>
					
							
							<td>Sat</td>
							<td>10:00 AM - 01:00 PM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB208</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >135</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >200</td>
					
							
							<td>Sat</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>1-14</td>
							<td>KB208</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEGE4116 - PROJECT [6.00]</td></tr>
				
					<tr align="center">
						<td >136</td>	
						<td >P</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Sun</td>
							<td>07:00 AM - 01:00 PM</td>
							<td>6.0</td>
							<td>1-14</td>
							<td>To be arranged</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEME1143 - DYNAMICS [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">137</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">110</td>
					
							
							<td>Wed</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB105</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_234025">
						<td>Thu</td>
						<td>10:00 AM - 12:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB207</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">138</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">3</td>
						<td align="right" rowspan="2">130</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_234027">
						<td>Fri</td>
						<td>08:00 AM - 09:00 AM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB208</td>
					</tr>
					
					<tr align="center">
						<td >139</td>	
						<td >P</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >140</td>	
						<td >P</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3,9</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >141</td>	
						<td >P</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,10</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >142</td>	
						<td >P</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>5,11</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >143</td>	
						<td >P</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >144</td>	
						<td >P</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3,9</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >145</td>	
						<td >P</td>
						<td >7</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,10</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >146</td>	
						<td >P</td>
						<td >8</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>5,11</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >147</td>	
						<td >P</td>
						<td >9</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >148</td>	
						<td >P</td>
						<td >10</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>3,9</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >149</td>	
						<td >P</td>
						<td >12</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>5,11</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >150</td>	
						<td >P</td>
						<td >15</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>6,12</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >151</td>	
						<td >P</td>
						<td >16</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>7,11</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >152</td>	
						<td >P</td>
						<td >17</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >153</td>	
						<td >P</td>
						<td >18</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3,9</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >154</td>	
						<td >P</td>
						<td >20</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>6,12</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >155</td>	
						<td >P</td>
						<td >21</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>7,11</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >156</td>	
						<td >P</td>
						<td >22</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >157</td>	
						<td >P</td>
						<td >25</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>6,12</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >158</td>	
						<td >P</td>
						<td >26</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>7,11</td>
							<td>KB730</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >159</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >10</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >160</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB517</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >161</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB517</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >162</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>11:30 AM - 12:30 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >163</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >5</td>
					
							
							<td>Tue</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >164</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >5</td>
					
							
							<td>Tue</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >165</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >166</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >167</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >168</td>	
						<td >T</td>
						<td >11</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >169</td>	
						<td >T</td>
						<td >12</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >170</td>	
						<td >T</td>
						<td >13</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >171</td>	
						<td >T</td>
						<td >14</td>
						<td align="right" >17</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >172</td>	
						<td >T</td>
						<td >15</td>
						<td align="right" >17</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEME1263 - SOLID MECHANICS I [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">173</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB208</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_234077">
						<td>Wed</td>
						<td>01:00 PM - 02:00 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB207</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">174</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">2</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_234078">
						<td>Thu</td>
						<td>12:00 PM - 02:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB207</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">175</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>2</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233659">
						<td>Mon</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>8</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">176</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">2</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>9</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233660">
						<td>Mon</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>3</td>
						<td>KB729</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">177</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">3</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>4</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233661">
						<td>Mon</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>10</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">178</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">4</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>11</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233662">
						<td>Mon</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>5</td>
						<td>KB729</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">179</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">5</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>2</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233665">
						<td>Tue</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>8</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">180</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">6</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>9</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233666">
						<td>Tue</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>3</td>
						<td>KB729</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">181</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">7</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>4</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233667">
						<td>Tue</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>10</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">182</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">8</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>11</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233669">
						<td>Tue</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>5</td>
						<td>KB729</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">183</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">9</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233670">
						<td>Thu</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>8</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">184</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">10</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>9</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233671">
						<td>Thu</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>3</td>
						<td>KB729</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">185</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">11</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233672">
						<td>Thu</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>10</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">186</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">12</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>12</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233673">
						<td>Thu</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>6</td>
						<td>KB729</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">187</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">13</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>7</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233674">
						<td>Thu</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>11</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">188</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">14</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>8</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233675">
						<td>Fri</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>2</td>
						<td>KB729</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">189</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">15</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233676">
						<td>Fri</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>9</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">190</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">16</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>10</td>
							<td>KBS02C MTR</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233677">
						<td>Fri</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>4</td>
						<td>KB729</td>
					</tr>
			
		</form>
	</table>
	

<BR><BR><BR>
</div>
<form name="frmRefresh" action="masterSchedule.php" method="get">
	<input type="hidden" name="reqCPage" value="1">
	<input type="hidden" name="reqUnit" value="">
	<input type="hidden" name="reqDay" value="">
	<input type="hidden" name="reqFrom" value="Any">
	<input type="hidden" name="reqTo" value="Any">
</form>





<div>
<font color="black" id='notDisplay'>Page Loaded In 172 miliseconds </font>
</div>

<!-- End Content -->								
							</td>
  						</tr>  								 																
          			</table>            
				</td>
          		<td width="10" rowspan="2" ><img src="https://unitreg.utar.edu.my/portal/courseRegStu/images/clear.gif" width="10px"></td>
        	</tr>   
		</table>
	</td>
  </tr>
 
<!--<script src="https://unitreg.utar.edu.my/portal/publicFunction.js"></script>-->
<tr id="notDisplay">
  <td valign="top" class="footerFont">
	<HR align="center" width="99%" SIZE=1 noShade>
	Copyright &copy; 2017, Universiti Tunku Abdul Rahman. All rights reserved. <br>
	Info Optimized for  Internet Explorer 5.0 and above. Best viewed with 1024 x 768 pixels.<br>
	Terms of Usage
	
	</td>

  </tr>
</table>

</BODY></HTML>
 





















































