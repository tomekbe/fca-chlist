//expand jquery a bit first


jQuery.fn.cssNumber = function (prop) {
    var v = parseInt(this.css(prop),10);
    return isNaN(v) ? 0 : v;
};

// 1.get jsonp
// 2.bootstrap it
// 3 bind it


// when document is ready

var _strapIt =function (o) {
    
    // for each object in the array
	var el = $('#chlist');


	$(o).each(function(i) {
		
		var currentPopUp;

		var header = o[i].header;
		var list = o[i].list;
		var hidden = o[i].popups;

		var renderList='';
		var renderHiddenThings ='';

		$(list).each(function(l){
			renderList +='<li>'+list[l]+'</li>';
		})

		$(hidden).each(function(p){
			currentPopUp = p+1;
			renderHiddenThings+= '<div class="ch-absolute" id="el'+(i+1)+'-l'+(currentPopUp)+'-pop">' + hidden[p] +'</div>';
		})


		$('<div class="ch-el"><span class="ch-header">'+o[i].header+'</span><ul>'+renderList+'</ul>'+renderHiddenThings+'</div>').appendTo(el);
	
	})
	//once strapped now bind it togetherz
	bindIt();

}


var _errorLoad  = function (o) {

	var el = $('#chlist');
	//appends an error message to the body;
	$('<div>'+o+'</div>').appendTo(el);
	//alert("d")
}

var bindIt = function () {



	//look for links and assign them 
	$('#chlist').find('.ch-el').each(function(i) {
		
	 	$(this).find('.linkage').each(function(j) {
			
			//element	 	
	 		var whichEl = i+1;
	 		//which link element
	 		var whichLn = j+1;
	 		
	 		$(this).append( "<img src='img/popup-icon.gif' style='width:14px;height:14px;margin:5px;margin-bottom:0px;margin-top:0px'></img>" );

	 		//wrap it with a link
	 		$(this).wrap('<a id="ch-el' +whichEl+ '-l'+ whichLn+'" class="ch-link" style="white-space:nowrap"></a>');

			// and bind click events on it 
			$(this).bind( "click", function(e) {

	 			  var string = "#el"+whichEl +"-l"+whichLn+"-pop";
	 			  // place just above the clicked line	
	 			  $(string).css("top",this.offsetTop - $(string).cssNumber("height")  );
	  			  // show 
	  			  $(string).css("display","block");
	  			
	 		});
	 	})
	});


	// binding close element 

	$(".ch-close").bind("click", function(){
		var pop = $(this).parent();
		$(pop).css("display","none");
	})

	
}
var _test = function () {

	alert("ie test.")
}

window.onload = function () {

	(function($) {


		//check if limited permission or full permission 
		//and load appropriate JSONP file
		
		window.lcheck = document.getElementById("limited-checklist");
		window.fcheck = document.getElementById('full-checklist')
		
		if(lcheck) {
			// limited permission scenario
			var url = 'http://view-it.co.uk/services/fca/limited_checklist_jsonp_ie.php?callback=JSON_CALLBACK'
		} else if (fcheck) {
			
			// full permission scenario
			var url = 'http://view-it.co.uk/services/fca/full_checklist_jsonp_ie.php?callback=JSON_CALLBACK';
		}
		//http://view-it.co.uk/preview/fca/checklists/checklist_jsonp_ie.php
		 
		$.ajax({
		   type: 'GET',
		    url: url,
		    async: false,
		    jsonpCallback: 'jsonCallback',
		    contentType: "application/json",
		    dataType: 'jsonp',
		    success: function(json) {
		       //console.dir(json);
		       //console.log(json[0].list.length)
		     _strapIt(json);
		  
		    },
		    error: function(e) {
		       //console.log(e.message);
		       _errorLoad(e.message);
		    }
		});
		 
		})(jQuery);



	 
}