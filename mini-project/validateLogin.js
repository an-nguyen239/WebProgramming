function validateForm() {
	var username = document.forms["myForm"]["username"].value;
	var password = document.forms["myForm"]["password"].value;
	if (username == "") {
		alert("Name must be filled out");
		return false;
	}
	if (password == "") {
		alert("Password must be filled out");
		return false;
	}
}