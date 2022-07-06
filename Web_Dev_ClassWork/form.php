<html>
<head>
	<script type="text/javascript" src="abc.com/abc.js"></script>
	<script>
	function valid_name(name){
		if(name.length<=3){
			return false;
		}
		return true;
	}
	function valid_email(mail){
		var atpos=mail.indexOf("@");
		var dotpos=mail.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length){
			return false;
		}
		return true;
	}
	function validate(){
		//event.preventDefault();
		console.log('Validating...');
		let name=document.getElementById('name').value;
		let email=document.getElementById('mail').value;
		if(valid_name(name) && valid_email(email)){
			return true;
		}
		return false;
	}
	</script>
</head>
<body>

<form action="form.php" method="get" onsubmit="return validate(event);">
Name: <input type="text" name="name" id="name" required><br>
Roll No: <input type="text" name="rollno" id="rollno" required><br>
Marks: <input type="number" name="marks" id="marks" required><br>
E-mail: <input type="email" name="mail" id="mail" required><br>
Gender:
<input type="radio" name="gender" id="gender" value="female" checked="checked">Female
<input type="radio" name="gender" id="gender" value="male">Male <br>
<input type="submit" value="Register">
</form>

</body>
</html>