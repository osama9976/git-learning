// JavaScript

 Document$( document ).ready(function() {
                 
                 var $_GET = getQueryParams(document.location.search);
                 
                 if( $_GET['className'] !== undefined)
                     getContent($_GET['className']);                
            });
                  
   function getQueryParams(qs) {
    qs = qs.split("+").join(" ");
    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
            = decodeURIComponent(tokens[2]);
    }

    return params;
}
             
             
             function getContent(pars){  	
			// alert(JSON.stringify('pars'));		          
             $.get('redirectionManager.php',pars)
             .done(function (d) {  
			// alert(d);                 
		$('#content').html(d);
	     })
	    .fail(function (d) {
		//	alert(d);  
		$('#content').html("faild");
             });

        }
		
		

function AddFileUpload()//this function for allows you when you click botton add more image to upload it will print the HTML required code
{var counter = 0;
     var div = document.createElement('DIV');//create div tag to print inside it the html code
     div.innerHTML = '<input class="css-input" id="files' + counter + '"  name="upload[]"  onChange="loadFile(event),loadFile(event)" type="file" /><br>' ;
     document.getElementById("FileUploadContainer").appendChild(div);
    
	  counter++;
	 var loadFile = function(event) {
    var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.upload[1]);
	
	
  };

}





function submitForm(Page,Type,edit) {//this function to save the $_POST and insert them in the database
// window.alert('Ok');
  var
    oOutput = document.getElementById("output"),
    oData = new FormData(document.forms.namedItem("form"));
  var oReq = new XMLHttpRequest();
  oReq.open("POST", "database_jobs.php", true);//here the php insert file

  oReq.onload = function(oEvent) {
    if (oReq.status == 200) {
  oOutput.innerHTML = '<div dir="rtl" class="correct" style="color:green">&nbsp;تم الحفظ بنجاح ...</div>';//once the insert is done print this message
 $('html,body').scrollTop(0);
  setTimeout(function() 
{
goto(Page,null,null,null,Type);
}, 800);   
    } else {
      oOutput.innerHTML = 'error'+ oReq.status ;//if there is error and the insert no done print error message
    }
  };
  oReq.send(oData);
 getContent({'className':'firstForm','id':0})
}