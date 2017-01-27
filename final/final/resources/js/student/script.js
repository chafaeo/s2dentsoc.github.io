// JavaScript Validation For Registration Page
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '+';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}

$('document').ready(function()
{ 		 		
		 // name validation
		  var nameregex = /^[a-zA-Z ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#register-form").validate({
					
		  rules:
		  {
				fname: {
					required: true,
				},
				lname: {
					required: true,
				},
				name: {
					required: true,
					validname: true,
					minlength: 4
				},
				email: {
					required: true,
					validemail: true
				},
				phonenumber: {
					required: true,
				},
				password: {
					required: true,
					minlength: 8,
					maxlength: 15
				},
				cpassword: {
					required: true,
					equalTo: '#password'
				},
				File: {
					required: true
				},
				terms: {
					required: true
					  }
		   },
		   messages:
		   {
		   		fname: {
					required: "Please Enter your First Name"
					  },
				lname: {
					required: "Please Enter your Last Name"
					  },
				name: {
					required: "Please Enter your User Name",
					validname: "Name must contain only alphabets and space",
					minlength: "Your Name is Too Short"
					  },
			    email: {
					required: "Please Enter your Email Address",
					validemail: "Enter a Valid Email Address"
					   },
				phonenumber: {
					required: "Please Enter your Phone Number"
					   },
				password:{
					required: "Please Enter your Password",
					minlength: "Password at least have 8 characters"
					},
				cpassword:{
					required: "Please Retype your Password",
					equalTo: "Password Did not Match!"
					},
				File: {
					required: "Please Upload your Resume"
					  },
				terms: {
					required: "Please indicate that you accept the Terms and Conditions"
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
		   	
		   	// submit button handler!
		   	submitHandler: function(form){
				
				// check username, email, and resume filename availability then send email verification and register
				checkAvailability();

			}
		}); 
});

function checkAvailability(){
	var email = $("#txtemail").val();
	var uname = $("#txtuname").val();
	var resume = document.getElementById("txtfile").files[0].name;

	$.ajax({
		url: "../../../actions/check-availability.php",
		type: 'GET',
		data: 'email='+email+'&uname='+uname+'&resume='+resume,
		success: function(value){
			alert(value);

			if(value==0) // register successfull
			{
				register(email,uname,resume);
			}
			else if(value==1) // register failed
			{
				var resumeError = 'Please modify, the file name of your resume already exist.';
				$('.resumeErrorTxt').html(resumeError);
				$('.resume').removeClass('has-success').addClass('has-error');
			}
			else if(value==2) // register failed
			{
				var unameError = 'Username Already Used';
				$('.unameErrorTxt').html(unameError);
				$('.uname').removeClass('has-success').addClass('has-error');

				$('#txtuname').focus();
			}
			else if(value==3) // register failed
			{
				var emailError = 'Email Already Used';
				$('.emailErrorTxt').html(emailError);
				$('.myEmail').removeClass('has-success').addClass('has-error');
				$('#txtemail').focus();
			}
			else if(value==4) // register failed
			{
				var emailError = 'Email Already Used';
				$('.emailErrorTxt').html(emailError);
				$('.myEmail').removeClass('has-success').addClass('has-error');

				var unameError = 'Username Already Used';
				$('.unameErrorTxt').html(unameError);
				$('.uname').removeClass('has-success').addClass('has-error');

				$('#txtemail').focus();
			}
			else
			{
				alert('Opps! Something went wrong. Registration Failed! Please Try Again.');
			}
		}
	});
		
}

function register(email,uname,resume){
	var fname = $("#txtfname").val();
	var lname = $("#txtlname").val();
	var num = $("#txtnum").val();
	var pword = $("#txtpword").val();

	$.ajax({
		url: "../../../actions/register.php",
		type: 'GET',
		data: 'fname='+fname+'&lname='+lname+'&email='+email+'&num='+num+'&uname='+uname+'&pword='+pword+'&resume='+resume,
		success: function(token){

			// registration successfull. send email verification
			send_mail(token);
		}
	});
}

function send_mail(token){
	var fname = $("#txtfname").val();
	var email = $("#txtemail").val();

	$.ajax({
		url: "../../../actions/send-mail.php",
		type: 'GET',
		data: 'fname='+fname+'&email='+email+'&token='+token,
		success: function(value){
			// upload resume--------------------
			upload_resume();

			if(value==0){
				window.location.href = '../../common/register/verify.php';
			}else{
				window.location.href = '../../common/register/verify.php?failed';
			}
		}
	});
}

function upload_resume(){
	var file_data = $('#txtfile').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    $.ajax({
        url: '../../../actions/upload.php', //  point to server-side PHP script 
        dataType: 'text',  //  what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(php_script_response){
            alert("Upload resume php script response"+php_script_response); //  display response from the PHP script, if any
        }
     });
}

function resend_mail(email,fname,token){
		$("#alert-container").html('Loading...');
		$.ajax({
			url: "../../../actions/send-mail.php",
			type: 'GET',
			data: 'email='+email+'&fname='+fname+'&token='+token,
			success: function(value){
				if(value==0){
					window.location.href = '../../common/register/verify.php';
				}else{
					window.location.href = '../../common/register/verify.php?failed1';
				}
			}
		});
}

function getSkills(){
	$.ajax({
		url: "../../../actions/skills.php",
		type: 'GET',
		data: '',
		success: function(value){
			$("#skill-container").html(value);
		}
	});
}