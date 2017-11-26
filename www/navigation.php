<?php
function getNavigation( $currentNav )
{
	echo '<ul>';
	
	if ( $currentNav == 'home' )
	{
		echo '<li class="current"><span>Home</span></li>';
	}
	else
	{
		echo '	<li>
					<a href="/"><span>Home</span></a>
				</li>';
	}
	
	if ( $currentNav == 'services' )
	{
		echo '	<li class="current"><span>Services</span></li>';
	}
	else
	{
		echo '	<li>
					<a href="services"><span>Services</span></a>
				</li>';
	}

	if ( $currentNav == 'decorating-redesign-staging-training' )
	{
		echo '	<li class="current"><span>Decorating, Redesign &amp; Staging Training</span></li>';
	}
	else
	{
		echo '	<li>
					<a href="decorating-redesign-staging-training"><span>Decorating, Redesign &amp; Staging Training</span></a>
				</li>';
	}

	echo '<li><a href="http://rooms-reborn.blogspot.com" target="_blank">Blog</a></li>';

	if ( $currentNav == 'about' )
	{
		echo '	<li class="current"><span>About Ann Anderson</span></li>';
	}
	else
	{
		echo '	<li>
					<a href="about"><span>About Ann Anderson</span></a>
				</li>';
	}

	if ( $currentNav == 'contact' )
	{
		echo '	<li class="current"><span>Contact</span></li>';
	}
	else
	{
		echo '	<li>
					<a href="contact"><span>Contact</span></a>
				</li>';
	}
	
	echo '</ul>';
}
?>