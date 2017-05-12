<?php
require_once '../config.inc.php';
initJs();
?>
var check1=false;
var check2=false;
var ss;
function finishGet(data){
	alert(data);
}
$(document).ready(function(){
	$("#error").hide();
	$("#error").fadeIn();
	$("#emailError").hide();
	$("#passwordError").hide();
});
$("#formSubmit").click(function(){
	//EMAIL
	test1 = <?=EMAIL_REGEX?>;
	test2 = <?=PASSWORD_REGEX?>;
	if(test1.test($("#inputEmail").val())){
		$("#emailErrorBox").removeClass("has-error");
		$("#emailError").fadeOut();
		check1=true;
	} else {
		$("#emailErrorBox").addClass("has-error");
		$("#emailError").fadeIn();
		check1=false;
	}
	if(test2.test($("#inputPassword").val())){
		$("#passwordErrorBox").removeClass("has-error");
		$("#passwordError").fadeOut();
		check2=true;
	} else {
		$("#passwordErrorBox").addClass("has-error");
		$("#passwordError").fadeIn();
		check2=false;
	}
	if(check1 && check2){
		if(navigator.onLine){
			//connect to server
			$("#formSubmit").button("loading");
			var r = getXMLHttp();
			r.open("post","<?=ROOT?>/api/usercheck.json",true);
			o = {
				email: $("#emailInput").val(),
				password: $("#passwordInput").val(),
				remember: $("#rememberCheck1").prop("checked")
			}
			s = JSON.stringify(o);
			r.setRequestHeader('Content-type', 'text/json');
			r.send(o);
			ss=r;
		} else {
			toastr.error("Ваше устройство не подключено к сети. Пожалуйста, подключитесь к сети для входа");
		}
	} else {
		toastr.error("Мы обнаружили ошибки. Пожалуйста, исправьте их для входа");
	}
	});