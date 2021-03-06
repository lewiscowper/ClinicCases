<!DOCTYPE html>

<!--[if lt IE 7]> <html class="ie6"> <![endif]-->
<!--[if IE 7]>    <html class="ie7"> <![endif]-->

<head>
	<title>ClinicCases - <?php echo CC_PROGRAM_NAME; ?></title>
    <meta charset="utf-8">
	<meta name="robots" content="noindex">

    <?php if ($_SESSION['mobile']){ ?>
    <meta name="viewport" content="width=device-width,initial-scale=.8, maximum-scale=1,target-densitydpi=device-dpi">
	<link rel="stylesheet" href="html/css/bootstrap.css" type="text/css"  media="screen"/>
	<link rel="stylesheet" href="html/css/bootstrap-responsive.min.css" type="text/css"  media="screen"/>
	<link rel="stylesheet" href="html/css/mobile.css" type="text/css"  media="screen"/>
	<link rel="shortcut icon" type="image/x-icon" href="html/images/favicon.ico" />
    <link type="text/css" href="lib/javascripts/chosen-v11/chosen.min.css" rel="stylesheet"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="lib/javascripts/globalFunctions.js" type="text/javascript"></script>
	<script src="html/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="html/js/mobile.js" type="text/javascript"></script>
	<script type="text/javascript" src="lib/javascripts/jQuery.download.js"></script>
	<script type="text/javascript" src="lib/javascripts/chosen-v11/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/jquery.validate.min.js"></script>
	<script type="text/javascript" src="lib/javascripts/additional-methods.js"></script>
	<script src="html/js/notifyUser.js" type="text/javascript"></script>
	<script src="lib/javascripts/validations.js" type="text/javascript"></script>

    <?php } else if (!strstr(@$_GET['i'], 'Logout.php')) { ?>
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
    <?php } ?>

	<?php if (!empty($_GET) && !isset($_GET['force_close']) && !strstr(@$_GET['i'], 'Logout.php')){ //if we are not on index page?>
	<script src="html/js/idletimerStart.js" type="text/javascript"></script>
	<script src="lib/javascripts/jquery.idletimer.js" type="text/javascript"></script>
	<script src="lib/javascripts/jquery.idletimeout.js" type="text/javascript"></script>
	<script src="lib/javascripts/messageChecker.js" type="text/javascript"></script>
	<?php }?>

