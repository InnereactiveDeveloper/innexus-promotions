//Innexus Promotions Scripts
jQuery(document).ready(function($)
{
	
	//console.log('plugin properly enqueued');
	
	function online_marker() 
	{
		/**** Load HTML ***/
		
		var json_base_url = 'https://mixer.com/api/v1/';     
		var team = 'teams/2962/users';        

		var json_url = json_base_url + team;
		
		$.ajax({
			dataType: 'json',
			url: json_url,
			
			//Success function
			success: function (data) 
			{
				//console.log(data[0]['channel']['online']);
				
				for(var i = 0; i < data.length; i++) 
				{
				    var obj = data[i];
				    var online = obj['channel']['online'];
				    var token = obj['channel']['token'];
				    //console.log(token);
					
					if(online === true)
					{
						$('.stream-icons').find("[data-name='"+token+"']").addClass('live');
					}
					
				   // console.log(obj['channel']['online']);
				}
			},
			
			//Error function
			error: function (data)
			{
				console.log(data);
			}
		});
	}
	
	
});
