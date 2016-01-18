//	Author:
//	Ben Nadel / Kinky Solutions



// Create a jquery plugin that prints the given element.
jQuery.fn.print = function(){
	// NOTE: We are trimming the jQuery collection down to the
	// first element in the collection.
	if (this.size() > 1){
		this.eq( 0 ).print();
		return;
	} else if (!this.size()){
		return;
	}
 
	// ASSERT: At this point, we know that the current jQuery
	// collection (as defined by THIS), contains only one
	// printable element.
 
	// Create a random name for the print frame.
	var strFrameName = ("printer-" + (new Date()).getTime());
 
	// Create an iFrame with the new name.
	var jFrame = $( "<iframe name='" + strFrameName + "'>" );
 
	// Hide the frame (sort of) and attach to the body.
	jFrame
		.css( "width", "700px" )
		.css( "height", "600px" )
		.css( "position", "absolute" )
		.appendTo( $( "body:first" ) )
	;
 
	// Get a FRAMES reference to the new frame.
	//var objFrame = window.frames[ strFrameName ];


 
	// Get a reference to the DOM in the new frame.
	//var objDoc = objFrame.document;
	var newwindow = window.open("", "mywindow1" , 'width=960,height=700,scrollbars=yes');
	var objDoc = newwindow.document;
 
	// Grab all the style tags and copy to the new
	// document so that we capture look and feel of
	// the current document.
 
	// Create a temp document DIV to hold the style tags.
	// This is the only way I could find to get the style
	// tags into IE.
	var jStyleDiv = $( "<div>" ).append(
		$( "style" ).clone()
		).append(
		$( "link" ).clone()
		);
 
	// Write the HTML for the document. In this, we will
	// write out the HTML of the current element.
	objDoc.open();
	objDoc.write( "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">" );
	objDoc.write( "<html>" );
	objDoc.write( "<head>" );
	objDoc.write("<script type=\"text/javascript\">function printMe() { window.print();/*window.close();*/}</script>");
	objDoc.write( "<title>" );
	objDoc.write( document.title );
	objDoc.write( "</title>" );
	objDoc.write( jStyleDiv.html() );
	objDoc.write( "</head>" );
	objDoc.write( "<body class='printmode' dir='rtl' onLoad='printMe()'>" );
	objDoc.write( "<span style='font-weight:bold; font-size:1em;text-align:center;width:100%'>" );
	objDoc.write( $('#printableHeader').text() );
	objDoc.write( "</span>" );
	objDoc.write( "<br/><br/>" );
	objDoc.write( this.html() );
	objDoc.write( "</body>" );
	objDoc.write( "</html>" );
	objDoc.close();
 
	// Print the document.
	//objFrame.focus();
	//objFrame.printMe();
	//newwindow.printMe();
 
	// Have the frame remove itself in about a minute so that
	// we don't build up too many of these frames.
	setTimeout(
		function(){
			jFrame.remove();
		},
		(60 * 1000)
		);
}