<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Blink Logic - Geeks - Security</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
		<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->	
	</head>
	
	<body>
			<div id="page">
					<div id="pageWrapper">
							<?php include("inc/header_mainNav.php")?>
							<div id="content">
									<div id="col_left">
											<?php include("inc/nav_geeks.php")?>
									</div>
																
									<div id="col_right">
											<div id="security">
													<h1>Protecting data in the cloud:<br/>providing a secure environment.</h1>
													<span>Data<br/>Sheet</span>
													<p>Because security is a top concern of our clients, it continues to be our top priority in architecting and enhancing our SaaS solution. We partner with the industry’s leading SaaS hosting provider, OpSource, to ensure critical corporate data is secured by state-of-the-art technologies and processes.</p>
													<span id="download"><a href="">DOWNLOAD<br/>SECURITY DATA <br/>SHEET PDF &gt;</a></span>
											</div>
									</div>
									
									
									<div class="content_bottom_2col">
											<div class="features">
													<div class="col1">
															<div id="ssl128"><h2>SSL 128</h2></div>
															<p>Secure Sockets Layer 128 makes Blink Logic as secure as your own WAN.</p>
													</div>
													<div class="col2">
															<div id="sas70"><h2>SAS-70 Type II certification (OpSource)</h2></div>
															<p>Our hosting provider, OpSource, is a SAS 70 Type II Certified provider, hosting your data in state of the art, Tier III+ facilities as measured by the Uptime Institute.</p>
													</div>
											</div>
											<div class="features">
													<div class="col1">
															<div id="sso"><h2>Single Sign-On (SSO)</h2></div>
															<p>We align with LDAP SSO standards. We prefer to align with SAML 2.0 open source XML standards, which allows secure web domains to exchange user authentication and authorization data.</p>
													</div>
													<div class="col2">
															<div id="facility"><h2>Impenetrable physical facility</h2></div>
															<p>The OpSource windowless data center is surrounded by bullet-proof glass and trained security officers.</p>
													</div>
											</div>
											<div class="features">
													<div class="col1">
															<div id="highperf"><h2>High performance, total availability</h2></div>
															<p>We adhere to stringent Service Level Agreements (SLAs) by providing full back-up, redundancy and failover, guaranteeing 24×7x365 availability.</p>
															</div>
													<div class="col2">
															<div id="cloudcomp"><h2>Cloud computing</h2></div>
															<p>We provide a unique, patent-pending service that allows for HTTPS, SFTP/SCP and automated data refresh using XML Open Source tools such as Kettle for ETL.</p>
													</div>
											</div>
											<div class="features">
													<div class="col1">
															<div id="vpn"><h2>Optional VPN Tunnel</h2></div>
															<p>If required, we offer a dedicated Cisco VPN tunnel that keeps your data separate from the cloud.</p>
															</div>
													<div class="col2">	
															<div id="more_info"></div>
															<p class="info">For more information,</p>
															<a href="">CLICK HERE TO<br/>CONTACT US &gt;</a>
													</div>
											</div>
									</div>
							</div>
							
							<?php include("inc/footer.php")?>
				
					</div><!-- end pageWrapper -->
			</div><!-- end page -->
			<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
			<script type="text/javascript">
					$('#mainNav>#blink') .hover(function(){$(this) .addClass('blink');}, function(){$(this) .removeClass('blink');});
					$('#mainNav>#tour') .hover(function(){$(this) .addClass('tour');}, function(){$(this) .removeClass('tour');});
					$('#mainNav>#benefits') .hover(function(){$(this) .addClass('benefits');}, function(){$(this) .removeClass('benefits');});
					$('#mainNav>#solved') .hover(function(){$(this) .addClass('solved');}, function(){$(this) .removeClass('solved');});
					$('#mainNav>#geeks') .addClass('geeks');
					$('#mainNav>#services') .hover(function(){$(this) .addClass('services');}, function(){$(this) .removeClass('services');});
					$('#mainNav>#partners') .hover(function(){$(this) .addClass('partners');}, function(){$(this) .removeClass('partners');});
					$('#mainNav>li') .addClass('border_left');
					$('#mainNav>li:first-child') .removeClass('border_left') .css('padding-left','0px');
					
					$('li#security') .removeFirstChild;
					$('li#security>a') .css('color','#0A9DDC') .css('text-decoration','underline');
			</script>				
	</body>
</html>