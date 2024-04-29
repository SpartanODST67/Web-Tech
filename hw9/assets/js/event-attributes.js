// JavaScript Document

function checkUsername() {
	var elMsg = document.getElementById('user-feedback');
	var elUsername = document.getElementById('username');
	var elUserGroup = document.getElementById('user-group');
	
	if(elUsername.value.length < 5) {
		elMsg.innerHTML = 'Username must be 5 characters or more';
		if(elUserGroup.classList.contains("has-success")) {
			elUserGroup.classList.remove("has-success");
		}
		elUserGroup.classList.add("has-error");
	}
	else {
		elMsg.innerHTML = '';
		if(elUserGroup.classList.contains("has-error")) {
			elUserGroup.classList.remove("has-error");
		}
		elUserGroup.classList.add("has-success");
	}
}

function checkPassword() {
	var elMsg = document.getElementById('pass-feedback');
	var elPassword = document.getElementById('password');
	var elPassGroup = document.getElementById('pass-group');
	
	if(elPassword.value.length < 5) {
		elMsg.innerHTML = 'Password must be 5 characters or more';
		if(elPassGroup.classList.contains("has-success")) {
			elPassGroup.classList.remove("has-success");
		}
		elPassGroup.classList.add("has-error");
	}
	else {
		elMsg.innerHTML = '';
		if(elPassGroup.classList.contains("has-error")) {
			elPassGroup.classList.remove("has-error");
		}
		elPassGroup.classList.add("has-success");
	}
}

var elUser = document.getElementById('username');
var elPass = document.getElementById('password')
elUser.onblur = checkUsername;
elPass.onblur = checkPassword;
