// JavaScript Document

function validateName(minLength, messageID, fieldID, fieldGroupID) {
	var elMsg = document.getElementById(messageID);
	var elField = document.getElementById(fieldID);
	var elFieldGroup = document.getElementById(fieldGroupID);
	var characterWord = "characters";
	var validRegex = /^[a-zA-Z'-]+$/;
	if(minLength == 1) {
		characterWord = "character";
	}
	
	if(elField.value.length < minLength) {
		elMsg.innerHTML = fieldID.toUpperCase() + " must be " + minLength + " " + characterWord + " or more.";
		if(elFieldGroup.classList.contains("has-success")) {
			elFieldGroup.classList.remove("has-success");
		}
		elFieldGroup.classList.add("has-error");
	}
	else {
		if(elField.value.match(validRegex)) {
			elMsg.innerHTML = '';
			if(elFieldGroup.classList.contains("has-error")) {
				elFieldGroup.classList.remove("has-error");
			}
			elFieldGroup.classList.add("has-success");
		}
		else {
			elMsg.innerHTML = "Please enter a correct " + fieldID.toUpperCase();
			if(elFieldGroup.classList.contains("has-success")) {
				elFieldGroup.classList.remove("has-success");
			}
			if(!elField.classList.contains("has-error")) {
				elFieldGroup.classList.add("has-error");
			}
		}
	}
}

function validateAccount(minLength, messageID, fieldID, fieldGroupID) {
	var elMsg = document.getElementById(messageID);
	var elField = document.getElementById(fieldID);
	var elFieldGroup = document.getElementById(fieldGroupID);
	var characterWord = "characters";
	if(minLength == 1) {
		characterWord = "character";
	}
	
	if(elField.value.length < minLength) {
		elMsg.innerHTML = fieldID.toUpperCase() + " must be " + minLength + " " + characterWord + " or more.";
		if(elFieldGroup.classList.contains("has-success")) {
			elFieldGroup.classList.remove("has-success");
		}
		elFieldGroup.classList.add("has-error");
	}
	else {
		elMsg.innerHTML = '';
		if(elFieldGroup.classList.contains("has-error")) {
			elFieldGroup.classList.remove("has-error");
		}
		elFieldGroup.classList.add("has-success");
	}
}

function validateEmail(messageID, emailID, fieldGroupID) {
	var elMsg = document.getElementById(messageID);
	var email = document.getElementById(emailID);
	var elFieldGroup = document.getElementById(fieldGroupID);
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email.value.match(validRegex)) {
		elMsg.innerHTML = '';
		if(elFieldGroup.classList.contains("has-error")) {
			elFieldGroup.classList.remove("has-error");
		}
		elFieldGroup.classList.add("has-success");
	}
	else {
		elMsg.innerHTML = "Please enter a correct email address.";
		if(elFieldGroup.classList.contains("has-success")) {
			elFieldGroup.classList.remove("has-success");
		}
		elFieldGroup.classList.add("has-error");
	}
}

function validatePhone(messageID, phoneID, fieldGroupID) {
	var elMsg = document.getElementById(messageID);
	var phoneNumber = document.getElementById(phoneID);
	var elFieldGroup = document.getElementById(fieldGroupID);
	var validRegex = /^[0-9]{10}$/;
	if(phoneNumber.value.match(validRegex)) {
		elMsg.innerHTML = '';
		if(elFieldGroup.classList.contains("has-error")) {
			elFieldGroup.classList.remove("has-error");
		}
		elFieldGroup.classList.add("has-success");
	}
	else {
		elMsg.innerHTML = "Please enter a correct phone number.";
		if(elFieldGroup.classList.contains("has-success")) {
			elFieldGroup.classList.remove("has-success");
		}
		elFieldGroup.classList.add("has-error");
	}
}

function validateComment(messageID, fieldID, fieldGroupID) {
	var elMsg = document.getElementById(messageID);
	var elField = document.getElementById(fieldID);
	var elFieldGroup = document.getElementById(fieldGroupID);
	
	if(elField.value.length == 0) {
		elMsg.innerHTML = "Please leave a comment.";
		if(elFieldGroup.classList.contains("has-success")) {
			elFieldGroup.classList.remove("has-success");
		}
		elFieldGroup.classList.add("has-error");
	}
	else {
		elMsg.innerHTML = '';
		if(elFieldGroup.classList.contains("has-error")) {
			elFieldGroup.classList.remove("has-error");
		}
		elFieldGroup.classList.add("has-success");
	}
}

var elFirst = document.getElementById("first-name");
var elLast = document.getElementById("last-name");
var elEmail = document.getElementById("email");
var elPhone = document.getElementById("phone-number");
var elUser = document.getElementById("username");
var elPass = document.getElementById("password");
var elComment = document.getElementById("comments");

if(elFirst != null)
elFirst.addEventListener("blur", function () {
	validateName(2, "fn-feedback", "first-name", "fn-group");
	}, false);
if(elLast != null)
elLast.addEventListener("blur", function () {
	validateName(2, "ln-feedback", "last-name", "ln-group")
	}, false);
if(elEmail != null)
elEmail.addEventListener("blur", function () {
	validateEmail("email-feedback", "email", "email-group");
	}, false);
if(elPhone != null)
elPhone.addEventListener("blur", function () {
	validatePhone("pn-feedback", "phone-number", "pn-group");
	}, false);
if(elUser != null)
elUser.addEventListener("blur", function () {
	validateAccount(6, "user-feedback", "username", "user-group");
	}, false);
if(elPass != null)
elPass.addEventListener("blur", function () {
	validateAccount(6, "pass-feedback", "password", "pass-group");
	}, false);
if(elComment != null)
elComment.addEventListener("blur", function() {
	validateComment("comments-feedback", "comments", "comments-group");
	}, false);
