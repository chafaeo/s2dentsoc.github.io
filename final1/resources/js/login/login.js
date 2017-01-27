// JavaScript Validation For login Page

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
					required: "Please Enter your User Name"
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
				url: "./actions/login.php",
				type: 'GET',
				data: 'uname='+uname+'&pword='+pword,
				success: function(value){
					if(value=='admin'){
						window.location.href = 'admin';
					}
				}
			});

	}

$(document).keypress(function(event){

	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		login();
	}

});

