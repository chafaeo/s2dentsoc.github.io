// JavaScript Validation For login Page

$('document').ready(function()
{ 		 
	$("#register-form").validate({
					
		rules:
		{
			name: {
				required: true
			},
			password: {
				required: true
			}
		},
		messages:
		{
			name: {
				required: "Please Enter your Username"
			},
			password:{
				required: "Please Enter your Password"
			}
		},
		errorPlacement : function(error, element) {
			$(element).closest('.form-group').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			$(element).closest('.form-group').find('.help-block').html('');
		},
		   
		submitHandler: function(form){
			login();
		}
	}); 
});

	function login(){
		var uname = $('#uname').val();
		var pword = $('#pword').val();

		$.ajax({
			url: "actions/login.php",
			type: 'GET',
			data: 'uname='+uname+'&pword='+pword,
			success: function(value){
				if(value=='admin'){
					window.location.href = 'view/admin';
				}else if(value=='student'){
					window.location.href = 'view/student/home';
				}else if(value=='teacher'){
					window.location.href = 'teacher';
				}else if(value=='company'){
					window.location.href = 'company';
				}else if(value=='unverified'){
					window.location.href = '?unverified';
				}else{
					window.location.href = '?error';
				}
			}
		});

	}

function resend_mail(email,fname,token){
		$("#alert-container").html('Loading...');
		$.ajax({
			url: "actions/send-mail.php",
			type: 'GET',
			data: 'email='+email+'&fname='+fname+'&token='+token,
			success: function(value){
				alert('send_mail value in login = '+value);
				if(value==0){
					window.location.href = 'view/common/register/verify.php';
				}else{
					window.location.href = 'view/common/register/verify.php?failed1';
				}
			}
		});
}

