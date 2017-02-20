$(document).ready(function() {

$("#username").focusin(
function checkUsernameIn(){
	if($(".targetUsername").length < 2) {
		$( "<span class = 'targetUsername'>Username can only contain alphabets or numbers.</span>" ).addClass("info").insertAfter( $( "#username" ) );
	}
	});

$("#username").focusout(
   
function checkUsernameOut(){
	var username = $(this).val() ;
    if( /^[0-9a-zA-Z_.-]+$/.test(username)){
		if($(".targetUsername").length > 0) {
		$( ".targetUsername" ).remove();
	}
		$( "<span class = 'targetUsername'>Ok.</span>" ).addClass("ok").insertAfter( $( "#username" ) );
	}
	else{
		if($(".targetUsername").length > 0) {
		$( ".targetUsername" ).remove();
	}
		$( "<span class = 'targetUsername'>Error.</span>" ).addClass("error").insertAfter( $( "#username" ) );
	}
});

$("#password").focusin(
function checkPasswordIn(){
	if($(".targetPassword").length < 2) {
		$( "<span class = 'targetPassword'>Password should be atleast 8 characters long.</span>" ).addClass("info").insertAfter( $( "#password" ) );
	}
	});

$("#password").focusout(
   
function checkPasswordOut(){
	var pass = $(this).val() ;
    if( pass.length > 8 ){
		if($(".targetPassword").length > 0) {
		$( ".targetPassword" ).remove();
	}
		$( "<span class = 'targetPassword'>Ok.</span>" ).addClass("ok").insertAfter( $( "#password" ) );
	}
	else{
		if($(".targetPassword").length > 0) {
		$( ".targetPassword" ).remove();
	}
		$( "<span class = 'targetPassword'>Error.</span>" ).addClass("error").insertAfter( $( "#password" ) );
	}
});

$("#email").focusin(
function checkEmailIn(){
	if($(".targetEmail").length < 2) {
		$( "<span class = 'targetEmail'>Email should be in demo@demo.de/dem formate. .</span>" ).addClass("info").insertAfter( $( "#email" ) );
	}
	});

$("#email").focusout(
   
function checkEmailOut(){
	var mail = $(this).val();
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
		if($(".targetEmail").length > 0) {
		$( ".targetEmail" ).remove();
	}
		$( "<span class = 'targetEmail'>Ok.</span>" ).addClass("ok").insertAfter( $( "#email" ) );
	}
	else{
		if($(".targetEmail").length > 0) {
		$( ".targetEmail" ).remove();
	}
		$( "<span class = 'targetEmail'>Error.</span>" ).addClass("error").insertAfter( $( "#email" ) );
	}
});

});
