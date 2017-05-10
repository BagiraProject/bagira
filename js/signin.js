<?php
require_once '../config.inc.php';
initJs();
?>
function finishGet(data){
	alert(data);
}
$(document).ready(function(){
	$("#error").hide();
	$("#error").fadeIn();
});
$("#formSubmit").click(function(){
	obj = {email: $("#inputEmail").val(), pass: $("#inputPassword").val(), remember: $("#rememberCheck1").prop("checked")}
	n=$.getJSON("../api/usercheck.json",JSON.stringify(obj));
	n.
		
	});