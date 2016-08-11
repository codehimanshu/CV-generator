<!DOCTYPE html>
<html>
	<head>
		<title>
			CV Generator
		</title>
		<script type="text/javascript">
		<!--
		function validate()
		{
			if(document.myform.name.value=="")
			  {
                           alert("Please provide your name!");
                           document.myform.name.focus() ;
                           return false;
			  }
			if(document.myform.Status.value=="-1")
                          {
                           alert( "Please provide your status!");
                           return false;
                          }
                        if(document.myform.mobile.value == "")
                          {
                           alert( "Please provide your mobile no!");
                           document.myform.mobile.focus() ;
                           return false;
                          }
                        if(document.myform.email.value == "")
                          {
                           alert( "Please provide your email!");
                           document.myform.email.focus() ;
                           return false;
                          }
                        if(document.myform.address.value == "")
                          {
                           alert( "Please provide your address!");
                           document.myform.address.focus() ;
                           return false;
                          }
                         return (true);
                }
		
		
		function validateEmail()
		{
			var emailID = document.myform.email.value;
                        atpos = emailID.indexOf("@");
                        dotpos = emailID.lastIndexOf(".");
                        if (atpos < 1 || ( dotpos - atpos < 2 ))
                           {
                             alert("Please enter correct email ID")
                             document.myform.email.focus() ;
                             return false;
                            }
                            return(true);
		}
		-->
		</script>
	</head>
	
	<body><B><h1><center>CURRICULUM VITAE</center></h1></B>
	<b><h3><center>Personal Information</center></h3></b>
        <center>
		<form name="myform" action="p1.php" method="post" onsubmit="return(validate())">
			<table cellspacing="5" cellpadding="5" border="1">
				<tr>
					<td align="right">Name</td>
			                <td><input type="text" name="name"/></td>
			        </tr>
			        <tr>
			        	<td align="right">Status</td>
			        	
		                        <td><select name="Status">
			                    <option value="-1"selected>Choose Yours</option>
			                    <option value="1">Student</option>
			                    <option value="2">Employee</option>
			                    <option value="3">Lecturer</option>
			                    <option value="4">Business</option>
		  	                    </select>
		  	                 </td>
		  	        </tr>
			        <tr>
			        	<td align="right">Mobile no</td>
			        	<td><input type="text" name="mobile"/></td>
			        </tr>
			        <tr>
			        	<td align="right">Email ID</td>
			        	<td><input type="text" name="email"/></td>
			        </tr>
			        <tr>
			        	<td align="right">Address</td>
			        	<td><input type="text" name="address"/></td>
			        </tr>
			        <tr>
			        	<td align="right"></td>
			                <td><input type="submit" name="proceed" value="Proceed" onsubmit="validate()"/></td>
			        </tr>
			</table>
			
		</form>
        </center>
	</body>
</html>
