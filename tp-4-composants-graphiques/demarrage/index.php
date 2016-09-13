<!DOCTYPE html>
<html>
<head>
	<title>WIRED</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="media-queries.css">
	<link rel="stylesheet" type="text/css" href="grid.css">
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
	<header class="global-header">
		<!-- Logo bar -->
		<div class="logo-bar clearfix">
			<!-- Navigation toggle -->
			<button class="toggle-navigation">
				<span class="emoji">🍔</span>
			</button>
			<!-- WIRED logo -->
			<a href="/">
				WIRED
			</a>
			<!-- Search toggle -->
			<button class="toggle-search">
				<span class="emoji">🔎</span>
			</button>
		</div>
		<!-- Search field -->
		<form class="search-field" method="get" action="/" autocomplete="off">
			<fieldset>
				<input id="s" name="s" type="search" required="required">
				<label for="s">Search</label>
				<input id="search-submit" type="submit" value="Submit Search">
			</fieldset>
		</form>
		<!-- Navigation menu -->
		<nav class="navigation-menu">
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
	<main id="grid">
		<section class="clearfix site-container">
			<div class="article-group flex-row float-l-big float-l-med">
				<h1 class="ambroise-hdr hide-sm hide-med hide-big pad border-b col" id="mob-hdr">Top Stories</h1>
				<div class="flex-row items items-2 med-order-2" data-items="2">
					<div role="article" id="p1" class="card med-col-9 big-col-12 col mob-pad card-story card-standard">
						<a href="" class="clearfix pad">
							<img class="marg-b-med " src="">
							<div class="row">
								<span class="byline marg-b-micro">Auto Review</span>
								<h2 class="title title-big brandon clamp-3">
									The $212K DB11 Drags Aston Martin Into the 21st Century
								</h2>
								<time class="marg-t-micro">9 hours</time>
							</div>
						</a>
					</div>
					<div id="p2" class="card med-col-9 big-col-6 col mob-pad card-story card-narrow">
						<a href="" class="clearfix pad">
							<img class="marg-b-med " src="">
							<div class="row">
								<span class="byline marg-b-micro">Security</span>
								<h2 class="title brandon clamp-5">
									Apple’s Finally Offering Bug Bounties—With the Highest Rewards Ever
								</h2>
								<time class="marg-t-sm">7 hours</time>
							</div>
						</a>
					</div>
				</div>
				<div class="flex-row items items-3 med-order-3" data-items="3">
					<div class="sm-col-9 med-order-2 med-col-18 big-col-9 col">
						<div class="flex-row">
							<div role="article" id="p3" class="col med-col-9 big-col-18 card mob-pad card-story card-small">
								<a href="" class="clearfix pad">
									<img class="col mob-col-18 mob-omega med-col-18 big-col-9 med-marg-b-med reverse" src="">
									<div class="col big-col-9">
										<span class="byline marg-b-micro fix-margin-top">Public Transportation</span>
										<h2 class="title-sm brandon clamp-5">
											So, a Few Concerns About China’s ‘Straddling Bus’
										</h2>
										<time class="marg-t-sm">9 hours</time>
									</div>
								</a>
							</div>
							<div id="rad-card-small" class="col polar-card med-col-9 big-col-18 card mob-pad card-story card-polar">
								<a href="" class="clearfix pad">
									<img class="col med-col-18 big-col-9 med-marg-b-med " src="">
									<div class="col big-col-9">
										<span class="byline marg-b-micro fix-margin-top">WIRED Classic</span>
										<h2 class="title-sm brandon clamp-5">
											The Weird Origin Story of the Viral, Dangerous Hoverboard
										</h2>
										<span class="byline marg-t-sm">Obsessions</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div role="article" id="p4" class="card text med-order-1 med-col-18 big-col-9 col mob-pad card-story card-text">
						<a href="" class="clearfix text-card-pad-fix">
							<h2 class="mob-marg-t-med ambroise-hdr author">
								physics
							</h2>
							<h3 class="tungsten title marg-t-nano">
								The Mesmerizing Math of a Wind Turbine on Fire
							</h3>
							<timeclass="marg-t-micro">14 hours</time>
						</a>
					</div>
				</div>
				<div class="flex-row items items-1 med-order-1">
					<div id="p5" class="card top-story col big-col-18 med-col-18 mob-pad card-story card-top-story">
						<a href="" class="clearfix pad">
							<img class="col mob-col-18 mob-omega med-col-9 big-col-12" src="">
							<div class="col med-col-9 big-col-6">
								<span class="byline marg-b-micro fix-margin-top">Science Blogs</span>
								<h2 class="title title-big exchange clamp-5">
									Earthquakes in Cape Verde Could Signal an Eruption to Come
								</h2>
								<time class="marg-t-micro">18 hours</time>
							</div>
						</a>
					</div>
				</div>
			</div>

			<aside class="flex-row align-m justify-c float-r-big float-r-med">
				<div class="card smart overflow-hide" id="most-pop">
					<h4 id="most-pop-hdr" class="ambroise-hdr clearfix pad">Most Popular</h4>
					<ul id="most-pop-list" aria-labelledby="most-pop-hdr" class="story-list border-t" data-js="most-popular">
						<li class="story-1  ">
							<a href="" class="clearfix pad">
								<span class="visually-hidden">
										So, a Few Concerns About China’s Traffic-Slaying ‘Straddling Bus’						</span>
								<picture class="thumb col mob-col-6 med-col-6 big-col-6">
									<img src="https://www.wired.com/wp-content/uploads/2016/08/GettyImages-535149466-150x150-e1470357688626.jpg">
								</picture>
								<div class="col mob-col-12 med-col-12 big-col-12">
									<span class="byline marg-b-micro">Public Transportation</span>
									<h5 class="title line-clamp exchange-sm" >So, a Few Concerns About China’s Traffic-Slaying ‘Straddling Bus’</h5>
									<time class="marg-t-micro">9 hours</time>
								</div>
							</a>
						</li>
						<hr class="story-1 ">
						<li class="story-2  ">
							<a href="" class="clearfix pad">
								<span class="visually-hidden">
										<em>Suicide</em> <em>Squad</em> Kinda Sucks. But Hey, So Does 2016						</span>
								<picture class="thumb col mob-col-6 med-col-6 big-col-6">
									<img src="https://www.wired.com/wp-content/uploads/2016/08/SSHP-150x150-e1470251443558.jpg">
								</picture>
								<div class="col mob-col-12 med-col-12 big-col-12">
									<span class="byline marg-b-micro">Movies</span>
									<h5 class="title line-clamp exchange-sm" ><em>Suicide</em> <em>Squad</em> Kinda Sucks. But Hey, So Does 2016</h5>
									<time class="marg-t-micro">21 hours</time>
								</div>
							</a>
						</li>
						<hr class="story-2 ">
						<li class="story-3  ">
							<a href="" class="clearfix pad">
								<span class="visually-hidden">
										Watch <em>Rick</em> <em>and</em> <em>Morty</em> Reenact a Crazy Georgia Court Case						</span>
								<picture class="thumb col mob-col-6 med-col-6 big-col-6">
									<img src="https://www.wired.com/wp-content/uploads/2016/08/RickAndMortyCourtCase-150x150-e1470340141273.png">
								</picture>
								<div class="col mob-col-12 med-col-12 big-col-12">
									<span class="byline marg-b-micro">TV</span>
									<h5 class="title line-clamp exchange-sm" >Watch <em>Rick</em> <em>and</em> <em>Morty</em> Reenact a Crazy Georgia Court Case</h5>
									<time class="marg-t-micro">12 hours</time>
								</div>
							</a>
						</li>
						<hr class="story-3 ">
						<li class="story-4 squish-hide hide-mob">
							<a href="" class="clearfix pad">
								<span class="visually-hidden">
										How One Journalist Uses Social Media to Get Inside the Minds of ISIS						</span>
								<picture class="thumb col mob-col-6 med-col-6 big-col-6">
									<img src="https://www.wired.com/wp-content/uploads/2016/08/24.08.FF_.Callimachi.61634.DH_RC_10-150x150-e1470077236893.jpg">
								</picture>
								<div class="col mob-col-12 med-col-12 big-col-12">
									<span class="byline marg-b-micro">terrorism</span>
									<h5 class="title line-clamp exchange-sm" >How One Journalist Uses Social Media to Get Inside the Minds of ISIS</h5>
									<time class="marg-t-micro">2 days</time>
								</div>
							</a>
						</li>
						<hr class="squish-hide story-4 hide-mob">
						<li class="story-5 squish-hide hide-mob">
							<a href="" class="clearfix pad">
								<span class="visually-hidden">
										It’s No Miracle Everyone Escaped That Fiery Dubai Plane Crash
								</span>
								<picture class="thumb col mob-col-6 med-col-6 big-col-6">
									<img src="https://www.wired.com/wp-content/uploads/2016/08/h_52923425-150x150-e1470269886812.jpg">
								</picture>
								<div class="col mob-col-12 med-col-12 big-col-12">
									<span class="byline marg-b-micro">aviation</span>
									<h5 class="title line-clamp exchange-sm" >It’s No Miracle Everyone Escaped That Fiery Dubai Plane Crash</h5>
									<time class="marg-t-micro">14 hours</time>
								</div>
							</a>
						</li>
						<hr class="squish-hide story-5 hide-mob">
					</ul>
					<a class="clearfix pad flex-box align-m load-more opacity-5" href="/most-popular">
						<i class="ui ui-more float-l marg-r-sm"></i>
						<span class="col meta black">More Stories</span>
					</a>
				</div>
			</aside>
		</section>
	</main>
</body>
</html>
