<!--Student Name:U.G.A.U.Rajapaksha		Student ID:PS/2017/160-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css"  href="assignment01.css"/>
		<title>Assignment 01</title>
		<script>
			/*reset form function*/
			function Formreset()
			{
				document.getElementById("myform").reset();
			}
			/*check all required fields are filled*/
			function validateForm()
			{
				let x=document.forms["myform"]["firstname"].value;
				let y=document.forms["myform"]["lastname"].value;
				let z=document.forms["myform"]["Address"].value;
				let u=document.forms["myform"]["email"].value;
				let v=document.forms["myform"]["mobile"].value;
				if(x=="" || y=="" || z=="" || u=="" || v=="")
				{
					alert("All the fields must be filled out");
					/*return false;*/
				}
				
			}
			/*validate email*/
			function validateEmail()
				{
					
					let e=document.forms["myform"]["email"].value;
					var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					if(e !=="")
					{
						if(e.match(mailformat))
						{
							
							return true;
						}
						else
						{
							alert("You have entered an invalid email address!");
							return false;
						}
					}
				}
				/*validate mobile*/
				function validateMobile()
				{
					let m=document.forms["myform"]["mobile"].value;
					var mobileformat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
					if(m !=="")
					{
						if(m.match(mobileformat))
						{
							
							return true;
						}
						else
						{
							alert("You have entered an invalid mobile number!");
							document.myform.mobile.focus();
							return false;
						}
						
					}
				}
				/*Do all the validations of the form*/
				function doValidation()
				{
					var validation="";
					validation+=validateForm();
					validation +=validateEmail();
					validation+=validateMobile();
				}
				/*increase size of the image*/
				function bigImg(x)
				{
					x.style.height="200px";
					x.style.width="200px";
				}
				/*decrease image size to normal*/
				function normalImg(x)
				{
					x.style.height="100px";
					x.style.width="100px";
				}
				
			
		</script>
	</head>
	<body bgcolor="#99bbff" >
		<?php 
		
		?>
		
		<img src="rgstr.jpg" alt="computer" style="width:100px;height:100px;" class="center" onmouseover="bigImg(this)" onmouseout="normalImg(this)"/>
		<hr style="height:2px;border-width:0;color:black;background-color:black">
		
		<form id="myform" action="#" method="post" onsubmit="return doValidation()" >
		<div class="container">
		<h1>Registration Form</h1>
		
			First name: 
			<input type="text" name="firstname" Placeholder="First Name"/>
			<br><br>
			Last name: 
			<input type="text" name="lastname" Placeholder="Last Name"/>
			<br><br>
			Address:
			<input type="text" name="Address" Placeholder="Address"/>
			<br><br>
			Gender:
			<input type="radio" name="sex" value="male" checked="checked"> Male
			<input type="radio" name="sex" value="female"> Female
			<br><br>
			Email-ID:
			<input type="text" name="email"  Placeholder="Example@gmail.com" />
			<br><br>
			Mobile:
			<input type="text" name="mobile" Placeholder="071-1234567"/>
			<br><br>
			Course:
			<select name="Course">
				<option value="Select Course"selected="selected">Select Course</option>
				<option value="It">It</option>
				<option value="Sofrtware Engineering" >Software Engineering</option>
				<option value="Computer studies">Computer studies</option>
			</select>
			<br><br>
			<a href="https://science.kln.ac.lk"><input type="submit" value="Submit"/></a>
			<input type="button" value="Reset" onclick="Formreset()"/>

		</div>
		
		</form>
		<br>
		<div class>
			For more details <a href="https://science.kln.ac.lk" id="demo" onclick="changecolor()">science.kln.ac.lk</a>
		</div>
		
	</body>
</html>