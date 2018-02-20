function validateTextbox(){
	var first_name = document.getElementById("first_name");
	var last_name = document.getElementById("last_name");
	var title = document.getElementById("title");
	var username = document.getElementById("username");
	var password1 = document.getElementById("password1");
	var password2 = document.getElementById("password2");
	var email = document.getElementById("email");
	var number = document.getElementById("number");
	
	if (first_name.value == ""){
		alert("Please fill the required details!!!");
		first_name.focus();
		return false;
	}else if (last_name.value == "") {
		alert("Please fill the required details!!!");
		last_name.focus();
		return false;
	}else if (username.value == "") {
		alert("Please fill the required details!!!");
		username.focus();
		return false;
	}else if (password1.value == "") {
		alert("Please fill the required details!!!");
		password1.focus();
		return false;
	}else if (password2.value == "") {
		alert("Please fill the required details!!!");
		password2.focus();
		return false;
	}else if (email.value == "") {
		alert("Please fill the required details!!!");
		email.focus();
		return false;
	}else if (number.value == "") {
		alert("Please fill the required details!!!");
		number.focus();
		return false;
	}else if (password1.value !== password2.value){
		alert ("Passwords do not match!!");
		password2.focus();
		return false;
	}else{
		return true;
	}
}