<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php echo $title;?></title>
<style>
/* --------------------------------------------------
CSS Document For Leaves v1.0 - Anthonyy @ OSWD.org
-------------------------------------------------- */

/* CONTAINER */

		#container {
			width: 750px;
			margin: 0 auto;
			font-family: Lucida Grande, Tahoma, Arial, Helvetica, sans-serif; /* Lucida Grande for the Macs, Tahoma for the PCs */
			font-size: 11px;
			line-height: 1.6em;
			color: #666;
			background-color: #FFF;
		}
		
/* GENERAL MOJO AND MULA */
		
		h1 {
			font-family: Arial, Helvetica, sans-serif;
			font-weight: normal;
			font-size: 32px;
			color: #CC6633;
			margin-bottom: 30px;
			background-color: #FFF;
		}
		
		h2 {
			color: #666666;
			font-size: 16px;
			font-family: Arial, Helvetica, sans-serif;
			background-color: #FFF;
		}
		
		a {
			color:#CC6714;
			text-decoration: none;
		}

		a:hover {
			color:#CC6714;
			background-color: #F5F5F5;
		}

		
		form {
			/* float:right;
			margin-top: -45px;*/
			font-size: 9px;
		}
		
		input {
			background-color: #FFF;
			color: #999999;
			border: 1px solid #CCC;
			font-size: 11px;
			padding: 3px;
			margin-right:10px;
		}
		
		.button {
			padding: 2px;
		}
		
/* HEADER ELEMENTS */

		#header {
			border-bottom: 4px solid #948979;
			padding-top: 10px;
			clear: both;
			margin-bottom: 10px;
		}
		

		/* the slogan */
		#header p { 
			margin-top: -20px;
			margin-left: 30px;
			color: #999999;
		}

/* NAVIGATION ELEMENTS */
	
		 #navigation ul {
			margin-left: 0;
			padding-left: 0;
			list-style-type: none;			
			float: left;
			width: 140px;
		}

		#navigation a {
			display: block;
			padding: 5px;
			width: 140px;
			border-bottom: 1px solid #CCC;
		}

		#navigation a:link, #navlist a:visited {
			color:#CC6714;
			text-decoration: none;
		}
		
		#navigation a:hover {
			background: #000000 url(arrow.gif) 96% 50% no-repeat;
			background-color: #F5F5F5;
			color:#CC6714;
		}
			


		
/* CONTENT ELEMENTS */

		#content {
			width: 362px;
			margin-left: 180px;
			margin-right: 200px;
		}
		
		#content p {
			padding-bottom: 10px;
			border-bottom: 1px solid #DDDDDD; /* A faint grey line below the text */
		}

/* SIDEBAR ELEMENTS */

		#sidebar {
			float: right;
			width: 175px;
		}
		
		#sidebar p {
			padding-bottom: 10px;
			border-bottom: 1px solid #DDDDDD;
		}
		
		
		 #sidebar ul {
			margin-left: 0;
			padding-left: 0;
			list-style-type: none;			
			float: left;
			width: 140px;
		}

		#sidebar a {
			display: block;
			padding: 5px;
			width: 140px;
			border-bottom: 1px solid #CCC;
		}

		#sidebar a:link, #rightnav a:visited {
			color:#CC6714;
			text-decoration: none;
		}
		
		#sidebar a:hover {
			background: #000000 url(arrow.gif) 96% 50% no-repeat;
			background-color: #F5F5F5;
			color:#CC6714;
		}		
		

/* FOOTER ELEMENTS */

		#footer {
			margin-top: 20px;
			clear: both;
			background-color:#575352;
			padding: 0px 5px 0px 5px;
		}
		
		#footer p {
			color:#fff;
			padding: 5px;
		}
		
		#footer p a {
			color: #89817f;
			border-bottom: 1px dotted #89817f;
		}
		
		#footer p a:hover {
			color: #FFFFFF;
			background-color:#575352;
		}
		
		
		label{
			display:block;
			margin-top:10px;
		}
		/* And they lived happily ever after. The End. */
</style>
</head>
<body>
<div id="container">
	<div id="header">
	  <h1>agilan</h1>

	</div>
	<div id="navigation"> 
	<?php $this->load->view($_SESSION['sidebar1']);?>
	</div>
	
	
	<div id="sidebar">
	<?php $this->load->view($_SESSION['sidebar2']);?>
	</div>
	  
	<div id="content">
	<?php $this->load->view($main_view); ?> 
	</div>
	  
	<div id="footer">
	<p>Thanks for using agilan...</p>
  </div>
</div>
</body>
</html>

