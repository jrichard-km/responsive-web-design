<!DOCTYPE html>
<html>
<head>
	<title>WIRED</title>
</head>
<body>
<!--
	En PHP si le navigateur tourne sur iOS
	inviter l'utilisateur à consulter ce lien
	https://itunes.apple.com/fr/app/wired-magazine/id373903654?mt=8
 -->
<?php
	if( strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'iPhone' ) || strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'iPad' ) || strstr( $_SERVER[ 'HTTP_USER_AGENT' ], 'iPod' ) )
	{
		echo '<a href="https://itunes.apple.com/fr/app/wired-magazine/id373903654?mt=8">Get WIRED directly from the iOS store</a>';
	}
?>
<!--
	En JavaScript si le navigateur tourne sur Android
	inviter l'utilisateur à consulter ce lien
	https://play.google.com/store/newsstand/details/Wired?id=CAowuOyBAQ&hl=en
 -->
<script type="text/javascript">
	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1;
	if ( isAndroid ) {
		var link = document.createElement( 'a' );
		link.innerHTML = 'Get WIRED directly from Android the store';
		link.href = 'https://play.google.com/store/newsstand/details/Wired?id=CAowuOyBAQ&hl=en';
		document.body.appendChild( link );
	}
</script>
	<header>
		<!-- Logo bar -->
		<div>
			<!-- Navigation toggle -->
			<button>
				🍔
			</button>
			<!-- WIRED logo -->
			<a href="/">
				WIRED
			</a>
			<!-- Search toggle -->
			<button>
				🔎
			</button>
		</div>
		<!-- Search field -->
		<form method="get" action="/" autocomplete="off">
			<fieldset>
				<input id="s" name="s" type="search" required="required">
				<label for="s">Search</label>
				<input id="search-submit" type="submit" value="Submit Search">
			</fieldset>
		</form>
		<!-- Navigation menu -->
		<nav>
			<div>
				<ul>
					<li>
						<a href="#category/business/">
							Business
						</a>
					</li>
					<li>
						<a href="#category/culture/">
							culture
						</a>
					</li>
					<li>
						<a href="#category/design/">
							Design
						</a>
					</li>
					<li>
						<a href="#category/gear/">
							Gear
						</a>
					</li>
					<li>
						<a href="#category/science/">
							Science
						</a>
					</li>
					<li>
						<a href="#category/security/">
							Security
						</a>
					</li>
					<li>
						<a href="#category/transportation/">
							transportation
						</a>
					</li>
					<li>
						<a href="#category/photo/">
							photo
						</a>
					</li>
					<li>
						<a href="#video/">
							video
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
</body>
</html>
