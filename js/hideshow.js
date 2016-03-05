$(document).ready(function(){
    // Initially all abstracts are visible. If JavaScript is
    // running, hide all abstracts and add hyperlinks to toggle
    // the abstracts
    $("span.abstract").addClass("hidden");
    $("span.abstract").parent().prepend('(<a href="">show abstract</a>)');

    // Functionality to toggle abstracts.
    $("span.abs-non > a").click(function(event){
	$(this).siblings("span.abstract").toggleClass("hidden");
	return false;
	    });
    });
