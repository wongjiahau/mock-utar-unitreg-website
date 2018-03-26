<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



















































<html>
<head>
<title>Welcome to Course Registration System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


<link href="https://unitreg.utar.edu.my/portal/courseRegStu/skin/main.css" rel="stylesheet" type="text/css">
<link href="https://unitreg.utar.edu.my/portal/courseRegStu/skin/print.css" rel="stylesheet" type="text/css">
</head>

<script language="javascript">
<!--
	function validate(){
		with(document.frmParam){
			if(reqFregkey.value==''){
				alert("Please key in STUDENT ID");
				reqFregkey.focus();
				return false;
			}
			
			if(reqPassword.value==''){
				alert("Please key in PASSWORD");
				reqPassword.focus();
				return false;
			}
			
			if(kaptchafield.value!='undefined'){
				if(kaptchafield.value==''){
					alert("Please key in the CODE shown");
					kaptchafield.focus();
					return false;
				}
			}
		}
		document.frmParam._submit.disabled = true;
		return true;
	}
//-->
</script>



</div>
<body leftmargin="0" topmargin="0" onLoad="javascript:document.frmParam.reqFregkey.focus()" onmouseover="window.status='';return true;">
<div align="center" id="body_col">
	<table  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="https://www.utar.edu.my/admStatus/images/header3.jpg"></td>
      </tr>
    </table>
	<h2>Course Registration System</h2>
</div>




<BR><BR>
<div align ="center">

	
	
	<form name="frmParam" action="loginPro.php" method="post" onSubmit="return validate();">
	<input type="hidden" name="preKap" value="">
		<table width="45%" border="0" align="center" cellpadding="0" cellspacing="0"  class="normal">
			<tr> 
				<td width="45%" class="normalTbl-subheader" >
					<div align="right"><strong>Student ID :</strong></div>
				</td>
			  <td width="61%" class="tblRow">
					<input type="text" name="reqFregkey" size="25" style="font-family: Verdana, Arial, Helvetica; font-size:9pt; color: #000000" maxlength="10" value =""> 
		      </td>
			</tr>	
			<tr> 
				<td  class="normalTbl-subheader">
					<div align="right"><strong>Password :</strong></div>
				</td>
				<td class="tblRow"> 
					<input type="password" name="reqPassword" size="25" style="font-family: Verdana, Arial, Helvetica; font-size:9pt; color: #000000" maxlength="25" value ="">
				</td>
			</tr>	
			
                              
		
			<tr>
			  <td class="normalTbl-sub2header" align="right">
					<b>Code :</b><br>
                    <br><br>
              <span style="font-weight:100">Type the code shown above</span></td>
				<td class="tblRow">
					<img width="170" src="../Kaptcha.jpg?tmp=1522068942242">
					<br><INPUT type="text" name="kaptchafield" size="25" value ="" style="font-family: Verdana, Arial, Helvetica; font-size:9pt; color: #000000" maxlength="5">
				</td>
			</tr>
							
			<tr> 
				<td colspan="2"> 
					<div align="center">
						<input type="submit" value="Login" name="_submit" class="button"> 
						<input type="reset" value="Reset" name="reset" class="button">
					</div>
				</td>
			</tr>
		</table>	
	</form>
</div>
<div style="text-align:center;padding-top:5px;">Server time : <strong>26/03/2018 20:55:42</strong></div>


<BR>
<table width="45%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  	<td colspan="2"><div class="red"  style="font-size:11px"><strong>Attention:</strong></div></td>
  </tr>	
  <tr>
  	<td colspan="2"   style="font-size:11px">
  		Students who have not submitted the Health Examination Report are not allowed to access the Course Registration System. For further information, 
  		please contact
  	</td>
  </tr>
  <tr  style="font-size:11px">	
  	<td valign="top"   style="font-size:11px">
  		Tel:
  	</td>
  	<td valign="top"   style="font-size:11px">
  		03-9086 0288 (Sungai Long Campus)<br />
  		05-468 8888, Ext:2242, 2243 (Kampar Campus)
  	</td>
  </tr>
   <tr  style="font-size:11px">	
   	<td valign="top"   style="font-size:11px">
  		Email:
  	</td>
  	<td valign="top"   style="font-size:11px">
  		admission@utar.edu.my
  	</td>  
   </tr>
  
  
   
 </table>

 <table width="45%"  border="0" align="center" cellpadding="0" cellspacing="0"> 
  <tr>
    <td  style="font-size:11px"><br />On password related enquiry, please email (via your UTAR email account whenever possible) to <a href="mailto:info@utar.edu.my">info@utar.edu.my </a>with necessary details (e.g. full name, some descriptions on the case) for further assistance.
  </td>
  </tr>
  <tr>
    <td style="color:#FF0000 ">&nbsp;</td>
  </tr>
  <tr>
    <td style="color:#FF0000 "><div align="right"><strong>&raquo;&raquo;</strong> <a href="https://unitreg.utar.edu.my/portal/courseRegStu/GD-ICTC-001.pdf" target="_blank">Course Registration User Guide</a></div></td>
  </tr>
</table>
<BR>


<div align="center">
	<table class="normal" cellpadding="0" cellspacing="0" width="50%"  border="0" >
		<tr align="left">
			<td class="normalTbl-header" colspan="4">Course Registration Period</td>
		</tr>
		<tr align="center">
			<td class="normalTbl-subheader">Degree Level</td>
			<td class="normalTbl-subheader">Class Type</td>
			<td class="normalTbl-subheader">Faculty</td>
			<td class="normalTbl-subheader"></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FAS</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=A&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FBF</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=B&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FICT</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=C&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FSC</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=D&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>LKC FES</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=E&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FEGT</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=G&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FCI</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=J&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FAM</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=K&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>ICS</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=L&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Full-time</td>
			<td>FMHS</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=F&reqSchool=M&act=v">View</a></td>
		</tr>	
		
		<tr align="center">
			<td>Bachelor</td>
			<td>Evening and weekend classes</td>
			<td>All</td>
			<td><a href="login.jsp?reqLevel=B&reqClassType=P&act=v">View</a></td>
		</tr>
		<tr align="center">
			<td>Foundation</td>
			<td>Full-time</td>
			<td>CFS-SL</td>
			<td><a href="login.jsp?reqLevel=F&reqClassType=F&act=v&reqSchool=H&reqBrncd=ZZ">View</a></td>
		</tr>
		<tr align="center">
			<td>Foundation</td>
			<td>Full-time</td>
			<td>CFS-KPR</td>
			<td><a href="login.jsp?reqLevel=F&reqClassType=F&act=v&reqSchool=H&reqBrncd=PK">View</a></td>
		</tr>
		<tr align="center">
			<td>Master</td>
			<td>Full-time</td>
			<td>All</td>
			<td><a href="login.jsp?reqLevel=M&reqClassType=F&act=v&reqBrncd=ZZ">View</a></td>
		</tr>
		<tr align="center">
			
      <td>PHD</td>
			<td>Full-time</td>
			<td>All</td>
			<td><a href="login.jsp?reqLevel=D&reqClassType=F&act=v&reqBrncd=ZZ">View</a></td>
		</tr>																									
	</table>

</div>




<BR>
<table width="65%"  border="0" align="center" cellpadding="0" cellspacing="0" style="border-top: 3px solid ">
  <tr>
    <td width="55%" height="22" style="background-color:d3d3d3">&nbsp;<a href="http://www.utar.edu.my" target="_self">Home</a> | <a href="http://www.utar.edu.my/legalStatement.jsp" target="_blank">Legal Statement</a> | <a href="http://www.utar.edu.my/termsOfUse.jsp" target="_blank">Terms of Usage</a> </td>
    <td width="45%" style="background-color:d3d3d3"><div align="right">&copy; Universiti Tunku Abdul Rahman 2012 &nbsp;</div></td>
  </tr>
</table>

<!-- 
<div align="center" style="color:white">
master
</div>
 -->
</body>
</html>



