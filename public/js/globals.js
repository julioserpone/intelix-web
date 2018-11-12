	$(function () {
	    $(document).ready(function () {
	        $('body')
		        .on('click','a.default',function (event) {
		            event.preventDefault();
		            $("#component-modal .modal-content").empty();
		            if ($(this).attr("modal-url")){
		                $("#component-modal .modal-content").load($(this).attr("modal-url"));
		            }else if($(this).attr("modal-text")){
		                $("#component-modal .modal-content").html($(this).attr("modal-text"));
		            }
		        })
		        .on('click','a.secundary',function (event) {
		            event.preventDefault();
		            $("#component-modal-secundary .modal-content").empty();
		            if ($(this).attr("modal-url")){
		                $("#component-modal-secundary .modal-content").load($(this).attr("modal-url"));
		            }else if($(this).attr("modal-text")){
		                $("#component-modal-secundary .modal-content").html($(this).attr("modal-text"));
		            }
		        });

		    (function($){
        
		    	//Has Event un element?
			    $.fn.hasEvent = function(event){
			        if(!this.length || !event){
			            return false;
			        }
			        event = (event + '').split('.');
			        var d = $._data ? $._data($(this)[0], 'events') : $(this).data('events'),
			            a = [],
			            e = event[0],
			            n = event[1],
			            x = 0,
			            y, z;
			        if(d && e == ''){
			            for(y in d){
			                for(z in d[y]){
			                    if(d[y][z].namespace == n){
			                        a[x] = y;
			                        x ++;
			                    }
			                }
			            }
			            if(!a.length){
			                return false;
			            }
			            return a;
			        }
			        if(d && d[e]){
			            if(n){
			                for(y in d[e]){
			                    if(d[e][y].namespace == n){
			                        return true
			                    }
			                }
			                return false;
			            }
			            return true;
			        }
			        return false;
			    };
			})(jQuery);

		});
	});
	
	
	$('.modal').modal();
    $('select').material_select();
    $('.parallax').parallax();
    $('.button-collapse').sideNav({
	    menuWidth: 270, // Default is 240
	    edge: 'left', // Choose the horizontal origin
	    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	    draggable: true, // Choose whether you can drag to open on touch screens,
	    onOpen: function(el) {
	    	// A function to be called when sideNav is opened
	    	$('#sidenav-logo').addClass('animated fadeInUp');
	    }, 
	    onClose: function(el) {
	    	// A function to be called when sideNav is closed
	    	$('#sidenav-logo').removeClass('animated fadeInUp');
	    }
    });
  	$('ul.tabs').tabs();
  	$('.scrollspy').scrollSpy();
