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
					required: "Please Upload your resume"
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
		   
		   		submitHandler: function(form){
					alert('submitted');
					//register();
					var fname = $("#txtfname").val();
					var email = $("#txtemail").val();
					var msg = "\
						Hello "+fname+",\
						<br /><br />\
						Welcome to My Profile!<br/>\
						To complete your registration, just click on the link below<br/>\
						<br /><br />\
						<a href='http://localhost/final/view/register/skills.php'>Click HERE to activate your account.</a>\
						<br /><br />\
						Thanks,";
					var subject = "Confirm Registration";

					send_mail(email,msg,subject);
				}
		   	}); 
});

function send_mail(email,message,subject){
	var fname = $("#txtfname").val();
	var lname = $("#txtlname").val();
	var email = $("#txtemail").val();
	var num = $("#txtnum").val();
	var uname = $("#txtuname").val();
	var pword = $("#txtpword").val();

	$.ajax({
		url: "../../actions/register.php",
		type: 'GET',
		data: 'fname='+fname+'&lname='+lname+'&email='+email+'&num='+num+'&uname='+uname+'&pword='+pword,
		success: function(value){
			if(value==0){
				$.ajax({
					url: "../../actions/send-mail.php",
					type: 'GET',
					data: 'email='+email+'&msg='+message+'&subject='+subject,
					success: function(value){
						window.location.href = 'verify.php';
					}
				});
			}else{
				alert('username or email already used!');
			}
			
		}
	});	
						
}
