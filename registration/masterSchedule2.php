
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

				<td align="left">|<a href="javascript:changePage('1')">1</a></td>

				<td align="left">|<font size="2"><strong>2</strong></font></td>	

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
<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEME1263 - SOLID MECHANICS I [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">201</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">17</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>6</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233678">
						<td>Fri</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>12</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">202</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">18</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>7</td>
							<td>KB729</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233679">
						<td>Fri</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>11</td>
						<td>KBS02C MTR</td>
					</tr>
					
					<tr align="center">
						<td >203</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >204</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >205</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >206</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >207</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >208</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >209</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB519</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >210</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB519</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >211</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >212</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >213</td>	
						<td >T</td>
						<td >11</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >214</td>	
						<td >T</td>
						<td >12</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >215</td>	
						<td >T</td>
						<td >13</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >216</td>	
						<td >T</td>
						<td >14</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEME4123 - DATABASE MANAGEMENT SYSTEM [3.00]</td></tr>
				
					<tr align="center">
						<td >217</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >10</td>
					
							
							<td>Tue</td>
							<td>12:00 PM - 02:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB213</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >218</td>	
						<td >P</td>
						<td >1</td>
						<td align="right" >5</td>
					
							
							<td>Tue</td>
							<td>03:00 PM - 05:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB605</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >219</td>	
						<td >P</td>
						<td >2</td>
						<td align="right" >5</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 11:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB605</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMM3243 - ENGINEERING ANALYSIS [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">220</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>05:00 PM - 06:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_234197">
						<td>Wed</td>
						<td>11:00 AM - 01:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB207</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">221</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">2</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_234200">
						<td>Fri</td>
						<td>08:00 AM - 10:00 AM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB105</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">222</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">3</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 04:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB208</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_234203">
						<td>Thu</td>
						<td>12:00 PM - 01:00 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB208</td>
					</tr>
					
					<tr align="center">
						<td >223</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >224</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >225</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >226</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >227</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >228</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >229</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >230</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >231</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB522</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >232</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB522</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >233</td>	
						<td >T</td>
						<td >11</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >234</td>	
						<td >T</td>
						<td >12</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >235</td>	
						<td >T</td>
						<td >13</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>02:30 PM - 03:30 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >236</td>	
						<td >T</td>
						<td >14</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>02:30 PM - 03:30 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >237</td>	
						<td >T</td>
						<td >15</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>03:30 PM - 04:30 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >238</td>	
						<td >T</td>
						<td >16</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>03:30 PM - 04:30 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >239</td>	
						<td >T</td>
						<td >17</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >240</td>	
						<td >T</td>
						<td >18</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB316</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX2313 - STRUCTURAL ANALYSIS I [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">241</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Tue</td>
							<td>06:00 PM - 07:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233134">
						<td>Thu</td>
						<td>03:00 PM - 05:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB208</td>
					</tr>
					
					<tr align="center">
						<td >242</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB517</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >243</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB517</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >244</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB517</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >245</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB517</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >246</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB519</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >247</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB519</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX2323 - STRUCTURAL ANALYSIS II [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">248</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">50</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB522</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233486">
						<td>Fri</td>
						<td>08:00 AM - 10:00 AM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB324</td>
					</tr>
					
					<tr align="center">
						<td >249</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >250</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX2353 - CONCRETE STRUCTURES DESIGN I [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">251</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233269">
						<td>Tue</td>
						<td>10:00 AM - 12:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB208</td>
					</tr>
					
					<tr align="center">
						<td >252</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >253</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >254</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >255</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >256</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >257</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX2413 - SOIL MECHANICS [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">258</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>06:00 PM - 07:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB207</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233221">
						<td>Wed</td>
						<td>02:00 PM - 04:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB207</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">259</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3,7</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_232971">
						<td>Tue</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>3,7</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">260</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">2</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,8</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_232972">
						<td>Tue</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>4,8</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">261</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">3</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>3,7</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_232973">
						<td>Tue</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>3,7</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">262</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">4</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>4,8</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_232974">
						<td>Tue</td>
						<td>02:00 PM - 05:00 PM</td>
						<td>3.0</td>
						<td>4,8</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">263</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">5</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,6</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_232989">
						<td>Fri</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>2,6</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">264</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">6</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,8</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_232990">
						<td>Fri</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>4,8</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">265</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">7</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,8</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233003">
						<td>Fri</td>
						<td>02:30 PM - 05:30 PM</td>
						<td>3.0</td>
						<td>4,8</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">266</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">8</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>6,10</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233004">
						<td>Fri</td>
						<td>02:30 PM - 05:30 PM</td>
						<td>3.0</td>
						<td>6,10</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">267</td>	
						<td rowspan="2">P</td>
						<td rowspan="2">9</td>
						<td align="right" rowspan="2">20</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>5,9</td>
							<td>KBS01C S&M</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233005">
						<td>Tue</td>
						<td>09:00 AM - 12:00 PM</td>
						<td>3.0</td>
						<td>5,9</td>
						<td>KBS01C S&M</td>
					</tr>
					
					<tr align="center">
						<td >268</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >27</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >269</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >27</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >270</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >271</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >272</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >273</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX3113 - CIVIL CONSTRUCTION MATERIALS [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">274</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Tue</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB208</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233246">
						<td>Fri</td>
						<td>02:30 PM - 04:30 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB105</td>
					</tr>
					
					<tr align="center">
						<td >275</td>	
						<td >P</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,6</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >276</td>	
						<td >P</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,8</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >277</td>	
						<td >P</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>7,11</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >278</td>	
						<td >P</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3,7</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >279</td>	
						<td >P</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,8</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >280</td>	
						<td >P</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>6,10</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >281</td>	
						<td >P</td>
						<td >7</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>3,7</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >282</td>	
						<td >P</td>
						<td >8</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>4,8</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >283</td>	
						<td >P</td>
						<td >9</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>6,10</td>
							<td>KBS01B G&H</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >284</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >285</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB325</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >286</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >287</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >288</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >289</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB524</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX3523 - HYDRAULIC SYSTEM AND DESIGN [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">290</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Thu</td>
							<td>04:00 PM - 06:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB209</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_231853">
						<td>Fri</td>
						<td>08:00 AM - 09:00 AM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB209</td>
					</tr>
					
					<tr align="center">
						<td >291</td>	
						<td >P</td>
						<td >1</td>
						<td align="right" >15</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >292</td>	
						<td >P</td>
						<td >2</td>
						<td align="right" >15</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3,9</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >293</td>	
						<td >P</td>
						<td >4</td>
						<td align="right" >15</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>5,11</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >294</td>	
						<td >P</td>
						<td >5</td>
						<td align="right" >15</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >295</td>	
						<td >P</td>
						<td >7</td>
						<td align="right" >15</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,10</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >296</td>	
						<td >P</td>
						<td >8</td>
						<td align="right" >15</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>5,11</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >297</td>	
						<td >P</td>
						<td >9</td>
						<td align="right" >15</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >298</td>	
						<td >P</td>
						<td >10</td>
						<td align="right" >15</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>4,10</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >299</td>	
						<td >P</td>
						<td >12</td>
						<td align="right" >15</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>7,11</td>
							<td>KB723</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >300</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >30</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >301</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >30</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >302</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >30</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >303</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >30</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >304</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >30</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX3613 - ENVIRONMENTAL SCIENCE AND ENGINEERING [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">305</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB208</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_231872">
						<td>Tue</td>
						<td>04:00 PM - 06:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB208</td>
					</tr>
					
					<tr align="center">
						<td rowspan="2">306</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">2</td>
						<td align="right" rowspan="2">150</td>
					
							
							<td>Tue</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB208</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_231875">
						<td>Fri</td>
						<td>02:30 PM - 04:30 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB209</td>
					</tr>
					
					<tr align="center">
						<td >307</td>	
						<td >P</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >308</td>	
						<td >P</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4,10</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >309</td>	
						<td >P</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>6,12</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >310</td>	
						<td >P</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>7,11</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >311</td>	
						<td >P</td>
						<td >10</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >312</td>	
						<td >P</td>
						<td >11</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3,9</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >313</td>	
						<td >P</td>
						<td >15</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>2,8</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >314</td>	
						<td >P</td>
						<td >16</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>4,10</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >315</td>	
						<td >P</td>
						<td >17</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>6,12</td>
							<td>KB510</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >316</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >27</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >317</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >27</td>
					
							
							<td>Mon</td>
							<td>02:00 PM - 03:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >318</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >27</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >319</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >27</td>
					
							
							<td>Mon</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >320</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >27</td>
					
							
							<td>Tue</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB518</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >321</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >27</td>
					
							
							<td>Tue</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB518</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >322</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >27</td>
					
							
							<td>Tue</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB518</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >323</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >27</td>
					
							
							<td>Tue</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB518</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >324</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >325</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 10:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >326</td>	
						<td >T</td>
						<td >11</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >327</td>	
						<td >T</td>
						<td >12</td>
						<td align="right" >27</td>
					
							
							<td>Thu</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB516</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX4183 - FOUNDATION ENGINEERING [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">328</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">80</td>
					
							
							<td>Tue</td>
							<td>10:00 AM - 12:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB521</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233352">
						<td>Fri</td>
						<td>02:30 PM - 03:30 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB210</td>
					</tr>
					
					<tr align="center">
						<td >329</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>03:30 PM - 04:30 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >330</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>03:30 PM - 04:30 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >331</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>04:30 PM - 05:30 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX4253 - CONSTRUCTION PROJECT MANAGEMENT [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">332</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">140</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 01:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB105</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233302">
						<td>Thu</td>
						<td>02:00 PM - 03:00 PM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB214</td>
					</tr>
					
					<tr align="center">
						<td >333</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >28</td>
					
							
							<td>Thu</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >334</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >28</td>
					
							
							<td>Thu</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >335</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >28</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >336</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >28</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 09:00 AM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >337</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >28</td>
					
							
							<td>Tue</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX4363 - ADVANCED CONCRETE STRUCTURES DESIGN [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">338</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">80</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 04:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233469">
						<td>Thu</td>
						<td>10:00 AM - 11:00 AM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB324</td>
					</tr>
					
					<tr align="center">
						<td >339</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Wed</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >340</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >27</td>
					
							
							<td>Wed</td>
							<td>04:00 PM - 05:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >341</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >28</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX4483 - GEOENVIRONMENTAL ENGINEERING [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">342</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">80</td>
					
							
							<td>Mon</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB214</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_233373">
						<td>Tue</td>
						<td>01:00 PM - 03:00 PM</td>
						<td>2.0</td>
						<td>1-14</td>
						<td>KB300</td>
					</tr>
					
					<tr align="center">
						<td >343</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >344</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Tue</td>
							<td>03:00 PM - 04:00 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB300</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >345</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >25</td>
					
							
							<td>Mon</td>
							<td>01:00 PM - 02:00 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UEMX4823 - TRAFFIC ENGINEERING AND TRANSPORTATION SYSTEM ANALYSIS [3.00]</td></tr>
				
					<tr align="center">
						<td rowspan="2">346</td>	
						<td rowspan="2">L</td>
						<td rowspan="2">1</td>
						<td align="right" rowspan="2">50</td>
					
							
							<td>Thu</td>
							<td>10:00 AM - 12:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB211</td>

							<td rowspan="2"></td>
						</tr>			
	
					<tr align="center" id="subRow_238137">
						<td>Fri</td>
						<td>10:30 AM - 11:30 AM</td>
						<td>1.0</td>
						<td>1-14</td>
						<td>KB211</td>
					</tr>
					
					<tr align="center">
						<td >347</td>	
						<td >P</td>
						<td >1</td>
						<td align="right" >4</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >348</td>	
						<td >P</td>
						<td >2</td>
						<td align="right" >4</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >349</td>	
						<td >P</td>
						<td >3</td>
						<td align="right" >4</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >350</td>	
						<td >P</td>
						<td >4</td>
						<td align="right" >4</td>
					
							
							<td>Mon</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>5</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >351</td>	
						<td >P</td>
						<td >6</td>
						<td align="right" >4</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>2</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >352</td>	
						<td >P</td>
						<td >7</td>
						<td align="right" >4</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>3</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >353</td>	
						<td >P</td>
						<td >8</td>
						<td align="right" >4</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>4</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >354</td>	
						<td >P</td>
						<td >10</td>
						<td align="right" >4</td>
					
							
							<td>Tue</td>
							<td>09:00 AM - 12:00 PM</td>
							<td>3.0</td>
							<td>7</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >355</td>	
						<td >P</td>
						<td >11</td>
						<td align="right" >4</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>2</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >356</td>	
						<td >P</td>
						<td >12</td>
						<td align="right" >4</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>3</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >357</td>	
						<td >P</td>
						<td >13</td>
						<td align="right" >4</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>4</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >358</td>	
						<td >P</td>
						<td >15</td>
						<td align="right" >4</td>
					
							
							<td>Wed</td>
							<td>02:00 PM - 05:00 PM</td>
							<td>3.0</td>
							<td>7</td>
							<td>KB722</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >359</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>11:30 AM - 12:30 PM</td>
							<td>1.0</td>
							<td>3,5,7,9,11,13</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >360</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >25</td>
					
							
							<td>Fri</td>
							<td>11:30 AM - 12:30 PM</td>
							<td>1.0</td>
							<td>2,4,6,8,10,12</td>
							<td>KB211</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UJLL1093 - INTRODUCTION TO KOREAN [3.00]</td></tr>
				
					<tr align="center">
						<td >361</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >40</td>
					
							
							<td>Mon</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >362</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >40</td>
					
							
							<td>Tue</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >363</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >40</td>
					
							
							<td>Wed</td>
							<td>08:00 AM - 10:00 AM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >364</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >365</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB210</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >366</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >367</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Tue</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB301</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >368</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>10:00 AM - 11:00 AM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >369</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB324</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UKMM1011 - SUN ZI'S ART OF WAR AND BUSINESS STRATEGIES [1.00]</td></tr>
				
					<tr align="center">
						<td >370</td>	
						<td >L</td>
						<td >1</td>
						<td align="right" >60</td>
					
							
							<td>Wed</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB214</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >371</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >60</td>
					
							
							<td>Thu</td>
							<td>11:00 AM - 12:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >372</td>	
						<td >L</td>
						<td >3</td>
						<td align="right" >90</td>
					
							
							<td>Thu</td>
							<td>12:00 PM - 01:00 PM</td>
							<td>1.0</td>
							<td>1-14</td>
							<td>KB520</td>

							<td ></td>
						</tr>			
	<tr><td class='normalTbl-sub3header' colspan='10' height='15px'>UKMM1043 - BASIC ECONOMICS, ACCOUNTING AND MANAGEMENT [3.00]</td></tr>
				
					<tr align="center">
						<td >373</td>	
						<td >L</td>
						<td >2</td>
						<td align="right" >100</td>
					
							
							<td>Tue</td>
							<td>02:00 PM - 04:00 PM</td>
							<td>2.0</td>
							<td>1-14</td>
							<td>KB213</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >374</td>	
						<td >T</td>
						<td >1</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>10:00 AM - 11:30 AM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >375</td>	
						<td >T</td>
						<td >2</td>
						<td align="right" >20</td>
					
							
							<td>Mon</td>
							<td>11:30 AM - 01:00 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >376</td>	
						<td >T</td>
						<td >3</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>03:00 PM - 04:30 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >377</td>	
						<td >T</td>
						<td >4</td>
						<td align="right" >20</td>
					
							
							<td>Wed</td>
							<td>04:30 PM - 06:00 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB321</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >378</td>	
						<td >T</td>
						<td >5</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>09:00 AM - 10:30 AM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >379</td>	
						<td >T</td>
						<td >6</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>10:30 AM - 12:00 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB523</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >380</td>	
						<td >T</td>
						<td >7</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>02:00 PM - 03:30 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >381</td>	
						<td >T</td>
						<td >8</td>
						<td align="right" >20</td>
					
							
							<td>Thu</td>
							<td>03:30 PM - 05:00 PM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB320</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >382</td>	
						<td >T</td>
						<td >9</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>08:00 AM - 09:30 AM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
					
					<tr align="center">
						<td >383</td>	
						<td >T</td>
						<td >10</td>
						<td align="right" >20</td>
					
							
							<td>Fri</td>
							<td>09:30 AM - 11:00 AM</td>
							<td>1.5</td>
							<td>1-14</td>
							<td>KB319</td>

							<td ></td>
						</tr>			
			
		</form>
	</table>
	

<BR><BR><BR>
</div>
<form name="frmRefresh" action="masterSchedule.jsp" method="get">
	<input type="hidden" name="reqCPage" value="2">
	<input type="hidden" name="reqUnit" value="">
	<input type="hidden" name="reqDay" value="">
	<input type="hidden" name="reqFrom" value="Any">
	<input type="hidden" name="reqTo" value="Any">
</form>





<div>
<font color="black" id='notDisplay'>Page Loaded In 296 miliseconds </font>
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
 