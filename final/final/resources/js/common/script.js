function resend_mail(email,fname,token){
		$("#alert-container").html('Loading...');
		$.ajax({
			url: "actions/send-mail.php",
			type: 'GET',
			data: 'email='+email+'&fname='+fname+'&token='+token,
			success: function(value){
				if(value==0){
					window.location.href = 'view/common/register/verify.php';
				}else{
					window.location.href = 'view/common/register/verify.php?failed1';
				}
			}
		});
}