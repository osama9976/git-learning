
//////////////////////////////////////////////
function GetCase(Page,ID,value,status,Type) {	
	$.ajax({
        url: "include.php",
	    data: "Action=" + Page +"&id="+ID+"&value="+value+"&status="+status+"&type="+Type, 
        success: function( data ) {
            $('#contentTd').html( data );  	
		
		}
    });

}

/////////////////////////////////////////
function submitForm(Page,Type,edit) {		
        	
		var dataString = $("#form").serialize();
	 
		$.ajax({
       /* Before submit */
   	
			type:'POST', 
			url:'save_formd.php', 			
			data:dataString, 
			success: function(response) 
		{		
			$('#form').find('#form_result').html(response);								
			
				setTimeout(function() 
					{ 
				//goto(Page,null,null,null,Type);
				//	$('#form').find('.form_result').text("");			
					
					}, 1000800);											
		}});							
				return false;								
		}