	<script type="text/javascript" src="js/ga-link-tracker.js"></script>

	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36118473-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

<title><?php echo $title;?> | Rooms Reborn</title>
</head>
<body class="<?php echo $page;?>">
<div id="page">
	<div id="contact">(203) 459-8901</div>
	<div id="header" class="clearfix">
		<div id="logo"></div>
		<div id="banner"></div>
	</div><!-- /#header -->
	<div id="nav">
		<?php
		include("navigation.php");
		getNavigation($page);
		?>
	</div> 
	<div id="content" class="clearfix">