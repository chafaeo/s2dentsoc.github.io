//function edit(id){
//	var id = id;
//	$.ajax('../actions/edit.php',{    
//                     method:"post",  
//                     data:{id:id},  
 //                    dataType:"text",  
  //                   success:function(data)  
//                     {  
//                         alert(data);
//                     }  
//                });  
//}

function del(id){
	var id = id;
	$.ajax('../actions/delete.php',{    
                     method:"post",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                         if(data == 'ok'){
                        	alert("delete user successful!");
                        	location.reload();
                        } else {
                        	alert("Unable to delete user!");
                        }
                     }  
                });
}