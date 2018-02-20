function validateTextbox(){
	var username = document.getElementById("username");
	var password = document.getElementById("password");
	
	if (username.value == ""){
		alert("Username is incorrect!!");
		username.focus();
		return false;
	}else if (password.value == "") {
		alert("Password is incorrect");
		password.focus();
		return false;
	}else{
		return true;
	}
}