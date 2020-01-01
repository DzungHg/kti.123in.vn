<?php namespace ProcessWire;
// _main.php template file, called after a page’s template file	
$home = pages()->get('/'); // homepage
$siteTitle = 'Regular';	
$siteTagline = $home->summary; 

// as a convenience, set location of our 3rd party resources (Uikit and jQuery)...
urls()->set('uikit', 'wire/modules/AdminTheme/AdminThemeUikit/uikit/dist/');
urls()->set('jquery', 'wire/modules/Jquery/JqueryCore/JqueryCore.js');
// ...or if you prefer to use CDN hosted resources, use these instead:
// urls()->set('uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/');
// urls()->set('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js'); 
	
?><!DOCTYPE html>
<html lang='en'>
<head id='html-head'>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title id='html-title'><?=page()->title?></title>
	<meta name="description" content="<?=page()->summary?>">
	
	<link rel="stylesheet" href="<?=urls()->uikit?>css/uikit.min.css" />
	<!--bớt 1 link ở đây --->
	
	<script src="<?=urls()->jquery?>"></script>
	<script src="<?=urls()->uikit?>js/uikit.min.js"></script>
	<script src="<?=urls()->uikit?>js/uikit-icons.min.js"></script>
	<!-- New Theme --->
	<link rel="icon" href="<?=urls()->templates?>styles/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <script src="<?=urls()->templates?>styles/js/jquery.js"></script>
    <link rel="stylesheet" href="<?=urls()->templates?>styles/css/main.css" />
    <script src="<?=urls()->templates?>styles/js/uikit.js"></script>
    <script src="<?=urls()->templates?>styles/js/uikit-icons.js"></script>
    <script src="<?=urls()->templates?>styles/js/main.js"></script>
	<!-- Hết  New Theme --->

</head>
<body id='html-body'>
<pw-region id="page-content">
			
</pw-region>
	<!-- FOOTER -->
	<?php include("./blocks/_page-footer.php"); ?>
	
	<!-- OFFCANVAS NAV TOGGLE -->
	<!-- OFFCANVAS NAVIGATION -->
	<?php include("./blocks/_offcanvas-nav.php"); ?>

</body>
</html>

