<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
function getCookie(name){
var cname = name + "=";               
var dc = document.cookie;             
if (dc.length > 0) {              
begin = dc.indexOf(cname);       
if (begin != -1) {           
begin += cname.length;       
end = dc.indexOf(";", begin);
if (end == -1) end = dc.length;
return unescape(dc.substring(begin, end));
} 
}
return null;
}
function setCookie(name, value) {
var now = new Date();
var then = new Date(now.getTime() + 31536000000);
document.cookie = name + "=" + escape(value) + "; expires=" + then.toGMTString() + "; path=/";
}
function getInfo(form) {
form.info.value = "Browser Information: " + navigator.userAgent;
}
function getValue(element) {
var value = getCookie(element.name);
if (value != null) element.value = value;
}
function setValue(element) {
setCookie(element.name, element.value);
}
function fixElement(element, message) {
alert(message);
element.focus();
}
function isMailReady(form) {
var passed = false;
if (form.firstname.value == "") {
fixElement(form.firstname, "Please include your first name.");
}
else if (form.lastname.value == "") {
fixElement(form.lastname, "Please include your last name.");
}
else if (form.location.value == "") {
fixElement(form.location, "Please include your location.");
}
else if (form.title.value == "") {
fixElement(form.title, "Please include your title.");
}
else if (form.phone.value == "") {
fixElement(form.phone, "Please include your phone number.");
}
else if (form.email.value.indexOf("@") == -1 ||
form.email.value.indexOf(".") == -1) {
fixElement(form.email, "Please include a proper email address.");
}
else if (form.email.value != form.confirmemail.value) {
fixElement(form.phone, "Please make sure your email address and confirmation email address match.");
}
else if (form.employees.value == "") {
fixElement(form.employees, "Please include the number of employees.");
}
else if (form.tools.value == "") {
fixElement(form.tools, "Please list the financial modeling tools you use today.");
}
else {
getInfo(form);
passed = true;
}
return passed;
}