<?php session_start(); ?>
<!DOCTYPE html>

<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->

<head>
	<title>ClinicCases</title>
	<meta name="robots" content="noindex">
	<link rel="stylesheet" href="html/css/cm.css" type="text/css"  media="screen"/>
	<link rel="stylesheet" href="html/css/cm_tabs.css" type="text/css"  media="screen"/>
	<link rel="stylesheet" href="html/css/print.css" type="text/css" media="print" />
	<link rel="stylesheet" href="lib/jqueryui/css/custom-theme/jquery-ui-1.8.9.custom.css" type="text/css" />
	<link type="text/css" href="html/css/fff.icon.core.css" rel="stylesheet"/>
	<link type="text/css" href="html/css/fff.icon.icons.css" rel="stylesheet"/>
	<link rel="shortcut icon" type="image/x-icon" href="html/images/favicon.ico" />

	<script src="lib/jqueryui/js/jquery-1.4.4.min.js" type="text/javascript"></script>
	<script src="lib/jqueryui/js/jquery-ui-1.8.9.custom.min.js" type="text/javascript"></script>
	<script src="lib/javascripts/jquery.livequery.min.js" type="text/javascript"></script>
	<script src="lib/javascripts/jquery.cookie.js" type="text/javascript"></script>
	<script src="html/js/sizeContentWindow.js" type="text/javascript"></script>
	<script src="html/js/notifyUser.js" type="text/javascript"></script>
	<script src="lib/javascripts/timer.js" type="text/javascript"></script>
	<script src="lib/javascripts/validations.js" type="text/javascript"></script>
	<script src="lib/javascripts/globalFunctions.js" type="text/javascript"></script>
	<script src="lib/javascripts/print.js" type="text/javascript"></script>





	<?php if (!empty($_GET) AND !isset($_GET['force_close'])){ //if we are not on index page?>
	<script src="html/js/idletimerStart.js" type="text/javascript"></script>
	<script src="lib/javascripts/jquery.idletimer.js" type="text/javascript"></script>
	<script src="lib/javascripts/jquery.idletimeout.js" type="text/javascript"></script>
	<script src="lib/javascripts/messageChecker.js" type="text/javascript"></script>
	<?php }?>






