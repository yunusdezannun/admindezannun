<!DOCTYPE html>
<html>
<head>
	<title>validate</title>

</head>
<body>
	<h2>Form Validation</h2>
	<table>
		<tr>
			<td>Name<span>*</span></td>
			<td>
				<input type="text" id="name">
			</td>
			<td>
				<span id="spaName"></span>	
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<input type="text" id="addres">
			</td>
			<td>
				<span id="spaAddress"></span>	
			</td>
		</tr>
		<tr>
			<td>Zip Code<span>*</span></td>
			<td>
				<input type="text" id="zip">
			</td>
			<td>
				<span id="spaZip"></span>	
			</td>
		</tr>
		<tr>
			<td>Country<span>*</span></td>
			<td>
				<select id="country">
					<option value="">Please select....</option>
					<option value="Tanzania">Tanzania</option>
					<option value="Kenya">Kenya</option>
					<option value="Uganda">Uganda</option>
				</select>
			</td>
			<td>
				<span id="spaCountry"></span>	
			</td>
		</tr>
		<tr>
			<td>Gender<span>*</span></td>
			<td>
				<input type="radio" name="gender" id="male" value="Male">Male
				<input type="radio" name="gender" id="female" value="Female">Female
			</td>
			<td>
				<span id="spaGender"></span>	
			</td>
		</tr>
		<tr>
			<td>Preferences<span>*</span></td>
			<td>
				<input type="checkbox" id="red" value="Red">Red
				<input type="checkbox" id="green" value="Green">Green
				<input type="checkbox" id="blue" value="Blue">Blue
			</td>
			<td>
				<span id="spaPref"></span>	
			</td>
		</tr>
		<tr>
			<td>Phone<span>*</span></td>
			<td>
				<input type="text" id="phone">
			</td>
			<td>
				<span id="spaPhone"></span>	
			</td>
		</tr>
		<tr>
			<td>Email<span>*</span></td>
			<td>
				<input type="text" id="mail">
			</td>
			<td>
				<span id="spaMail"></span>	
			</td>
		</tr>
		<tr>
			<td>Password (6-8 characters)<span>*</span></td>
			<td>
				<input type="password" id="pass">
			</td>
			<td>
				<span id="spaPass"></span>	
			</td>
		</tr>
		<tr>
			<td>Verify password<span>*</span></td>
			<td>
				<input type="password" id="vpass">
			</td>
			<td>
				<span id="spaVPass"></span>	
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" id="submit" value="SEND" onclick="validate()">
				<input type="reset" value="CLEAR">
			</td>
		</tr>
	</table> 

<script type="text/javascript">
		function validate(){
			var name=document.getElementById("name").value;
			var zip=document.getElementById("zip").value;
			var country=document.getElementById("country").value;
			var male=document.getElementById("male");
			var female=document.getElementById("female");
			var red=document.getElementById("red");
			var green=document.getElementById("green");
			var blue=document.getElementById("blue");
			var phone=document.getElementById("phone").value;
			var mail=document.getElementById("mail").value;
			var pass=document.getElementById("pass").value;
			var vpass=document.getElementById("vpass").value;
			//validate name
			
			if (name=="") {
				document.getElementById("spaName").innerHTML="Please Enter your name!";
			}else if (name.length>20) {
				document.getElementById("spaName").innerHTML="Name should not exceed 20 characters!";
			}else{
				document.getElementById("spaName").innerHTML="";
			}
			
			//validate preference
			var count=0;
			if (red.checked) {count++;}
			if (green.checked) {count++;}
			if (blue.checked) {count++;}
			if (count<2) {
				document.getElementById("spaPref").innerHTML="Minimum Two colors should be selected!";
			}else{
				document.getElementById("spaPref").innerHTML="";
			}
		
			
			//validate password
			if (pass=="") {
				document.getElementById("spaPass").innerHTML="Password should be filled!";
			}else{
				document.getElementById("spaPass").innerHTML="";
			}
			//validate password
			if (vpass=="") {
				document.getElementById("spaVPass").innerHTML="Password should be filled!";
			}else if (pass!=vpass) {
				document.getElementById("spaVPass").innerHTML="Password does not match!";
			}else{
				document.getElementById("spaVPass").innerHTML="";
			}
		}
	</script>
</body>
</html>

</body>
</html>