<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="php" version="4.0" encoding="UTF-8" />

	<xsl:template match="/">	
		<php>
			<head><title>Resume - Janet (Zhanna) Kulyk</title></head>
			<body>
				<xsl:apply-templates />
			</body>
		</php>
	</xsl:template>


	<xsl:template match="heading">
		<div align="center">
			<p><br /><br /><span style="font-weight:bold"><xsl:value-of select="/resume/heading/name" /></span></p>
			<xsl:value-of select="/resume/heading/streetaddress" />
			<br /><xsl:value-of select="/resume/heading/cityprovincepostal" />
			<br /><xsl:value-of select="/resume/heading/country" />
			<br/><xsl:value-of select="/resume/heading/phonefax" />	
			<br/><xsl:value-of select="/resume/heading/cellphone" />
			<br/><xsl:value-of select="/resume/heading/email/emailword" /><a href="mailto:janetkulyk@yahoo.com"><span style="font-color:blue;font-decoration:underline"><xsl:value-of select="/resume/heading/email/emailaddress" /></span></a>	
			<hr width="70%" />
		</div>
	</xsl:template>


	<xsl:template match="web" priority="1">
		<xsl:value-of select="." />
	</xsl:template>


	<xsl:template match="maincontent">		
		<p><div align="center" style="font-weight:bold"><xsl:value-of select="/resume/maincontent/title[@name='objective']/titletext" /></div></p>
		<p><div align="center"><xsl:value-of select="/resume/maincontent/title[@name='objective']/titlecontent" /></div></p>		

		<p><br /><div align="center" style="font-weight:bold"><xsl:value-of select="/resume/maincontent/title[@name='computerskills']/titletext" /></div></p>
		<p>
			<table width="70%" cellpadding="0" cellspacing="3" border="0" align="center">
				<xsl:for-each select="/resume/maincontent/title[@name='computerskills']/titlecontent/skill" >							
					<tr>
						<td align="left" valign="top">
							<span style="font-weight:bold"><xsl:value-of select="skillname" /></span>
						</td>
						<td align="left" valign="top">														
							<xsl:for-each select="skillcontent" >							
								<xsl:choose>
									<xsl:when test="line">										
										<xsl:for-each select="line" >											
											<xsl:value-of select="." /><br />
										</xsl:for-each>									
									</xsl:when>
									<xsl:otherwise>										
										<xsl:value-of select="." /><br />										
									</xsl:otherwise>																	
								</xsl:choose>
							</xsl:for-each>
							
						</td>
					</tr>	
				</xsl:for-each>								
			</table>			
		</p>

		
		<p><br /><div align="center" style="font-weight:bold"><xsl:value-of select="/resume/maincontent/title[@name='experience']/titletext" /></div></p>
		<font color="blue"><xsl:value-of select="/resume/maincontent/title[@name='experience']/titlecontent/position/line/web" /></font>			
		<xsl:for-each select="/resume/maincontent/title[@name='experience']/titlecontent/position">
			<p>				
				<table width="70%" cellpadding="0" cellspacing="0" border="0" align="center">
					<tr>
						<td><span style="font-weight:bold"><xsl:value-of select="positionname" /></span></td>
						<td align="right"><xsl:value-of select="date" /></td>
					</tr>	
					<tr>
						<td colspan="2">
							<xsl:value-of select="company" /><br />									
							<xsl:for-each select="content">
								<xsl:choose>
									<xsl:when test="line">										
										<xsl:for-each select="line" >
											<xsl:value-of select="." /><br />	
										</xsl:for-each>																										
									</xsl:when>
									<xsl:otherwise>										
										<xsl:value-of select="." /><br />										
									</xsl:otherwise>																	
								</xsl:choose>
							</xsl:for-each>
							<xsl:value-of select="environment" /><br />
						</td>
					</tr>
				</table>									
			</p>
		</xsl:for-each>

		<p><br /><div align="center" style="font-weight:bold"><xsl:value-of select="/resume/maincontent/title[@name='education']/titletext" /></div></p>
		<p>
			<table width="70%" cellpadding="0" cellspacing="5" border="0" align="center">
				<xsl:for-each select="/resume/maincontent/title/titlecontent/education">				
					<tr>
						<td align="center"><xsl:value-of select="school" /></td>
					</tr>
					<tr>
						<td align="center"><span style="font-weight:bold"><xsl:value-of select="diploma" /></span></td>
					</tr>													
				</xsl:for-each>
			</table>
		</p>

		<p><br /><div align="center" style="font-weight:bold"><xsl:value-of select="/resume/maincontent/title[@name='references']/titletext" /></div></p>
		<p><div align="center"><xsl:value-of select="/resume/maincontent/title[@name='references']/titlecontent" /></div></p>

	</xsl:template>


</xsl:stylesheet> 

