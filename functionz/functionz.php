<?php
function hdr($pg)
{
	print '<!doctype html>
	<html>
	<head>
		<title>Manchester Rape Crisis - '.$pg.'</title>
		<meta name="description" content="Rape crisis centre manchester -'.$pg.'"/>
		<meta name="keywords" content="Rape, crisis, centre, manchester, attack, therapy,counselling, ISVA, feminist, helpline,'.$pg.'"/>
		<meta name="author" content="Guy Lancaster"/>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/css2.css"/>
	</head>';
return;
}
function top($pg)
{
	print '<div class="container-fluid">
		<div class="row">
			<div class="col-1 col-sm-1  col-md-1 col-lg-1">
				&nbsp;<a id="top"></a>
			</div>
			<div class="col-3 col-sm-3 col-md-3 col-lg-3">
				<a href="index.php" title="Manchester Rape Crisis Centre">
					<img alt="Manchester Rape Crisis" src="images/header1.jpg" CLASS="img-responsive">
				</a>
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8"><h1>LISTENING&nbsp;.&nbsp;BELIEVING&nbsp;.&nbsp;SUPPORTING</h1></div>
		</div>
		<div class="row">
			<div class="col-2 col-sm-2  col-md-2 col-lg-2">
				&nbsp;
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<ul id="nav">
					<li><a href="index.php" title="Home Page">Home</a></li>
					<li><a href="about.php" title="About Us">About</a></li>
					<li><a href="faq.php" title="Frequently Asked Questions">FAQs<br></a></li>
					<li><a href="information.php" title="Information">Information</a></li>
					<li><a href="family.php" title="Family &amp; Friends">Family &amp; Friends</a></li>
					<li><a href="volunteering.php"  title="Volunteering">Volunteering</a></li>
					<li><a href="links.php" title="Web Links">Links</a></li>
					<li><a href="http://www.google.com">LEAVE SITE</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<br class="brclear"/>
				<h2>&nbsp;&nbsp;'.$pg.'</h2>
			</div>
		</div>';
return;
}
function foot()
{
	print '
	<div class="picCenter">
		<br/>
		<br/>
		<a href="#top" title="top of page" style="text-align:center">
			top of page
		</a>
		&nbsp;
		<a href="#top" title="top of page">
			<span class="glyphicon glyphicon-collapse-up"></span>
		</a>
		<br/>
		<br/>
	</div>';
	print "
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
  i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-3773540-22', 'auto');
  ga('send', 'pageview');
	</script>";
	return;
}
?>
