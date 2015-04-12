$(window).resize(function(){
				
				
				if($(window).width() < 990)
				{	
					$("#item1").removeClass('custom-menu');
					$("#item2").removeClass('custom-menu');
					$("#item3").removeClass('custom-menu');
					$("#item4").removeClass('custom-menu');
				}
				else
				{
					$("#item1").addClass('custom-menu');
					$("#item2").addClass('custom-menu');
					$("#item3").addClass('custom-menu');
					$("#item4").addClass('custom-menu');
					
					}
						 
					
				});
			  
