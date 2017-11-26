<?php include("headerBegin.php"); ?>

<?php
	$title="We seem to have misplaced something. Error 404 Page Not Found.";
	$page="error";
?>

<?php include("headerEnd.php"); ?>

			<div id="main">

			<h1>Ooops!</h1>
			<p>For one reason or another (mis-typed URL, faulty referral from another site, out-of-date search engine, etc.) the page you're looking for is not here.<p>
			<h2>What to do now:</h2>
			<ul>
				<li><a href="javascript: history.go(-1)" title="Return to the previous page">Return</a> to the page you just came from.</li>
				<li>Go to the <a href="/" title="Go to the Home Page">Home Page</a> for this website.</li>
			</ul>

			</div>
			
			<div id="sidebar">
				<?php include("sidebar-contact.htm");?>
			</div>
			
<?php include("footer.php"); ?>			