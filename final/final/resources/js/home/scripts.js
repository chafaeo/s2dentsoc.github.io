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

function saveSkills(userID){

	var skills = [];
	
	$('input:checkbox[name=skills]:checked').each(function(){
       
       skills.push( "('"+userID+"','"+$(this).val()+"')" );
       
    });

	skills = skills.toString();
	
	alert(skills);
	$.ajax({
		url: "../../../actions/save-skills.php",
		type: 'GET',
		data: 'skills='+skills,
		success: function(value){
			window.location.reload();
		}
	});

}