$(document).ready(function(){

	$('#add').click(function(){
        $('#spinner').show();
		var category = $('#category_name').val();
          add_new_category(category);
	});

	$('#update').click(function(){
        $('#spinner').show();
        var category_id = $('#category_id').val();
        var category = $('#category').val();
        update_category(category,category_id);
	});   

    $('#add_skill').click(function(){
        $('#spinner').show();
        var skill = $('#skill').val();
        var category = $('#selected_category').val();
          add_new_skill(category,skill);
    });


    $("#spinner").bind("ajaxSend", function() {
        $(this).show();
    }).bind("ajaxStop", function() {
        $(this).hide();
    }).bind("ajaxError", function() {
        $(this).hide();
    });

});

function add_new_category(category){
$.ajax('../manage-category/add.php',{
        type: 'POST',
        data: {
            category: category
        },
        success: function (response) {
        	window.location = "./";
        }
    });
}
function update_category(category,category_id){
$.ajax('../manage-category/update.php',{
        type: 'POST',
        data: {
            category: category,
            category_id: category_id
        },
        success: function (response) {
        	window.location = "./";
        }
    });
}

function delete_category(category_id){
   var r = confirm("Are you sure you want to delete this category?");
   if(r == true){
      $('#spinner').show();
      $.ajax('../manage-category/delete.php',{
        type: 'POST',
        data: {
            category_id: category_id
        },
        success: function (response) {
            window.location = "./";
        }
    });
   } else {

   }
}
function add_new_skill(category,skill){
$.ajax('../manage-skill/add.php',{
        type: 'POST',
        data: {
            category: category,
            skill: skill
        },
        success: function (response) {
            window.location = "./";
        }
    });
}
function update_skill (skill_id) {
  var skill = $('#skill').val();
  $.ajax('../manage-skill/update_skill.php',{
        type: 'POST',
        data: {
            skill:skill,
            skill_id:skill_id
        },
        success: function (response) {
            window.location = "./";
        }
    });

}
function delete_skill (skill_id) {
 
  $.ajax('../manage-skill/delete_skill.php',{
        type: 'POST',
        data: {
            skill_id:skill_id
        },
        success: function (response) {
            window.location = "./";
        }
    });

}