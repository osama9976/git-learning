
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
// window.alert('Ok');
  var
    oOutput = document.getElementById("output"),
    oData = new FormData(document.forms.namedItem("form"));
  var oReq = new XMLHttpRequest();
  oReq.open("POST", "db/database_jobs.php", true);

  oReq.onload = function(oEvent) {
    if (oReq.status == 200) {
  oOutput.innerHTML = '<div dir="rtl" class="correct" style="color:green">&nbsp;تم الحفظ بنجاح ...</div>';
 $('html,body').scrollTop(0);
  setTimeout(function() 
{
goto(Page,null,null,null,Type);
}, 800);   
    } else {
      oOutput.innerHTML = 'error'+ oReq.status ;
    }
  };
  oReq.send(oData);
}