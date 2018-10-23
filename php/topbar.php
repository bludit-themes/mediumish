<!-- Begin Nav
================================================== -->

<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="<?php echo $site->url(); ?>">
	<img src="<?php echo Theme::src('img/logo.png'); ?>" alt="logo">
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item <?php echo (($url->whereAmI()=='home')?'active':'') ?>">
				<a class="nav-link" href="<?php echo $site->url(); ?>">Stories</a>
			</li>

			<!-- Static pages -->
			<?php foreach ($staticContent as $staticPage): ?>
			<li class="nav-item <?php echo (($url->slug()==$staticPage->slug())?'active':'') ?>">
				<a class="nav-link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
			</li>
			<?php endforeach ?>
		</ul>
		<!-- End Menu -->
		<?php if (pluginActivated('pluginSearch')): ?>
		<div class="form-inline my-2 my-lg-0">
			<input id="search-input" class="form-control mr-sm-2" type="text" placeholder="Search">
			<span onClick="searchNow()" class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
			<script>
				function searchNow() {
					var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
					window.open(searchURL + document.getElementById("search-input").value, "_self");
				}
				var elem = document.getElementById('search-input');
				elem.addEventListener('keypress', function(e){
					if (e.keyCode == 13) {
						searchNow();
					}
				});
			</script>
		</div>
		<?php endif ?>
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->
