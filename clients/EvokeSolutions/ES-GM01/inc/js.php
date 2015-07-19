<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">			
	$(document).ready(function() {				
		$('#understand_container') .hover(function(){$('#understand') .addClass('understand_active');}, function(){$('#subnav_understand') .removeClass('understand_active');});
		$('#understand_container') .hover(function(){$('#subnav_understand') .removeClass('hidden');}, function(){$('#subnav_understand') .addClass('hidden');});
		
		$('#develop_container') .hover(function(){$('#develop') .addClass('develop_active');}, function(){$('#subnav_develop') .removeClass('develop_active');});
		$('#develop_container') .hover(function(){$('#subnav_develop') .removeClass('hidden');}, function(){$('#subnav_develop') .addClass('hidden');});
		
		$('#succeed_container') .hover(function(){$('#succeed') .addClass('succeed_active');}, function(){$('#subnav_succeed') .removeClass('succeed_active');});
		$('#succeed_container') .hover(function(){$('#subnav_succeed') .removeClass('hidden');}, function(){$('#subnav_succeed') .addClass('hidden');});
							
		$('#understand') .toggle(function(){$('#subnav_understand').addClass('hidden');}, function() {$('#subnav_understand').removeClass('hidden');});									
		$('#understand') .hover(function(){$(this).addClass('understand_active')}, function(){$(this).removeClass('understand_active');});	
		$('#understand') .hover(function(){$('#understand>a').css('color','#FFF')}, function(){$('#understand>a').css('color','#1A1A1A');});
							
		$('#develop') .toggle(function(){$('#subnav_develop').addClass('hidden');}, function() {$('#subnav_develop').removeClass('hidden');});									
		$('#develop') .hover(function(){$(this).addClass('develop_active');}, function(){$(this).removeClass('develop_active');});
		$('#develop') .hover(function(){$('#develop>a').css('color','#FFF')}, function(){$('#develop>a').css('color','#1A1A1A');});	
		
		$('#succeed') .toggle(function(){$('#subnav_succeed').addClass('hidden');}, function() {$('#subnav_succeed').removeClass('hidden');});								
		$('#succeed') .hover(function(){$(this).addClass('succeed_active');}, function(){$(this).removeClass('succeed_active');});
		$('#succeed') .hover(function(){$('#succeed>a').css('color','#FFF')}, function(){$('#succeed>a').css('color','#1A1A1A');});	

		$('#subnav_understand>ul>li') .hover(function(){$('#understand').addClass('understand_active');}, function(){$('#understand').removeClass('understand_active');});
		$('#subnav_understand>ul>li') .hover(function(){$('#understand>a').css('color','#FFF');}, function(){$('#understand>a').css('color','#1A1A1A');});	
		$('#subnav_understand>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});	
		
		$('#subnav_develop>ul>li') .hover(function(){$('#develop').addClass('develop_active');}, function(){$('#develop').removeClass('develop_active');});
		$('#subnav_develop>ul>li') .hover(function(){$('#develop>a').css('color','#FFF');}, function(){$('#develop>a').css('color','#1A1A1A');});	
		$('#subnav_develop>ul>li') .hover(function(){$(this).addClass('arrow_green');}, function(){$(this).removeClass('arrow_green');});
		
		$('#subnav_succeed>ul>li') .hover(function(){$('#succeed').addClass('succeed_active');}, function(){$('#succeed').removeClass('succeed_active');});
		$('#subnav_succeed>ul>li') .hover(function(){$('#succeed>a').css('color','#FFF');}, function(){$('#succeed>a').css('color','#1A1A1A');});	
		$('#subnav_succeed>ul>li') .hover(function(){$(this).addClass('arrow_red');}, function(){$(this).removeClass('arrow_red');});
		
		$('#links>ul>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});
					
		$('#content>#leftCol>#leftColWrapper>ul.orange>li') .hover(function(){$(this).addClass('arrow_orange');}, function(){$(this).removeClass('arrow_orange');});
		$('#content>#leftCol>#leftColWrapper>ul.green>li') .hover(function(){$(this).addClass('arrow_green');}, function(){$(this).removeClass('arrow_green');});
		$('#content>#leftCol>#leftColWrapper>ul.red>li') .hover(function(){$(this).addClass('arrow_red');}, function(){$(this).removeClass('arrow_red');});
		
	});					
</script> 